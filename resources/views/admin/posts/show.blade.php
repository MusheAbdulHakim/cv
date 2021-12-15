@extends('layouts.app')

@push('page-css')
    
@endpush

@section('breadcrumb')
@can('view-contacts')
<x-buttons.back :text="'Go Back'" :link="route('categories.index')"  />
@endcan
@endsection

@section('content')
<div class="col-12">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">View Post Category</h4>
             {!! form($form) !!}
        </div>
    </div>
</div>
@endsection

@push('page-js')
    
@endpush