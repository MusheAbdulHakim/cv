<?php

namespace App\Http\Controllers\Admin;

use App\Forms\CategoryForm;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Kris\LaravelFormBuilder\FormBuilder;
use Yajra\DataTables\Facades\DataTables;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $title = 'post categories';
        if($request->ajax()){
            $categories = Category::get();
            return DataTables::of($categories)
                    ->addIndexColumn() 
                    ->addColumn('action',function ($row){
                        $editbtn = '<a href="'.route('categories.edit',$row->id).'" class="edit"><button class="btn btn-primary"><i class="fas fa-edit"></i></button></a>';
                        $viewbtn = '<a href="'.route('categories.show',$row->id).'" class="view"><button class="btn btn-primary"><i class="fas fa-eye"></i></button></a>';
                        $deletebtn = '<a data-id="'.$row->id.'" data-route="'.route('categories.destroy',$row->id).'" href="javascript:void(0)" id="deletebtn"><button class="btn btn-danger"><i class="fas fa-trash"></i></button></a>';
                        if(!auth()->user()->hasPermissionTo('edit-category')){
                            $editbtn = '';
                        }
                        if(!auth()->user()->hasPermissionTo('view-categories')){
                            $viewbtn = '';
                        }
                        if(!auth()->user()->hasPermissionTo('destroy-category')){
                            $deletebtn = '';
                        }
                        $btn = $editbtn.' '. $viewbtn.' '.$deletebtn;
                        return $btn;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
        }
        return view('admin.categories.index',compact(
            'title'
        ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param   \Kris\LaravelFormBuilder\FormBuilder $formBuilder
     * @return \Illuminate\Http\Response
     */
    public function create(FormBuilder $formBuilder)
    {
        $title = 'create category';
        $form = $formBuilder->create('App\Forms\CategoryForm', [
            'method' => 'POST',
            'url' => route('categories.store'),
        ]);
        return view('admin.categories.create',compact(
            'title','form'
        ));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param   \Kris\LaravelFormBuilder\FormBuilder $formBuilder
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,FormBuilder $formBuilder)
    {
        $form = $formBuilder->create(CategoryForm::class);
        $form->redirectIfNotValid();
        Category::create([
            'name' => $request->name,
        ]);
        $notification = notify('post category added successfully');
        return redirect()->route('categories.index')->with($notification);
    }

    /**
     * Display the specified resource.
     *
     * @param  \app\Models\Category $category
     * @param   \Kris\LaravelFormBuilder\FormBuilder $formBuilder
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category,FormBuilder $formBuilder)
    {
        $title = 'view category';
        $form = $formBuilder->create('App\Forms\CategoryForm', [
            'url' => route('categories.update',$category),
            'model' => $category,
        ]);
        $form->remove('submit');
        $form->disableFields();
        return view('admin.categories.show',compact(
            'title','form'
        ));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \app\Models\Category $category
     * @param   \Kris\LaravelFormBuilder\FormBuilder $formBuilder
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category,FormBuilder $formBuilder)
    {
        $title = 'edit category';
        $form = $formBuilder->create('App\Forms\CategoryForm', [
            'method' => 'PUT',
            'url' => route('categories.update',$category),
            'model' => $category,
        ]);
        return view('admin.categories.edit',compact(
            'title','form'
        ));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \app\Models\Category $category
     * @param   \Kris\LaravelFormBuilder\FormBuilder $formBuilder
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category,FormBuilder $formBuilder)
    {
        $form = $formBuilder->create(CategoryForm::class);
        $form->redirectIfNotValid();
        $category->update([
            'name' => $request->name,
        ]);
        $notification = notify('post category updated successfully');
        return redirect()->route('categories.index')->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        return Category::findOrFail($request->id)->delete();
    }
}
