<?php

namespace App\Forms;

use Kris\LaravelFormBuilder\Form;

class ContactForm extends Form
{
    public function buildForm()
    {
        $this
            ->add('name', 'text',[
                'rules' => 'required|min:5|max:255',
                'error_messages' => [
                    'name.required' => 'The name field is mandatory.'
                ],
                'attr' =>[
                    'placeholder' => "Enter your Fullname"
                ]
            ])
            ->add('email', 'email',[
                'rules' => 'required|email',
                'error_messages' => [
                    'email.required' => 'The email field is mandatory.'
                ],
                'attr' =>[
                    'placeholder' => "Enter your email"
                ]
            ])
            ->add('subject', 'text',[
                'rules' => 'required|min:5|max:255',
                'error_messages' => [
                    'subject.required' => 'The subject field is mandatory.'
                ],
                'attr' =>[
                    'placeholder' => "Enter subject"
                ]
            ])
            ->add('message', 'textarea',[
                'rules' => 'required|min:10|max:255',
                'error_messages' => [
                    'message.required' => 'The message field is mandatory.'
                ],
                'attr' =>[
                    'placeholder' => "Enter message"
                ]
            ])
            ->add('submit','submit',[
                'attr' =>[
                    'class'=> 'btn btn-primary btn-block',
                ]
            ]);
    }
}
