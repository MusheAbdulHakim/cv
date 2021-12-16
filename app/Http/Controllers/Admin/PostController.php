<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $title = 'posts';
        if($request->ajax()){
            $posts = Post::get();
            return DataTables::of($posts)
                    ->addIndexColumn() 
                    ->addColumn('category',function($post){
                        if(!empty($post->category)){
                            return $post->category->name;
                        }
                    })
                    ->addColumn('thumbnail',function($row){
                        $src = asset('assets/images/users/avatar-3.jpg');
                        if(!empty($row->thumbnail)){
                            $src = asset('storage/posts/'.$row->thumbnail);
                        }
                        return '<img src="'.$src.'" class="rounded avatar-md" />';
                    })
                    ->addColumn('action',function ($row){
                        $editbtn = '<a href="'.route('posts.edit',$row->id).'" class="edit"><button class="btn btn-primary"><i class="fas fa-edit"></i></button></a>';
                        $viewbtn = '<a href="'.route('posts.show',$row->id).'" class="view"><button class="btn btn-primary"><i class="fas fa-eye"></i></button></a>';
                        $deletebtn = '<a data-id="'.$row->id.'" data-route="'.route('posts.destroy',$row->id).'" href="javascript:void(0)" id="deletebtn"><button class="btn btn-danger"><i class="fas fa-trash"></i></button></a>';
                        if(!auth()->user()->hasPermissionTo('edit-post')){
                            $editbtn = '';
                        }
                        
                        if(!auth()->user()->hasPermissionTo('destroy-post')){
                            $deletebtn = '';
                        }
                        $btn = $editbtn.' '.$deletebtn;
                        return $btn;
                    })
                    ->rawColumns(['thumbnail','action'])
                    ->make(true);
        }
        return view('admin.posts.index',compact(
            'title'
        ));
    }

    /**
     * Display a listing of the resource.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function getPosts(Request $request){
        if($request->ajax()){
            $posts = Post::paginate(4);
            return response()->json($posts);
        }else{
            abort(403, 'Unauthorized action.');
        }
    }

    /**
     * Display a listing of the resource.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function searchPost(Request $request){

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'create post';
        return view('admin.posts.create',compact(
            'title'
        ));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'title' => 'required',
            'slug' => 'nullable|min:3|max:255',
            'thumbnail' => 'nullable|file|image|mimes:png,jpg,gif,jpeg',
            'category'=> 'required',
            'summary' => 'nullable',
            'content' => 'required|min:20',
            'tags' => 'nullable',
        ]);
        $imageName = null;
        if($request->hasFile('thumbnail')){
            $imageName = time().'.'.$request->thumbnail->extension();
            $request->thumbnail->move(public_path('storage/posts'), $imageName);
        }
        Post::create([
            'title' => $request->title,
            'slug' => $request->slug,
            'thumbnail' => $imageName,
            'category_id'=> $request->category,
            'summary' => $request->summary,
            'content' => $request->content,
            'tags' => $request->tags,
        ]);
        $notification = notify('post added successfully');
        return redirect()->route('posts.index')->with($notification);
    }

    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \app\Models\Post $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        $title = 'edit post';
        return view('admin.posts.edit',compact(
            'title','post'
        ));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \app\Models\Post $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        $this->validate($request,[
            'title' => 'required',
            'slug' => 'nullable|min:3|max:255',
            'thumbnail' => 'nullable|file|image|mimes:png,jpg,gif,jpeg',
            'category'=> 'required',
            'summary' => 'nullable',
            'content' => 'required|min:20',
            'tags' => 'nullable',
        ]);
        $imageName = $post->thumbnail;
        if($request->hasFile('thumbnail')){
            $imageName = time().'.'.$request->thumbnail->extension();
            $request->thumbnail->move(public_path('storage/posts'), $imageName);
        }
        $post->update([
            'title' => $request->title,
            'slug' => $request->slug,
            'thumbnail' => $imageName,
            'category_id'=> $request->category,
            'summary' => $request->summary,
            'content' => $request->content,
            'tags' => $request->tags,
        ]);
        $notification = notify('post updated successfully');
        return redirect()->route('posts.index')->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        return Post::findOrFail($request->id)->delete();
    }
}
