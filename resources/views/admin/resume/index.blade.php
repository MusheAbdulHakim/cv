@extends('layouts.app')

<x-assets.datatables />

@section('breadcrumb')
@can('create-resume')
<x-buttons.primary :text="'create resume'" :link="route('resume.create')"  />
@endcan
@endsection

@section('content')
<div class="col-12">
    <div class="card">
        <div class="card-body">

            <h4 class="card-title">Resume List</h4>

            <table id="datatable" class="table table-bordered dt-responsive nowrap"
                style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                <thead>
                    <tr>
                        <th>Education</th>
                        <th>Experience</th>
                        <th>Skills</th>
                        <th>Knowldge</th>
                        <th>Action</th>
                    </tr>
                </thead>

                <tbody>
                    
                </tbody>
            </table>

        </div>
    </div>
</div>
@endsection

@push('page-js')
<script>
    $(document).ready(function(){
        var table = $('#datatable').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{route('resume.index')}}",
            columns: [
                {data: 'education', name: 'education'},
                {data: 'experience', name: 'experience'},
                {data: 'skills', name: 'skills'},
                {data: 'knowledges', name: 'knowledge'},
                {data: 'action', name: 'action', orderable: false, searchable: false},
            ]
        });
    })
</script>
@endpush