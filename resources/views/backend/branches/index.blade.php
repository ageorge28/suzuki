@extends('backend.layouts.app')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">

                    <div class="col-md-7">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Branches</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th style="width: 10px">#</th>
                                            <th>Name</th>
                                            <th>Town</th>
                                            <th>Phone</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($branches as $branch)
                                            <tr>
                                                <td>{{ $loop->index + 1 }}</td>
                                                <td>{{ $branch->name }}</td>
                                                <td>{{ $branch->town }}</td>
                                                <td>{{ $branch->phone }}</td>
                                                <td>
                                                    <a class="btn btn-warning btn-xs"
                                                        href="{{ route('admin.branches.edit', $branch->id) }}"><i class="fas fa-edit"></i> Edit</a>
                                                    <a id="delete" class="btn btn-danger btn-xs"
                                                        href="{{ route('admin.branches.delete', $branch->id) }}"><i class="fas fa-trash"></i> Delete</a>                                                    
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


                    <div class="col-md-5">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Add Branch</h3>
                            </div>
                            <div class="card-body">

                                <form method="post" action="{{ route('admin.branches.store') }}">

                                    @csrf

                                    <div class="form-group row">
                                      <div class="col-4">
                                          <label>Name</label>
                                          <span class="text-danger">*</span>
                                      </div>
                                      <div class="col-8">
                                          <input type="text" class="form-control" name="name" id="name" />
                                          @error('name')
                                              <div class="text-danger"><small>{{ $message }}</small></div>
                                          @enderror
                                      </div>
                                    </div>

                                    <div class="form-group row">
                                      <div class="col-4">
                                          <label>Address</label>
                                          <span class="text-danger">*</span>
                                      </div>
                                      <div class="col-8">
                                          <input type="text" class="form-control" name="address" id="address" />
                                          @error('address')
                                              <div class="text-danger"><small>{{ $message }}</small></div>
                                          @enderror
                                      </div>
                                    </div>
                                    
                                    <div class="form-group row">
                                        <div class="col-4">
                                            <label>Town</label>
                                            <span class="text-danger">*</span>
                                        </div>
                                        <div class="col-8">
                                            <input type="text" class="form-control" name="town" id="town" />
                                            @error('town')
                                                <div class="text-danger"><small>{{ $message }}</small></div>
                                            @enderror
                                        </div>
                                    </div>

                                      
                                    <div class="form-group row">
                                        <div class="col-4">
                                            <label>Pin Code</label>
                                            <span class="text-danger">*</span>
                                        </div>
                                        <div class="col-8">
                                            <input type="number" class="form-control" name="pincode" id="pincode" />
                                            @error('pincode')
                                                <div class="text-danger"><small>{{ $message }}</small></div>
                                            @enderror
                                        </div>
                                    </div>

                                    
                                    <div class="form-group row">
                                        <div class="col-4">
                                            <label>Mobile</label>
                                            <span class="text-danger">*</span>
                                        </div>
                                        <div class="col-8">
                                            <input type="text" class="form-control" name="phone" id="mobile" />
                                            @error('phone')
                                                <div class="text-danger"><small>{{ $message }}</small></div>
                                            @enderror
                                        </div>
                                      </div>

                                    <button type="submit" class="btn btn-success">Add</button>

                                </form>

                            </div>

                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>


                </div>
            </div>
        </div>

    </div>

    <script type="text/javascript">
        function imageChange(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#new_image').attr('src', e.target.result).width(100).height(100);
                };
                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>
@endsection
