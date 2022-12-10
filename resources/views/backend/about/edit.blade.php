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
                                <h3 class="card-title">Edit About Page</h3>
                            </div>
                            <div class="card-body">
                                
                                <form action="{{ route('admin.about.update') }}" method="post" enctype="multipart/form-data">

                                    @csrf

                                    <div class="form-group row">
                                        <div class="col-2">
                                            <label>Title (English)</label>
                                            <span class="text-danger">*</span>
                                        </div>
                                        <div class="col-10">
                                            <input type="text" class="form-control" name="title_en" id="title_ml" value="{{ $about->title_en }}" />
                                            @error('title_en')
                                                <div class="text-danger"><small>{{ $message }}</small></div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-2">
                                            <label>Title (Malayalam)</label>
                                            <span class="text-danger">*</span>
                                        </div>
                                        <div class="col-10">
                                            <input type="text" class="form-control" name="title_ml" id="title_ml" value="{{ $about->title_ml }}" />
                                            @error('title_ml')
                                                <div class="text-danger"><small>{{ $message }}</small></div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row mt-3">
                                        <div class="col-2">
                                            <label for="logo">Main Image</label>
                                            <span class="text-danger">*</span>
                                        </div>
                                        <div class="col-10">
                                            <div class="row">
                                                <div class="col-5">
                                                    <div class="input-group">
                                                        <div class="custom-file">
                                                            <input type="file" onchange="mainimageChange(this)" class="custom-file-input" id="main_image" name="main_image">
                                                            <label class="custom-file-label" for="logo">Choose file</label>
                                                        </div>  
                                                    </div>
                                                    <small class="text-danger">Upload image with width = 1150px and height = 850px</small>
                                                    @error('main_image')
                                                        <div class="text-danger"><small>{{ $message }}</small></div>
                                                    @enderror
                                                </div>                                                
                                                <div class="col-5">
                                                    <img id="new_main_image" src="{{ asset('frontend/assets/images/about/' . $about->main_image) }}" style="width:230px;height:172px" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-2">
                                            <label>Description (English)</label>
                                            <span class="text-danger">*</span>
                                        </div>
                                        <div class="col-10">
                                            <textarea id="summernote1" name="description_en">{{ $about->description_en }}</textarea>
                                            @error('description_en')
                                                <div class="text-danger"><small>{{ $message }}</small></div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-2">
                                            <label>Description (Malayalam)</label>
                                            <span class="text-danger">*</span>
                                        </div>
                                        <div class="col-10">
                                            <textarea name="description_ml" id="summernote2" >{{ $about->description_ml }}</textarea>
                                            @error('description_ml')
                                                <div class="text-danger"><small>{{ $message }}</small></div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-2">
                                            <label>Positive Reviews</label>
                                            <span class="text-danger">*</span>
                                        </div>
                                        <div class="col-10">
                                            <input type="number" class="form-control" name="reviews" id="reviews" value="{{ $about->reviews }}" />
                                            @error('reviews')
                                                <div class="text-danger"><small>{{ $message }}</small></div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-2">
                                            <label>Awards</label>
                                            <span class="text-danger">*</span>
                                        </div>
                                        <div class="col-10">
                                            <input type="number" class="form-control" name="awards" id="awards" value="{{ $about->awards }}" />
                                            @error('awards')
                                                <div class="text-danger"><small>{{ $message }}</small></div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-2">
                                            <label>Products</label>
                                            <span class="text-danger">*</span>
                                        </div>
                                        <div class="col-10">
                                            <input type="number" class="form-control" name="products" id="products" value="{{ $about->products }}" />
                                            @error('products')
                                                <div class="text-danger"><small>{{ $message }}</small></div>
                                            @enderror                                        
                                        </div>    
                                    </div>
                                    
                                    <div class="form-group row">
                                        <div class="col-2">
                                            <label>Customers</label>
                                            <span class="text-danger">*</span>
                                        </div>
                                        <div class="col-10">
                                            <input type="number" class="form-control" name="customers" id="customers" value="{{ $about->customers }}" />
                                            @error('customers')
                                                <div class="text-danger"><small>{{ $message }}</small></div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row mt-3">
                                        <div class="col-2">
                                            <label for="logo">Image 1</label>
                                        </div>
                                        <div class="col-10">
                                            <div class="row">
                                                <div class="col-5">
                                                    <div class="input-group">
                                                        <div class="custom-file">
                                                            <input type="file" onchange="image1Change(this)" class="custom-file-input" id="image1" name="image1">
                                                            <label class="custom-file-label" for="image1">Choose file</label>
                                                        </div>  
                                                    </div>
                                                    <small class="text-danger">Upload image with width = 4000px and height = 1800px</small>
                                                    @error('image1')
                                                        <div class="text-danger"><small>{{ $message }}</small></div>
                                                    @enderror
                                                </div>                                                
                                                <div class="col-5">
                                                    <img id="new_image1" src="{{ asset('frontend/assets/images/about/' . $about->image1) }}" style="width:400px;height:180px" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group row mt-3">
                                        <div class="col-2">
                                            <label for="logo">Image 2</label>
                                        </div>
                                        <div class="col-10">
                                            <div class="row">
                                                <div class="col-5">
                                                    <div class="input-group">
                                                        <div class="custom-file">
                                                            <input type="file" onchange="image2Change(this)" class="custom-file-input" id="image2" name="image2">
                                                            <label class="custom-file-label" for="image2">Choose file</label>
                                                        </div>  
                                                    </div>
                                                    <small class="text-danger">Upload image with width = 4000px and height = 1800px</small>
                                                    @error('image2')
                                                        <div class="text-danger"><small>{{ $message }}</small></div>
                                                    @enderror
                                                </div>                                                
                                                <div class="col-5">
                                                    <img id="new_image2" src="{{ asset('frontend/assets/images/about/' . $about->image2) }}" style="width:400px;height:180px" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group row mt-3">
                                        <div class="col-2">
                                            <label for="logo">Image 3</label>
                                        </div>
                                        <div class="col-10">
                                            <div class="row">
                                                <div class="col-5">
                                                    <div class="input-group">
                                                        <div class="custom-file">
                                                            <input type="file" onchange="image3Change(this)" class="custom-file-input" id="image3" name="image3">
                                                            <label class="custom-file-label" for="image3">Choose file</label>
                                                        </div>  
                                                    </div>
                                                    <small class="text-danger">Upload image with width = 4000px and height = 1800px</small>
                                                    @error('image3')
                                                        <div class="text-danger"><small>{{ $message }}</small></div>
                                                    @enderror
                                                </div>                                                
                                                <div class="col-5">
                                                    <img id="new_image3" src="{{ asset('frontend/assets/images/about/' . $about->image3) }}" style="width:400px;height:180px" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group row mt-3">
                                        <div class="col-2">
                                            <label for="logo">Image 4</label>
                                        </div>
                                        <div class="col-10">
                                            <div class="row">
                                                <div class="col-5">
                                                    <div class="input-group">
                                                        <div class="custom-file">
                                                            <input type="file" onchange="image4Change(this)" class="custom-file-input" id="image4" name="image4">
                                                            <label class="custom-file-label" for="image4">Choose file</label>
                                                        </div>  
                                                    </div>
                                                    <small class="text-danger">Upload image with width = 4000px and height = 1800px</small>
                                                    @error('image4')
                                                        <div class="text-danger"><small>{{ $message }}</small></div>
                                                    @enderror
                                                </div>                                                
                                                <div class="col-5">
                                                    <img id="new_image4" src="{{ asset('frontend/assets/images/about/' . $about->image4) }}" style="width:400px;height:180px" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-12 pr-3 text-right">
                                            <button class="btn btn-primary" type="submit">Save</button>
                                        </div>
                                    </div>

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
        $(document).ready(function() {
            $('#summernote1').summernote();
            $('#summernote2').summernote();
        });
    </script>

    <script type="text/javascript">
        function mainimageChange(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#new_main_image').attr('src', e.target.result).width(170).height(50);
                };
                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>

    <script type="text/javascript">
        function image1Change(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#new_image1').attr('src', e.target.result).width(32).height(32);
                };
                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>

<script type="text/javascript">
    function image2Change(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#new_image2').attr('src', e.target.result).width(32).height(32);
            };
            reader.readAsDataURL(input.files[0]);
        }
    }
</script>

<script type="text/javascript">
    function image3Change(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#new_image3').attr('src', e.target.result).width(32).height(32);
            };
            reader.readAsDataURL(input.files[0]);
        }
    }
</script>

<script type="text/javascript">
    function image4Change(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#new_image4').attr('src', e.target.result).width(32).height(32);
            };
            reader.readAsDataURL(input.files[0]);
        }
    }
</script>


@endsection
