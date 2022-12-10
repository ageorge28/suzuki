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
                                <h3 class="card-title">Edit Website Settings</h3>
                            </div>
                            <div class="card-body">
                                
                                <form action="{{ route('admin.site.update') }}" method="post" enctype="multipart/form-data">

                                    @csrf

                                    <div class="form-group row">
                                        <div class="col-2">
                                            <label>Company Name (English)</label>
                                            <span class="text-danger">*</span>
                                        </div>
                                        <div class="col-10">
                                            <input type="text" class="form-control" name="name_en" id="name_en" value="{{ $site->name_en }}" />
                                            @error('name_en')
                                                <div class="text-danger"><small>{{ $message }}</small></div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-2">
                                            <label>Company Name (Malayalam)</label>
                                            <span class="text-danger">*</span>
                                        </div>
                                        <div class="col-10">
                                            <input type="text" class="form-control" name="name_ml" id="name_ml" value="{{ $site->name_ml }}" />
                                            @error('name_ml')
                                                <div class="text-danger"><small>{{ $message }}</small></div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row mt-3">
                                        <div class="col-2">
                                            <label for="logo">Company Logo</label>
                                            <span class="text-danger">*</span>
                                        </div>
                                        <div class="col-10">
                                            <div class="row">
                                                <div class="col-5">
                                                    <div class="input-group">
                                                        <div class="custom-file">
                                                            <input type="file" onchange="logoChange(this)" class="custom-file-input" id="logo" name="logo">
                                                            <label class="custom-file-label" for="logo">Choose file</label>
                                                        </div>  
                                                    </div>
                                                    <small class="text-danger">Upload image with width = 170px and height = 50px</small>
                                                    @error('logo')
                                                        <div class="text-danger"><small>{{ $message }}</small></div>
                                                    @enderror
                                                </div>                                                
                                                <div class="col-5">
                                                    <img id="new_logo" src="{{ asset('frontend/assets/images/' . $site->logo) }}" />
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
                                            <textarea class="form-control" name="description_en" id="description_en" >{{ $site->description_en }}</textarea>
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
                                            <textarea class="form-control" name="description_ml" id="description_ml" >{{ $site->description_ml }}</textarea>
                                            @error('description_ml')
                                                <div class="text-danger"><small>{{ $message }}</small></div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-2">
                                            <label>Main Phone Number</label>
                                            <span class="text-danger">*</span>
                                        </div>
                                        <div class="col-10">
                                            <input type="text" class="form-control" name="phone" id="phone" value="{{ $site->phone }}" />
                                            @error('phone')
                                                <div class="text-danger"><small>{{ $message }}</small></div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-2">
                                            <label>Address</label>
                                            <span class="text-danger">*</span>
                                        </div>
                                        <div class="col-10">
                                            <input type="text" class="form-control" name="address" id="address" value="{{ $site->address }}" />
                                            @error('address')
                                                <div class="text-danger"><small>{{ $message }}</small></div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-2">
                                            <label>Sales Phone Number</label>
                                            <span class="text-danger">*</span>
                                        </div>
                                        <div class="col-10">
                                            <input type="text" class="form-control" name="sales_phone" id="sales_phone" value="{{ $site->sales_phone }}" />
                                            @error('sales_phone')
                                                <div class="text-danger"><small>{{ $message }}</small></div>
                                            @enderror                                        
                                        </div>    
                                    </div>
                                    
                                    <div class="form-group row">
                                        <div class="col-2">
                                            <label>Service Phone Number</label>
                                            <span class="text-danger">*</span>
                                        </div>
                                        <div class="col-10">
                                            <input type="text" class="form-control" name="service_phone" id="service_phone" value="{{ $site->service_phone }}" />
                                            @error('service_phone')
                                                <div class="text-danger"><small>{{ $message }}</small></div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-2">
                                            <label>Mobile Number 1</label>
                                        </div>
                                        <div class="col-10">
                                            <input type="text" class="form-control" name="phone1" id="phone1" value="{{ $site->phone1 }}" />
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-2">
                                            <label>Mobile Number 2</label>
                                        </div>
                                        <div class="col-10">
                                            <input type="text" class="form-control" name="phone2" id="phone2" value="{{ $site->phone2 }}" />
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-2">
                                            <label>Main Email Address</label>
                                        </div>
                                        <div class="col-10">
                                            <input type="email" class="form-control" name="email" id="email" value="{{ $site->email }}" />
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-2">
                                            <label>Sales Email Address</label>
                                            <span class="text-danger">*</span>
                                        </div>
                                        <div class="col-10">
                                            <input type="email" class="form-control" name="sales_email" id="sales_email" value="{{ $site->sales_email }}" />
                                            @error('sales_email')
                                                <div class="text-danger"><small>{{ $message }}</small></div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-2">
                                            <label>Service Email Address</label>
                                            <span class="text-danger">*</span>
                                        </div>
                                        <div class="col-10">
                                            <input type="email" class="form-control" name="service_email" id="service_email" value="{{ $site->service_email }}" />
                                            @error('service_email')
                                                <div class="text-danger"><small>{{ $message }}</small></div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-2">
                                            <label>Facebook Link</label>
                                        </div>
                                        <div class="col-10">
                                            <input type="url" class="form-control" name="facebook" id="facebook" value="{{ $site->facebook }}" />
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-2">
                                            <label>Instagram Link</label>
                                        </div>
                                        <div class="col-10">
                                            <input type="url" class="form-control" name="instagram" id="instagram" value="{{ $site->instagram }}" />
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-2">
                                            <label>YouTube Link</label>
                                        </div>
                                        <div class="col-10">
                                            <input type="url" class="form-control" name="youtube" id="youtube" value="{{ $site->youtube }}" />
                                        </div>
                                    </div>

                                    <div class="form-group row mt-3">
                                        <div class="col-2">
                                            <label for="favicon">Website Favicon</label>
                                        </div>
                                        <div class="col-10">
                                            <div class="row">
                                                <div class="col-5">
                                                    <div class="input-group">
                                                        <div class="custom-file">
                                                            <input type="file" onchange="faviconChange(this)" class="custom-file-input" id="favicon" name="favicon">
                                                            <label class="custom-file-label" for="logo">Choose file</label>
                                                        </div>  
                                                    </div>
                                                    <small class="text-danger">Upload image with width = 32px and height = 32px</small>
                                                </div>
                                                <div class="col-5">
                                                    <img id="new_favicon" src="{{ asset('frontend/assets/images/' . $site->favicon) }}" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-2">
                                            <label>Website URL Address</label>
                                        </div>
                                        <div class="col-10">
                                            <input type="url" class="form-control" name="url" id="url" value="{{ $site->url }}" />
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-2">
                                            <label>Google Map Address</label>
                                        </div>
                                        <div class="col-10">
                                            <input type="url" class="form-control" name="map" id="map" value="{{ $site->map }}" />
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-2">
                                            <label>Doorstep Test Ride ?</label>
                                        </div>
                                        <div class="col-10">
                                            <div class="custom-control custom-switch">
                                                <input type="checkbox" class="custom-control-input" id="customSwitch1" name="doorstep" {{ $site->doorstep ? 'checked' : '' }} />
                                                <label class="custom-control-label" for="customSwitch1"></label>
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
        function logoChange(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#new_logo').attr('src', e.target.result).width(170).height(50);
                };
                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>

    <script type="text/javascript">
        function faviconChange(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#new_favicon').attr('src', e.target.result).width(32).height(32);
                };
                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>

@endsection
