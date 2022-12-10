@extends('frontend.layouts.app')

@section('title')
    @if(session('language') == 'Malayalam')
        {{ $site->name_ml }} | {{ $category->name_ml }}
    @else
        {{ $site->name_en }} | {{ $category->name_en }}
    @endif
@endsection

@section('content')

<section class="ic-breadcrumb style-three">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <h3 class="ic-breadcrumb-title">
                    @if(session()->get('language') == 'Malayalam')
                        {{ is_null($category) ? 'മോട്ടോർസൈക്കിളുകളും ബൈക്കുകളും' : $category->name_ml }}
                    @else
                        {{ is_null($category) ? 'Motorcycles and Bikes' : $category->name_en }}                           
                    @endif
                </h3>
                <ul>
                    <li>
                        <a href="{{ route('home') }}">
                            @if(session()->get('language') == 'Malayalam')
                                ഹോം
                            @else
                                Home
                            @endif
                        </a>
                    </li>
                    <li>
                        @if(session()->get('language') == 'Malayalam')
                            {{ $category->name_ml }}
                        @else
                            {{ $category->name_en }}                           
                        @endif
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="ic-product ic-padding-120">
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
        <div class="row ic-flex-md-column-reverse">

            <!-- Product Sidebar -->
            <div class="col-lg-2 col-mg-2 col-sm-12">
                <aside class="ic-product-sidebar">

                    
                    <!-- Product Widget -->
                    <div class="ic-product-widget">
                        <h3 class="ic-widget-title">
                            @if(session('language') == 'Malayalam')
                                വിഭാഗങ്ങൾ
                            @else
                                Categories
                            @endif
                        </h3>
                        <div class="ic-widget-content">
                            <div id="accordion" class="accordion">
                                <div class="card border-0">
                                    <div class="card-header">
                                        <h6 class="mb-0">
                                            <a class="link-title" {{ request()->is('*' . $bikes->slug) ? ' style=color:#D23B3B ' : '' }} href="{{ route('motorcycles.category', $bikes->slug) }}" aria-expanded="true">
                                                @if(session('language') == 'Malayalam')
                                                    {{ $bikes->name_ml }}
                                                @else
                                                    {{ $bikes->name_en }}
                                                @endif
                                            </a>
                                        </h6>
                                    </div>
                                    <div id="{{ $bikes->slug }}" class="" data-parent="#accordion" style="">
                                        <div class="card-body">
                                            <ul class="list-unstyled">
                                                @foreach($bikes_subcategories as $subcategory)
                                                    <li> <a {{ request()->is('*' . $subcategory->slug) ? ' style=color:#D23B3B ' : '' }} href="{{ route('motorcycles.category', $subcategory->slug) }}">
                                                        @if(session('language') == 'Malayalam')
                                                            {{ $subcategory->name_ml }}
                                                        @else
                                                            {{ $subcategory->name_en }}
                                                        @endif                                                
                                                    </a></li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="card border-0">
                                    <div class="card-header">
                                        <h6 class="mb-0">
                                            <a class="link-title" {{ request()->is('*' . $scooters->slug) ? ' style=color:#D23B3B ' : '' }} href="{{ route('motorcycles.category', $scooters->slug) }}" aria-expanded="true">
                                                @if(session('language') == 'Malayalam')
                                                    {{ $scooters->name_ml }}
                                                @else
                                                    {{ $scooters->name_en }}
                                                @endif
                                            </a>
                                        </h6>
                                    </div>
                                    <div id="{{ $scooters->slug }}" class="" data-parent="#accordion" style="">
                                        <div class="card-body">
                                            <ul class="list-unstyled">
                                                @foreach($scooters_subcategories as $subcategory)
                                                    <li> <a {{ request()->is('*' . $subcategory->slug) ? ' style=color:#D23B3B ' : '' }} href="{{ route('motorcycles.category', $subcategory->slug) }}">
                                                        @if(session('language') == 'Malayalam')
                                                            {{ $subcategory->name_ml }}
                                                        @else
                                                            {{ $subcategory->name_en }}
                                                        @endif                                                
                                                    </a></li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

   
                </aside>
            </div>
            <div class="col-lg-10 col-mg-10 col-sm-12 ic-mb-md-40">
                {{-- <div class="ic-product-mobile-search">
                    <h3 class="ic-widget-title">Search Bike</h3>
                    <div class="ic-widget-content">
                        <form class="ic-product-search">
                            <input type="text" name="search" placeholder="Search Bike Here">
                            <i class="icofont-search"></i>
                        </form>
                    </div>
                </div> --}}
                <div class="ic-product-head" style="float:right" >
                    {{-- <span class="text-dark">Total {{ $motorcycles->count() }}</span> --}}
                    {{-- <ul class="nav nav-tabs ic-product-view" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link ic-product-grid-view active" id="grid-tab" data-toggle="tab" href="#grid-view" role="tab" aria-controls="grid-view" aria-selected="true">
                                <i class="fas fa-th"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link ic-product-list-view" id="list-tab" data-toggle="tab" href="#list-view" role="tab" aria-controls="list-view" aria-selected="false">
                                <i class="fas fa-list-ul"></i>
                            </a>
                        </li>
                    </ul> --}}
                </div>
                <div class="tab-content">
                    <div class="tab-pane fade active show" id="grid-view" role="tabpanel" aria-labelledby="grid-tab">
                        <div class="ic-shop-product ic-grid-view row">

                            @forelse($motorcycles as $motorcycle)
                            <!-- Product item -->
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="ic-product-item">
                                    <div class="ic-product-thumbnail">
                                        <a href="{{ route('motorcycles.show', $motorcycle->slug) }}">
                                            <img src="{{ asset('uploads/motorcycles/thumbnails/' . $motorcycle->thumbnail) }}" alt="{{ $seo->alt }}">
                                        </a>
                                    </div>
                                    <div class="ic-product-content">

                                        <div class="ic-product-content-inner">

                                            <h3 class="ic-product-item-title">
                                                <a href="{{ route('motorcycles.show', $motorcycle->slug) }}">
                                                    @if(session('language') == 'Malayalam')
                                                        {{ $motorcycle->name_ml }}
                                                    @else
                                                        {{ $motorcycle->name_en }}
                                                    @endif
                                                </a>
                                            </h3>
                                            {{-- <h4 class="ic-product-item-price">$3,588</h4> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @empty
                                No motorcycles found.
                            @endforelse

                        </div>
                    </div>
                    <div class="tab-pane fade" id="list-view" role="tabpanel" aria-labelledby="list-tab">
                        <div class="ic-shop-product ic-list-view row">

                            @foreach($motorcycles as $motorcycle)
                            <!-- Product item -->
                            <div class="col-12">
                                <div class="ic-product-item">
                                    <div class="ic-product-thumbnail">
                                        <a href="{{ route('motorcycles.show', $motorcycle->slug) }}">
                                            <img src="{{ asset('uploads/motorcycles/thumbnails/' . $motorcycle->thumbnail) }}" alt="{{ $seo->alt }}">
                                        </a>
                                    </div>
                                    <div class="ic-product-content">
                                        <div class="ic-product-content-inner">

                                            <h3 class="ic-product-item-title">
                                                <a href="{{ route('motorcycles.show', $motorcycle->slug) }}">
                                                    @if(session('language') == 'Malayalam')
                                                        {{ $motorcycle->name_ml }}
                                                    @else
                                                        {{ $motorcycle->name_en }}
                                                    @endif
                                                </a>
                                            </h3>
                                            {{-- <h4 class="ic-product-item-price">$3,588</h4> --}}
                                        </div>

                                    </div>
                                </div>
                            </div>

                            @endforeach


                        </div>
                    </div>
                </div>

                <!-- Pagination -->
                <div class="text-center">
 

                    {{ $motorcycles->links('frontend.pagination') }}
                </div>
            </div>
        </div>
    </div>

 </section>


@endsection