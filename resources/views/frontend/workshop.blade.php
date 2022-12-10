@extends('frontend.layouts.app')

@section('title')
    @if(session('language') == 'Malayalam')
        {{ $site->name_ml }} | വർക്ക്ഷോപ്പ്
    @else
        {{ $site->name_en }} | Workshop
    @endif
@endsection

@section('content')

<section class="ic-breadcrumb style-three">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <h3 class="ic-breadcrumb-title">
                    @if(session('language') == 'Malayalam')
                        വർക്ക്ഷോപ്പ്
                    @else
                        Workshop
                    @endif
                </h3>
                <ul>
                    <li>
                        <a href="{{ route('home') }}">
                            @if(session('language') == 'Malayalam')
                                ഹോം
                            @else
                                Home
                            @endif
                        </a>
                    </li>
                    <li>
                        @if(session('language') == 'Malayalam')
                            വർക്ക്ഷോപ്പ്
                        @else
                            Workshop
                        @endif
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="ic-about-section ic-padding-120">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12 col-12">
                <div class="ic-about-image wow fadeInRight" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInRight;">
                    <img src="{{ asset('frontend/assets/images/workshop/' . $workshop->main_image) }}" alt="{{ $seo->alt }}">
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-12">
                <div class="ic-about-content wow fadeInLeft" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInLeft;">
                    <h2>
                        @if(session('language') == 'Malayalam')
                            {{ $workshop->title_ml }}
                        @else
                            {{ $workshop->title_en }}
                        @endif
                    </h2>
                    <p>
                        @if(session('language') == 'Malayalam')
                            {!! $workshop->description_ml !!}
                        @else
                            {!! $workshop->description_en !!}
                        @endif
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="mt-100">

<div class="container">
    <div class="row">
        <div class="col-6">
            <img src="{{ asset('frontend/assets/images/workshop/' . $workshop->image1) }}" alt="{{ $seo->alt }}" />
        </div>
        <div class="col-6">
            <img src="{{ asset('frontend/assets/images/workshop/' . $workshop->image2) }}" alt="{{ $seo->alt }}" />                    
        </div>
    </div>
    <br />
    <div class="row">
        <div class="col-6">
            <img src="{{ asset('frontend/assets/images/workshop/' . $workshop->image3) }}" alt="{{ $seo->alt }}" />
        </div>
        <div class="col-6">
            <img src="{{ asset('frontend/assets/images/workshop/' . $workshop->image4) }}" alt="{{ $seo->alt }}" />
        </div>
    </div>

</div>

<br />
</section>


<section class="mt-100">

    <div class="container">
        <div class="row">
            <div class="col-6">
                <p>{!! $workshop->contacts !!}</p>
            </div>
        </div>
        <br />  
    </div>
    
    <br />
    </section>



<br />
<br />

@endsection