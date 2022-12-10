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
                                <h3 class="card-title">SEO Settings</h3>
                            </div>
                            <div class="card-body">

                                <div class="row">
                                    <div class="col-2">
                                        <label>Meta Title</label>
                                    </div>
                                    <div class="col-10">
                                        <span>{{ $seo->meta_title }}</span>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-2">
                                        <label>Meta Description</label>
                                    </div>
                                    <div class="col-10">
                                        <p>{{ $seo->meta_description }}</p>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-2">
                                        <label>Meta Keywords</label>
                                    </div>
                                    <div class="col-10">
                                        <p>
                                            @foreach(\Str::of($seo->meta_keywords)->explode(',') as $keyword)
                                                <span class="badge badge-pill badge-success">{{ $keyword }}</span>
                                            @endforeach
                                        </p>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-2">
                                        <label>Alt Attribute For Images</label>
                                    </div>
                                    <div class="col-10">
                                        <span>{{ $seo->alt}}</span>
                                    </div>
                                </div>

                                <div class="text-right">
                                    <a class="btn btn-primary" href="{{ route('admin.seo.edit') }}" />Edit</a>
                                </div>

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
