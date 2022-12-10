<section class="ic-footer style-two">

    <!-- Footer top -->
    <div class="ic-footer-top ic-padding-120">
        <div class="container">
            <div class="row">

                <!-- Footer widget -->
                <div class="col-lg-5 col-md-12">
                    <div class="ic-footer-item">
                        <h3 class="ic-footer-widget-title">
                            @if(session('language') == 'Malayalam')
                                {{ $site->name_ml }}
                            @else
                                {{ $site->name_en }}
                            @endif
                        </h3>
                        <div class="ic-footer-widget-content">
                            <div class="ic-footer-widget-about">
                                <p>
                                    @if(session('language') == 'Malayalam')
                                        {{ $site->description_ml }}
                                    @else
                                        {{ $site->description_en }}
                                    @endif
                                </p>
                                <ul class="ic-social-profile">
                                    <li>
                                        @if($site->facebook)
                                            <a target="_blank" href="{{ $site->facebook }}"><i class="fab fa-facebook-f"></i></a>
                                        @endif
                                    </li>
                                    <li>
                                        @if($site->instagram)
                                            <a target="_blank" href="{{ $site->instagram }}"><i class="fab fa-instagram"></i></a>
                                        @endif
                                    </li>
                                    <li>
                                        @if($site->youtube)
                                            <a target="_blank" href="{{ $site->youtube }}"><i class="fab fa-youtube"></i></a>
                                        @endif
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Footer widget -->
                <div class="col-lg-3 col-md-6">
                    <div class="ic-footer-item">
                        <h3 class="ic-footer-widget-title">
                            @if(session('language') == 'Malayalam')
                                ലിങ്കുകൾ
                            @else
                                Links
                            @endif
                        </h3>
                        <div class="ic-footer-widget-content">
                            <ul class="ic-footer-menu">
                                <li><a href="{{ route('home') }}">
                                    @if(session()->get('language') == 'Malayalam')
                                        ഹോം
                                    @else
                                        Home
                                    @endif
                                </a></li>
                                <li><a href="{{ route('about') }}">
                                    @if(session()->get('language') == 'Malayalam')
                                        ഞങ്ങളേക്കുറിച്ച്
                                    @else
                                        About Us
                                    @endif    
                                </a></li>
                                <li><a href="{{ route('motorcycles') }}">
                                    @if(session()->get('language') == 'Malayalam')
                                        മോട്ടോർസൈക്കിളുകളും ബൈക്കുകളും
                                    @else
                                        Motorcycles and Bikes
                                    @endif                                    
                                </a></li>
                                <li><a href="{{ route('accessories') }}">
                                    @if(session()->get('language') == 'Malayalam')
                                        ആക്സസറികൾ
                                    @else
                                        Accessories
                                    @endif   
                                </a></li>
                                <li><a href="{{ route('workshop') }}">
                                    @if(session()->get('language') == 'Malayalam')
                                        വർക്ക്ഷോപ്പ്
                                    @else
                                        Workshop
                                    @endif    
                                </a></li>
                                <li><a href="{{ route('contact') }}">
                                    @if(session()->get('language') == 'Malayalam')
                                        ബന്ധപ്പെടുക
                                    @else
                                        Contact
                                    @endif    
                                </a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Footer widget -->
                <div class="col-lg-4 col-md-6">
                    <div class="ic-footer-item">
                        <h3 class="ic-footer-widget-title">
                            @if(session()->get('language') == 'Malayalam')
                                ബന്ധപ്പെടുക
                            @else
                                Contact
                            @endif    
                        </h3>
                        <div class="ic-footer-widget-content">
                            <div class="ic-contact-item">
                                <h6 class="ic-contact-title">                                    
                                    @if(session()->get('language') == 'Malayalam')
                                        വിലാസം
                                    @else
                                        Address
                                    @endif    
                                </h6>
                                <p class="ic-contact-info">
                                    {{ $site->address }}
                                </p>
                            </div>
                            <div class="ic-contact-item">
                                <h6 class="ic-contact-title">
                                    @if(session()->get('language') == 'Malayalam')
                                        ഫോൺ
                                    @else
                                        Phone
                                    @endif    
                                </h6>
                                <p class="ic-contact-info">
                                    <a href="tel:{{ $site->phone }}">
                                        {{ $site->phone }}
                                    </a>
                                </p>
                            </div>
                            <div class="ic-contact-item">
                                <h6 class="ic-contact-title">
                                    @if(session()->get('language') == 'Malayalam')
                                        ഇമെയിൽ
                                    @else
                                        Email
                                    @endif  
                                </h6>
                                <p class="ic-contact-info">
                                    <a href="mailto:{{ $site->email }}">
                                        {{ $site->email }}
                                    </a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer bottom -->
    <div class="ic-footer-bottom ic-padding-40">
        <div class="container">
            <div class="ic-copyright-text text-center">
                <p>
                    © 
                    
                    @if(session('language') == 'Malayalam')
                        പകർപ്പവകാശം 
                    @else
                        Copyright
                    @endif
                    
                    {{ date('Y') }} <a href="{{ route('home') }}">

                    @if(session('language') == 'Malayalam')
                        {{ $site->name_ml }}
                    @else
                        {{ $site->name_en }}
                    @endif

                </a></p>
            </div>
        </div>
    </div>
</section>