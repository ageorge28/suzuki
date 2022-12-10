@extends('frontend.layouts.app')

@section('title')
    @if(session('language') == 'Malayalam')
        {{ $site->name_ml }} | ആക്സസറികൾ
    @else
        {{ $site->name_en }} | Accessories
    @endif
@endsection

@section('content')

<section class="ic-breadcrumb style-three">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <h3 class="ic-breadcrumb-title">
                    @if(session()->get('language') == 'Malayalam')
                        ആക്സസറികൾ
                    @else
                        Accessories                           
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
                            ആക്സസറികൾ
                        @else
                            Accessories                           
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
                                            <a class="link-title" {{ request()->is('accessories') ? ' style=color:#D23B3B ' : '' }} href="{{ route('accessories') }}" aria-expanded="true">
                                                @if(session('language') == 'Malayalam')
                                                    എല്ലാ വിഭാഗങ്ങളും
                                                @else 
                                                    All Categories
                                                @endif
                                            </a>
                                        </h6>
                                        @foreach($subcategories as $subcategory)
                                        <h6 class="mb-0">                                          
                                            <a class="link-title" href="{{ route('accessories.subcategory', $subcategory->slug) }}" aria-expanded="true">
                                                @if(session('language') == 'Malayalam')
                                                    {{ $subcategory->name_ml }}
                                                @else
                                                    {{ $subcategory->name_en }}
                                                @endif
                                            </a>
                                        </h6>
                                        @endforeach
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                </aside>
            </div>
            <div class="col-lg-10 col-mg-10 col-sm-12 ic-mb-md-40">

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

                            @forelse($accessories as $accessory)
                            <!-- Product item -->
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="ic-product-item">
                                    <div class="ic-product-thumbnail">
                                        <a href="#">
                                            <img src="{{ asset('uploads/accessories/images/' . $accessory->image) }}" alt="{{ $seo->alt }}">
                                        </a>
                                    </div>
                                    <div class="ic-product-content">

                                        <div class="ic-product-content-inner">

                                            <h3 class="ic-product-item-title">
                                                <a href="#">
                                                    @if(session('language') == 'Malayalam')
                                                        {{ $accessory->name_ml }}
                                                    @else
                                                        {{ $accessory->name_en }}
                                                    @endif
                                                </a>
                                            </h3>
                                            {{-- <h4 class="ic-product-item-price">$3,588</h4> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @empty
                                No accessories found.
                            @endforelse

                        </div>
                    </div>
                    <div class="tab-pane fade" id="list-view" role="tabpanel" aria-labelledby="list-tab">
                        <div class="ic-shop-product ic-list-view row">

                            @foreach($accessories as $accessory)
                            <!-- Product item -->
                            <div class="col-12">
                                <div class="ic-product-item">
                                    <div class="ic-product-thumbnail">
                                        <a href="#">
                                            <img src="{{ asset('uploads/accessories/images/' . $accessory->image) }}" alt="{{ $seo->alt }}">
                                        </a>
                                    </div>
                                    <div class="ic-product-content">
                                        <div class="ic-product-content-inner">

                                            <h3 class="ic-product-item-title">
                                                <a href="#">
                                                    @if(session('language') == 'Malayalam')
                                                        {{ $accessory->name_ml }}
                                                    @else
                                                        {{ $accessory->name_en }}
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

                    {{ $accessories->links('frontend.pagination') }}
                </div>
            </div>
        </div>
    </div>


</section>


@endsection