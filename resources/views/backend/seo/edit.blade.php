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
                                <h3 class="card-title">Edit SEO Settings</h3>
                            </div>
                            <div class="card-body">
                                
                                <form action="{{ route('admin.seo.update') }}" method="post">

                                    @csrf

                                    <div class="form-group row">
                                        <div class="col-2">
                                            <label>Meta Title</label>
                                            <span class="text-danger">*</span>
                                        </div>
                                        <div class="col-10">
                                            <input type="text" class="form-control" name="meta_title" id="meta_title" value="{{ $seo->meta_title }}" />
                                            @error('meta_title')
                                                <div class="text-danger"><small>{{ $message }}</small></div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-2">
                                            <label>Meta Description</label>
                                            <span class="text-danger">*</span>
                                        </div>
                                        <div class="col-10">
                                            <textarea class="form-control" name="meta_description" id="meta_description">{{ $seo->meta_description }}</textarea>
                                            @error('meta_description')
                                                <div class="text-danger"><small>{{ $message }}</small></div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-2">
                                            <label>Meta Keywords</label>
                                        </div>
                                        <div class="col-10">
                                            <input type="text" class="form-control" data-role="tagsinput" name="meta_keywords" id="meta_keywords" value="{{ $seo->meta_keywords }}" />
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-2">
                                            <label>Alt Attribute for Images</label>
                                            <span class="text-danger">*</span>
                                        </div>
                                        <div class="col-10">
                                            <input type="text" class="form-control" name="alt" id="alt" value="{{ $seo->alt }}" />
                                            @error('alt')
                                                <div class="text-danger"><small>{{ $message }}</small></div>
                                            @enderror
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
