@extends('frontend.layouts.app')

@section('title')
    @if(session('language') == 'Malayalam')
        {{ $site->name_ml }} | ഹോം
    @else
        {{ $site->name_en }} | Home
    @endif
@endsection

@section('content')


    <!-- Banner Slider section start here -->
    <section class="ic-slider-section">
        <div class="ic-banner-slider owl-carousel">

            <!-- Banner slider item -->
            @foreach($banners as $banner)
            <div 
                class="ic-slider-animated ic-banner-slider-item" 
                style="background-image: url({{ asset('frontend/assets/images/banners/' . $banner->image) }})"
            >
                {{-- <div class="ic-banner-content">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6 col-md-8 col-sm-8">
                                <h3 class="ic-banner-short-title animated">Sports</h3>
                                <h1 class="ic-banner-title animated">powerful racing bike</h1>
                                <p class="animated">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do mod tempor incididunt ut labore ettemi dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.</p>
                                <a href="#" class="ic-custom-btn theme-color animated">Buy Now</a>
                            </div>
                        </div>
                    </div>
                </div> --}}
            </div>
            @endforeach

        </div>

        <!-- Banner carousel dots -->
        <div class="ic-carousel-custom-dots">
            @foreach($banners as $banner)
            <div class="ic-owl-dot">
                {{-- <div class="ic-dot-text">01 <span class="ic-slider-count">/ 03</span>  Sports Bike</div> --}}
                <div class="ic-owl-circle"></div>
            </div>
            @endforeach
        </div>

        <!-- Banner slider progress -->
        <div class="ic-banner-slider-progress"></div>
    </section>
    <!-- Banner Slider section end here -->
    
    <br />
    <br />  <br />

    <section class="ic-overview ic-padding-50">
        <div class="container">
            <div class="row ic-section-header">              
                <div>
                    @if(session('language') == 'Malayalam')
                    <h6>
                        പത്തനംതിട്ടയിലെ സുസുക്കി ബൈക്കുകളുടെയും സ്കൂട്ടറുകളുടെയും അംഗീകൃത ഡീലർമാർ
                    </h6>
                    @else
                        <h6>
                            The authorized dealers of Suzuki Bikes and Scooters in Pathanamthitta
                        </h6> 
                    @endif
                </div>
            </div>
        </div>
    </section>

    <!-- Overview section start here-->
    <section class="ic-overview ic-padding-100">
        <div class="container">
            <div class="row">

                <!-- Overview item -->
                <div class="col-lg-6 col-md-6 col-12">
                    <a href="{{ route('motorcycles.category', 'bikes') }}">
                    <div class="ic-overview-item ic-tilt wow fadeInUp" data-tilt>
                        <img src="{{ asset('frontend/assets/images/categories/' . $bikes->image) }}" alt="{{ $seo->alt }}">
                        <div class="ic-overview-item-content">
                            <h1>
                                @if(session()->get('language') == 'Malayalam')
                                    <span>വിന്റേജ് ബൈക്ക് ശേഖരം</span>
                                @else
                                    <span>vintage bike Collection</span>
                                @endif
                            </h1>
                            {{-- <a href="shop.html" class="ic-custom-btn">Buy Now</a> --}}
                        </div>
                    </div>
                </a>
                </div>

                <!-- Overview item -->
                <div class="col-lg-6 col-md-6 col-12">
                    <a href="{{ route('motorcycles.category', 'scooters') }}">
                    <div class="ic-overview-item ic-tilt wow fadeInUp" data-wow-delay=".2s" data-tilt>
                        <img src="{{ asset('frontend/assets/images/categories/' . $scooters->image) }}" alt="{{ $seo->alt }}">
                        <div class="ic-overview-item-content">
                            <h1>
                                @if(session()->get('language') == 'Malayalam')
                                <span>ആധുനിക നഗര സ്കൂട്ടർ</span>                               
                                @else
                                    <span>Modern urban Scooter</span>
                                @endif
                            </h1>
                            {{-- <a href="shop.html" class="ic-custom-btn">Buy Now</a> --}}
                        </div>
                    </div>
                </a>
                </div>

                <!-- Overview item -->

            </div>
        </div>
    </section>
    <!-- Overview section end here-->

    <!-- Product section start here-->
    <section class="ic-product ic-padding-bottom">
        <div class="container">

            <!-- Section Header -->
            <div class="ic-section-header">
                 
                <h1 class="ic-header-title">
                    @if(session()->get('language') == 'Malayalam')
                        നിങ്ങളുടെ<span> സ്വപ്ന ബൈക്ക്</span>
                        <br />
                        ഞങ്ങളുടെ തിരഞ്ഞെടുപ്പ്
                    @else
                        your <span>dream bike</span>
                        <br />
                        our choice
                    @endif
                </h1>
                <span class="ic-header-divider"></span>
                <h6 class="ic-header-subtitle">
                    @if(session()->get('language') == 'Malayalam')
                        സ്റ്റൈലിഷ് ഡിസൈൻ<span>ഒപ്പം</span> പ്രകടനം
                    @else
                        Stylish Design <span>&</span> Performance
                    @endif
                </h6>
            </div>
            <div class="ic-space-60"></div>

            <div class="text-center">
                <a href="{{ route('motorcycles') }}" class="ic-custom-btn ic-btn-lg theme-color">
                    @if(session()->get('language') == 'Malayalam')
                        സുസുക്കി പത്തനംതിട്ടയിലെ ബൈക്കുകളും സ്കൂട്ടറുകളും കാണുക                    
                    @else
                        View Bikes and Scooters in Suzuki Pathanamthitta
                    @endif
                </a>
            </div>
        </div>


    </section>
    <!-- Product section end here-->

    <!-- Overview style two section start here-->
    <section class="ic-overview style-two">
        <div class="row">

            <!-- Overview item -->
            <div class="col-lg-6 col-md-6 col-12">
                <a href="{{ route('accessories') }}">
                <div class="ic-overview-item ic-overview-item-left wow fadeInLeft">
                    <img src="{{ asset('frontend/assets/images/categories/' . $accessories->image) }}" alt="{{ $seo->alt }}">
                    <div class="ic-overview-item-content">
                        @if(session()->get('language') == 'Malayalam')
                            <h4 class="ic-short-title" style="color:#D23B3B; font-weight:700">ട്രെൻഡി ശേഖരം</h4>
                            <h1 class="ic-overview-title" style="color:#D23B3B">ആക്സസറികൾ</h1>
                        @else
                            <h4 class="ic-short-title" style="color:#D23B3B; font-weight:700">trendy collection</h4>
                            <h1 class="ic-overview-title" style="color:#D23B3B">Accessories</h1>
                        @endif
                        {{-- <a href="shop.html" class="ic-custom-btn theme-color">Buy Now</a> --}}
                    </div>
                </div>
            </a>
            </div>

            <!-- Overview item -->
            <div class="col-lg-6 col-md-6 col-12">
                <a href="{{ route('workshop') }}">
                    <div class="ic-overview-item wow fadeInRight">
                        <img src="{{ asset('frontend/assets/images/categories/' . $workshop->image) }}" alt="{{ $seo->alt }}">
                        <div class="ic-overview-item-content">
                            @if(session()->get('language') == 'Malayalam')
                                <h4 class="ic-short-title" style="color:#D23B3B;font-weight:700">അറ്റകുറ്റപ്പണികൾ</h4>
                                <h1 class="ic-overview-title" style="color: #D23B3B">വർക്ക്ഷോപ്പ്</h1>
                            @else
                                <h4 class="ic-short-title" style="color:#D23B3B;font-weight:700">repairs</h4>
                                <h1 class="ic-overview-title" style="color: #D23B3B">Workshop</h1>
                            @endif

                            {{-- <a href="shop.html" class="ic-custom-btn black-hover">Buy Now</a> --}}
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </section>
    <!-- Overview style two section end here-->

    <!-- Image Slider section start here-->
    <section class="ic-image-slider-section ic-padding-120">
        <div class="container">

            <!-- Section Header -->
            <div class="ic-section-header wow fadeInUp">
                @if(session()->get('language') == 'Malayalam')
                    <h1 class="ic-header-title">ഞങ്ങൾ ഇറക്കുമതി ചെയ്യുന്നു<span>നിങ്ങളുടെ സ്വപ്ന സ്കൂട്ടർ</span></h1>
                    <span class="ic-header-divider"></span>
                    <h6 class="ic-header-subtitle">മികച്ച മൂല്യം <span>ഒപ്പം</span>സംതൃപ്തി</h6>
                @else
                    <h1 class="ic-header-title">we import your <span>dream scooter</span></h1>
                    <span class="ic-header-divider"></span>
                    <h6 class="ic-header-subtitle">best value <span>&</span> satisfaction</h6>
                @endif
            </div>
            <div class="ic-space-60"></div>
            <div class="ic-image-slider-wrapper wow fadeInUp" data-wow-delay="0.3s">
                <div class="ic-image-slider owl-carousel">

                    @foreach($sliders as $slider)
                    <div class="ic-image-slider-item">
                        <img src="{{ asset('frontend/assets/images/sliders/' . $slider->image) }}" alt="{{ $seo->alt }}" class="animated">
                        {{-- <h1 class="ic-slider-text animated">DUCATI X DIAVEL</h1> --}}
                    </div>
                    @endforeach

                </div>
                <div class="ic-image-slider-nav">
                    <div class="ic-image-nav-left"><i class="icofont-simple-left"></i></div>
                    <div class="ic-image-nav-right"><i class="icofont-simple-right"></i></div>
                </div>
                <div class="ic-space-40"></div>

            </div>
        </div>
    </section>

    <!-- Newsletter section start here -->
    @if($site->doorstep)
        <section class="ic-newsletter">
            <div class="container">
                <div class="row ic-newsletter-wrapper" style="background-image: none; background-color:lightgray">
                    <div class="col-lg-3 col-md-1 col-sm-12"></div>
                    <div class="col-lg-6 col-md-10 col-sm-12">
                        <div class="ic-newsletter-inner">
                            <h2 class="ic-newsletter-title" style="color: white;">
                                <img src="{{ asset('frontend/assets/images/suzuki_doorstep_logo.png') }}" alt="{{ $seo->alt }}">
                            </h2>
                            <span><a href="tel:{{ $site->phone }}" style="color: #D23B3B;font-size: x-large;font-weight: 900;">
                                @if(session()->get('language') == 'Malayalam')
                                    ഡോർസ്റ്റെപ്പ് ടെസ്റ്റ് റൈഡിനായി വിളിക്കൂ
                                @else
                                    For Doorstep Test Ride Call:
                                @endif 
                                    {{ $site->phone }}
                            </a></span>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-1 col-sm-12"></div>
                </div>
            </div>
        </section>
    @endif


@endsection