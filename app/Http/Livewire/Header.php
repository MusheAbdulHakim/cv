<?php

namespace App\Http\Livewire;

use App\Models\About as AboutModel;
use Livewire\Component;

class Header extends Component
{
    
    
    public function render()
    {
        $about = AboutModel::first();
        return view('livewire.header',compact(
            'about'
        ));
    }
}
