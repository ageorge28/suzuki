@extends('frontend.layouts.app')

@section('title')
    @if(session('language') == 'Malayalam')
        {{ $site->name_ml }} | ഞങ്ങളേക്കുറിച്ച്
    @else
        {{ $site->name_en }} | About Us
    @endif
@endsection

@section('content')

    <!-- Google Map Section Start Here -->
    <div class="ic-gmaps-section">
        <div class="ic-map-area">
            <iframe src="{{ $site->map }}" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>
    </div>
    <!-- Google Map Section Ending Here -->

    <!-- Contact section start here -->
    <section class="ic-contact-section ic-padding-100">

        <div class="container">

            @if(session('message'))
            <div class="row">
                <div class="col-12">
                    <div class="alert alert-success">
                        {{ session('message') }}                            
                    </div>        
                </div>
            </div>
            @endif

            <br />

            <div class="row">
                <div class="col-lg-6 col-md-12">

                    <!-- Contact information -->
                    <div class="ic-contact-information wow fadeInRight" data-wow-delay="0.2s">



                        <h3 class="ic-contact-info-title">
                            @if(session('language') == 'Malayalam')
                                ബന്ധപ്പെടാനുള്ള വിശദാംശങ്ങൾ
                            @else
                                Contact Details                                
                            @endif                            
                        </h3>

                        <!-- Contact item -->
                        <div class="ic-contact-item">
                            <h6 class="ic-contact-title">
                                @if(session('language') == 'Malayalam')
                                    വിലാസം:
                                @else
                                    Address:                                
                                @endif
                            </h6>
                            <p class="ic-contact-info">{{ $site->address }}</p>
                        </div>

                        <!-- Contact item -->
                        <div class="ic-contact-item">
                            <h6 class="ic-contact-title">
                                @if(session('language') == 'Malayalam')
                                    ഇമെയിൽ:
                                @else
                                    Email:                          
                                @endif                                
                            </h6>
                            <p class="ic-contact-info">
                                Main: <a href="mailto:{{ $site->email }}">{{ $site->email }}</a>
                                <br />
                                Sales: <a href="mailto:{{ $site->sales_email }}">{{ $site->sales_email }}</a> 
                                <br />
                                Service: <a href="mailto:{{ $site->service_email }}">{{ $site->service_email }}</a> 
                            </p>
                        </div>

                        <!-- Contact item -->
                        <div class="ic-contact-item">
                            <h6 class="ic-contact-title">
                                @if(session('language') == 'Malayalam')
                                    ഫോൺ:
                                @else
                                    Phone:                        
                                @endif       
                            </h6>
                            <p class="ic-contact-info">
                                Sales: <a href="tel:{{ $site->sales_phone }}">{{ $site->sales_phone }}</a>
                                <br />
                                Service: <a href="tel:{{ $site->service_phone }}">{{ $site->service_phone }}</a>
                                <br />
                                Mobile: <a href="tel:{{ $site->phone1 }}">{{ $site->phone1 }}</a>, <a href="tel:{{ $site->phone2 }}">{{ $site->phone2 }}</a>
                            </p>
                        </div>

                        <!-- Contact item -->
                        <div class="ic-contact-item ic-emergency">
                            <h6 class="ic-contact-title">
                                @if(session('language') == 'Malayalam')
                                    ഏത് അന്വേഷണത്തിനും
                                @else
                                    For Any Enquiry                        
                                @endif                                       
                            </h6>
                            <p class="ic-contact-info"><a href="tel:+{{ $site->phone }}">Call: {{ $site->phone }}</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">

                    <!-- Contact Form -->
                    <div class="ic-contact-form-main wow fadeInLeft" data-wow-delay="0.2s">
                        <h3 class="ic-contact-form-title">
                            @if(session('language') == 'Malayalam')
                                ഞങ്ങൾക്ക് സന്ദേശം അയയ്‌ക്കുക
                            @else
                                Message Us                    
                            @endif                              
                        </h3>
                        <form class="ic-contact-form" action="{{ route('contact.send') }}" method="POST">
                            @csrf
                            <div class="ic-form-row">
                                <div class="col-lg-6">
                                    <input type="text" name="name" id="name" placeholder="Name" class="ic-form-control" required>
                                    @error('name')
                                        <div class="text-danger"><small>{{ $message }}</small></div>
                                    @enderror
                                </div>
                                <div class="col-lg-6">
                                    <input type="text" name="phone" id="phone" placeholder="Phone" class="ic-form-control" required>
                                    @error('phone')
                                        <div class="text-danger"><small>{{ $message }}</small></div>
                                    @enderror
                                </div>
                            </div>
                            <div class="ic-form-row">
                                <div class="col-lg-12">
                                    <input type="email" name="email" id="email" placeholder="Email Address" class="ic-form-control">
                                </div>
                            </div>
                            <textarea placeholder="Write Something Here" id="message" name="message" class="ic-form-control" required rows="3"></textarea>
                            @error('message')
                                <div class="text-danger"><small>{{ $message }}</small></div>
                            @enderror
                            <button type="submit" class="ic-custom-btn-rvs">Send Now</button>
                        </form>
                        <br />
                    </div>
                </div>
            </div>

            <br />

            <div class="ic-contact-information">
                <h3 class="ic-contact-info-title">
                    @if(session('language') == 'Malayalam')
                        ശാഖകൾ
                    @else
                        Branches                               
                    @endif                            
                </h3>
                <div class="row">
                    @foreach($branches as $branch)
                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <div class="ic-contact-information">
                            <div class="ic-contact-item">
                                <p class="ic-contact-info">
                                    <strong>{{ $branch->town }}</strong>
                                    <br />
                                    {{ $branch->name }}
                                    <br />
                                    {{ $branch->address }}
                                    <br />
                                    Pin: {{ $branch->pincode }}
                                    <br />
                                    Phone: <a href="tel:+91{{ $branch->phone }}">{{ $branch->phone }}</a>
                                </p>
                            </div>
                        </div>

                    </div>
                    @endforeach

                </div>

            </div>


        </div>
    </section>
    <!-- Contact section start here -->

@endsection