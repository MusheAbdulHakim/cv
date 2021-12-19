<?php

namespace App\Http\Livewire;

use Livewire\Component;

class BlogSearch extends Component
{
    public $search;

    protected $queryString = ['search'];

    public function updatingSearch(){
        $this->resetPage();
    }

    public function render()
    {
        $posts = Post::where('title','like','%'.$this->search.'%')->get();
        return view('livewire.blog.search');
    }
}
