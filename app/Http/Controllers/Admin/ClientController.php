<?php

namespace App\Http\Controllers\Admin;

use App\Forms\ClientForm;
use App\Models\Client;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Kris\LaravelFormBuilder\FormBuilder;
use Yajra\DataTables\Facades\DataTables;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $title = 'clients';
        if($request->ajax()){
            $clients = Client::get();
            return DataTables::of($clients)
                    ->addIndexColumn()
                    ->addColumn('logo',function($client){
                        $src = asset('assets/images/users/avatar-3.jpg');
                        if(!empty($client->logo)){
                            $src = asset('storage/clients/'.$client->logo);
                        }
                        return '<img src="'.$src.'" class="rounded-circle avatar-md" />';
                    })
                    ->addColumn('action',function ($row){
                        $editbtn = '<a href="'.route('clients.edit',$row->id).'" class="edit"><button class="btn btn-primary"><i class="fas fa-edit"></i></button></a>';
                        $viewbtn = '<a href="'.route('clients.show',$row->id).'" class="view"><button class="btn btn-primary"><i class="fas fa-eye"></i></button></a>';
                        $deletebtn = '<a data-id="'.$row->id.'" data-route="'.route('clients.destroy',$row->id).'" href="javascript:void(0)" id="deletebtn"><button class="btn btn-danger"><i class="fas fa-trash"></i></button></a>';
                        if(!auth()->user()->hasPermissionTo('edit-client')){
                            $editbtn = '';
                        }
                        if(!auth()->user()->hasPermissionTo('view-clients')){
                            $viewbtn = '';
                        }
                        if(!auth()->user()->hasPermissionTo('destroy-client')){
                            $deletebtn = '';
                        }
                        $btn = $editbtn.' '. $viewbtn.' '.$deletebtn;
                        return $btn;
                    })
                    ->rawColumns(['logo','action'])
                    ->make(true);
        }
        return view('admin.clients.index',compact(
            'title'
        ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param   \Kris\LaravelFormBuilder\FormBuilder $formBuilder
     * @return \Illuminate\Http\Response
     */
    public function create(FormBuilder $formBuilder)
    {
        $title = 'create client';
        $form = $formBuilder->create('App\Forms\ClientForm', [
            'method' => 'POST',
            'url' => route('clients.store'),
        ]);
        return view('admin.clients.create',compact(
            'title','form'
        ));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param   \Kris\LaravelFormBuilder\FormBuilder $formBuilder
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FormBuilder $formBuilder,Request $request)
    {
        $form = $formBuilder->create(ClientForm::class);
        $form->redirectIfNotValid();
        $logo = null;
        if($request->hasFile('logo')){
            $logo = time().'.'.$request->logo->extension();
            $request->logo->move(public_path('storage/clients'),$logo);
        }
        Client::create([
            'name' => $request->name,
            'logo' => $logo,
        ]);
        $notification = notify('client has been added successfully');
        return redirect()->route('clients.index')->with($notification);
    }

    /**
     * Display the specified resource.
     *
     * @param   \Kris\LaravelFormBuilder\FormBuilder $formBuilder
     * @param  \app\Models\Client $client
     * @return \Illuminate\Http\Response
     */
    public function show(FormBuilder $formBuilder, Client $client)
    {
        $title = 'view client';
        $form = $formBuilder->create('App\Forms\ClientForm', [
            'model' => $client,
        ]);
        
        $form->remove('submit');
        $form->disableFields();
        return view('admin.clients.show',compact(
            'title','form'
        ));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param   \Kris\LaravelFormBuilder\FormBuilder $formBuilder
     * @param  \app\Models\Client $client
     * @return \Illuminate\Http\Response
     */
    public function edit(FormBuilder $formBuilder,Client $client)
    {
        $title = 'edit client';
        $form = $formBuilder->create('App\Forms\ClientForm', [
            'method' => 'PUT',
            'url' => route('clients.update',$client),
            'model' => $client,
        ]);
        return view('admin.clients.edit',compact(
            'title','form'
        ));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \app\Models\Client $client
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Client $client)
    {
        $logo = $client->logo;
        if($request->hasFile('logo')){
            $logo = time().'.'.$request->logo->extension();
            $request->logo->move(public_path('storage/clients'),$logo);
        }
        Client::create([
            'name' => $request->name,
            'logo' => $logo,
        ]);
        $notification = notify('client info updated successfully');
        return redirect()->route('clients.index')->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        return Client::findOrFail($request->id)->delete();
    }
}
