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
                            <h3 class="card-title">Edit Review</h3>
                        </div>
                        <div class="card-body">

                            <form method="post" action="{{ route('admin.reviews.update', $review->id) }}">
                                @method('PUT')
                                @csrf

                                <div class="form-group row">
                                  <div class="col-4">
                                      <label>Name (English)</label>
                                      <span class="text-danger">*</span>
                                  </div>
                                  <div class="col-8">
                                      <input type="text" class="form-control" name="name_en" id="name_en" value="{{ $review->name_en }}" />
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
                                      <input type="text" class="form-control" name="name_ml" id="name_ml" value="{{ $review->name_ml }}" />
                                      @error('name_ml')
                                          <div class="text-danger"><small>{{ $message }}</small></div>
                                      @enderror
                                  </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-4">
                                        <label>Review (English)</label>
                                        <span class="text-danger">*</span>
                                    </div>
                                    <div class="col-8">
                                        <input type="text" class="form-control" name="review_en" id="review_en" value="{{ $review->review_en }}" />
                                        @error('review_en')
                                            <div class="text-danger"><small>{{ $message }}</small></div>
                                        @enderror
                                    </div>
                                  </div>
  
                                  <div class="form-group row">
                                    <div class="col-4">
                                        <label>Review (Malayalam)</label>
                                        <span class="text-danger">*</span>
                                    </div>
                                    <div class="col-8">
                                        <input type="text" class="form-control" name="review_ml" id="review_ml" value="{{ $review->review_ml }}" />
                                        @error('review_ml')
                                            <div class="text-danger"><small>{{ $message }}</small></div>
                                        @enderror
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