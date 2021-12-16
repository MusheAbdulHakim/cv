<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Post;
use App\Models\About;
use App\Models\Resume;
use App\Models\Contact;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Notifications\ContactMessage;
use App\Events\SendContactNotification;

class HomeController extends Controller
{
    public function index(){
        $about = About::first();
        $resume = Resume::first();
        $posts = Post::paginate(4);
        return view('frontend.home',compact(
            'about','resume','posts'
        ));
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

    public function showPost(Post $post){
        $about = About::first();
        $resume = Resume::first();
        return view('frontend.blog',compact(
            'post','about','resume',
        ));
    }
}

