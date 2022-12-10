@extends('frontend.layouts.app')

@section('title')
    @if(session('language') == 'Malayalam')
        {{ $site->name_ml }} | ഞങ്ങളേക്കുറിച്ച്
    @else
        {{ $site->name_en }} | About Us
    @endif
@endsection

@section('content')

<section class="ic-breadcrumb style-three">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <h3 class="ic-breadcrumb-title">
                    @if(session('language') == 'Malayalam')
                        ഞങ്ങളേക്കുറിച്ച്
                    @else
                        About Us
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
                            ഞങ്ങളേക്കുറിച്ച്
                        @else
                            About Us
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
                    <img src="{{ asset('frontend/assets/images/about/' . $about->main_image) }}" alt="Suzuki Bikes and Scooters Pathanamthitta">
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-12">
                <div class="ic-about-content wow fadeInLeft" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInLeft;">
                    <h2>
                        @if(session('language') == 'Malayalam')
                            {{ $about->title_ml }}
                        @else
                            {{ $about->title_en }}
                        @endif
                    </h2>
                    <p>
                        @if(session('language') == 'Malayalam')
                            {!! $about->description_ml !!}
                        @else
                            {!! $about->description_en !!}
                        @endif
                    </p>
                    <a href="{{ route('contact') }}" class="ic-custom-btn-rvs">Contact Us</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ic-counter-section ic-section-bg ic-padding-100">
    <div class="container">
        <div class="row" style="padding-top:50px">
            <!-- Counter item -->
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="ic-counter-item wow fadeInUp" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                    <img src="{{ asset('frontend/assets/images/about/rating.png') }}">
                    <div class="counter-wrap d-flex align-items-center justify-content-center">
                        <div class="counter">{{ $about->reviews }}</div>
                        <span>+</span>
                    </div>
                    <p>
                        @if(session('language') == 'Malayalam')
                            പോസിറ്റീവ് അവലോകനങ്ങൾ
                        @else
                            Positive Reviews
                        @endif                        
                    </p>
                </div>
            </div>

            <!-- Counter item -->
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="ic-counter-item wow fadeInUp" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">
                    <img src="{{ asset('frontend/assets/images/about/counter-02.png') }}">
                    <div class="counter-wrap d-flex align-items-center justify-content-center">
                        <div class="counter">{{ $about->awards }}</div>
                        <span></span>
                    </div>
                    <p>
                        @if(session('language') == 'Malayalam')
                            അവാർഡുകൾ
                        @else
                            Awards
                        @endif                        
                    </p>
                </div>
            </div>

            <!-- Counter item -->
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="ic-counter-item wow fadeInUp" data-wow-delay="0.6s" style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInUp;">
                    <img src="{{ asset('frontend/assets/images/about/counter-03.png') }}">
                    <div class="counter-wrap d-flex align-items-center justify-content-center">
                        <div class="counter">{{ $about->products }}</div>
                        <span>+</span>
                    </div>
                    <p>
                        @if(session('language') == 'Malayalam')
                            മോട്ടോർസൈക്കിളുകൾ
                        @else
                            Motorcycles
                        @endif   
                    </p>
                </div>
            </div>

            <!-- Counter item -->
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="ic-counter-item wow fadeInUp" data-wow-delay="0.8s" style="visibility: visible; animation-delay: 0.8s; animation-name: fadeInUp;">
                    <img src="{{ asset('frontend/assets/images/about/counter-04.png') }}">
                    <div class="counter-wrap d-flex align-items-center justify-content-center">
                        <div class="counter">{{ $about->customers }}</div>
                        <span>+</span>
                    </div>
                    <p>
                        @if(session('language') == 'Malayalam')
                            ഉപഭോക്താക്കൾ
                        @else
                            Customers
                        @endif   
                    </p>
                </div>
            </div>
        </div>

        <!-- Video Section start here -->


    </div>

</section>
<br /><br /><br /><br />
<section class="mt-100">

<div class="container">
    <div class="row">
        <div class="col-6">
            <img src="{{ asset('frontend/assets/images/about/' . $about->image1) }}" alt="{{ $seo->alt }}" />
        </div>
        <div class="col-6">
            <img src="{{ asset('frontend/assets/images/about/' . $about->image2) }}" alt="{{ $seo->alt }}" />                    
        </div>
    </div>
    <br />
    <div class="row">
        <div class="col-6">
            <img src="{{ asset('frontend/assets/images/about/' . $about->image3) }}" alt="{{ $seo->alt }}" />
        </div>
        <div class="col-6">
            <img src="{{ asset('frontend/assets/images/about/' . $about->image4) }}" alt="{{ $seo->alt }}" />
        </div>
    </div>


</div>
</section>
<br />
<br />

<section class="ic-testimonial-section ic-padding-120">
    <div class="container">
        <div class="ic-testimonial-slider-wrapper">
            <div class="ic-testimonial-slider owl-carousel owl-loaded owl-drag">
               

                <!-- Testimonial item -->
                
            <div class="owl-stage-outer">
                <div class="owl-stage" style="transform: translate3d(-3720px, 0px, 0px); transition: all 0.25s ease 0s; width: 6510px;">
                    @foreach($reviews as $review)
                    <div class="owl-item {{ $loop->index == 0 ? 'active' : '' }}" style="width: 930px;">
                        <div class="ic-testimonial-slider-item">
                            <img src="{{ asset('frontend/assets/images/about/quote.png') }}" alt="quote" class="animated w-auto">
                            <p>
                                @if(session('language') == 'Malayalam')
                                    {{ $review->review_ml }}
                                @else
                                    {{ $review->review_en }}
                                @endif
                            </p>
                            <h4 class="ic-client-name">
                                @if(session('language') == 'Malayalam')
                                    {{ $review->name_ml }}
                                @else
                                    {{ $review->name_en }}
                                @endif
                            </h4>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            
            <div class="ic-testimonial-slider-nav">
                <div class="ic-testimonial-nav-left"><i class="icofont-simple-left"></i></div>
                <div class="ic-testimonial-nav-right"><i class="icofont-simple-right"></i></div>
            </div>
        </div>
    </div>
</section>

@endsection