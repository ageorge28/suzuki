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
                            <h3 class="card-title">Edit Subcategory</h3>
                        </div>
                        <div class="card-body">

                            <form method="post" action="{{ route('admin.subcategories.update', $subcategory->id) }}">
                                @method('PUT')
                                @csrf
                                <div class="form-group row">
                                  <div class="col-4">
                                      <label>Name (English)</label>
                                      <span class="text-danger">*</span>
                                  </div>
                                  <div class="col-8">
                                      <input type="text" class="form-control" name="name_en" id="name_en" value="{{ $subcategory->name_en }}" />
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
                                      <input type="text" class="form-control" name="name_ml" id="name_ml" value="{{ $subcategory->name_ml }}" />
                                      @error('name_ml')
                                          <div class="text-danger"><small>{{ $message }}</small></div>
                                      @enderror
                                  </div>
                                </div>

                                <div class="form-group row mt-3">
                                    <div class="col-4">
                                        <label for="favicon">Category</label>
                                        <span class="text-danger">*</span>
                                    </div>
                                    <div class="col-8">
                                        <select name="category_id" id="category_id" class="form-control">
                                            <option>-- Select Category --</option>
                                            @foreach($categories as $category)
                                                <option {{ $subcategory->category_id == $category->id ? 'selected' : '' }} value="{{ $category->id }}">{{ $category->name_en }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-success">Save</button>

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