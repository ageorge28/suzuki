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
                                <h3 class="card-title">Categories</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body table-responsive">
                                <table class="table table-striped ">
                                    <thead>
                                        <tr>
                                            <th style="width: 10px">#</th>
                                            <th>Name (English)</th>
                                            <th>Subcategory</th>
                                            <th>Image</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($accessories as $accessory)
                                            <tr>
                                                <td>{{ $loop->index + 1 }}</td>
                                                <td style="word-wrap: break-word; max-width:100px">{{ $accessory->name_en }}</td>
                                                <td>{{ $accessory->subcategory->name_en }}</td>
                                                <td>
                                                    <img src="{{ asset('uploads/accessories/images/' . $accessory->image) }}"
                                                        style="width:50px; height:50px" />
                                                </td>
                                                <td>
                                                    <a class="btn btn-warning btn-xs"
                                                        href="{{ route('admin.accessories.edit', $accessory->id) }}"><i class="fas fa-edit"></i> Edit</a>
                                                    <a id="delete" class="btn btn-danger btn-xs"
                                                        href="{{ route('admin.accessories.delete', $accessory->id) }}"><i class="fas fa-trash"></i> Delete</a>
                                                        @if($accessory->status == 1)
                                                            <a class="btn btn-info btn-xs" href="{{ route('admin.accessories.deactivate', $accessory->id) }}"><i class="fas fa-eye-slash"></i> Hide</a>
                                                        @else
                                                            <a class="btn btn-info btn-xs" href="{{ route('admin.accessories.activate', $accessory->id) }}"><i class="fas fa-eye"></i> Show</a>
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
                                <h3 class="card-title">Add Accessory</h3>
                            </div>
                            <div class="card-body">

                                <form method="post" action="{{ route('admin.accessories.store') }}" enctype="multipart/form-data">

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
                                            <label for="subcategory_id">Subcategory</label>
                                            <span class="text-danger">*</span>
                                        </div>
                                        <div class="col-8">
                                            <select name="subcategory_id" id="subcategory_id" class="form-control">
                                                <option>-- Select Subcategory -- </option>
                                                @foreach($subcategories as $subcategory)
                                                    <option value="{{ $subcategory->id }}">{{ $subcategory->name_en }}</option>
                                                @endforeach
                                            </select>
                                            @error('subcategory_id')
                                                <div class="text-danger"><small>{{ $message }}</small></div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-4">
                                            <label>Model Number</label>
                                            <span class="text-danger">*</span>
                                        </div>
                                        <div class="col-8">
                                            <input type="text" class="form-control" name="code" id="code" />
                                            @error('code')
                                                <div class="text-danger"><small>{{ $message }}</small></div>
                                            @enderror
                                        </div>
                                      </div>

                                      <div class="form-group row">
                                        <div class="col-4">
                                            <label>Price</label>
                                        </div>
                                        <div class="col-8">
                                            <input type="number" step=".01" class="form-control" name="price" id="price" />
                                            <small class="text-danger">Price is not visible on the website</small>
                                        </div>
                                    </div>

                                    <div class="form-group row mt-3">
                                        <div class="col-4">
                                            <label for="image">Image</label>
                                            <span class="text-danger">*</span>
                                        </div>
                                        <div class="col-8">
                                            <div class="row">
                                                <div class="col-8">
                                                    <div class="input-group">
                                                        <div class="custom-file">
                                                            <input type="file" onchange="imageChange(this)"
                                                                class="custom-file-input" id="image" name="image">
                                                            <label class="custom-file-label" for="image">Choose
                                                                file</label>
                                                        </div>
                                                        @error('image')
                                                            <div class="text-danger"><small>{{ $message }}</small></div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <img id="new_image" />
                                                </div>
                                            </div>
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
