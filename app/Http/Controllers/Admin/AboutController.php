<?php

namespace App\Http\Controllers\Admin;

use App\Models\About;
use App\Forms\AboutForm;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Kris\LaravelFormBuilder\FormBuilder;
use Yajra\DataTables\Facades\DataTables;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $title = 'about me';
        if($request->ajax()){
            $data = About::get();
            return DataTables::of($data)
                    ->addIndexColumn()  
                    ->addColumn('cv',function($row){
                        $button = ' <a download href="'.asset('storage/cv/'.$row->cv).'"><button title="download" class="btn btn-primary" ><i class="fas fa-download"></i></button></a>';
                        return $button;
                    })    
                    ->addColumn('action',function ($row){
                        $editbtn = '<a href="'.route('about.edit',$row->id).'" class="edit"><button class="btn btn-primary"><i class="fas fa-edit"></i></button></a>';
                        $viewbtn = '<a href="'.route('about.show',$row->id).'" class="view"><button class="btn btn-primary"><i class="fas fa-eye"></i></button></a>';
                        $deletebtn = '<a data-id="'.$row->id.'" data-route="'.route('about.destroy',$row->id).'" href="javascript:void(0)" id="deletebtn"><button class="btn btn-danger"><i class="fas fa-trash"></i></button></a>';
                        if(!auth()->user()->hasPermissionTo('edit-about')){
                            $editbtn = '';
                        }
                        if(!auth()->user()->hasPermissionTo('view-about')){
                            $viewbtn = '';
                        }
                        if(!auth()->user()->hasPermissionTo('destroy-about')){
                            $deletebtn = '';
                        }
                        $btn = $editbtn.' '. $viewbtn.' '.$deletebtn;
                        return $btn;
                    })
                    ->rawColumns(['cv','action'])
                    ->make(true);
        }
        return view('admin.about.index',compact(
            'title'
        ));
    }

    public function getAbout(Request $request){
        if($request->ajax()){
            $data = About::first();
            return response()->json($data);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param   \Kris\LaravelFormBuilder\FormBuilder $formBuilder
     * 
     * @return \Illuminate\Http\Response
     */
    public function create(FormBuilder $formBuilder)
    {
        $title = 'create about';
        $form = $formBuilder->create('App\Forms\AboutForm', [
            'method' => 'POST',
            'url' => route('about.store'),
        ]);
        return view('admin.about.create',compact(
            'title','form'
        ));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param   \Kris\LaravelFormBuilder\FormBuilder $formBuilder
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,FormBuilder $formBuilder)
    {
        $form = $formBuilder->create(AboutForm::class);
        $form->redirectIfNotValid(); 
        $cv = null;
        if($request->hasFile('cv')){
            $cv = time().'.'.$request->cv->extension();
            $request->cv->move(public_path('storage/cv'), $cv);
        }
        About::create([
            'name' => $request->name,
            'intro' => $request->intro,
            'age' => $request->age,
            'residence' => $request->residence,
            'address' => $request->address,
            'email' => $request->email,
            'phone' => $request->phone,
            'happy_clients' => $request->happy_clients,
            'working_hours' => $request->working_hours,
            'awards' => $request->awards,
            'cv' => $cv,
        ]);
        $notification = 'about info has been added';
        return redirect()->route('about.index')->with($notification);
    }

    /**
     * Display the specified resource.
     *
     * @param   \Kris\LaravelFormBuilder\FormBuilder $formBuilder
     * @param  \app\Models\About $about
     * @return \Illuminate\Http\Response
     */
    public function show(FormBuilder $formBuilder,About $about)
    {
        $title = 'view about';
        $form = $formBuilder->create('App\Forms\AboutForm', [
            'url' => route('about.update',$about),
            'model' => $about,
        ]);
        $form->remove('submit');
        $form->disableFields();
        return view('admin.about.show',compact(
            'title','form'
        ));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param   \Kris\LaravelFormBuilder\FormBuilder $formBuilder
     * @param  \app\Models\About $about
     * @return \Illuminate\Http\Response
     */
    public function edit(FormBuilder $formBuilder,About $about)
    {
        $title = 'edit about';
        $form = $formBuilder->create('App\Forms\AboutForm', [
            'method' => 'PUT',
            'url' => route('about.update',$about),
            'model' => $about,
        ]);
        return view('admin.about.edit',compact(
            'title','form'
        ));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Kris\LaravelFormBuilder\FormBuilder $formBuilder
     * @param  \app\Models\About $about
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,FormBuilder $formBuilder, About $about)
    {
        $form = $formBuilder->create(AboutForm::class);
        $form->redirectIfNotValid();
        $about->update([

        ]);
        $notification = notify('about info updated successfully');
        return redirect()->route('about.index')->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        return About::findOrFail($request->id)->delete();
    }
}
