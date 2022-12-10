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
                            <h3 class="card-title">Edit Branch</h3>
                        </div>
                        <div class="card-body">

                            <form method="post" action="{{ route('admin.branches.update', $branch->id) }}">
                                @method('PUT')
                                @csrf

                                <div class="form-group row">
                                    <div class="col-4">
                                        <label>Name</label>
                                        <span class="text-danger">*</span>
                                    </div>
                                    <div class="col-8">
                                        <input type="text" class="form-control" name="name" id="name" value="{{ $branch->name }}" />
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
                                        <input type="text" class="form-control" name="address" id="address" value="{{ $branch->address }}" />
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
                                        <input type="text" class="form-control" name="town" id="town" value="{{ $branch->town }}" />
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
                                        <input type="number" class="form-control" name="pincode" id="pincode" value="{{ $branch->pincode }}" />
                                        @error('pincode')
                                            <div class="text-danger"><small>{{ $message }}</small></div>
                                        @enderror
                                    </div>
                                </div>

                                
                                <div class="form-group row">
                                    <div class="col-4">
                                        <label>Phone</label>
                                        <span class="text-danger">*</span>
                                    </div>
                                    <div class="col-8">
                                        <input type="text" class="form-control" name="phone" id="phone" value="{{ $branch->phone }}" />
                                        @error('phone')
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