<?php

namespace App\Http\Livewire;

use App\Models\Post;
use Illuminate\Pagination\Paginator;
use Livewire\Component;
use Livewire\WithPagination;

class Blog extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';
    public $currentPage=1;
    public $search;
    protected $queryString = ['search'];
    public $paginate = 5;



    public function setPage($url){
        $this->currentPage = explode('page=',$url)[1];
        Paginator::currentPageResolver(function(){
            return $this->currentPage;
        });
    }



    public function render()
    {

        $posts = Post::latest()->where('title', 'like', '%' . $this->search . '%')->paginate($this->paginate);
        return view('livewire.blog.index',compact(
            'posts'
        ));
    }
}
