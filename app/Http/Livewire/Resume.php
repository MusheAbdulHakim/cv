<?php

namespace App\Http\Livewire;

use App\Models\Resume as UserResume;
use Livewire\Component;

class Resume extends Component
{
    public function render()
    {
        $resume = UserResume::first();
        return view('livewire.resume',compact(
            'resume'
        ));
    }
}
