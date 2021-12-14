<?php

namespace App\Forms;

use Kris\LaravelFormBuilder\Form;

class CategoryForm extends Form
{
    public function buildForm()
    {
        $this
            ->add('name', 'text',[
                'rules' => 'required|min:2|max:255',
                'error_messages' => [
                    'name.required' => 'The name field is mandatory.'
                ],
                'attr' =>[
                    'placeholder' => "Enter post category name"
                ]
            ])
            ->add('submit','submit',[
                'attr' =>[
                    'class'=> 'btn btn-primary btn-block',
                ]
            ]);
    }
}
