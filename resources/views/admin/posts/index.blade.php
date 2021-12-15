@extends('layouts.app')

<x-assets.datatables />

@section('breadcrumb')
@can('create-post')
<x-buttons.primary :text="'create post'" :link="route('posts.create')"  />
@endcan
@endsection

@section('content')
    <div class="col-12">
        <div class="card">
            <div class="card-body">

                <h4 class="card-title">Post List</h4>

                <table id="datatable" class="table table-bordered dt-responsive nowrap"
                    style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <thead>
                        <tr>
                            <th>Title</th>
                            <th>Thumbnail</th>
                            <th>Category</th>
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
                ajax: "{{route('posts.index')}}",
                columns: [
                    {data: 'title', name: 'title'},
                    {data: 'thumbnail', name: 'thumbnail',orderable: false, searchable: false},
                    {data: 'category', name: 'category'},
                    {data: 'action', name: 'action', orderable: false, searchable: false},
                ]
            });
        })
    </script>
@endpush
