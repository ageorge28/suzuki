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
                                <h3 class="card-title">Reviews</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th style="width: 10px">#</th>
                                            <th>Name (English)</th>
                                            {{-- <th>Name (Malayalam)</th> --}}
                                            <th>Review (English)</th>
                                            {{-- <th>Review (Malayalam)</th> --}}
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($reviews as $review)
                                            <tr>
                                                <td>{{ $loop->index + 1 }}</td>
                                                <td>{{ $review->name_en }}</td>
                                                {{-- <td>{{ $review->name_ml }}</td> --}}
                                                <td>{{ $review->review_en }}</td>
                                                {{-- <td>{{ $review->review_ml }}</td> --}}
                                                <td>
                                                    <a class="btn btn-warning btn-xs"
                                                        href="{{ route('admin.reviews.edit', $review->id) }}"><i class="fas fa-edit"></i> Edit</a>
                                                    <a id="delete" class="btn btn-danger btn-xs"
                                                        href="{{ route('admin.reviews.delete', $review->id) }}"><i class="fas fa-trash"></i> Delete</a>
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
                                <h3 class="card-title">Add Review</h3>
                            </div>
                            <div class="card-body">

                                <form method="post" action="{{ route('admin.reviews.store') }}">

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

                                    <div class="form-group row">
                                        <div class="col-4">
                                            <label>Review (English)</label>
                                            <span class="text-danger">*</span>
                                        </div>
                                        <div class="col-8">
                                            <input type="text" class="form-control" name="review_en" id="review_en" />
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
                                            <input type="text" class="form-control" name="review_ml" id="review_ml" />
                                            @error('review_ml')
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

@endsection
