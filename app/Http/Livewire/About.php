<?php

namespace App\Http\Livewire;

use App\Models\About as UserAbout;
use App\Models\Client;
use Livewire\Component;

class About extends Component
{
    public function render()
    {
        $about = UserAbout::first();
        $clients = Client::get();
        return view('livewire.about',compact(
            'about','clients'
        ));
    }
}
