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
                                <h3 class="card-title">Website Settings</h3>
                            </div>
                            <div class="card-body">

                                <div class="row">
                                    <div class="col-2">
                                        <label>Company Name (English)</label>
                                    </div>
                                    <div class="col-10">
                                        <span>{{ $site->name_en }}</span>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-2">
                                        <label>Company Name (Malayalam)</label>
                                    </div>
                                    <div class="col-10">
                                        <span>{{ $site->name_ml }}</span>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-2">
                                        <label>Company Logo</label>
                                    </div>
                                    <div class="col-10">
                                        <img src="{{ asset('frontend/assets/images/' . $site->logo) }}" />
                                    </div>
                                </div>

                                <div class="row mt-3">
                                    <div class="col-2">
                                        <label>Description (English)</label>
                                    </div>
                                    <div class="col-10">
                                        <p>{{ $site->description_en }}</p>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-2">
                                        <label>Description (Malayalam)</label>
                                    </div>
                                    <div class="col-10">
                                        <p>{{ $site->description_ml }}</p>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-2">
                                        <label>Main Phone Number</label>
                                    </div>
                                    <div class="col-10">
                                        <span>{{ $site->phone }}</span>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-2">
                                        <label>Address</label>
                                    </div>
                                    <div class="col-10">
                                        <span>{{ $site->address }}</span>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-2">
                                        <label>Sales Phone Number</label>
                                    </div>
                                    <div class="col-10">
                                        <span>{{ $site->sales_phone }}</span>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-2">
                                        <label>Service Phone Number</label>
                                    </div>
                                    <div class="col-10">
                                        <span>{{ $site->service_phone }}</span>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-2">
                                        <label>Mobile Number 1</label>
                                    </div>
                                    <div class="col-10">
                                        <span>{{ $site->phone1 }}</span>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-2">
                                        <label>Mobile Number 2</label>
                                    </div>
                                    <div class="col-10">
                                        <span>{{ $site->phone2 }}</span>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-2">
                                        <label>Main Email Address</label>
                                    </div>
                                    <div class="col-10">
                                        <span>{{ $site->email }}</span>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-2">
                                        <label>Sales Email Address</label>
                                    </div>
                                    <div class="col-10">
                                        <span>{{ $site->sales_email }}</span>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-2">
                                        <label>Service Email Address</label>
                                    </div>
                                    <div class="col-10">
                                        <span>{{ $site->service_email }}</span>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-2">
                                        <label>Facebook URL</label>
                                    </div>
                                    <div class="col-10">
                                        <span>{{ $site->facebook }}</span>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-2">
                                        <label>Instagram URL</label>
                                    </div>
                                    <div class="col-10">
                                        <span>{{ $site->instagram }}</span>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-2">
                                        <label>YouTube URL</label>
                                    </div>
                                    <div class="col-10">
                                        <span>{{ $site->youtube }}</span>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-2">
                                        <label>Favicon</label>
                                    </div>
                                    <div class="col-10">
                                        <img src="{{ asset('frontend/assets/images/' . $site->favicon) }}" />
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-2">
                                        <label>Website URL Address</label>
                                    </div>
                                    <div class="col-10">
                                        <span>{{ $site->url }}</span>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-2">
                                        <label>Google Map Address</label>
                                    </div>
                                    <div class="col-10">
                                        <iframe src="{{ $site->map }}" width="" height="275" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-2">
                                        <label>Doorstep Test Ride Facility</label>
                                    </div>
                                    <div class="col-10">
                                        <span class="badge badge-pill {{ $site->doorstep ? 'badge-success' : 'badge-danger' }}">{{ $site->doorstep ? "Available" : "Unavailable" }}</span>
                                    </div>
                                </div>

                                <div class="text-right">
                                    <a class="btn btn-primary" href="{{ route('admin.site.edit') }}" />Edit</a>
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
