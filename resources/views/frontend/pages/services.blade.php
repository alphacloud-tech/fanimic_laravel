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
    {{ $abouts->coy_name }} | Services
@endsection

    <!-- page-title -->
    <div class="ttm-page-title-row">
        <div class="section-overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12"> 
                    <div style="background-color:rgb(2,13,38)"  class="title-box">
                        <div class="page-title-heading">
                            <h1 class="title">Our Services</h1>
                        </div>
                        <div class="breadcrumb-wrapper">
                            <span>
                                <a title="Homepage" href="{{ url('/') }}"><i class="fa fa-home"></i>&nbsp;&nbsp;Home</a>
                            </span>
                            <span class="ttm-bread-sep"> &nbsp; ⁄ &nbsp;</span>
                            <span><span>Services</span></span>
                        </div>  
                    </div>
                </div>
            </div>
        </div>                     
    </div><!-- page-title end-->

    <!--site-main start-->
    <div class="site-main">

        <!-- intro-section -->
        <section class="ttm-row feature-blog-section break-991-colum ttm-bgcolor-white clearfix">
            <div class="container">
                <!-- row -->
                <div class="row row-equal-height">
                    <div class="col-lg-5 col-md-12">
                        <!-- about-img -->
                        <div class="about-img mb-35">
                            <img class="img-fluid" src="{{ asset('frontend/images/farm/building-2.jpg') }}" alt="">
                            
                        </div>
                        <!-- about-img end -->
                    </div>
                    <div class="col-lg-7 col-md-12">
                        <div class="pl-15 pr-10 lg-pl-15 res-991-pl-0">
                            <!-- section title -->
                            <div class="section-title without-seprator clearfix">
                                <h2 class="title">Why<strong>Choose Us !</strong></h2>
                                <p>
                                    Fanimic Global Resources has completed many 
                                    projects in all industrial sectors.
                                </p>
                            </div><!-- section title end -->
                            <!-- row-->
                            <div class="row">
                                <div class="col-md-12 col-sm-12">
                                    <!--featured-box-->
                                    <div class="featured-box style8 left-icon">
                                        <div class="featured-icon"> 
                                            <i class="fa fa-calendar"></i>
                                        </div>
                                        <div class="featured-content">
                                            <div class="featured-title">
                                                <h5>29 Years Of Experienced Company</h5>
                                            </div>
                                        </div>
                                    </div><!-- featured-box end-->
                                    <!--featured-box-->
                                    <div class="featured-box style8 left-icon">
                                        <div class="featured-icon"> 
                                            <i class="flaticon flaticon-industrial-robot"></i>
                                        </div>
                                        <div class="featured-content">
                                            <div class="featured-title">
                                                <h5>Advanced Technology</h5>
                                            </div>
                                        </div>
                                    </div><!-- featured-box end-->
                                    <!--featured-box-->
                                    <div class="featured-box style8 left-icon">
                                        <div class="featured-icon"> 
                                            <i class="flaticon flaticon-worker"></i>
                                        </div>
                                        <div class="featured-content">
                                            <div class="featured-title">
                                                <h5>Expert Engineers</h5>
                                            </div>
                                        </div>
                                    </div><!-- featured-box end-->
                                    <!--featured-box-->
                                    <div class="featured-box style8 left-icon">
                                        <div class="featured-icon"> 
                                            <i class="fa fa-television"></i>
                                        </div>
                                        <div class="featured-content">
                                            <div class="featured-title">
                                                <h5>24/7 Customer Support</h5>
                                            </div>
                                        </div>
                                    </div><!-- featured-box end-->
                                </div>
                            </div><!-- row end-->
                        </div>
                    </div>
                </div><!-- row end -->
            </div>
        </section>
        <!-- intro-section end -->
        
        <!-- ttm-row -->
        {{-- <section class="ttm-row bg-img6 clearfix">
            <div class="container"><!--container-->
                <div class="row"><!--row-->
                    <div class="col-md-12">
                        <div class="pt-80 row-title res-991-pt-0">
                            <!-- section title -->
                            <div class="section-title clearfix">
                                <h2 class="title"><strong>Performance </strong>Where <br>
                                    You Need It!</h2>
                                <p class="style2">
                                    Through a total commitment to providing the highest quality 
                                    services to <br> your project we help you to be successful. 
                                    Our collaborative <br> works approach brings all of the 
                                    services you <br> need from concept to completion into one 
                                    <br> seamless  process.
                                </p>
                                <a class="ttm-btn ttm-btn-size-md ttm-btn-shape-square ttm-btn-style-fill ttm-btn-color-skincolor" href="{% url 'contact' %}">GET A QUOTE</a>
                            </div><!-- section title end -->
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}
        <!-- ttm-row end -->

      <!-- ttm-row -->
        <section class="ttm-row ttm-bgcolor-grey">
            <div class="container">
                <!-- row -->
                <div class="row">
                    <div class="col-lg-9 col-md-12">
                        <!-- section-title -->
                        <div class="section-title clearfix">
                            <h2 class="title">Our <strong>Services </strong></h2>
                            <div class="heading-seperator"><span></span></div>
                            <p>
                                Fanimic Global Resources has 29+ years of experience 
                                with providing wide area of specialty services works 
                                listed below
                            </p>
                        </div><!-- section-title end -->
                    </div>
                    <div class="col-lg-3 col-md-12">
                        <!-- <a class="ttm-btn ttm-btn-size-md ttm-btn-shape-square ttm-btn-style-border ttm-btn-color-black mt-30 mb-35 res-991-mt-0 float-right" href="#">More Articles</a> -->
                    </div>
                </div><!-- row end -->
                <!-- row -->
                <div class="row">
                    <div class="col-md-4">
                        <!-- featured-item -->
                        <div class="featured-item ttm-box-view-topimage">
                            <div class="featured-thumbnail">
                                <img class="img-fluid" src="{{ asset('frontend/images/farm/building-02.jpg') }}" alt="">

                            </div>
                            <!-- featured-box -->
                            <div class="featured-box style5 box-shadow">
                                <div class="featured-icon icon-shape-square icon-size-md"> 
                                    <i class="flaticon flaticon-factory-5"></i>
                                </div>
                                <div class="featured-content">
                                    <div class="featured-title">
                                        <h5>Building Construction</h5>
                                    </div>
                                    <div class="featured-desc">
                                        <p>
                                            Into the world of construction Fanimic Global Resources Building 
                                            Contracting embarked modestly and today it’s an established name to 
                                            reckon within country. 
                                        </p>
                                        <a class="ttm-btn btn-inline ttm-icon-btn-right ttm-btn-color-skincolor" href="{{ route('building.page') }}">Read More<i class="ti ti-arrow-circle-right"></i></a>
                                    </div>
                                </div>
                            </div><!-- featured-box end -->
                        </div><!-- featured-item end-->
                    </div>

                    <div class="col-md-4">
                        <!-- featured-item -->
                        <div class="featured-item ttm-box-view-topimage">
                            <div class="featured-thumbnail">
                                <img class="img-fluid" src="{{ asset('frontend/images/farm/electric/electric-4.jpg') }}" alt="">

                            </div>
                            <!-- featured-box -->
                            <div class="featured-box style5 box-shadow">
                                <div class="featured-icon icon-shape-square icon-size-md"> 
                                    <i class="flaticon flaticon-oil-platform"></i>
                                </div>
                                <div class="featured-content">
                                    <div class="featured-title">
                                        <h5>Electrical Installation</h5>
                                    </div>
                                    <div class="featured-desc">
                                        <p>
                                            Fanimic Electric is a full-service residential & 
                                            commercial electrical contractor in Nigeria, providing 
                                            various electrical services.
                                        </p>
                                        <a class="ttm-btn btn-inline ttm-icon-btn-right ttm-btn-color-skincolor" href="{{ route('eletrical.page') }}">Read More<i class="ti ti-arrow-circle-right"></i></a>
                                    </div>
                                </div>
                            </div><!-- featured-box end -->
                        </div><!-- featured-item end-->
                    </div>

                    <div class="col-md-4">
                        <!-- featured-item -->
                        <div class="featured-item ttm-box-view-topimage">
                            <div class="featured-thumbnail">
                                <img class="img-fluid" src="{{ asset('frontend/images/farm/decorator/decorator-1.jpg') }}" alt="">

                            </div>
                            <!-- featured-box -->
                            <div class="featured-box style5 box-shadow">
                                <div class="featured-icon icon-shape-square icon-size-md"> 
                                    <i class="flaticon flaticon-assembly-line"></i>
                                </div>
                                <div class="featured-content">
                                    <div class="featured-title">
                                        <h5>Interiors &amp; Exteriors Decorator</h5>
                                    </div>
                                    <div class="featured-desc">
                                        <p>
                                            Fanimic Global Resource is your one stop exterior & 
                                            interior decorator service providers. 
                                            We are one of the best in the 
                                            Industry, providing cost-effective and reliable home decorations.
                                        </p>
                                        <a class="ttm-btn btn-inline ttm-icon-btn-right ttm-btn-color-skincolor" href="{{ route('interiors.page') }}">Read More<i class="ti ti-arrow-circle-right"></i></a>
                                    </div>
                                </div>
                            </div><!-- featured-box end -->
                        </div><!-- featured-item end-->
                    </div>
                    <div class="col-md-4">
                        <!-- featured-item -->
                        <div class="featured-item ttm-box-view-topimage">
                            <div class="featured-thumbnail">
                                <img class="img-fluid" src="{{ asset('frontend/images/farm/water-33.jpg') }}" alt="">

                            </div>
                            <!-- featured-box -->
                            <div class="featured-box style5 box-shadow">
                                <div class="featured-icon icon-shape-square icon-size-md"> 
                                    <i class="flaticon flaticon-process"></i>
                                </div>
                                <div class="featured-content">
                                    <div class="featured-title">
                                        <h5>Bottle &amp; Pure Water Manufacturing</h5>
                                    </div>
                                    <div class="featured-desc">
                                        <p>
                                            Fanimic Global Resources produce high water Intensity. 
                                            Our core interest is in providing clean hygienic water 
                                            and innovative water dispensers with accessories and technology 
                                            that supports healthy water drinking habit for all.
                                        </p>
                                        <a class="ttm-btn btn-inline ttm-icon-btn-right ttm-btn-color-skincolor" href="{{ route('manufacturing.page') }}">Read More<i class="ti ti-arrow-circle-right"></i></a>
                                    </div>
                                </div>
                            </div><!-- featured-box end -->
                        </div><!-- featured-item end -->
                    </div>
                    
                    <div class="col-md-4">
                        <!-- featured-item -->
                        <div class="featured-item ttm-box-view-topimage">
                            <div class="featured-thumbnail">
                                <img class="img-fluid" src="{{ asset('frontend/images/farm/agri-2.jpg') }}" alt="">

                            </div>
                            <!-- featured-box -->
                            <div class="featured-box style5 box-shadow">
                                <div class="featured-icon icon-shape-square icon-size-md"> 
                                    <i class="flaticon flaticon-robot-arm"></i>
                                </div>
                                <div class="featured-content">
                                    <div class="featured-title">
                                        <h5>Agriculture</h5>
                                    </div>
                                    <div class="featured-desc">
                                        <p>
                                            We specializes in general agricultural business 
                                            and services including: 
                                            Palm Oil Production, Fumigation and Gardner.
                                            Our main goal is to get major growth in 
                                            agricultural output for better agricultural 
                                            services and products.
                                        </p>
                                        <a class="ttm-btn btn-inline ttm-icon-btn-right ttm-btn-color-skincolor" href="{{ route('agriculture.page') }}">Read More<i class="ti ti-arrow-circle-right"></i></a>
                                    </div>
                                </div>
                            </div><!-- featured-box end -->
                        </div><!-- featured-item end-->
                    </div>
                    <div class="col-md-4">
                        <!-- featured-item -->
                        <div class="featured-item ttm-box-view-topimage">
                            <div class="featured-thumbnail">
                                <img class="img-fluid" src="{{ asset('frontend/images/farm/agri-5.jpg') }}" alt="">

                            </div>
                            <!-- featured-box -->
                            <div class="featured-box style5 box-shadow">
                                <div class="featured-icon icon-shape-square icon-size-md"> 
                                    <i class="flaticon flaticon-factory-3"></i>
                                </div>
                                <div class="featured-content">
                                    <div class="featured-title">
                                        <h5>Fumigation &amp; Pests Control</h5>
                                    </div>
                                    <div class="featured-desc">
                                        <p>
                                            We have strength and experience in this services 
                                            which allowed in successfully delivering projects to
                                            number of clients.
                                        </p>
                                        <a class="ttm-btn btn-inline ttm-icon-btn-right ttm-btn-color-skincolor" href="{{ route('agriculture.page') }}">Read More<i class="ti ti-arrow-circle-right"></i></a>
                                    </div>
                                </div>
                            </div><!-- featured-box end -->
                        </div><!-- featured-item end -->
                    </div>
                </div><!-- row end -->
            </div>
        </section>
        <!-- ttm-row end -->

         <!--blog-section-->
         <section class="ttm-row about-team-section ttm-bgcolor-grey clearfix">
            <div class="container">
                <!-- row -->
                <div class="row res-991-mb-50 ">
                    <div class="col-lg-9 col-md-12">
                        <!-- section-title -->
                        <div class="section-title style2 clearfix">
                            <h2 class="title">Meet Our<strong>Executive Team</strong></h2>
                            <p>
                                Fanimic Global Resources has 29+ years of 
                                experience with providing wide 
                                area of specialty services. 
                            </p>
                        </div><!-- section-title end -->
                    </div>
                    <div class="col-lg-3 col-md-12">
                        <a class="ttm-btn ttm-btn-size-md ttm-btn-shape-square ttm-btn-style-border ttm-btn-color-black mt-30 mb-35 res-991-mtb-0 float-right" href="{{ route('team.page') }}">View All Team</a>
                    </div>
                </div><!-- row end -->
                 <!-- row -->
                <div class="row">
                    <div class="wrap-team team-slide owl-carousel break-991-colum">
                        
                        <!-- featured-team-item -->
                        <div class="featured-item featured-team-item style2 row">
                            <div class="col-lg-5 col-md-6 featured-img-left">
                                <!-- ttm-item-view-leftimage -->
                                <div class="ttm-item-view-leftimage"> 
                                    <div class="featured-thumbnail">
                                        <img class="img-fluid" src="{{ asset('frontend/images/farm/team/0021.png') }}" alt="">

                                    </div> 
                                    <div class="ttm-box-view-overlay ttm-team-box-view-overlay">
                                        <div class="featured-iconbox">
                                            <a href="{{ route('team.page') }}"><i class="ti ti-plus"></i></a>
                                        </div>
                                    </div>
                                </div><!-- ttm-item-view-leftimage end--> 
                            </div>
                            <div class="col-lg-7 col-md-6 featured-img-right ttm-post-content">
                                <div class="content-post content-team-post">
                                    <div class="content-post-desc">
                                        <h5 class="title-post"><a href="{{ route('team.page') }}">Engr Muyiwa Olaniyi</a></h5>
                                        <p class="category">Chief Executive Officer</p>
                                        <ul class="ttm-team-details-list">
                                            <li>
                                                <div class="ttm-team-list-title ttm-textcolor-skincolor">
                                                    <i class="ti ti-mobile"></i> Phone :
                                                </div>
                                                <div class="ttm-team-list-value">
                                                    <a href="tel:+234 703 373 6586" tabindex="0">+234 703 373 6586</a>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="ttm-team-list-title ttm-textcolor-skincolor">
                                                    <i class="ti ti-email"></i> Email :
                                                </div>
                                                <div class="ttm-team-list-value">
                                                    <a href="mailto:olaniyi@fanimic.com" tabindex="0">olaniyi@fanimic.com</a>
                                                </div>
                                            </li>
                                        </ul>
                                        <div class="ttm-social-links-wrapper">
                                            <ul class="social-icons">
                                                <li><a href="" tabindex="-1"><i class="fa fa-facebook"></i></a></li>
                                                <li><a href="" tabindex="-1"><i class="fa fa-twitter"></i></a></li>
                                                <li><a href="" tabindex="-1"><i class="fa fa-linkedin"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- featured-team-item end-->

                        <!-- featured-team-item -->
                        <div class="featured-item featured-team-item style2 row">
                            <div class="col-lg-5 col-md-6 featured-img-left">
                                <!-- ttm-item-view-leftimage -->
                                <div class="ttm-item-view-leftimage"> 
                                    <div class="featured-thumbnail">
                                        <img class="img-fluid" src="{{ asset('frontend/images/farm/team/01.png') }}" alt="">

                                    </div> 
                                    <div class="ttm-box-view-overlay ttm-team-box-view-overlay">
                                        <div class="featured-iconbox">
                                            <a href="{{ route('team.page') }}"><i class="ti ti-plus"></i></a>
                                        </div>
                                    </div>
                                </div><!-- ttm-item-view-leftimage end-->
                            </div>
                            <div class="col-lg-7 col-md-6 featured-img-right ttm-post-content">
                                <div class="content-post content-team-post">
                                    <div class="content-post-desc">
                                        <h5 class="title-post"><a href="{{ route('team.page') }}">Mrs Muyiwa Olumide</a></h5>
                                        <p class="category">Executive Marketing Manager</p>
                                        <ul class="ttm-team-details-list">
                                            <li>
                                                <div class="ttm-team-list-title ttm-textcolor-skincolor">
                                                    <i class="ti ti-mobile"></i> Phone :
                                                </div>
                                                <div class="ttm-team-list-value">
                                                    <a href="tel:+234 814 621 2205" tabindex="0">+234 814 621 2205</a>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="ttm-team-list-title ttm-textcolor-skincolor">
                                                    <i class="ti ti-email"></i> Email :
                                                </div>
                                                <div class="ttm-team-list-value">
                                                    <a href="mailto:olumide@fanimic.com" tabindex="0">olumide@fanimic.com</a>
                                                </div>
                                            </li>
                                        </ul>
                                        <div class="ttm-social-links-wrapper">
                                            <ul class="social-icons">
                                                <li><a href="" tabindex="-1"><i class="fa fa-facebook"></i></a></li>
                                                <li><a href="" tabindex="-1"><i class="fa fa-twitter"></i></a></li>
                                                <li><a href="" tabindex="-1"><i class="fa fa-linkedin"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- featured-team-item end-->

                        <!-- featured-team-item -->
                        <div class="featured-item featured-team-item style2 row">
                            <div class="col-lg-5 col-md-6 featured-img-left">
                                <!-- ttm-item-view-leftimage -->
                                <div class="ttm-item-view-leftimage">
                                    <div class="featured-thumbnail"> 
                                        <img class="img-fluid" src="{{ asset('frontend/images/farm/team/003.png') }}" alt="">

                                    </div> 
                                    <div class="ttm-box-view-overlay ttm-team-box-view-overlay">
                                        <div class="featured-iconbox">
                                            <a href="{{ route('team.page') }}"><i class="ti ti-plus"></i></a>
                                        </div>
                                    </div>
                                </div><!-- ttm-item-view-leftimage end-->
                            </div>
                            <div class="col-lg-7 col-md-6 featured-img-right ttm-post-content">
                                <div class="content-post content-team-post">
                                    <div class="content-post-desc">
                                        <h5 class="title-post"><a href="{{ route('team.page') }}">Adu Adekunle</a></h5>
                                        <p class="category">Client Services Executive</p>
                                        <ul class="ttm-team-details-list">
                                            <li>
                                                <div class="ttm-team-list-title ttm-textcolor-skincolor">
                                                    <i class="ti ti-mobile"></i> Phone :
                                                </div>
                                                <div class="ttm-team-list-value">
                                                    <a href="tel:+234 805 021 9206" tabindex="0">+234 805 021 9206</a>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="ttm-team-list-title ttm-textcolor-skincolor">
                                                    <i class="ti ti-email"></i> Email :
                                                </div>
                                                <div class="ttm-team-list-value">
                                                    <a href="mailto:adekunle@fanimic.com" tabindex="0">adekunle@fanimic.com</a>
                                                </div>
                                            </li>
                                        </ul>
                                        <div class="ttm-social-links-wrapper">
                                            <ul class="social-icons">
                                                <li><a href="" tabindex="-1"><i class="fa fa-facebook"></i></a></li>
                                                <li><a href="" tabindex="-1"><i class="fa fa-twitter"></i></a></li>
                                                <li><a href="" tabindex="-1"><i class="fa fa-linkedin"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- featured-team-item end-->

                        <!-- featured-team-item -->
                        <div class="featured-item featured-team-item style2 row">
                            <div class="col-lg-5 col-md-6 featured-img-left">
                                <!-- ttm-item-view-leftimage -->
                                <div class="ttm-item-view-leftimage"> 
                                    <div class="featured-thumbnail">
                                        <img class="img-fluid" src="{{ asset('frontend/images/farm/team/2.jpg') }}" alt="">

                                    </div> 
                                    <div class="ttm-box-view-overlay ttm-team-box-view-overlay">
                                        <div class="featured-iconbox">
                                            <a href="{{ route('team.page') }}"><i class="ti ti-plus"></i></a>
                                        </div>
                                    </div>
                                </div><!-- ttm-item-view-leftimage end-->
                            </div>
                            <div class="col-lg-7 col-md-6 featured-img-right ttm-post-content">
                                <div class="content-post content-team-post">
                                    <div class="content-post-desc">
                                        <h5 class="title-post"><a href="{{ route('team.page') }}">Agboola Oluwaseyi</a></h5>
                                        <p class="category">Sales Manager</p>
                                        <ul class="ttm-team-details-list">
                                            <li>
                                                <div class="ttm-team-list-title ttm-textcolor-skincolor">
                                                    <i class="ti ti-mobile"></i> Phone :
                                                </div>
                                                <div class="ttm-team-list-value">
                                                    <a href="tel:+234 706 839 4709" tabindex="0">+234 706 839 4709</a>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="ttm-team-list-title ttm-textcolor-skincolor">
                                                    <i class="ti ti-email"></i> Email :
                                                </div>
                                                <div class="ttm-team-list-value">
                                                    <a href="mailto:info@example.com" tabindex="0">oluwaseyi@fanimic.com</a>
                                                </div>
                                            </li>
                                        </ul>
                                        <div class="ttm-social-links-wrapper">
                                            <ul class="social-icons">
                                                <li><a href="" tabindex="-1"><i class="fa fa-dribbble"></i></a></li>
                                                <li><a href="" tabindex="-1"><i class="fa fa-pinterest"></i></a></li>
                                                <li><a href="" tabindex="-1"><i class="fa fa-vimeo"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- featured-team-item end-->

                        <!-- featured-team-item -->
                        <div class="featured-item featured-team-item style2 row">
                            <div class="col-lg-5 col-md-6 featured-img-left">
                                <!-- ttm-item-view-leftimage -->
                                <div class="ttm-item-view-leftimage"> 
                                    <div class="featured-thumbnail">
                                        <img class="img-fluid" src="{{ asset('frontend/images/farm/team/3.jpg') }}" alt="">

                                    </div>
                                    <div class="ttm-box-view-overlay ttm-team-box-view-overlay">
                                        <div class="featured-iconbox">
                                            <a href="{{ route('team.page') }}"><i class="ti ti-plus"></i></a>
                                        </div>
                                    </div>
                                </div><!-- ttm-item-view-leftimage end-->
                            </div> 
                            <div class="col-lg-7 col-md-6 featured-img-right ttm-post-content">
                                <div class="content-post content-team-post">
                                    <div class="content-post-desc">
                                        <h5 class="title-post"><a href="{{ route('team.page') }}">Ogunbiyi Michael</a></h5>
                                        <p class="category">Social Media Marketer</p>
                                        <ul class="ttm-team-details-list">
                                            <li>
                                                <div class="ttm-team-list-title ttm-textcolor-skincolor">
                                                    <i class="ti ti-mobile"></i> Phone :
                                                </div>
                                                <div class="ttm-team-list-value">
                                                    <a href="tel:+234 814 253 3858" tabindex="0">+234 814 253 3858</a>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="ttm-team-list-title ttm-textcolor-skincolor">
                                                    <i class="ti ti-email"></i> Email :
                                                </div>
                                                <div class="ttm-team-list-value">
                                                    <a href="mailto:michael@fanimic.com" tabindex="0">michael@fanimic.com</a>
                                                </div>
                                            </li>
                                        </ul>
                                        <div class="ttm-social-links-wrapper">
                                            <ul class="social-icons">
                                                <li><a href="" tabindex="-1"><i class="fa fa-twitter"></i></a></li>
                                                <li><a href="" tabindex="-1"><i class="fa fa-youtube-play"></i></a></li>
                                                <li><a href="" tabindex="-1"><i class="fa fa-google-plus"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- featured-team-item end-->

                        <!-- featured-team-item -->
                        <div class="featured-item featured-team-item style2 row">
                            <div class="col-lg-5 col-md-6 featured-img-left">
                                <!-- ttm-item-view-leftimage -->
                                <div class="ttm-item-view-leftimage">
                                    <div class="featured-thumbnail"> 
                                        <img class="img-fluid" src="{{ asset('frontend/images/farm/team/10.jpg') }}" alt="">

                                    </div> 
                                    <div class="ttm-box-view-overlay ttm-team-box-view-overlay">
                                        <div class="featured-iconbox">
                                            <a href="{{ route('team.page') }}"><i class="ti ti-plus"></i></a>
                                        </div>
                                    </div>
                                </div><!-- ttm-item-view-leftimage end-->
                            </div>
                            <div class="col-lg-7 col-md-6 featured-img-right ttm-post-content">
                                <div class="content-post content-team-post">
                                    <div class="content-post-desc">
                                        <h5 class="title-post"><a href="team-details.html">Afolabi Ope </a></h5>
                                        <p class="category">Accountant</p>
                                        <ul class="ttm-team-details-list">
                                            <li>
                                                <div class="ttm-team-list-title ttm-textcolor-skincolor">
                                                    <i class="ti ti-mobile"></i> Phone :
                                                </div>
                                                <div class="ttm-team-list-value">
                                                    <a href="tel:+234 803 937 2136" tabindex="0">+234 803 937 2136</a>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="ttm-team-list-title ttm-textcolor-skincolor">
                                                    <i class="ti ti-email"></i> Email :
                                                </div>
                                                <div class="ttm-team-list-value">
                                                    <a href="mailto:ope@fanimic.com" tabindex="0">ope@fanimic.com</a>
                                                </div>
                                            </li>
                                        </ul>
                                        <div class="ttm-social-links-wrapper">
                                            <ul class="social-icons">
                                                <li><a href="" tabindex="-1"><i class="fa fa-facebook"></i></a></li>
                                                <li><a href="" tabindex="-1"><i class="fa fa-twitter"></i></a></li>
                                                <li><a href="" tabindex="-1"><i class="fa fa-youtube-play"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- featured-team-item end-->

                        <!-- featured-team-item -->
                        <div class="featured-item featured-team-item style2 row">
                            <div class="col-lg-5 col-md-6 featured-img-left">
                                <!-- ttm-item-view-leftimage -->
                                <div class="ttm-item-view-leftimage">
                                    <div class="featured-thumbnail"> 
                                        <img class="img-fluid" src="{{ asset('frontend/images/farm/team/6.jpg') }}" alt="">

                                    </div> 
                                    <div class="ttm-box-view-overlay ttm-team-box-view-overlay">
                                        <div class="featured-iconbox">
                                            <a href="{{ route('team.page') }}"><i class="ti ti-plus"></i></a>
                                        </div>
                                    </div>
                                </div><!-- ttm-item-view-leftimage end-->
                            </div>
                            <div class="col-lg-7 col-md-6 featured-img-right ttm-post-content">
                                <div class="content-post content-team-post">
                                    <div class="content-post-desc">
                                        <h5 class="title-post"><a href="team-details.html">Oni Peter </a></h5>
                                        <p class="category">Logistics Manager</p>
                                        <ul class="ttm-team-details-list">
                                            <li>
                                                <div class="ttm-team-list-title ttm-textcolor-skincolor">
                                                    <i class="ti ti-mobile"></i> Phone :
                                                </div>
                                                <div class="ttm-team-list-value">
                                                    <a href="tel:+234 701 099 2202" tabindex="0">+234 701 099 2202</a>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="ttm-team-list-title ttm-textcolor-skincolor">
                                                    <i class="ti ti-email"></i> Email :
                                                </div>
                                                <div class="ttm-team-list-value">
                                                    <a href="mailto:peter@fanimic.com" tabindex="0">peter@fanimic.com</a>
                                                </div>
                                            </li>
                                        </ul>
                                        <div class="ttm-social-links-wrapper">
                                            <ul class="social-icons">
                                                <li><a href="" tabindex="-1"><i class="fa fa-facebook"></i></a></li>
                                                <li><a href="" tabindex="-1"><i class="fa fa-twitter"></i></a></li>
                                                <li><a href="" tabindex="-1"><i class="fa fa-youtube-play"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- featured-team-item end-->
                    </div>
                </div><!-- row end -->
            
            </div>
        </section>
        <!--blog-section end-->

        
    </div><!--site-main end-->


    <br><br>
    @endsection
    