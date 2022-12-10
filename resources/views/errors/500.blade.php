@php
    $site = \App\Models\Site::first();
    $seo = \App\Models\Seo::first();
@endphp

@extends('frontend.layouts.app')

@section('title')
    @if(session()->get('language') == 'Malayalam')
        {{ $site->name_ml }} | ഹോം
    @else
        {{ $site->name_en }} | Home
    @endif
@endsection

@section('content')

<section class="ic-error-section" style="background-image:none">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-12">
                <div class="ic-error-content">
                    <img src="{{ asset('frontend/assets/images/500.png') }}" alt="404-thumb">
                    @if(session()->get('language') == 'Malayalam')
                        <h3>ക്ഷമിക്കണം!</h3>
                        <p>നിങ്ങൾ തിരയുന്ന പേജ് <br>കണ്ടെത്താനായില്ല</p>
                    @else
                        <h3>Sorry!</h3>
                        <p>The Page You Are Looking For <br>Was Not Found</p>
                    @endif
                    <a href="{{ route('home') }}" onclick="window.history.go(-1); return false;" class="ic-custom-btn theme-color">Go Back</a>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection