<?php

namespace App\Http\Livewire;

use App\Models\About as AboutModel;
use Livewire\Component;

class Contact extends Component
{
    public function render()
    {
        $about = AboutModel::first();
        return view('livewire.contact',compact(
            'about'
        ));
    }
}
