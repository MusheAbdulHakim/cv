@extends('layouts.app')

@push('page-css')
<link rel="stylesheet" href="{{asset('assets/libs/Bootstrap-4-Tag-Input-Plugin-jQuery/tagsinput.css')}}">
@endpush

@section('content')
<div class="col-12">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Create About</h4>

            {!! form($form) !!}
            

        </div>
    </div>
</div>
@endsection

@push('page-js')
    <script src="{{asset('assets/libs/Bootstrap-4-Tag-Input-Plugin-jQuery/tagsinput.js')}}"></script>
    <script>
        
        $('input').tagsinput();

    </script>
@endpush