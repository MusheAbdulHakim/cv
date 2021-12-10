<?php

namespace App\Http\Controllers\Frontend;

use App\Events\SendContactNotification;
use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Notifications\ContactMessage;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('frontend.home');
    }

    public function createContact(Request $request){
        $this->validate($request,[
            'name' => 'required|min:5|max:255',
            'email' => 'required|email',
            'subject' => 'required|min:5|max:255',
            'message' => 'required|min:10|max:255'
        ]);
        $okMessage = 'Contact form successfully submitted. Thank you, I will get back to you soon!';
        $errorMessage = 'There was an error while submitting the form. Please try again later';
        if ($request->ajax()){
            $contact =Contact::create([
                'name' => $request->name,
                'email' => $request->email,
                'subject' => $request->subject,
                'message' => $request->message,
            ]);
            if ($contact){
                event(new SendContactNotification($contact));
                $responseArray = array('type' => 'success', 'message' => $okMessage);
                return response($responseArray);
            }else{
                $responseArray = array('type' => 'danger', 'message' => $errorMessage);
                return response($responseArray);
            }

            
        }
    }
}

