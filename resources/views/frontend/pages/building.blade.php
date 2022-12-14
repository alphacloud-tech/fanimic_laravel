@extends("frontend.home_master")



@section("home_frontend")

@php
    $sliders = App\Models\Home\HomeSlider::latest()->paginate(4);

    $abouts = App\Models\Home\HomeAbout::findOrFail(1);
    $services = App\Models\Home\HomeService::all();
    $testimonials = App\Models\Home\HomeTestimonial::latest()->get();
    $multiImages = App\Models\Home\MultiImage::latest()->paginate(6);
@endphp

@section('title')
    {{ $abouts->coy_name }} | Building Construction
@endsection

    <!-- page-title -->
    {{-- <div style='background-image: url("{% static 'fanimic/images/farm/building-8.jpg' %}")'; class="ttm-page-title-row"> --}}
    <div style='background-image: url("{{ asset('frontend/images/farm/building-8.jpg') }}")'; class="ttm-page-title-row">
        <div class="section-overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12"> 
                    <div style="background-color:rgb(2,13,38)" class="title-box">
                        <div class="page-title-heading">
                            <h1 class="title">Building Construction</h1>
                        </div>
                        <div class="breadcrumb-wrapper">
                            <span>
                                <a title="Homepage" href="{{ url('/') }}"><i class="fa fa-home"></i>&nbsp;&nbsp;Home</a>
                            </span>
                            <span class="ttm-bread-sep"> &nbsp; ⁄ &nbsp;</span>
                            <span><span>Building Construction</span></span>
                        </div>  
                    </div>
                </div>  
            </div> 
        </div>                  
    </div><!-- page-title end-->


    <!--site-main start-->
    <div class="site-main">

        <!-- ttm-sidebar -->
        <section class="ttm-sidebar ttm-bgcolor-grey clearfix">
            <div class="container">
                <!-- row -->
                <div class="row ttm-sidebar-left">
                    <div class="col-lg-9 content-area">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="mb-35">
                                    <h3>Building Construction</h3>
                                    <p>
                                        Into the world of construction Fanimic Global Resources Building Contracting 
                                        embarked modestly and today it’s an established name to reckon 
                                        within country. Fanimic Global Resources Building Contracting, with its eye 
                                        for detail and precision has built a niche in the market of construction
                                        companies in country with an impressive clientele throughout 
                                        the whole region.
                                    </p>
                                    <p>
                                        Our diversified type of experience has allowed us to successfully 
                                        complete a large number of innovative projects for several industries 
                                        such as residential buildings, church buildings and offices buildings. 
                                        Whether you choose a standard 
                                        "box building", or complex custom steel building, we can fulfill your 
                                        needs with professional, experienced engineering staff, state-of-the-art
                                        manufacturing processes and competitive pricing and lead-times.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <!-- portfolio-slide -->
                            <div class="col-lg-12 ttm-boxes-spacing-5px portfolio-slide owl-carousel owl-theme owl-loaded">
                                
                                <div class="ttm-box-col-wrapper">
                                    <!-- featured-item -->
                                    <div class="featured-item featured-portfolio-item">
                                        <div class="featured-thumbnail">
                                            <a href=""> <img class="img-fluid" src="{{ asset('frontend/images/farm/house_p1.jpg') }}" alt="image"></a>
                                            
                                        </div>
                                    </div><!-- featured-item -->
                                </div>
                                <div class="ttm-box-col-wrapper">
                                    <!-- featured-item -->
                                    <div class="featured-item featured-portfolio-item">
                                        <div class="featured-thumbnail">
                                            <a href=""> <img class="img-fluid" src="{{ asset('frontend/images/farm/house_p2.jpg') }}" alt="image"></a>

                                        </div>
                                    </div><!-- featured-item -->
                                </div>
                                <div class="ttm-box-col-wrapper">
                                    <!-- featured-item -->
                                    <div class="featured-item featured-portfolio-item">
                                        <div class="featured-thumbnail">
                                            <a href=""> <img class="img-fluid" src="{{ asset('frontend/images/farm/house_p3.jpg') }}" alt="image"></a>

                                        </div>
                                    </div><!-- featured-item -->
                                </div>
                                <div class="ttm-box-col-wrapper">
                                    <!-- featured-item -->
                                    <div class="featured-item featured-portfolio-item">
                                        <div class="featured-thumbnail">
                                            <a href=""> <img class="img-fluid" src="{{ asset('frontend/images/farm/house-5.jpeg') }}" alt="image"></a>

                                        </div>
                                    </div><!-- featured-item -->
                                </div>
                                <div class="ttm-box-col-wrapper">
                                    <!-- featured-item -->
                                    <div class="featured-item featured-portfolio-item">
                                        <div class="featured-thumbnail">
                                            <a href=""> <img class="img-fluid" src="{{ asset('frontend/images/farm/house-6.jpg') }}" alt="image"></a>

                                        </div>
                                    </div><!-- featured-item -->
                                </div>
                                <div class="ttm-box-col-wrapper">
                                    <!-- featured-item -->
                                    <div class="featured-item featured-portfolio-item">
                                        <div class="featured-thumbnail">
                                            <a href=""> <img class="img-fluid" src="{{ asset('frontend/images/farm/building-4.jpg') }}" alt="image"></a>

                                        </div>
                                    </div><!-- featured-item -->
                                </div>
                            </div>
                            <div class="col-md-8 pr-5 res-767-plr-15">
                                {{-- <img class="img-fluid pb-5" src="{% static 'fanimic/images/farm/house-2.png' %}" alt=""> --}}
                                <img class="img-fluid pb-5" src="{{ asset('frontend/images/farm/house-2.png') }}" alt="">
                                <img class="img-fluid pb-5" src="{{ asset('frontend/images/farm/building-7.jpg') }}" alt="">
                            </div>
                            <div class="col-md-4 pl-0 res-767-plr-15">
                                <img class="img-fluid pb-5" src="{{ asset('frontend/images/farm/house-1.png') }}" alt="">
                                <img class="img-fluid pb-5" src="{{ asset('frontend/images/farm/building-2.jpg') }}" alt="">
                                <img class="img-fluid pb-5" src="{{ asset('frontend/images/farm/house-3.png') }}" alt="">
                                
                            </div>
                        </div>
                        
                    </div>
                    <div class="col-lg-3 sidebar sidebar-left">
                        @include('frontend/body/services_common')
                        <aside class="widget widget-download">
                            <h3 class="widget-title">Our work benefits</h3>
                            <ul class="download">
                                <li><i class="fa fa-check"></i><a href="">Fewer project change orders</a></li>
                                <li><i class="fa fa-check"></i><a href="">Reduced waste</a></li>
                                <li><i class="fa fa-check"></i><a href="">Accurate scheduling</a></li>
                                <li><i class="fa fa-check"></i><a href="">Reduced project errors</a></li>
                                <li><i class="fa fa-check"></i><a href="">Assured coordination among project documents</a></li>
                            </ul>
                        </aside> 
                        <!-- <aside class="widget widget_media_image">
                            <a href="{% url 'contact' %}"><img class="img-fluid" src="{% static 'fanimic/images/banner-image.jpg' %}" alt="banner-image"></a>
                        </aside> -->
                        <aside class="widget contact-widget">
                            <h3 class="widget-title">Get in touch</h3>      
                            <ul class="contact-widget-wrapper">
                                <li><i class="ti ti-mobile"></i>
                                    (+234) 703 373 6586   <br>
                                    <!--(+234) 912 687 4608   <br>-->
                                    <!--(+234) 703 902 7816 <br>-->
                                    +(234) 814 621 2205
                                </li>
                                <li><i class="fa fa-envelope"></i>
                                    <a href="mailto:info@fanimic.com" target="_blank">info@fanimic.com</a> <br>
                                    <a href="mailto:contact@fanimic.com" target="_blank">contact@fanimic.com</a>
                                </li>
                                
                                <li><i class="ti ti-location-pin"></i>25, Ayomide Street, Ijako Sango ota, Ogun State, Nigeria.</li>
                                <li><i class="ti ti-alarm-clock"></i>Mon to Fri - 9:00am to 6:00pm <br>(Sunday Closed)</li>
                            </ul>
                        </aside>

                    </div>
                </div><!-- row end -->
            </div>
        </section>
        <!-- ttm-sidebar end -->

        <!-- service-section_1 start-->
        <section class="ttm-row service-section_1 bg-img11 mt_274 res-991-mt-0 ttm-bgcolor-grey clearfix">
            <div class="container">
                <!-- row -->
                <div class="row">
                    <div class="col-md-1 mt-30 mb-35">
                    </div>
                    <div class="col-md-10 mt-30 mb-35">
                        <h3>Why choose this service</h3>
                        <br>
                        <div class="heading-seperator"><span></span></div>
                        <p>
                            Fanimic Global Resources is one of leading company in building construction,
                            our number one priority is to establish a 
                            relationship with the Owner. We accomplish trust through transparency. 
                            Fanimic Global Resources provides cost information and breakdowns throughout
                                all stages, from concept through completion.
                        </p>
                    </div>
                     <div class="col-md-1 mt-30 mb-35">
                    </div>
                </div><!-- row end -->
                <div class="row row-equal-height">
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <!-- featured-box -->
                        <div class="featured-box style11 mb-60 res-991-mb-0">
                            <div class="featured-icon"> 
                                <i class="flaticon flaticon-factory-4"></i>
                            </div>
                            <div class="ttm-box-image">
                                <div class="process-num">
                                    <span class="number">01</span>
                                </div>
                            </div>
                            <div class="featured-content">
                                <div class="featured-title">
                                    <h5>Great Technology</h5>
                                </div>
                                <div class="featured-desc">
                                    <p>
                                        We have strength and experience in this services 
                                        which allowed in successfully delivering projects 
                                        to number of clients
                                    </p>
                                </div>
                            </div>
                        </div><!-- featured-box end-->
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <!-- featured-box -->
                        <div class="featured-box style11 mt-60 res-991-mt-0">
                            <div class="featured-icon"> 
                                <i class="flaticon flaticon-robot-arm"></i>
                            </div>
                            <div class="ttm-box-image">
                                <div class="process-num">
                                    <span class="number">02</span>
                                </div>
                            </div>
                            <div class="featured-content">
                                <div class="featured-title">
                                    <h5>Delivery On Time</h5>
                                </div>
                                <div class="featured-desc">
                                    <p>
                                        We have strength and experience in this services 
                                        which allowed in successfully delivering projects 
                                        to number of clients
                                    </p>
                                </div>
                            </div>
                        </div><!-- featured-box end-->
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <!-- featured-box -->
                        <div class="featured-box style11 mb-60 res-991-mb-0">
                            <div class="featured-icon"> 
                                <i class="flaticon flaticon-drilling"></i>
                            </div>
                            <div class="ttm-box-image">
                                <div class="process-num">
                                    <span class="number">03</span>
                                </div>
                            </div>
                            <div class="featured-content">
                                <div class="featured-title">
                                    <h5>Certified Engineers</h5>
                                </div>
                                <div class="featured-desc">
                                    <p>
                                        We have strength and experience in this services 
                                        which allowed in successfully delivering projects 
                                        to number of clients
                                    </p>
                                </div>
                            </div>
                        </div><!-- featured-box end-->
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <!-- featured-box -->
                        <div class="featured-box style11 mt-60 res-991-mt-0">
                            <div class="featured-icon"> 
                                <i class="flaticon flaticon-stock"></i>
                            </div>
                            <div class="ttm-box-image">
                                <div class="process-num">
                                    <span class="number">04</span>
                                </div>
                            </div>
                            <div class="featured-content">
                                <div class="featured-title">
                                    <h5>Best Branding</h5>
                                </div>
                                <div class="featured-desc">
                                    <p>
                                        We have strength and experience in this services 
                                        which allowed in successfully delivering projects 
                                        to number of clients
                                    </p>
                                </div>
                            </div>
                        </div><!-- featured-box end-->
                    </div>
                </div><!-- row end-->
            </div>
        </section>
        <!-- service-section_1 end -->
        
    </div><!--site-main end-->

    <br><br>
    @endsection
   