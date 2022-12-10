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
                                <h3 class="card-title">Subcategories</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th style="width: 10px">#</th>
                                            <th>Name (English)</th>
                                            {{-- <th>Name (Malayalam)</th> --}}
                                            <th>Category</th>
                                            <th>Status</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($subcategories as $subcategory)
                                            <tr>
                                                <td>{{ $loop->index + 1 }}</td>
                                                <td>{{ $subcategory->name_en }}</td>
                                                {{-- <td>{{ $subcategory->name_ml }}</td> --}}
                                                <td>{{ $subcategory->category->name_en }}</td>
                                                <td>
                                                    @if($subcategory->status == 1)
                                                        <span class="badge badge-pill badge-success">Visible</span>
                                                    @else
                                                        <span class="badge badge-pill badge-danger">Invisible</span>
                                                    @endif
                                                </td>
                                                <td>
                                                    <a class="btn btn-warning btn-xs"
                                                        href="{{ route('admin.subcategories.edit', $subcategory->id) }}"><i class="fas fa-edit"></i> Edit</a>
                                                    <a id="delete" class="btn btn-danger btn-xs"
                                                        href="{{ route('admin.subcategories.delete', $subcategory->id) }}"><i class="fas fa-trash"></i> Delete</a>
                                                    
                                                    @if($subcategory->status == 1)
                                                        <a class="btn btn-info btn-xs" href="{{ route('admin.subcategories.deactivate', $subcategory->id) }}"><i class="fas fa-eye-slash"></i> Hide</a>
                                                    @else
                                                        <a class="btn btn-info btn-xs" href="{{ route('admin.subcategories.activate', $subcategory->id) }}"><i class="fas fa-eye"></i> Show</a>
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


                    <div class="col-md-5">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Add Subcategory</h3>
                            </div>
                            <div class="card-body">

                                <form method="post" action="{{ route('admin.subcategories.store') }}">

                                    @csrf
                                    <div class="form-group row">
                                      <div class="col-4">
                                          <label>Name (English)</label>
                                          <span class="text-danger">*</span>
                                      </div>
                                      <div class="col-8">
                                          <input type="text" class="form-control" name="name_en" id="name_en" />
                                          @error('name_en')
                                              <div class="text-danger"><small>{{ $message }}</small></div>
                                          @enderror
                                      </div>
                                    </div>

                                    <div class="form-group row">
                                      <div class="col-4">
                                          <label>Name (Malayalam)</label>
                                          <span class="text-danger">*</span>
                                      </div>
                                      <div class="col-8">
                                          <input type="text" class="form-control" name="name_ml" id="name_ml" />
                                          @error('name_ml')
                                              <div class="text-danger"><small>{{ $message }}</small></div>
                                          @enderror
                                      </div>
                                    </div>

                                    <div class="form-group row mt-3">
                                        <div class="col-4">
                                            <label for="category_id">Category</label>
                                            <span class="text-danger">*</span>
                                        </div>
                                        <div class="col-8">
                                            <select name="category_id" id="category_id" class="form-control">
                                                <option>-- Select Category -- </option>
                                                @foreach($categories as $category)
                                                    <option value="{{ $category->id }}">{{ $category->name_en }}</option>
                                                @endforeach
                                            </select>
                                            @error('category_id')
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
