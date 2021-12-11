@extends('layouts.app')

<x-assets.datatables />

@section('breadcrumb')
@can('create-contact')
<x-buttons.primary :text="'create about'" :link="route('about.create')"  />
@endcan
@endsection

@section('content')
    <div class="col-12">
        <div class="card">
            <div class="card-body">

                <h4 class="card-title">About List</h4>

                <table id="datatable" class="table table-bordered dt-responsive nowrap"
                    style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Cv</th>
                            <th>Residence</th>
                            <th>Email</th>
                            <th>Phone</th>
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
                ajax: "{{route('about.index')}}",
                columns: [
                    {data: 'name', name: 'name'},
                    {data: 'cv', name: 'cv',orderable: false,searchable: false},
                    {data: 'residence', name: 'residence'},
                    {data: 'email', name: 'email'},
                    {data: 'phone', name: 'phone'},
                    {data: 'action', name: 'action', orderable: false, searchable: false},
                ]
            });
        })
    </script>
@endpush
