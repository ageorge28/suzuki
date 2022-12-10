@extends('frontend.layouts.app')

@section('title')
    @if(session('language') == 'Malayalam')
        {{ $site->name_ml }} | മോട്ടോർസൈക്കിളുകൾ
    @else
        {{ $site->name_en }} | Motorcycles
    @endif
@endsection

<style type="text/css">
    body {
background-color: #7B1FA2
}



.carousel-inner img {
width: 100%;
height: 
}

#custCarousel .carousel-indicators {
position: static;
margin-top: 20px
}

#custCarousel .carousel-indicators>li {
width: 100px
}

#custCarousel .carousel-indicators li img {
display: block;
opacity: 0.5
}

#custCarousel .carousel-indicators li.active img {
opacity: 1
}

#custCarousel .carousel-indicators li:hover img {
opacity: 0.75
}

.carousel-item img {
width: 80%
}
</style>

@section('content')

<section class="ic-product-single ic-padding-bottom">

    <!-- Product single top -->
    <div class="ic-product-single-top ">
        <div class="container">
            <div class="row align-items-center ic-flex-md-column-reverse">
                <div class="col-lg-5 col-md-12">
                    <div class="ic-product-single-content">
                        {{-- <div class="ic-product-item-dec">
                            <ul>
                                <li>300 CC</li>
                                <li>Auto</li>
                                <li>2019</li>
                            </ul>
                        </div> --}}
                        <h3 class="ic-product-item-title">
                            @if (session('language') == 'Malayalam')
                                {{ $motorcycle->name_ml }}
                            @else
                                {{ $motorcycle->name_en }}
                            @endif
                        </h3>
                        {{-- <h4 class="ic-product-item-price">$3,588</h4> --}}
                        <p>
                            @if (session('language') == 'Malayalam')
                                {{ $motorcycle->description_ml }}
                            @else
                                {{ $motorcycle->description_en }}
                            @endif                        
                        </p>
                        <div class="ic-product-short-specification">
                            <ul class="ic-specification-list">
                                <li>
                                    <span>
                                        @if(session('language') == 'Malayalam')
                                            ലഭ്യത:
                                        @else
                                            Availability:
                                        @endif
                                   </span>
                                    @if($motorcycle->status == 1)
                                        <span class="badge badge-pill badge-success">Available</span>
                                    @else
                                        <span class="badge badge-pill badge-danger">Out of stock</span>
                                    @endif
                                </li>
                                <li><span>                                    
                                    @if(session('language') == 'Malayalam')
                                        എസ്.കെ.യു:
                                    @else
                                        SKU:
                                    @endif
                                    </span>
                                    {{ $motorcycle->code }}
                                </li>
                                <li><span>
                                    @if(session('language') == 'Malayalam')
                                        തരം:
                                    @else
                                        Type:
                                    @endif                                    
                                </span>
                                    @if (session('language') == 'Malayalam')
                                        {{ $motorcycle->category->name_ml }}
                                    @else
                                        {{ $motorcycle->category->name_en }}
                                    @endif         
                                </li>
                                <li>
                                    <span>
                                        @if (session('language') == 'Malayalam')
                                            വെണ്ടർ
                                        @else
                                            Vendor:
                                        @endif
                                    </span>
                                    @if (session('language') == 'Malayalam')
                                        {{ $site->name_ml }}
                                    @else
                                        {{ $site->name_en  }}
                                    @endif    
                                </li>
                            </ul>
                            <br />
                            <p style="font-weight:normal">
                                @if (session('language') == 'Malayalam')
                                    {{ $motorcycle->details->description_ml }}
                                @else
                                    {{ $motorcycle->details->description_en }}
                                @endif    
                            </p>
                        </div>
                        {{-- <div class="ic-product-opt">
                            <div class="ic-product-opt-title">Color:</div>
                            <div class="ic-product-opt-col">
                                <ul class="ic-opts-list ic-opts-color">
                                    <li>
                                        <input type="radio" name="group1" checked="checked">
                                        <div class="ic-product-color" style="background-color: #EE0102"></div>
                                    </li>
                                    <li>
                                        <input type="radio" name="group1">
                                        <div class="ic-product-color" style="background-color: #636268"></div>
                                    </li>
                                    <li>
                                        <input type="radio" name="group1">
                                        <div class="ic-product-color" style="background-color: #696A6E"></div>
                                    </li>
                                    <li>
                                        <input type="radio" name="group1">
                                        <div class="ic-product-color" style="background-color: #0000AA"></div>
                                    </li>
                                    <li>
                                        <input type="radio" name="group1">
                                        <div class="ic-product-color" style="background-color: #3949D9"></div>
                                    </li>
                                </ul>
                            </div>
                        </div> --}}
                        {{-- <div class="ic-single-action-btns">
                            <div class="ic-quantity">
                                <div class="ic-quantity-button ic-quantity-down"><i class="icofont-minus"></i></div>
                                <input type="number" min="1" step="1" value="1">
                                <div class="ic-quantity-button ic-quantity-up"><i class="icofont-plus"></i></div>
                            </div>
                            <a href="" class="ic-product-addcart ic-custom-btn-rvs ic-btn-sm">Add to cart</a>
                            <a class="ic-product-wishlist" title="Wishlist" href="#"><i class="icofont-heart"></i></a>
                        </div> --}}
                    </div>
                </div>
                <div class="col-lg-7 col-md-12 col-sm-12 ic-padding-bottom">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div id="custCarousel" class="carousel slide" data-ride="carousel" align="center">
                                    <!-- slides -->
                                    <div class="carousel-inner">
                                        <div class="carousel-item active"> 
                                            <img src="{{ asset('uploads/motorcycles/thumbnails/' . $motorcycle->thumbnail) }}" alt="{{ $seo->alt }}"> 
                                        </div>
                                        {{-- <div class="carousel-item carousel-item-next carousel-item-left">
                                            <img src="{{ url('https://i.imgur.com/Rpxx6wU.jpg') }}" alt="Hills"> 
                                        </div> --}}
                                        @foreach($motorcycle->photos as $image)
                                        <div class="carousel-item"> 
                                            <img src="{{ asset('uploads/motorcycles/photos/' . $image->file) }}" alt="Hills"> 
                                        </div>
                                        @endforeach
                                    </div> <!-- Left right --> 
                                    <a class="carousel-control-prev" href="#custCarousel" data-slide="prev"> <span class="carousel-control-prev-icon"></span> </a> <a class="carousel-control-next" href="#custCarousel" data-slide="next"> <span class="carousel-control-next-icon"></span> </a> <!-- Thumbnails -->
                                    <ol class="carousel-indicators list-inline">
                                        <li class="list-inline-item active"> 
                                            <a id="carousel-selector-0" class="selected" data-slide-to="0" data-target="#custCarousel"> 
                                                <img src="{{ asset('uploads/motorcycles/thumbnails/' . $motorcycle->thumbnail) }}" alt="{{ $seo->alt }}" class="img-fluid"> 
                                            </a> 
                                        </li>
                                        @foreach($motorcycle->photos as $image)
                                        <li class="list-inline-item"> 
                                            <a id="carousel-selector-{{ $loop->index + 1 }}" data-slide-to="{{ $loop->index + 1 }}" data-target="#custCarousel"> 
                                                <img src="{{ asset('uploads/motorcycles/photos/' . $image->file) }}" class="img-fluid"> 
                                            </a> 
                                        </li>
                                        @endforeach
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="ic-product-tabs">
        <div class="container">
            <div class="row">
                <div class="col-12">

                    <!-- Product nav tab -->
                    <ul class="nav ic-product-nav-tabs d-none d-lg-flex" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#overview" role="tab" aria-controls="overview" aria-selected="true">
                                @if(session('language') == 'Malayalam')
                                    അവലോകനം
                                @else
                                    Overview
                                @endif
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#features" role="tab" aria-controls="features" aria-selected="false">
                                @if(session('language') == 'Malayalam')
                                    സവിശേഷതകൾ
                                @else
                                    Features
                                @endif
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#accessories" role="tab" aria-controls="accessories" aria-selected="false">
                                @if(session('language') == 'Malayalam')
                                    ആക്സസറികൾ
                                @else
                                    Accessories
                                @endif
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#specifications" role="tab" aria-controls="specifications" aria-selected="false">
                                @if(session('language') == 'Malayalam')
                                    സ്പെസിഫിക്കേഷനുകൾ
                                @else
                                    Specifications
                                @endif
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#brochure" role="tab" aria-controls="brochure" aria-selected="false">
                                @if(session('language') == 'Malayalam')
                                    ബ്രോഷർ
                                @else
                                    Brochure
                                @endif
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#video" role="tab" aria-controls="video" aria-selected="false">
                                @if(session('language') == 'Malayalam')
                                    വീഡിയോ
                                @else
                                    Video
                                @endif
                            </a>
                        </li>
                    </ul>
                    <div class="ic-mobile-select-dropdown-wrap">
                        <ul class="nav ic-product-nav-tabs ic-mobile-select-dropdown ic-ul-select" role="tablist">
                            <li class="nav-item active">
                                <a class="nav-link active" data-toggle="tab" href="#overview" role="tab" aria-controls="overview" aria-selected="true">
                                    @if(session('language') == 'Malayalam')
                                        അവലോകനം
                                    @else
                                        Overview
                                    @endif                                
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#features" role="tab" aria-controls="features" aria-selected="false">
                                    @if(session('language') == 'Malayalam')
                                        സവിശേഷതകൾ
                                    @else
                                        Features
                                    @endif                                
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#accessories" role="tab" aria-controls="accessories" aria-selected="false">
                                    @if(session('language') == 'Malayalam')
                                        ആക്സസറികൾ
                                    @else
                                        Accessories
                                    @endif
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#specifications" role="tab" aria-controls="specifications" aria-selected="false">
                                    @if(session('language') == 'Malayalam')
                                        സ്പെസിഫിക്കേഷനുകൾ
                                    @else
                                        Specifications
                                    @endif
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#brochure" role="tab" aria-controls="brochure" aria-selected="false">
                                    @if(session('language') == 'Malayalam')
                                        ബ്രോഷർ
                                    @else
                                        Brochure
                                    @endif
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#video" role="tab" aria-controls="video" aria-selected="false">
                                    @if(session('language') == 'Malayalam')
                                        വീഡിയോ
                                    @else
                                        Video
                                    @endif
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-content" id="ic-product-tab-content">

                        <!-- Product description -->
                        <div class="tab-pane fade show active" id="overview" role="tabpanel">
                            <div class="overview">
                                <img src="{{ asset('uploads/motorcycles/overviews/' . $motorcycle->details->overview_image) }}" alt="{{ $seo->alt }}" />
                            </div>
                        </div>

                        <!-- Product features -->
                        <div class="tab-pane fade" id="features" role="tabpanel">
                            <div class="ic-accordion" id="accordionExample">
                                <div class="card">
                                    <ul class="list-group">
                                        @if(session('language') == 'Malayalam')
                                            @foreach(\Illuminate\Support\Str::of($motorcycle->details->features_ml)->explode(',') as $feature)
                                                <li class="mb-3 border-bottom pb-3 d-flex list-group-item">
                                                    <span class="mr-auto"> 
                                                        {{ $feature }}      
                                                    </span>
                                                </li>
                                            @endforeach                                  
                                        @else
                                            @foreach(\Illuminate\Support\Str::of($motorcycle->details->features_en)->explode(',') as $feature)
                                                <li class="mb-3 border-bottom pb-3 d-flex list-group-item">
                                                    <span class="mr-auto"> 
                                                        {{ $feature }}      
                                                    </span>
                                                </li>
                                            @endforeach                                  
                                        @endif    
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="accessories" role="tabpanel">
                            <div class="ic-accordion" id="accordionExample">
                                <div class="card">
                                    <ul class="list-group">
                                        @if(session('language') == 'Malayalam')
                                            @foreach(\Illuminate\Support\Str::of($motorcycle->details->accessories_ml)->explode(',') as $accessory)
                                                <li class="mb-3 border-bottom pb-3 d-flex list-group-item">
                                                    <span class="mr-auto"> 
                                                        {{ $accessory }}      
                                                    </span>
                                                </li>
                                            @endforeach                                  
                                        @else
                                            @foreach(\Illuminate\Support\Str::of($motorcycle->details->accessories_en)->explode(',') as $accessory)
                                                <li class="mb-3 border-bottom pb-3 d-flex list-group-item">
                                                    <span class="mr-auto"> 
                                                        {{ $accessory }}      
                                                    </span>
                                                </li>
                                            @endforeach                                  
                                        @endif    
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Product specification -->
                        <div class="tab-pane fade" id="specifications" role="tabpanel">
                            <div class="ic-spec">
                                <div class="ic-spec-section">
                                    <h4 class="ic-spec-section-title">
                                        @if (session('language') == 'Malayalam')
                                            എഞ്ചിൻ
                                        @else
                                            Engine
                                        @endif
                                        </h4>
                                    <div class="ic-spec-row">
                                        <div class="ic-spec-name">
                                            @if (session('language') == 'Malayalam')
                                                എഞ്ചിൻ തരം
                                            @else
                                                Engine Type
                                            @endif
                                        </div>
                                        <div class="ic-spec-value">
                                            @if (session('language') == 'Malayalam')
                                                {{ $motorcycle->details->engine_type_ml }}
                                            @else
                                                {{ $motorcycle->details->engine_type_en }}
                                            @endif
                                        </div>
                                    </div>
                                    <div class="ic-spec-row">
                                        <div class="ic-spec-name">
                                            @if (session('language') == 'Malayalam')
                                                വാൽവ് സിസ്റ്റം
                                            @else
                                                Valve System
                                            @endif
                                        </div>
                                        <div class="ic-spec-value">
                                            @if (session('language') == 'Malayalam')
                                                {{ $motorcycle->details->valve_system_ml }}
                                            @else
                                                {{ $motorcycle->details->valve_system_en }}
                                            @endif
                                        </div>
                                    </div>
                                    <div class="ic-spec-row">
                                        <div class="ic-spec-name">
                                            @if (session('language') == 'Malayalam')
                                                സ്ഥാനമാറ്റാം
                                            @else
                                                Displacement
                                            @endif
                                        </div>
                                        <div class="ic-spec-value">
                                            {{ $motorcycle->details->displacement }} cm<sup>3</sup>
                                        </div>
                                    </div>
                                    <div class="ic-spec-row">
                                        <div class="ic-spec-name">
                                            @if (session('language') == 'Malayalam')
                                                ബോർ x സ്ട്രോക്ക്
                                            @else
                                                Bore x Stroke
                                            @endif
                                        </div>
                                        <div class="ic-spec-value">
                                            {{ $motorcycle->details->bore_stroke }} 
                                        </div>
                                    </div>
                                    <div class="ic-spec-row">
                                        <div class="ic-spec-name">
                                            @if (session('language') == 'Malayalam')
                                                എഞ്ചിൻ ഔട്ട്പുട്ട്
                                            @else
                                                Engine Output
                                            @endif
                                        </div>
                                        <div class="ic-spec-value">
                                            {{ $motorcycle->details->engine_output }}
                                        </div>
                                    </div>
                                    <div class="ic-spec-row">
                                        <div class="ic-spec-name">
                                            @if (session('language') == 'Malayalam')
                                                ടോർക്ക്
                                            @else
                                                Torque
                                            @endif
                                        </div>
                                        <div class="ic-spec-value">
                                            {{ $motorcycle->details->torque }}
                                        </div>
                                    </div>
                                    <div class="ic-spec-row">
                                        <div class="ic-spec-name">
                                            @if (session('language') == 'Malayalam')
                                                ഫ്യൂവൽ സിസ്റ്റം
                                            @else
                                                Fuel System
                                            @endif
                                        </div>
                                        <div class="ic-spec-value">
                                            @if (session('language') == 'Malayalam')
                                                {{ $motorcycle->details->fuel_system_ml }}
                                            @else
                                                {{ $motorcycle->details->fuel_system_en }}
                                            @endif
                                        </div>
                                    </div>
                                    <div class="ic-spec-row">
                                        <div class="ic-spec-name">
                                            @if (session('language') == 'Malayalam')
                                                സ്റ്റാർട്ടർ സിസ്റ്റം
                                            @else
                                                Starter System
                                            @endif
                                        </div>
                                        <div class="ic-spec-value">
                                            @if (session('language') == 'Malayalam')
                                                {{ $motorcycle->details->starter_system_ml }}
                                            @else
                                                {{ $motorcycle->details->starter_system_en }}
                                            @endif
                                        </div>
                                    </div>
                                    <div class="ic-spec-row">
                                        <div class="ic-spec-name">
                                            @if (session('language') == 'Malayalam')
                                                ട്രാൻസ്മിഷൻ തരം
                                            @else
                                                Transmission Type
                                            @endif
                                        </div>
                                        <div class="ic-spec-value">
                                            @if (session('language') == 'Malayalam')
                                                {{ $motorcycle->details->transmission_type_ml }}
                                            @else
                                                {{ $motorcycle->details->transmission_type_en }}
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="ic-spec-section">
                                    <h4 class="ic-spec-section-title">
                                        @if (session('language') == 'Malayalam')
                                            അളവുകളും ഭാരവും
                                        @else
                                            Dimensions and Weight
                                        @endif
                                    </h4>
                                    <div class="ic-spec-row">
                                        <div class="ic-spec-name">
                                            @if (session('language') == 'Malayalam')
                                                ചക്രങ്ങൾ
                                            @else
                                                Wheels
                                            @endif
                                        </div>
                                        <div class="ic-spec-value">
                                            @if (session('language') == 'Malayalam')
                                                {{ $motorcycle->details->wheels_ml }}
                                            @else
                                                {{ $motorcycle->details->wheels_en }}
                                            @endif
                                        </div>
                                    </div>
                                    <div class="ic-spec-row">
                                        <div class="ic-spec-name">
                                            @if (session('language') == 'Malayalam')
                                                മൊത്തം ദൈർഘ്യം
                                            @else
                                                Overall Length
                                            @endif
                                        </div>
                                        <div class="ic-spec-value">
                                            {{ $motorcycle->details->length }} mm
                                        </div>
                                    </div>
                                    <div class="ic-spec-row">
                                        <div class="ic-spec-name">
                                            @if (session('language') == 'Malayalam')
                                                മൊത്തം വീതി
                                            @else
                                                Overall Width
                                            @endif
                                        </div>
                                        <div class="ic-spec-value">
                                            {{ $motorcycle->details->width }} mm
                                        </div>
                                    </div>
                                    <div class="ic-spec-row">
                                        <div class="ic-spec-name">
                                            @if (session('language') == 'Malayalam')
                                                മൊത്തത്തിലുള്ള ഉയരം
                                            @else
                                                Overall Height
                                            @endif
                                        </div>
                                        <div class="ic-spec-value">
                                            {{ $motorcycle->details->height }} mm
                                        </div>
                                    </div>
                                    <div class="ic-spec-row">
                                        <div class="ic-spec-name">
                                            @if (session('language') == 'Malayalam')
                                                വീൽ ബേസ്
                                            @else
                                                Wheel Base
                                            @endif
                                        </div>
                                        <div class="ic-spec-value">
                                            {{ $motorcycle->details->wheel_base }} mm
                                        </div>
                                    </div>
                                    <div class="ic-spec-row">
                                        <div class="ic-spec-name">
                                            @if (session('language') == 'Malayalam')
                                                ഗ്രൗണ്ട് ക്ലിയറൻസ്
                                            @else
                                                Ground Clearance
                                            @endif
                                        </div>
                                        <div class="ic-spec-value">
                                            {{ $motorcycle->details->ground_clearance }} mm
                                        </div>
                                    </div>
                                    <div class="ic-spec-row">
                                        <div class="ic-spec-name">
                                            @if (session('language') == 'Malayalam')
                                                സീറ്റ് ഉയരം
                                            @else
                                                Seat Height
                                            @endif
                                        </div>
                                        <div class="ic-spec-value">
                                            {{ $motorcycle->details->seat_height }} mm
                                        </div>
                                    </div>
                                    <div class="ic-spec-row">
                                        <div class="ic-spec-name">
                                            @if (session('language') == 'Malayalam')
                                                കർബ് മാസ്
                                            @else
                                                Kerb Mass
                                            @endif
                                        </div>
                                        <div class="ic-spec-value">
                                            {{ $motorcycle->details->kerb_mass }} kg
                                        </div>
                                    </div>
                                    <div class="ic-spec-row">
                                        <div class="ic-spec-name">
                                            @if (session('language') == 'Malayalam')
                                                ഫ്യൂവൽ  ടാങ്ക് ശേഷി
                                            @else
                                                Fuel Tank Capacity
                                            @endif
                                        </div>
                                        <div class="ic-spec-value">
                                            {{ $motorcycle->details->fuel_tank_capacity }} L
                                        </div>
                                    </div>
                                </div>
                                <div class="ic-spec-section">
                                    <h4 class="ic-spec-section-title">
                                        @if (session('language') == 'Malayalam')
                                            സസ്പെൻഷൻ
                                        @else
                                            Suspension
                                        @endif
                                    </h4>
                                    <div class="ic-spec-row">
                                        <div class="ic-spec-name">
                                            @if (session('language') == 'Malayalam')
                                                മുന്നിൽ
                                            @else
                                                Front
                                            @endif
                                        </div>
                                        <div class="ic-spec-value">
                                            @if (session('language') == 'Malayalam')
                                                {{ $motorcycle->details->front_suspension_ml }}
                                            @else
                                                {{ $motorcycle->details->front_suspension_en }}
                                            @endif
                                        </div>
                                    </div>
                                    <div class="ic-spec-row">
                                        <div class="ic-spec-name">
                                            @if (session('language') == 'Malayalam')
                                                പുറകിലുള്ള
                                            @else
                                                Rear
                                            @endif
                                        </div>
                                        <div class="ic-spec-value">
                                            @if (session('language') == 'Malayalam')
                                                {{ $motorcycle->details->rear_suspension_ml }}
                                            @else
                                                {{ $motorcycle->details->rear_suspension_en }}
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="ic-spec-section">
                                    <h4 class="ic-spec-section-title">
                                        @if (session('language') == 'Malayalam')
                                            ടയർ വലിപ്പം
                                        @else
                                            Tyre Size
                                        @endif
                                    </h4>
                                    <div class="ic-spec-row">
                                        <div class="ic-spec-name">
                                            @if (session('language') == 'Malayalam')
                                                മുന്നിൽ
                                            @else
                                                Front
                                            @endif
                                        </div>
                                        <div class="ic-spec-value">
                                            {{ $motorcycle->details->front_tyre }}
                                        </div>
                                    </div>
                                    <div class="ic-spec-row">
                                        <div class="ic-spec-name">
                                            @if (session('language') == 'Malayalam')
                                                പുറകിലുള്ള
                                            @else
                                                Rear
                                            @endif
                                        </div>
                                        <div class="ic-spec-value">
                                            {{ $motorcycle->details->rear_tyre }}
                                        </div>
                                    </div>
                                </div>
                                <div class="ic-spec-section">
                                    <h4 class="ic-spec-section-title">
                                        @if (session('language') == 'Malayalam')
                                            ബ്രേക്കുകൾ
                                        @else
                                            Brakes
                                        @endif
                                    </h4>
                                    <div class="ic-spec-row">
                                        <div class="ic-spec-name">
                                            @if (session('language') == 'Malayalam')
                                                മുന്നിൽ
                                            @else
                                                Front
                                            @endif
                                        </div>
                                        <div class="ic-spec-value">
                                            @if (session('language') == 'Malayalam')
                                                {{ $motorcycle->details->front_brakes_ml }}
                                            @else
                                                {{ $motorcycle->details->front_brakes_en }}
                                            @endif
                                        </div>
                                    </div>
                                    <div class="ic-spec-row">
                                        <div class="ic-spec-name">
                                            @if (session('language') == 'Malayalam')
                                                പുറകിലുള്ള
                                            @else
                                                Rear
                                            @endif
                                        </div>
                                        <div class="ic-spec-value">
                                            @if (session('language') == 'Malayalam')
                                                {{ $motorcycle->details->rear_brakes_ml }}
                                            @else
                                                {{ $motorcycle->details->rear_brakes_en }}
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="ic-spec-section">
                                    <h4 class="ic-spec-section-title">
                                        @if (session('language') == 'Malayalam')
                                            ഇലക്ട്രിക്കൽ
                                        @else
                                            Electrical
                                        @endif
                                    </h4>
                                    <div class="ic-spec-row">
                                        <div class="ic-spec-name">
                                            @if (session('language') == 'Malayalam')
                                                ബാറ്ററി
                                            @else
                                                Battery
                                            @endif
                                        </div>
                                        <div class="ic-spec-value">
                                            @if (session('language') == 'Malayalam')
                                                {{ $motorcycle->details->battery_ml }}
                                            @else
                                                {{ $motorcycle->details->battery_en }}
                                            @endif
                                        </div>
                                    </div>
                                    <div class="ic-spec-row">
                                        <div class="ic-spec-name">
                                            @if (session('language') == 'Malayalam')
                                                ഹെഡ്ലൈറ്റ്
                                            @else
                                                Headlight
                                            @endif
                                        </div>
                                        <div class="ic-spec-value">
                                            {{ $motorcycle->details->headlight }}
                                        </div>
                                    </div>
                                    <div class="ic-spec-row">
                                        <div class="ic-spec-name">
                                            @if (session('language') == 'Malayalam')
                                                ടെയിൽ ലൈറ്റ്
                                            @else
                                                Tail light
                                            @endif
                                        </div>
                                        <div class="ic-spec-value">
                                            {{ $motorcycle->details->taillight }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <!-- Product review -->
                        <div class="tab-pane fade" id="brochure" role="tabpanel">
                            <div class="ic-product-review">
                                <div class="ic-review-list">
                                    <a class="ic-custom-btn-rvs secondary-hover disable-shadow" target="_blank" href="{{ asset('uploads/motorcycles/brochures/' . $motorcycle->details->brochure) }}">
                                        @if(session('language') == 'Malayalam')
                                            {{ $motorcycle->name_ml }} ബ്രോഷർ ഡൗൺലോഡ് ചെയ്യുക
                                        @else
                                            Download {{ $motorcycle->name_en }} Brochure
                                        @endif

                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="video" role="tabpanel">
                            <div class="ic-product-review">
                                <div class="ic-review-list">
                                    <iframe width="560" height="315" src="{{ $motorcycle->details->video }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection