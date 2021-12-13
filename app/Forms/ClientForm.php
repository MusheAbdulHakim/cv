<?php

namespace App\Forms;

use Kris\LaravelFormBuilder\Form;

class ClientForm extends Form
{
    public function buildForm()
    {
        $this
            ->add('name', 'text',[
                'rules' => 'required|min:3|max:255',
                'error_messages' => [
                    'cv.required' => 'You must enter client name.'
                ],
                'attr' =>[
                    'placeholder' => "Enter client name"
                ]
            ])
            ->add('logo', 'file',[
                'rules' => 'nullable|file|mimes:jpg,png,gif,jpeg',
                'error_messages' => [
                    'cv.required' => 'You must upload client logo.'
                ],
                'attr' =>[
                    'placeholder' => "Upload client logo"
                ]
            ])
            ->add('submit','submit',[
                'attr' =>[
                    'class'=> 'btn btn-primary btn-block',
                ]
            ]);
    }
}
