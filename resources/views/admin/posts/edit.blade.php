@extends('layouts.app')

@push('page-css')
<link rel="stylesheet" href="{{asset('assets/libs/Bootstrap-4-Tag-Input-Plugin-jQuery/tagsinput.css')}}">
<link href="{{asset('assets/libs/select2/css/select2.min.css')}}" rel="stylesheet" type="text/css" />
@endpush

@section('content')
<div class="col-12">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Edit Post</h4>
            <form action="{{route('posts.update',$post)}}" class="needs-validation" method="post" enctype="multipart/form-data" novalidate>            
                @csrf
                @method("PUT")
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="control-label">Title</label>
                            <input type="text" name="title" placeholder="enter post title" class="form-control" value="{{$post->title ?? old('title')}}" required>
                            <div class="invalid-feedback">
                                Please enter post title
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="control-label">Slug</label>
                            <input type="text" placeholder="enter post slug" class="form-control" name="slug" value="{{$post->slug ?? old('slug')}}">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label">Thumbnail</label>
                    <input type="file" class="form-control" name="thumbnail">
                </div>
                <div class="form-group">
                    <label class="control-label">Post Category</label>
                    <x-input.select2.single :options="App\Models\Category::get()" :name="'category'" :key="'name'" :selected="$post->category->name"/>
                </div>
                <div class="form-group">
                    <label class="control-label">Summary</label>
                    <textarea class="form-control" placeholder="enter post summary" name="summary" cols="30" rows="5" value="{{$post->summary ?? old('summary')}}" >{{$post->summary}}</textarea>
                </div>
                <div class="form-group">
                    <label class="control-label">Content</label>
                    <x-input.filemanager.tinymce :name="'content'" :value="$post->content ?? old('content')" />
                    <div class="invalid-feedback">
                        Please enter post content
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label">Tags</label>
                    <input type="text" class="form-control" placeholder="enter post tags" name="tags" value="{{$post->tags ?? old('tags')}}" data-role="tagsinput">
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
    <script src="{{asset('assets/libs/Bootstrap-4-Tag-Input-Plugin-jQuery/tagsinput.js')}}"></script>
    <script src="{{asset('assets/libs/select2/js/select2.min.js')}}"></script>
@endpush