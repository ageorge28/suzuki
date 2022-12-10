@extends('backend.layouts.app')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">

                    <div class="col-md-12">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Motorcycles</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body table-responsive">

                                <a href="{{ route('admin.motorcycles.create') }}" class="btn btn-success">Add Motorcycle</a>
                                <br />                               
                                <br />

                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th style="width: 10px">#</th>
                                            <th>Image</th>
                                            <th>Name (English)</th>
                                            <th>Name (Malayalam)</th>
                                            <th>Category</th>
                                            <th>Subcategory</th>
                                            <th>Model Number</th>
                                            <th>Status</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($motorcycles as $motorcycle)
                                            <tr>
                                                <td>{{ $loop->index + 1 }}</td>
                                                <td>
                                                    <img src="{{ asset('uploads/motorcycles/thumbnails/' . $motorcycle->thumbnail) }}"
                                                        style="width:50px; height:50px" />
                                                </td>
                                                <td>{{ $motorcycle->name_en }}</td>
                                                <td>{{ $motorcycle->name_ml }}</td>
                                                <td>{{ $motorcycle->category->name_en }}</td>
                                                <td>{{ $motorcycle->subcategory->name_en }}</td>
                                                <td>{{ $motorcycle->code }}</td>
                                                <td>
                                                    @if($motorcycle->status == 1)
                                                        <span class="badge badge-pill badge-success">Visible</span>
                                                    @else
                                                        <span class="badge badge-pill badge-danger">Invisible</span>
                                                    @endif
                                                </td>
                                                <td>
                                                    <a class="btn btn-warning btn-xs"
                                                        href="{{ route('admin.motorcycles.edit', $motorcycle->id) }}"><i class="fas fa-edit"></i> Edit</a>
                                                    <a id="delete" class="btn btn-danger btn-xs"
                                                        href="{{ route('admin.motorcycles.delete', $motorcycle->id) }}"><i class="fas fa-trash"></i> Delete</a>
                                                        @if($motorcycle->status == 1)
                                                            <a class="btn btn-info btn-xs" href="{{ route('admin.motorcycles.deactivate', $motorcycle->id) }}"><i class="fas fa-eye-slash"></i> Hide</a>
                                                        @else
                                                            <a class="btn btn-info btn-xs" href="{{ route('admin.motorcycles.activate', $motorcycle->id) }}"><i class="fas fa-eye"></i> Show</a>
                                                        @endif
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->

                    </div>





                </div>
            </div>
        </div>

    </div>

@endsection
