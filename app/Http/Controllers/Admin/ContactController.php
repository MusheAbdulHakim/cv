<?php

namespace App\Http\Controllers\Admin;

use App\Models\Contact;
use App\Forms\ContactForm;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Events\SendContactNotification;
use Kris\LaravelFormBuilder\FormBuilder;
use Yajra\DataTables\Facades\DataTables;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *@param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $title = 'user contact';
        if($request->ajax()){
            $data = Contact::get();
            return DataTables::of($data)
                    ->addIndexColumn()
                    
                    ->addColumn('action',function ($row){
                        $editbtn = '<a href="'.route('contacts.edit',$row->id).'" class="edit"><button class="btn btn-primary"><i class="fas fa-edit"></i></button></a>';
                        $viewbtn = '<a href="'.route('contacts.show',$row->id).'" class="view"><button class="btn btn-primary"><i class="fas fa-eye"></i></button></a>';
                        $deletebtn = '<a data-id="'.$row->id.'" data-route="'.route('contacts.destroy',$row->id).'" href="javascript:void(0)" id="deletebtn"><button class="btn btn-danger"><i class="fas fa-trash"></i></button></a>';
                        if(!auth()->user()->hasPermissionTo('edit-contact')){
                            $editbtn = '';
                        }
                        if(!auth()->user()->hasPermissionTo('view-contacts')){
                            $viewbtn = '';
                        }
                        if(!auth()->user()->hasPermissionTo('destroy-contact')){
                            $deletebtn = '';
                        }
                        $btn = $editbtn.' '. $viewbtn.' '.$deletebtn;
                        return $btn;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
        }
        return view('admin.contact.index',compact(
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
        $title = 'create contact';
        $form = $formBuilder->create('App\Forms\ContactForm', [
            'method' => 'POST',
            'url' => route('contacts.store'),
        ]);
        return view('admin.contact.create',compact(
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
    public function store(Request $request,FormBuilder $formBuilder)
    {
        $form = $formBuilder->create(ContactForm::class);
        $form->redirectIfNotValid();  
        $contact = Contact::create([
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message,
        ]);
        event(new SendContactNotification($contact));
        $notification = notify('contact created successfully');
        return redirect()->route('contacts.index')->with($notification);
    }

    
    /**
     * Show the form for editing the specified resource.
     *@param   \Kris\LaravelFormBuilder\FormBuilder $formBuilder
     * @param  \app\Models\Contact $contact
     * @return \Illuminate\Http\Response
     */
    public function edit(FormBuilder $formBuilder,Contact $contact)
    {
        $title = 'edit contact';
        $form = $formBuilder->create('App\Forms\ContactForm', [
            'method' => 'PUT',
            'url' => route('contacts.update',$contact),
            'model' => $contact,
        ]);
        return view('admin.contact.edit',compact(
            'title','form'
        ));
    }

    /**
     * Display the specified resource.
     *
     * @param   \Kris\LaravelFormBuilder\FormBuilder $formBuilder
     * 
     * @param  \app\Models\Contact $contact
     * @return \Illuminate\Http\Response
     */
    public function show(FormBuilder $formBuilder, Contact $contact)
    {
        $title = 'view contact';
        $form = $formBuilder->create('App\Forms\ContactForm', [
            'url' => route('contacts.update',$contact),
            'model' => $contact,
        ]);
        $form->remove('submit');
        $form->disableFields();
        $contact->unReadNotifications->markAsRead();
        
        return view('admin.contact.show',compact(
            'title','form',
        ));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Kris\LaravelFormBuilder\FormBuilder $formBuilder
     * @param  \app\Models\Contact $contact
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FormBuilder $formBuilder,Contact $contact)
    {
        $form = $formBuilder->create(ContactForm::class);
        $form->redirectIfNotValid();  
        $contact->update([
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message,
        ]);
        $notification = notify('contact updated successfully');
        return redirect()->route('contacts.index')->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        return Contact::findOrFail($request->id)->delete();
    }
}
