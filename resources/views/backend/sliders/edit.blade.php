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
                        <h3 class="card-title">Change Slider</h3>
                      </div>
                      <div class="card-body">
                        
                        <form method="post" action="{{ route('admin.sliders.update', $slider->id) }}" enctype="multipart/form-data">
                        
                          @csrf

                          @method('PUT')

                        <div class="form-group row mt-3">
                            <div class="col-2">
                                <label for="favicon">Slider</label>
                                <span class="text-danger">*</span>
                            </div>
                            <div class="col-10">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" onchange="imageChange(this)" class="custom-file-input" id="image" name="image">
                                                <label class="custom-file-label" for="image">Choose file</label>
                                            </div>  
                                        </div>
                                        @error('image')
                                            <div class="text-danger"><small>{{ $message }}</small></div>
                                        @enderror
                                    </div>
                                    <div class="col-6">
                                        <img id="new_image" src="{{ asset('frontend/assets/images/sliders/' . $slider->image) }}" style="width:190px; height:75px;" />
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
                $('#new_image').attr('src', e.target.result).width(190).height(75);
            };
            reader.readAsDataURL(input.files[0]);
        }
    }
  </script>

@endsection