<header class="ic-header">

    <!-- Header Top -->
    <div class="ic-header-top">
        <div class="container">
            <div class="row">
                <div class="col-12 ic-header-top-inner">
                    <div class="ic-header-top-left">
                        <!-- Logo -->
                        <a href="{{ route('home') }}" class="ic-logo">
                            <img src="{{ asset('frontend/assets/images/' . $site->logo) }}" alt="{{ $seo->alt }}">
                        </a>
                    </div>
                    <div class="ic-header-top-right">
                        <ul class="ic-header-top-links">

                            <li>
                                <div class="ic-multi-curency">
                                    <div class="ic-select-dropdown">
                                                @if (session()->get('language') == 'Malayalam')
                                                    <a style="color:black" href="{{ route('language.english') }}">English</a>
                                                @else
                                                    <a style="color:black" href="{{ route('language.malayalam') }}">മലയാളം</a>                
                                                @endif
                                    </div>
                                </div>
                            </li>
                            <!-- Header Account -->
                            <li>
                                <div class="ic-header-account">
                                    <div class="ic-header-account-inner">
                                        <i class=""></i>
                                        <span>
                                            @if (session()->get('language') == 'Malayalam')
                                                ഞങ്ങളെ വിളിക്കൂ
                                            @else
                                                Call us 
                                            @endif    
                                            &nbsp;&nbsp;
                                            <a style="color:#D23B3B" href="tel:{{ $site->phone }}"><b>{{ $site->phone }}</b></a>
                                        </span>
                                    </div>

                                </div>
                            </li>

                            <li>
                                <ul class="ic-social-profile">
                                    @if($site->facebook)
                                        <li><a target="_blank" href="{{ $site->facebook }}"><i class="fab fa-facebook-f"></i></a></li>
                                    @endif
                                    @if($site->instagram)
                                        <li><a target="_blank" href="{{ $site->instagram }}"><i class="fab fa-instagram"></i></a></li>
                                    @endif
                                    @if($site->youtube)
                                        <li><a target="_blank" href="{{ $site->youtube }}"><i class="fab fa-youtube"></i></a></li>
                                    @endif
                                </ul>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Header Bottom -->
    <div class="ic-header-bottom">
        <div class="ic-menu-wrapper">
            <div class="container">
                <div class="d-flex justify-content-between align-items-center">
                    <div class="ic-header-bottom-left">
                        <div class="ic-nav-icon">
                            <div class="ic-menu-icon">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </div>
                        <!-- Logo -->
                        <div class="ic-header-logo ic-header-sticky-logo">
                            <a href="{{ route('home') }}" class="ic-logo">
                                <img src="{{ asset('frontend/assets/images/' . $site->logo) }}" alt="{{ $seo->alt }}">
                            </a>
                        </div>
                    </div>
                    <!-- Menu -->
                    <nav class="ic-primary-menu">
                        <div class="ic-menu-area">
                            <div class="ic-main-menu-area">
                                <ul class="ic-main-menu d-flex">
                                    <li class="ic-menu-item active">
                                        <a href="{{ route('home') }}">
                                            @if(session()->get('language') == 'Malayalam')
                                                ഹോം
                                            @else
                                                Home
                                            @endif
                                        </a>
                                    </li>

                                    
                                    <li class="ic-menu-item ic-has-dropdown"">
                                        <a href="{{ route('motorcycles') }}">
                                            @if(session()->get('language') == 'Malayalam')
                                                മോട്ടോർസൈക്കിളുകളും ബൈക്കുകളും
                                            @else
                                                Motorcycles and Bikes
                                            @endif    
                                        </a>
                                        <ul class="ic-dropdown">
                                            <li>
                                                <a href="{{ route('motorcycles.category', $bikes->slug) }}">
                                                    @if(session('language') == 'Malayalam')
                                                        {{ $bikes->name_ml }}
                                                    @else
                                                        {{ $bikes->name_en }}
                                                    @endif
                                                </a>
                                                <ul class="list-unstyled">
                                                    @foreach($bikes_subcategories as $subcategory)
                                                        <li> <a href="{{ route('motorcycles.category', $subcategory->slug) }}">
                                                            @if(session('language') == 'Malayalam')
                                                                {{ $subcategory->name_ml }}
                                                            @else
                                                                {{ $subcategory->name_en }}
                                                            @endif                                                
                                                        </a></li>
                                                    @endforeach
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="{{ route('motorcycles.category', $scooters->slug) }}">
                                                    @if(session('language') == 'Malayalam')
                                                        {{ $scooters->name_ml }}
                                                    @else
                                                        {{ $scooters->name_en }}
                                                    @endif
                                                </a>
                                                <ul class="list-unstyled">
                                                    @foreach($scooters_subcategories as $subcategory)
                                                        <li> <a href="{{ route('motorcycles.category', $subcategory->slug) }}">
                                                            @if(session('language') == 'Malayalam')
                                                                {{ $subcategory->name_ml }}
                                                            @else
                                                                {{ $subcategory->name_en }}
                                                            @endif                                                
                                                        </a></li>
                                                    @endforeach
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="ic-menu-item"><a href="{{ route('accessories') }}">
                                        @if(session()->get('language') == 'Malayalam')
                                            ആക്സസറികൾ
                                        @else
                                            Accessories
                                        @endif    
                                    </a></li>
                                    <li class="ic-menu-item"><a href="{{ route('workshop') }}">
                                        @if(session()->get('language') == 'Malayalam')
                                            വർക്ക്ഷോപ്പ്
                                        @else
                                            Workshop
                                        @endif    
                                    </a></li>
                                    <li class="ic-menu-item"><a href="{{ route('about') }}">
                                        @if(session()->get('language') == 'Malayalam')
                                            ഞങ്ങളേക്കുറിച്ച്
                                        @else
                                            About Us
                                        @endif    
                                    </a></li>
                                    <li class="ic-menu-item">
                                        <a href="{{ route('contact') }}">
                                            @if(session()->get('language') == 'Malayalam')
                                                ബന്ധപ്പെടുക
                                            @else
                                                Contact
                                            @endif    
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                    <div class="ic-header-bottom-right d-flex align-items-center">
                        <div class="ic-header-search">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Mobile Menu -->
    <div class="ic-mobile-menu-main">
        <div class="ic-mobile-menu">
            <div class="ic-nav-close" title="Close">
                <i class="icofont-close"></i>
            </div>
            <div class="ic-mobile-menu-card">
                <a href="index.html" class="d-block text-center pl-5 pr-5">
                    <img src="{{ asset('frontend/assets/images/' . $site->logo) }}" alt="{{ $seo->alt }}">
                </a>
                <div class="ic-mobile-menu-body">
                    <ul class="ic-mobile-menu-list d-flex flex-column">
                        <li class="ic-menu-item active">
                            <a href="{{ route('home') }}">
                                @if(session()->get('language') == 'Malayalam')
                                    ഹോം
                                @else
                                    Home
                                @endif
                            </a>
                        </li>

                        <li class="ic-menu-item ic-has-dropdown">
                            <a href="{{ route('motorcycles') }}">
                                @if(session()->get('language') == 'Malayalam')
                                    മോട്ടോർസൈക്കിളുകളും ബൈക്കുകളും
                                @else
                                    Motorcycles and Bikes
                                @endif    
                            </a>

                            <ul class="ic-dropdown">
                                <li>
                                    <a href="{{ route('motorcycles.category', $bikes->slug) }}">
                                        @if(session('language') == 'Malayalam')
                                            {{ $bikes->name_ml }}
                                        @else
                                            {{ $bikes->name_en }}
                                        @endif
                                    </a>
                                    <ul class="list-unstyled">
                                        @foreach($bikes_subcategories as $subcategory)
                                            <li> <a href="{{ route('motorcycles.category', $subcategory->slug) }}">
                                                @if(session('language') == 'Malayalam')
                                                    {{ $subcategory->name_ml }}
                                                @else
                                                    {{ $subcategory->name_en }}
                                                @endif                                                
                                            </a></li>
                                        @endforeach
                                    </ul>
                                </li>
                                <li>
                                    <a href="{{ route('motorcycles.category', $scooters->slug) }}">
                                        @if(session('language') == 'Malayalam')
                                            {{ $scooters->name_ml }}
                                        @else
                                            {{ $scooters->name_en }}
                                        @endif
                                    </a>
                                    <ul class="list-unstyled">
                                        @foreach($scooters_subcategories as $subcategory)
                                            <li> <a href="{{ route('motorcycles.category', $subcategory->slug) }}">
                                                @if(session('language') == 'Malayalam')
                                                    {{ $subcategory->name_ml }}
                                                @else
                                                    {{ $subcategory->name_en }}
                                                @endif                                                
                                            </a></li>
                                        @endforeach
                                    </ul>
                                </li>
                            </ul>



                        </li>
                        <li class="ic-menu-item">
                            <a href="{{ route('accessories') }}">
                                @if(session()->get('language') == 'Malayalam')
                                    ആക്സസറികൾ
                                @else
                                    Accessories
                                @endif    
                            </a>

                        </li>
                        <li class="ic-menu-item">
                            <a href="{{ route('workshop') }}">
                                @if(session()->get('language') == 'Malayalam')
                                    വർക്ക്ഷോപ്പ്
                                @else
                                    Workshop
                                @endif    
                            </a>

                        </li>
                        <li class="ic-menu-item">
                            <a href="{{ route('about') }}">
                                @if(session()->get('language') == 'Malayalam')
                                    ഞങ്ങളേക്കുറിച്ച്
                                @else
                                    About Us
                                @endif    
                            </a>
                        </li>
                        <li class="ic-menu-item">
                            <a href="{{ route('contact') }}">
                                @if(session()->get('language') == 'Malayalam')
                                    ബന്ധപ്പെടുക
                                @else
                                    Contact
                                @endif    
                            </a>
                        </li>

                        <li>
                            @if (session()->get('language') == 'Malayalam')
                                <a href="{{ route('language.english') }}">English</a>
                            @else
                                <a href="{{ route('language.malayalam') }}">മലയാളം</a>
                            @endif
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>
