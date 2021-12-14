@extends('layouts.app')

@push('page-css')
<link href="{{asset('assets/libs/select2/css/select2.min.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('assets/libs/bootstrap-datepicker/css/bootstrap-datepicker.min.css')}}" rel="stylesheet">
<link rel="stylesheet" href="{{asset('assets/libs/Bootstrap-4-Tag-Input-Plugin-jQuery/tagsinput.css')}}">

@endpush

@section('content')
<div class="col-12">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Create Resume</h4>

            <form action="{{route('resume.store')}}" method="post" enctype="multipart/form-data" autocomplete="off">
                @csrf
                <div class="row mb-3 mt-3">
                    <div class="col-lg-12 repeater">
                        <div data-repeater-list="education">
                            <div data-repeater-item class="row">
                                 <div class="col-lg-3">
                                    <div class="form-group">
                                        <label class="control-label">Institution</label>
                                        <input type="text" name="institution" class="form-control" value="{{old('institution')}}" placeholder="institution" required>
                                        <div class="invalid-feedback">
                                            Please enter the institution
                                        </div> 
                                    </div>
                                </div>
                                
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label class="control-label">Description</label>
                                        <input type="text" name="description" class="form-control" value="{{old('description')}}" placeholder="description" required>
                                        <div class="invalid-feedback">
                                            Please enter the description
                                        </div> 
                                    </div>
                                </div>   
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label class="control-label">Course</label>
                                        <input type="text" name="course" class="form-control" value="{{old('course')}}" placeholder="Course studied" required>
                                        <div class="invalid-feedback">
                                            Please enter the course
                                        </div> 
                                    </div>
                                </div>  
                                
                                <div class="col-lg-2">
                                    <div class="form-group">
                                        <label class="control-label">Date</label>
                                        <div class="input-daterange input-group" data-provide="datepicker" data-date-min-view-mode="2">
                                            <input type="text" class="form-control" name="start" value="{{old('start')}}" />
                                            <input type="text" class="form-control" name="end" value="{{old('end')}}" />
                                        </div>
                                    </div>
                                </div> 

                                <div class="col-lg-1 align-self-center">
                                    <button type="button" data-repeater-delete class="btn btn-primary btn-block"><i class="fas fa-trash"></i></button>
                                </div>
                            </div>

                        </div>
                        <input data-repeater-create type="button" class="btn btn-success mt-3 mt-lg-0" value="Add" />
                    </div>
                </div>

                <div class="row mb-3 mt-3">
                    <div class="col-lg-12 repeater">
                        <div data-repeater-list="experience">
                            <div data-repeater-item class="row">
                                 <div class="col-lg-3">
                                    <div class="form-group">
                                        <label class="control-label">Company</label>
                                        <input type="text" name="company" class="form-control" value="{{old('company')}}" placeholder="enter company" required>
                                        <div class="invalid-feedback">
                                            Please enter the company
                                        </div> 
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label class="control-label">Description</label>
                                        <input type="text" name="description" class="form-control" value="{{old('description')}}" placeholder="description" required>
                                        <div class="invalid-feedback">
                                            Please enter the description
                                        </div> 
                                    </div>
                                </div> 
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label class="control-label">Position</label>
                                        <input type="text" name="position" class="form-control" value="{{old('position')}}" placeholder="your position at the company" required>
                                        <div class="invalid-feedback">
                                            Please enter the position
                                        </div> 
                                    </div>
                                </div>    
                                
                                <div class="col-lg-2">
                                    <div class="form-group">
                                        <label class="control-label">Date</label>
                                        <div class="input-daterange input-group" data-provide="datepicker" data-date-min-view-mode="2">
                                            <input type="text" class="form-control" name="start" value="{{old('start')}}" />
                                            <input type="text" class="form-control" name="end" value="{{old('end')}}" />
                                        </div>
                                    </div>
                                </div> 

                                <div class="col-lg-1 align-self-center">
                                    <button type="button" data-repeater-delete class="btn btn-primary btn-block"><i class="fas fa-trash"></i></button>
                                </div>
                            </div>

                        </div>
                        <input data-repeater-create type="button" class="btn btn-success mt-3 mt-lg-0" value="Add" />
                    </div>
                </div>

                <div class="row mb-3 mt-3">
                    <div class="col-lg-12 repeater">
                        <div data-repeater-list="skills">
                            <div data-repeater-item class="row">
                                 <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="control-label">Name</label>
                                        <input type="text" name="name" class="form-control" value="{{old('name')}}" placeholder="enter skill name" required>
                                        <div class="invalid-feedback">
                                            Please enter the skill
                                        </div> 
                                    </div>
                                </div>
                                                                
                                <div class="col-lg-5">
                                    <div class="form-group">
                                        <label class="control-label">Percentage</label>
                                        <input type="text" class="form-control" name="percentage" placeholder="skill percentage" value="{{old('percentage')}}" />
                                    </div>
                                </div> 

                                <div class="col-lg-1 align-self-center">
                                    <button type="button" data-repeater-delete class="btn btn-primary btn-block"><i class="fas fa-trash"></i></button>
                                </div>
                            </div>

                        </div>
                        <input data-repeater-create type="button" class="btn btn-success mt-3 mt-lg-0" value="Add" />
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="control-label">Knowledge Tags</label>
                            <input type="text" class="form-control" data-role="tagsinput" placeholder="knowldge" name="knowledge">
                        </div>
                    </div>
                </div>
                
                <div class="form-group">
                    <button class="btn btn-primary btn-block" type="submit">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@push('page-js')
    <script src="{{asset('assets/libs/select2/js/select2.min.js')}}"></script>
    <script src="{{asset('assets/libs/bootstrap-datepicker/js/bootstrap-datepicker.min.js')}}"></script>
    <script src="{{asset('assets/libs/Bootstrap-4-Tag-Input-Plugin-jQuery/tagsinput.js')}}"></script>
    <!-- form repeater js -->
    <script src="{{asset('assets/libs/jquery.repeater/jquery.repeater.min.js')}}"></script>
    <!-- form advanced init -->
    <script src="{{asset('assets/js/pages/form-advanced.init.js')}}"></script>
    <script>
        $(document).ready(function(){
            $(".repeater").repeater({
                defaultValues: {
                
                },
                show: function () {
                    $(this).slideDown();
                },
                hide: function (e) {
                    confirm("Are you sure you want to delete this element?") &&
                    $(this).slideUp(e);
                },
                ready: function (e) {},
            });
        });
    </script>
@endpush