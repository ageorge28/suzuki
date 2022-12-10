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
                            <h3 class="card-title">Edit Accessory</h3>
                        </div>
                        <div class="card-body">

                            <form method="post" action="{{ route('admin.accessories.update', $accessory->id) }}" enctype="multipart/form-data">
                                @method('PUT')
                                @csrf
                                <div class="form-group row">
                                  <div class="col-4">
                                      <label>Name (English)</label>
                                      <span class="text-danger">*</span>
                                  </div>
                                  <div class="col-8">
                                      <input type="text" class="form-control" name="name_en" id="name_en" value="{{ $accessory->name_en }}" />
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
                                      <input type="text" class="form-control" name="name_ml" id="name_ml"  value="{{ $accessory->name_ml }}" />
                                      @error('name_ml')
                                          <div class="text-danger"><small>{{ $message }}</small></div>
                                      @enderror
                                  </div>
                                </div>

                                <div class="form-group row mt-3">
                                    <div class="col-4">
                                        <label for="favicon">Subcategory</label>
                                        <span class="text-danger">*</span>
                                    </div>
                                    <div class="col-8">
                                        <select name="subcategory_id" id="subcategory_id" class="form-control">
                                            <option>-- Select Subcategory --</option>
                                            @foreach($subcategories as $subcategory)
                                                <option {{ $accessory->subcategory_id == $subcategory->id ? 'selected' : '' }} value="{{ $subcategory->id }}">{{ $subcategory->name_en }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-4">
                                        <label>Model Number</label>
                                        <span class="text-danger">*</span>
                                    </div>
                                    <div class="col-8">
                                        <input type="text" class="form-control" name="code" id="code"  value="{{ $accessory->code }}"/>
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
                                        <input type="number" step=".01" class="form-control" name="price" id="price"  value="{{ $accessory->price }}"/>
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
                                                        <label class="custom-file-label" for="image">Choose file</label>
                                                    </div>
                                                    @error('image')
                                                        <div class="text-danger"><small>{{ $message }}</small></div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-4">
                                                <img id="new_image" src="{{ asset('uploads/accessories/images/' . $accessory->image) }}" style="width:100px;height:100px"/>
                                            </div>
                                        </div>
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