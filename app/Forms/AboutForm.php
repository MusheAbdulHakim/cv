<?php

namespace App\Forms;

use Kris\LaravelFormBuilder\Form;

class AboutForm extends Form
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
            ->add('intro', 'textarea',[
                'error_messages' => [
                    'intro.required' => 'The introduction field is mandatory.'
                ],
                'attr' =>[
                    'placeholder' => "Enter an introduction/description of yourself"
                ]
            ])
            ->add('age', 'text',[
                'rules' => 'required|integer',
                'error_messages' => [
                    'age.required' => 'The age field is mandatory.'
                ],
                'attr' =>[
                    'placeholder' => "Enter your age"
                ]
            ])
            ->add('residence', 'text',[
                'rules' => 'required|min:3|max:200',
                'error_messages' => [
                    'residence.required' => 'The residence field is mandatory.'
                ],
                'attr' =>[
                    'placeholder' => "Enter your residence"
                ]
            ])
            ->add('address', 'text',[
                'rules' => 'required|min:3|max:200',
                'error_messages' => [
                    'address.required' => 'The address field is mandatory.'
                ],
                'attr' =>[
                    'placeholder' => "Enter your address"
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
            ->add('phone', 'tel',[
                'rules' => 'required|min:10|max:14',
                'error_messages' => [
                    'phone.required' => 'The phone field is mandatory.'
                ],
                'attr' =>[
                    'placeholder' => "Enter your phone number"
                ]
            ])
            ->add('happy_clients', 'number',[
                'rules' => 'required|integer',
                'error_messages' => [
                    'happy_clients.required' => 'The clients field is mandatory.'
                ],
                'attr' =>[
                    'placeholder' => "Enter the total number of your clients"
                ]
            ])
            ->add('working_hours', 'text',[
                'rules' => 'required|max:255',
                'error_messages' => [
                    'working_hours.required' => 'The working hours field is mandatory.'
                ],
                'attr' =>[
                    'placeholder' => "Enter your working hours"
                ]
            ])
            ->add('awards', 'text',[
                'rules' => 'required|integer',
                'error_messages' => [
                    'awards.required' => 'The awards field is mandatory.'
                ],
                'attr' =>[
                    'placeholder' => "Enter your total awards"
                ]
            ])
            ->add('cv', 'file',[
                'rules' => 'nullable|file|mimes:pdf',
                'error_messages' => [
                    'cv.required' => 'You must upload your cv.'
                ],
                'attr' =>[
                    'placeholder' => "Upload your cv"
                ]
            ])
            ->add('subtitle','text',[
                'rules' => 'required',
                'error_messages' => [
                    'subtitle.required' => 'You must enter atleat one subtitle'
                ],
                'attr' =>[
                    'name' => 'subtitle',
                    'data-role' => 'tagsinput',
                    'placeholder' => "Enter subtitles"
                ],
                
            ])
            
            ->add('submit','submit',[
                'attr' =>[
                    'class'=> 'btn btn-primary btn-block',
                ]
            ]);
    }
}
