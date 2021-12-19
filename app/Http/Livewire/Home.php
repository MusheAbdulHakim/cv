<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\About as AboutModel;

class Home extends Component
{
    public function render()
    {
        $about = AboutModel::first();
        return view('livewire.home',compact(
            'about'
        ));
    }
}
