<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Resume;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class ResumeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $title = 'resume';
        if($request->ajax()){
            $resume = Resume::get();
            return DataTables::of($resume)
                    ->addIndexColumn()
                    ->addColumn('action',function ($row){
                        $editbtn = '<a href="'.route('resume.edit',$row->id).'" class="edit"><button class="btn btn-primary"><i class="fas fa-edit"></i></button></a>';
                        $deletebtn = '<a data-id="'.$row->id.'" data-route="'.route('resume.destroy',$row->id).'" href="javascript:void(0)" id="deletebtn"><button class="btn btn-danger"><i class="fas fa-trash"></i></button></a>';
                        if(!auth()->user()->hasPermissionTo('edit-resume')){
                            $editbtn = '';
                        }
                        if(!auth()->user()->hasPermissionTo('destroy-resume')){
                            $deletebtn = '';
                        }
                        $btn = $editbtn.' '.$deletebtn;
                        return $btn;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
        }
        return view('admin.resume.index',compact(
            'title'
        ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'create resume';
        return view('admin.resume.create',compact(
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
            'education' => 'required',
            'experience' => 'required',
        ]);
        Resume::create([
            'education' => $request->education,
            'experience' => $request->experience,
            'skills' => $request->skills,
            'knowledges' => $request->knowledge,
        ]);
        $notification = notify('resume added successfully');
        return redirect()->route('resume.index')->with($notification);
    }

    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \app\Models\Resume $resume
     * @return \Illuminate\Http\Response
     */
    public function edit(Resume $resume)
    {
        $title = 'edit resume';
        return view('admin.resume.edit',compact(
            'title','resume'
        ));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \app\Models\Resume $resume
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Resume $resume)
    {
        $this->validate($request,[
            'education' => 'required',
            'experience' => 'required',
        ]);
        $resume->update([
            'education' => $request->education,
            'experience' => $request->experience,
            'skills' => $request->skills,
            'knowledges' => $request->knowledge,
        ]);
        $notification = notify('resume updated successfully');
        return redirect()->route('resume.index')->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        return Resume::findOrFail($request->id)->delete();
    }
}
