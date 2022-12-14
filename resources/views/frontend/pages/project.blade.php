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
    {{ $abouts->coy_name }} | Projects
@endsection


<!-- page-title -->
<div class="ttm-page-title-row">
    <div class="section-overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12"> 
                <div style="background-color:rgb(2,13,38)"  class="title-box">
                    <div class="page-title-heading">
                        <h1 class="title">Projects</h1>
                    </div>
                    <div class="breadcrumb-wrapper">
                        <span>
                            <a title="Homepage" href="{{ url('/') }}"><i class="fa fa-home"></i>&nbsp;&nbsp;Home</a>
                        </span>
                        <span class="ttm-bread-sep"> &nbsp; ⁄ &nbsp;</span>
                        <span><span>Projects</span></span>
                    </div>  
                </div>
            </div>
        </div>
    </div>                 
</div><!-- page-title end-->

    <!--site-main start-->
    <div class="site-main">

        <!-- intro-section -->
        <section class="ttm-row pt-65 pb-65 ttm-bgcolor-grey clearfix">
            <div class="container">
                <!-- row -->
                <div class="row">
                    <div class="col-lg-12">
                        <h2><strong>Our Latest Projects</strong></h2>
                        <p class="mb-35">Below you’ll see our best industrial projects.
                            &nbsp; We are providing&nbsp;never ending customer support 
                            also provide guarantee a very high level of satisfaction 
                            for our clients.&nbsp;&nbsp;if you have a question&nbsp; 
                            don’t hesitate to email us at <a href="#">info@fanimic.com</a>
                            &nbsp;for more details.</p>
                    </div>
                    <div class="col-lg-12">
                        <div class="ttm-tabs style2" data-effect="fadeIn">
                            <ul class="tabs clearfix">
                                <li class="tab active"><a href="#"> All </a></li>
                                <li class="tab"><a href="#">Building Construction</a></li>
                                <li class="tab"><a href="#">Electrical Installation</a></li>
                                <li class="tab"><a href="#">Interiors & Exteriors Design</a></li>
                                <li class="tab"><a href="#">Agriculture</a></li>
                                <!-- <li class="tab"><a href="#">Petro Chemicals</a></li> -->
                                
                            </ul><!-- flat-tab end -->
                            <div class="content-tab">
                                <!-- content-inner -->
                                <div class="content-inner active">
                                    <div class="row multi-columns-row ttm-boxes-spacing-10px">
                                        <div class="ttm-box-col-wrapper col-lg-4 col-md-6 col-sm-12">
                                            <!-- featured-item -->
                                            <div class="featured-item featured-portfolio-item">
                                                <div class="featured-thumbnail">
                                                    <a href=""> <img class="img-fluid" src="{{ asset('frontend/images/farm/project/port-2.jpg') }}" alt="image"></a>
                                                </div>
                                                <!-- ttm-box-view-overlay -->
                                                <div class="ttm-box-view-overlay ttm-portfolio-box-view-overlay">
                                                    <div class="featured-iconbox ttm-media-link">
                                                        {{-- <a class="ttm_prettyphoto ttm_image" data-gal="prettyPhoto[gallery1]" title="spring-renovation" href="{% static 'fanimic/images/farm/project/port-2.jpg' %}" data-rel="prettyPhoto"><i class="ti ti-image"></i></a> --}}
                                                        <a class="ttm_prettyphoto ttm_image" data-gal="prettyPhoto[gallery1]" title="spring-renovation" href="{{ asset('frontend/images/farm/project/port-2.jpg') }}" data-rel="prettyPhoto"><i class="ti ti-image"></i></a>
                                                        <!-- <a href="portfolio-details-01.html" class="ttm_link"><i class="ti ti-link"></i></a> -->
                                                    </div>
                                                    <div class="content-post content-portfolio-post">
                                                        <h2 class="title-post"><a href="{% url 'building' %}">Building Construction</a></h2>
                                                        <!-- <span class="category">
                                                            <a href="portfolio-category.html">Building Construction</a>,
                                                            <a href="portfolio-category.html">Oil And Gas</a>
                                                        </span> -->
                                                    </div>
                                                </div><!-- ttm-box-view-overlay end-->
                                            </div><!-- featured-item -->
                                        </div>
                                        
                                        <div class="ttm-box-col-wrapper col-lg-4 col-md-6 col-sm-12">
                                            <!-- featured-item -->
                                            <div class="featured-item featured-portfolio-item">
                                                <div class="featured-thumbnail">
                                                    <a href=""> <img class="img-fluid" src="{{ asset('frontend/images/farm/project/port-6.jpeg') }}" alt="image"></a>

                                                </div>
                                                <!-- ttm-box-view-overlay -->
                                                <div class="ttm-box-view-overlay ttm-portfolio-box-view-overlay">
                                                    <div class="featured-iconbox ttm-media-link">
                                                        {{-- <a class="ttm_prettyphoto ttm_image" data-gal="prettyPhoto[gallery1]" title="Vam Drilling" href="{% static 'fanimic/images/farm/project/port-6.jpeg' %}" data-rel="prettyPhoto"><i class="ti ti-image"></i></a> --}}
                                                        <a class="ttm_prettyphoto ttm_image" data-gal="prettyPhoto[gallery1]" title="Vam Drilling" href="{{ asset('frontend/images/farm/project/port-6.jpeg') }}" data-rel="prettyPhoto"><i class="ti ti-image"></i></a>
                                                        <!-- <a href="{% url 'decorator' %}" class="ttm_link"><i class="ti ti-link"></i></a> -->
                                                    </div>
                                                    <div class="content-post content-portfolio-post">
                                                        <h2 class="title-post"><a href="{% url 'decorator' %}">Interior & Exterior Design</a></h2>
                                                        <!-- <span class="category">
                                                            <a href="portfolio-category.html">Petro Chemicals</a>,
                                                            <a href="portfolio-category.html">Oil And Gas</a>
                                                        </span> -->
                                                    </div>
                                                </div><!-- ttm-box-view-overlay end-->
                                            </div><!-- featured-item -->
                                        </div>
                                        
                                        <div class="ttm-box-col-wrapper col-lg-4 col-md-6 col-sm-12">
                                            <!-- featured-item -->
                                            <div class="featured-item featured-portfolio-item">
                                                <div class="featured-thumbnail">
                                                    <a href=""> <img class="img-fluid" src="{{ asset('frontend/images/farm/project/port-4.jpg') }}" alt="image"></a>

                                                </div>
                                                <!-- ttm-box-view-overlay -->
                                                <div class="ttm-box-view-overlay ttm-portfolio-box-view-overlay">
                                                    <div class="featured-iconbox ttm-media-link">
                                                        {{-- <a class="ttm_prettyphoto ttm_image" data-gal="prettyPhoto[gallery1]" title="Successful Venture" href="{% static 'fanimic/images/farm/project/port-4.jpg' %}" data-rel="prettyPhoto"><i class="ti ti-image"></i></a> --}}
                                                        <a class="ttm_prettyphoto ttm_image" data-gal="prettyPhoto[gallery1]" title="Successful Venture" href="{{ asset('frontend/images/farm/project/port-4.jpg') }}" data-rel="prettyPhoto"><i class="ti ti-image"></i></a>
                                                        <!-- <a href="{% url 'building' %}" class="ttm_link"><i class="ti ti-link"></i></a> -->
                                                    </div>
                                                    <div class="content-post content-portfolio-post">
                                                        <h2 class="title-post"><a href="{% url 'building' %}">Roofing</a></h2>
                                                        <!-- <span class="category">
                                                            <a href="portfolio-category.html">Mechanical</a>,
                                                            <a href="portfolio-category.html">Petro Chemicals</a>
                                                        </span> -->
                                                    </div>
                                                </div><!-- ttm-box-view-overlay end-->
                                            </div><!-- featured-item -->
                                        </div>
                                        
                                        <div class="ttm-box-col-wrapper col-lg-4 col-md-6 col-sm-12">
                                            <!-- featured-item -->
                                            <div class="featured-item featured-portfolio-item">
                                                <div class="featured-thumbnail">
                                                    <a href=""> <img class="img-fluid" src="{{ asset('frontend/images/farm/project/port-7.jpg') }}" alt="image"></a>

                                                </div>
                                                <!-- ttm-box-view-overlay -->
                                                <div class="ttm-box-view-overlay ttm-portfolio-box-view-overlay">
                                                    <div class="featured-iconbox ttm-media-link">
                                                        {{-- <a class="ttm_prettyphoto ttm_image" data-gal="prettyPhoto[gallery1]" title="Industrial Complex" href="{% static 'fanimic/images/farm/project/port-7.jpg' %}" data-rel="prettyPhoto"><i class="ti ti-image"></i></a> --}}
                                                        <a class="ttm_prettyphoto ttm_image" data-gal="prettyPhoto[gallery1]" title="Industrial Complex" href="{{ asset('frontend/images/farm/project/port-7.jpg') }}" data-rel="prettyPhoto"><i class="ti ti-image"></i></a>
                                                        <!-- <a href="{% url 'electrical' %}" class="ttm_link"><i class="ti ti-link"></i></a> -->
                                                    </div>
                                                    <div class="content-post content-portfolio-post">
                                                        <h2 class="title-post"><a href="{% url 'electrical' %}">Electrical Installation</a></h2>
                                                        <!-- <span class="category"><a href="portfolio-category.html">Oil And Gas</a></span> -->
                                                    </div>
                                                </div><!-- ttm-box-view-overlay end-->
                                            </div><!-- featured-item -->
                                        </div>
                                        
                                        <div class="ttm-box-col-wrapper col-lg-4 col-md-6 col-sm-12">
                                            <!-- featured-item -->
                                            <div class="featured-item featured-portfolio-item">
                                                <div class="featured-thumbnail">
                                                    <a href=""> <img class="img-fluid" src="{{ asset('frontend/images/farm/project/port-8.jpg') }}" alt="image"></a>

                                                </div>
                                                <!-- ttm-box-view-overlay -->
                                                <div class="ttm-box-view-overlay ttm-portfolio-box-view-overlay">
                                                    <div class="featured-iconbox ttm-media-link">
                                                        {{-- <a class="ttm_prettyphoto ttm_image" data-gal="prettyPhoto[gallery1]" title="Let’s Work Together" href="{% static 'fanimic/images/farm/project/port-8.jpg' %}" data-rel="prettyPhoto"><i class="ti ti-image"></i></a> --}}
                                                        <a class="ttm_prettyphoto ttm_image" data-gal="prettyPhoto[gallery1]" title="Let’s Work Together" href="{{ asset('frontend/images/farm/project/port-8.jpg') }}" data-rel="prettyPhoto"><i class="ti ti-image"></i></a>
                                                        <!-- <a href="portfolio-details-02.html" class="ttm_link"><i class="ti ti-link"></i></a> -->
                                                    </div>
                                                    <div class="content-post content-portfolio-post">
                                                        <h2 class="title-post"><a href="{% url 'building' %}">Ongoing Building Construction</a></h2>
                                                        <!-- <span class="category"><a href="portfolio-category.html">Mechanical</a></span> -->
                                                    </div>
                                                </div><!-- ttm-box-view-overlay end-->
                                            </div><!-- featured-item -->
                                        </div>
                                        
                                        <div class="ttm-box-col-wrapper col-lg-4 col-md-6 col-sm-12">
                                            <!-- featured-item -->
                                            <div class="featured-item featured-portfolio-item">
                                                <div class="featured-thumbnail">
                                                    <a href=""> <img class="img-fluid" src="{{ asset('frontend/images/farm/project/port-9.jpg') }}" alt="image"></a>

                                                </div>
                                                <!-- ttm-box-view-overlay -->
                                                <div class="ttm-box-view-overlay ttm-portfolio-box-view-overlay">
                                                    <div class="featured-iconbox ttm-media-link">
                                                        {{-- <a class="ttm_prettyphoto ttm_image" data-gal="prettyPhoto[gallery1]" title="Corporate" href="{% static 'fanimic/images/farm/project/port-9.jpg' %}" data-rel="prettyPhoto"><i class="ti ti-image"></i></a> --}}
                                                        <a class="ttm_prettyphoto ttm_image" data-gal="prettyPhoto[gallery1]" title="Corporate" href="{{ asset('frontend/images/farm/project/port-9.jpg') }}" data-rel="prettyPhoto"><i class="ti ti-image"></i></a>
                                                        <!-- <a href="portfolio-details-03.html" class="ttm_link"><i class="ti ti-link"></i></a> -->
                                                    </div>
                                                    <div class="content-post content-portfolio-post">
                                                        <h2 class="title-post"><a href="{% url 'decorator' %}">Interior Decoration</a></h2>
                                                        <!-- <span class="category"><a href="portfolio-category.html">Petroleum</a></span> -->
                                                    </div>
                                                </div><!-- ttm-box-view-overlay end-->
                                            </div><!-- featured-item -->
                                        </div>
                                        
                                    </div><!-- row end -->
                                </div>

                                <div class="content-inner">
                                    <div class="row multi-columns-row ttm-boxes-spacing-5px">
                                        <div class="ttm-box-col-wrapper col-lg-4 col-md-6 col-sm-12">
                                            <!-- featured-item -->
                                            <div class="featured-item featured-portfolio-item">
                                                <div class="featured-thumbnail">
                                                    <a href=""> <img class="img-fluid" src="{{ asset('frontend/images/farm/project/port-2.jpg') }}" alt="adams"></a>

                                                </div>
                                                <!-- ttm-box-view-overlay -->
                                                <div class="ttm-box-view-overlay ttm-portfolio-box-view-overlay">
                                                    <div class="featured-iconbox ttm-media-link">
                                                        {{-- <a class="ttm_prettyphoto ttm_image" data-gal="prettyPhoto[gallery1]" title="spring-renovation" href="{% static 'fanimic/images/farm/project/port-2.jpg' %}" data-rel="prettyPhoto"><i class="ti ti-image"></i></a> --}}
                                                        <a class="ttm_prettyphoto ttm_image" data-gal="prettyPhoto[gallery1]" title="spring-renovation" href="{{ asset('frontend/images/farm/project/port-2.jpg') }}" data-rel="prettyPhoto"><i class="ti ti-image"></i></a>
                                                        <!-- <a href="portfolio-details-01.html" class="ttm_link"><i class="ti ti-link"></i></a> -->
                                                    </div>
                                                    <div class="content-post content-portfolio-post">
                                                        <h2 class="title-post"><a href="{% url 'building' %}">Building Construction</a></h2>
                                                        <!-- <span class="category">
                                                            <a href="portfolio-category.html">Building Construction</a>,
                                                            <a href="portfolio-category.html">Oil And Gas</a>
                                                        </span> -->
                                                    </div>
                                                </div><!-- ttm-box-view-overlay end-->
                                            </div><!-- featured-item -->
                                        </div>

                                        <div class="ttm-box-col-wrapper col-lg-4 col-md-6 col-sm-12">
                                            <!-- featured-item -->
                                            <div class="featured-item featured-portfolio-item">
                                                <div class="featured-thumbnail">
                                                    <a href=""> <img class="img-fluid" src="{{ asset('frontend/images/farm/project/port-4.jpg') }}" alt="image"></a>

                                                </div>
                                                <!-- ttm-box-view-overlay -->
                                                <div class="ttm-box-view-overlay ttm-portfolio-box-view-overlay">
                                                    <div class="featured-iconbox ttm-media-link">
                                                        {{-- <a class="ttm_prettyphoto ttm_image" data-gal="prettyPhoto[gallery1]" title="Successful Venture" href="{% static 'fanimic/images/farm/project/port-4.jpg' %}" data-rel="prettyPhoto"><i class="ti ti-image"></i></a> --}}
                                                        <a class="ttm_prettyphoto ttm_image" data-gal="prettyPhoto[gallery1]" title="Successful Venture" href="{{ asset('frontend/images/farm/project/port-4.jpg') }}" data-rel="prettyPhoto"><i class="ti ti-image"></i></a>
                                                        <!-- <a href="{% url 'building' %}" class="ttm_link"><i class="ti ti-link"></i></a> -->
                                                    </div>
                                                    <div class="content-post content-portfolio-post">
                                                        <h2 class="title-post"><a href="{% url 'building' %}">Roofing</a></h2>
                                                        <!-- <span class="category">
                                                            <a href="portfolio-category.html">Mechanical</a>,
                                                            <a href="portfolio-category.html">Petro Chemicals</a>
                                                        </span> -->
                                                    </div>
                                                </div><!-- ttm-box-view-overlay end-->
                                            </div><!-- featured-item -->
                                        </div>
                                        <div class="ttm-box-col-wrapper col-lg-4 col-md-6 col-sm-12">
                                            <!-- featured-item -->
                                            <div class="featured-item featured-portfolio-item">
                                                <div class="featured-thumbnail">
                                                    <a href=""> <img class="img-fluid" src="{{ asset('frontend/images/farm/project/port-8.jpg') }}" alt="image"></a>

                                                </div>
                                                <!-- ttm-box-view-overlay -->
                                                <div class="ttm-box-view-overlay ttm-portfolio-box-view-overlay">
                                                    <div class="featured-iconbox ttm-media-link">
                                                        {{-- <a class="ttm_prettyphoto ttm_image" data-gal="prettyPhoto[gallery1]" title="Let’s Work Together" href="{% static 'fanimic/images/farm/project/port-8.jpg' %}" data-rel="prettyPhoto"><i class="ti ti-image"></i></a> --}}
                                                        <a class="ttm_prettyphoto ttm_image" data-gal="prettyPhoto[gallery1]" title="Let’s Work Together" href="{{ asset('frontend/images/farm/project/port-8.jpg') }}" data-rel="prettyPhoto"><i class="ti ti-image"></i></a>
                                                        <!-- <a href="portfolio-details-02.html" class="ttm_link"><i class="ti ti-link"></i></a> -->
                                                    </div>
                                                    <div class="content-post content-portfolio-post">
                                                        <h2 class="title-post"><a href="{% url 'building' %}">Ongoing Building Construction</a></h2>
                                                        <!-- <span class="category"><a href="portfolio-category.html">Mechanical</a></span> -->
                                                    </div>
                                                </div><!-- ttm-box-view-overlay end-->
                                            </div><!-- featured-item -->
                                        </div>
                                    </div>
                                        
                                </div>

                                <div class="content-inner">
                                    <div class="row multi-columns-row ttm-boxes-spacing-5px">
                                        <div class="ttm-box-col-wrapper col-lg-4 col-md-6 col-sm-12">
                                            <!-- featured-item -->
                                            <div class="featured-item featured-portfolio-item">
                                                <div class="featured-thumbnail">
                                                    <a href=""> <img class="img-fluid" src="{{ asset('frontend/images/farm/project/port-7.jpg') }}" alt="image"></a>

                                                </div>
                                                <!-- ttm-box-view-overlay -->
                                                <div class="ttm-box-view-overlay ttm-portfolio-box-view-overlay">
                                                    <div class="featured-iconbox ttm-media-link">
                                                        {{-- <a class="ttm_prettyphoto ttm_image" data-gal="prettyPhoto[gallery1]" title="Industrial Complex" href="{% static 'fanimic/images/farm/project/port-7.jpg' %}" data-rel="prettyPhoto"><i class="ti ti-image"></i></a> --}}
                                                        <a class="ttm_prettyphoto ttm_image" data-gal="prettyPhoto[gallery1]" title="Industrial Complex" href="{{ asset('frontend/images/farm/project/port-7.jpg') }}" data-rel="prettyPhoto"><i class="ti ti-image"></i></a>
                                                        <!-- <a href="{% url 'electrical' %}" class="ttm_link"><i class="ti ti-link"></i></a> -->
                                                    </div>
                                                    <div class="content-post content-portfolio-post">
                                                        <h2 class="title-post"><a href="{% url 'electrical' %}">Electrical Installation</a></h2>
                                                        <!-- <span class="category"><a href="portfolio-category.html">Oil And Gas</a></span> -->
                                                    </div>
                                                </div><!-- ttm-box-view-overlay end-->
                                            </div><!-- featured-item -->
                                        </div>
                                    </div>
                                </div>

                                <div class="content-inner">
                                    <div class="row multi-columns-row ttm-boxes-spacing-5px">
                                        <div class="ttm-box-col-wrapper col-lg-4 col-md-6 col-sm-12">
                                            <!-- featured-item -->
                                            <div class="featured-item featured-portfolio-item">
                                                <div class="featured-thumbnail">
                                                    {{-- <a href=""> <img class="img-fluid" src="{% static 'fanimic/images/farm/project/port-9.jpg' %}" alt="image"></a> --}}
                                                    <a href=""> <img class="img-fluid" src="{{ asset('frontend/images/farm/project/port-9.jpg') }}" alt="image"></a>

                                                </div>
                                                <!-- ttm-box-view-overlay -->
                                                <div class="ttm-box-view-overlay ttm-portfolio-box-view-overlay">
                                                    <div class="featured-iconbox ttm-media-link">
                                                        {{-- <a class="ttm_prettyphoto ttm_image" data-gal="prettyPhoto[gallery1]" title="Corporate" href="{% static 'fanimic/images/farm/project/port-9.jpg' %}" data-rel="prettyPhoto"><i class="ti ti-image"></i></a> --}}
                                                        <a class="ttm_prettyphoto ttm_image" data-gal="prettyPhoto[gallery1]" title="Corporate" href="{{ asset('frontend/images/farm/project/port-9.jpg') }}" data-rel="prettyPhoto"><i class="ti ti-image"></i></a>
                                                        <!-- <a href="portfolio-details-03.html" class="ttm_link"><i class="ti ti-link"></i></a> -->
                                                    </div>
                                                    <div class="content-post content-portfolio-post">
                                                        <h2 class="title-post"><a href="{% url 'decorator' %}">Interior Design</a></h2>
                                                        <!-- <span class="category"><a href="portfolio-category.html">Petroleum</a></span> -->
                                                    </div>
                                                </div><!-- ttm-box-view-overlay end-->
                                            </div><!-- featured-item -->
                                        </div>
                                        <div class="ttm-box-col-wrapper col-lg-4 col-md-6 col-sm-12">
                                            <!-- featured-item -->
                                            <div class="featured-item featured-portfolio-item">
                                                <div class="featured-thumbnail">
                                                    {{-- <a href=""> <img class="img-fluid" src="{% static 'fanimic/images/farm/project/port-6.jpeg' %}" alt="image"></a> --}}
                                                    <a href=""> <img class="img-fluid" src="{{ asset('frontend/images/farm/project/port-6.jpeg') }}" alt="image"></a>

                                                </div>
                                                <!-- ttm-box-view-overlay -->
                                                <div class="ttm-box-view-overlay ttm-portfolio-box-view-overlay">
                                                    <div class="featured-iconbox ttm-media-link">
                                                        {{-- <a class="ttm_prettyphoto ttm_image" data-gal="prettyPhoto[gallery1]" title="Vam Drilling" href="{% static 'fanimic/images/farm/project/port-6.jpeg' %}" data-rel="prettyPhoto"><i class="ti ti-image"></i></a> --}}
                                                        <a class="ttm_prettyphoto ttm_image" data-gal="prettyPhoto[gallery1]" title="Vam Drilling" href="{{ asset('frontend/images/farm/project/port-6.jpeg') }}" data-rel="prettyPhoto"><i class="ti ti-image"></i></a>
                                                        <!-- <a href="{% url 'decorator' %}" class="ttm_link"><i class="ti ti-link"></i></a> -->
                                                    </div>
                                                    <div class="content-post content-portfolio-post">
                                                        <h2 class="title-post"><a href="{% url 'decorator' %}">Interior & Exterior Design</a></h2>
                                                        <!-- <span class="category">
                                                            <a href="portfolio-category.html">Petro Chemicals</a>,
                                                            <a href="portfolio-category.html">Oil And Gas</a>
                                                        </span> -->
                                                    </div>
                                                </div><!-- ttm-box-view-overlay end-->
                                            </div><!-- featured-item -->
                                        </div>
                                    </div>
                                </div>

                                <div class="content-inner">
                                    <div class="row multi-columns-row ttm-boxes-spacing-5px">
                                        
                                        <div class="ttm-box-col-wrapper col-lg-4 col-md-6 col-sm-12">
                                            <!-- featured-item -->
                                            <div class="featured-item featured-portfolio-item">
                                                <!-- featured-thumbnail -->
                                                <div class="featured-thumbnail">
                                                    {{-- <a href=""> <img class="img-fluid" src="{% static 'fanimic/images/farm/agri-10.png' %}" alt="image"></a> --}}
                                                    <a href=""> <img class="img-fluid" src="{{ asset('frontend/images/farm/agri-10.png') }}" alt="image"></a>

                                                </div><!-- featured-thumbnail end-->
                                                <!-- ttm-box-view-overlay -->
                                                <div class="ttm-box-view-overlay ttm-portfolio-box-view-overlay">
                                                    <div class="featured-iconbox ttm-media-link">
                                                        {{-- <a class="ttm_prettyphoto ttm_image" data-gal="prettyPhoto[gallery1]" title="Successful Venture" href="{% static 'fanimic/images/farm/agri-10.png' %}" data-rel="prettyPhoto"><i class="ti ti-image"></i></a> --}}
                                                        <a class="ttm_prettyphoto ttm_image" data-gal="prettyPhoto[gallery1]" title="Successful Venture" href="{{ asset('frontend/images/farm/agri-10.png') }}" data-rel="prettyPhoto"><i class="ti ti-image"></i></a>
                                                        <a href="portfolio-details-02.html" class="ttm_link"><i class="ti ti-link"></i></a>
                                                    </div>
                                                    <div class="content-post content-portfolio-post">
                                                        <h2 class="title-post"><a href="portfolio-details-02.html">Palm Oil Production</a></h2>
                                                        <!--<span class="category">-->
                                                        <!--    <a href="portfolio-category.html">Mechanical</a>,-->
                                                        <!--    <a href="portfolio-category.html">Petro Chemicals</a>-->
                                                        <!--</span>-->
                                                    </div>
                                                </div><!-- ttm-box-view-overlay end-->
                                            </div><!-- featured-item -->
                                        </div>
                                        
                                        <div class="ttm-box-col-wrapper col-lg-4 col-md-6 col-sm-12">
                                            <!-- featured-item -->
                                            <div class="featured-item featured-portfolio-item">
                                                <!-- featured-thumbnail -->
                                                <div class="featured-thumbnail">
                                                    {{-- <a href=""> <img class="img-fluid" src="{% static 'fanimic/images/farm/agri-2.jpg' %}" alt="image"></a> --}}
                                                    <a href=""> <img class="img-fluid" src="{{ asset('frontend/images/farm/agri-2.jpg') }}" alt="image"></a>

                                                </div><!-- featured-thumbnail end-->
                                                <!-- ttm-box-view-overlay -->
                                                <div class="ttm-box-view-overlay ttm-portfolio-box-view-overlay">
                                                    <div class="featured-iconbox ttm-media-link">
                                                        {{-- <a class="ttm_prettyphoto ttm_image" data-gal="prettyPhoto[gallery1]" title="Successful Venture" href="{% static 'fanimic/images/farm/agri-2.jpg' %}" data-rel="prettyPhoto"><i class="ti ti-image"></i></a> --}}
                                                        <a class="ttm_prettyphoto ttm_image" data-gal="prettyPhoto[gallery1]" title="Successful Venture" href="{{ asset('frontend/images/farm/agri-2.jpg') }}" data-rel="prettyPhoto"><i class="ti ti-image"></i></a>
                                                        <a href="portfolio-details-02.html" class="ttm_link"><i class="ti ti-link"></i></a>
                                                    </div>
                                                    <div class="content-post content-portfolio-post">
                                                        <h2 class="title-post"><a href="portfolio-details-02.html">Palm Oil Production</a></h2>
                                                        <!--<span class="category">-->
                                                        <!--    <a href="portfolio-category.html">Mechanical</a>,-->
                                                        <!--    <a href="portfolio-category.html">Petro Chemicals</a>-->
                                                        <!--</span>-->
                                                    </div>
                                                </div><!-- ttm-box-view-overlay end-->
                                            </div><!-- featured-item -->
                                        </div>
                                        
                                        <div class="ttm-box-col-wrapper col-lg-4 col-md-6 col-sm-12">
                                            <!-- featured-item -->
                                            <div class="featured-item featured-portfolio-item">
                                                <!-- featured-thumbnail -->
                                                <div class="featured-thumbnail">
                                                    {{-- <a href=""> <img class="img-fluid" src="{% static 'fanimic/images/farm/agri-12.jpg' %}" alt="image"></a> --}}
                                                    <a href=""> <img class="img-fluid" src="{{ asset('frontend/images/farm/agri-12.jpg') }}" alt="image"></a>

                                                </div><!-- featured-thumbnail end-->
                                                <!-- ttm-box-view-overlay -->
                                                <div class="ttm-box-view-overlay ttm-portfolio-box-view-overlay">
                                                    <div class="featured-iconbox ttm-media-link">
                                                        {{-- <a class="ttm_prettyphoto ttm_image" data-gal="prettyPhoto[gallery1]" title="Successful Venture" href="{% static 'fanimic/images/farm/agri-12.jpg' %}" data-rel="prettyPhoto"><i class="ti ti-image"></i></a> --}}
                                                        <a class="ttm_prettyphoto ttm_image" data-gal="prettyPhoto[gallery1]" title="Successful Venture" href="{{ asset('frontend/images/farm/agri-12.jpg') }}" data-rel="prettyPhoto"><i class="ti ti-image"></i></a>
                                                        <a href="portfolio-details-02.html" class="ttm_link"><i class="ti ti-link"></i></a>
                                                    </div>
                                                    <div class="content-post content-portfolio-post">
                                                        <h2 class="title-post"><a href="portfolio-details-02.html">Poultry Farming</a></h2>
                                                        <!--<span class="category">-->
                                                        <!--    <a href="portfolio-category.html">Mechanical</a>,-->
                                                        <!--    <a href="portfolio-category.html">Petro Chemicals</a>-->
                                                        <!--</span>-->
                                                    </div>
                                                </div><!-- ttm-box-view-overlay end-->
                                            </div><!-- featured-item -->
                                        </div>
                                        
                                        <div class="ttm-box-col-wrapper col-lg-4 col-md-6 col-sm-12">
                                            <!-- featured-item -->
                                            <div class="featured-item featured-portfolio-item">
                                                <!-- featured-thumbnail -->
                                                <div class="featured-thumbnail">
                                                    {{-- <a href=""> <img class="img-fluid" src="{% static 'fanimic/images/farm/agri-11.jpg' %}" alt="image"></a> --}}
                                                    <a href=""> <img class="img-fluid" src="{{ asset('frontend/images/farm/agri-11.jpg') }}" alt="image"></a>

                                                </div><!-- featured-thumbnail end-->
                                                <!-- ttm-box-view-overlay -->
                                                <div class="ttm-box-view-overlay ttm-portfolio-box-view-overlay">
                                                    <div class="featured-iconbox ttm-media-link">
                                                        {{-- <a class="ttm_prettyphoto ttm_image" data-gal="prettyPhoto[gallery1]" title="Successful Venture" href="{% static 'fanimic/images/farm/agri-11.jpg' %}" data-rel="prettyPhoto"><i class="ti ti-image"></i></a> --}}
                                                        <a class="ttm_prettyphoto ttm_image" data-gal="prettyPhoto[gallery1]" title="Successful Venture" href="{{ asset('frontend/images/farm/agri-11.jpg') }}" data-rel="prettyPhoto"><i class="ti ti-image"></i></a>
                                                        <a href="portfolio-details-02.html" class="ttm_link"><i class="ti ti-link"></i></a>
                                                    </div>
                                                    <div class="content-post content-portfolio-post">
                                                        <h2 class="title-post"><a href="portfolio-details-02.html">Poultry Farming</a></h2>
                                                        <!--<span class="category">-->
                                                        <!--    <a href="portfolio-category.html">Mechanical</a>,-->
                                                        <!--    <a href="portfolio-category.html">Petro Chemicals</a>-->
                                                        <!--</span>-->
                                                    </div>
                                                </div><!-- ttm-box-view-overlay end-->
                                            </div><!-- featured-item -->
                                        </div>
                                        
                                        <div class="ttm-box-col-wrapper col-lg-4 col-md-6 col-sm-12">
                                            <!-- featured-item -->
                                            <div class="featured-item featured-portfolio-item">
                                                <!-- featured-thumbnail -->
                                                <div class="featured-thumbnail">
                                                    {{-- <a href=""> <img class="img-fluid" src="{% static 'fanimic/images/farm/agri-5.jpg' %}" alt="image"></a> --}}
                                                    <a href=""> <img class="img-fluid" src="{{ asset('frontend/images/farm/agri-5.jpg') }}" alt="image"></a>

                                                </div><!-- featured-thumbnail end-->
                                                <!-- ttm-box-view-overlay -->
                                                <div class="ttm-box-view-overlay ttm-portfolio-box-view-overlay">
                                                    <div class="featured-iconbox ttm-media-link">
                                                        {{-- <a class="ttm_prettyphoto ttm_image" data-gal="prettyPhoto[gallery1]" title="Successful Venture" href="{% static 'fanimic/images/farm/agri-5.jpg' %}" data-rel="prettyPhoto"><i class="ti ti-image"></i></a> --}}
                                                        <a class="ttm_prettyphoto ttm_image" data-gal="prettyPhoto[gallery1]" title="Successful Venture" href="{{ asset('frontend/images/farm/agri-5.jpg') }}" data-rel="prettyPhoto"><i class="ti ti-image"></i></a>
                                                        <a href="portfolio-details-02.html" class="ttm_link"><i class="ti ti-link"></i></a>
                                                    </div>
                                                    <div class="content-post content-portfolio-post">
                                                        <h2 class="title-post"><a href="portfolio-details-02.html">Fumigation and Pest Control</a></h2>
                                                        <!--<span class="category">-->
                                                        <!--    <a href="portfolio-category.html">Mechanical</a>,-->
                                                        <!--    <a href="portfolio-category.html">Petro Chemicals</a>-->
                                                        <!--</span>-->
                                                    </div>
                                                </div><!-- ttm-box-view-overlay end-->
                                            </div><!-- featured-item -->
                                        </div>
                                        
                                        <div class="ttm-box-col-wrapper col-lg-4 col-md-6 col-sm-12">
                                            <!-- featured-item -->
                                            <div class="featured-item featured-portfolio-item">
                                                <!-- featured-thumbnail -->
                                                <div class="featured-thumbnail">
                                                    {{-- <a href=""> <img class="img-fluid" src="{% static 'fanimic/images/farm/agri-4.jpg' %}" alt="image"></a> --}}
                                                    <a href=""> <img class="img-fluid" src="{{ asset('frontend/images/farm/agri-4.jpg') }}" alt="image"></a>

                                                </div><!-- featured-thumbnail end-->
                                                <!-- ttm-box-view-overlay -->
                                                <div class="ttm-box-view-overlay ttm-portfolio-box-view-overlay">
                                                    <div class="featured-iconbox ttm-media-link">
                                                        {{-- <a class="ttm_prettyphoto ttm_image" data-gal="prettyPhoto[gallery1]" title="Successful Venture" href="{% static 'fanimic/images/farm/agri-4.jpg' %}" data-rel="prettyPhoto"><i class="ti ti-image"></i></a> --}}
                                                        <a class="ttm_prettyphoto ttm_image" data-gal="prettyPhoto[gallery1]" title="Successful Venture" href="{{ asset('frontend/images/farm/agri-4.jpg') }}" data-rel="prettyPhoto"><i class="ti ti-image"></i></a>
                                                        <a href="portfolio-details-02.html" class="ttm_link"><i class="ti ti-link"></i></a>
                                                    </div>
                                                    <div class="content-post content-portfolio-post">
                                                        <h2 class="title-post"><a href="portfolio-details-02.html">Fumigation and Pest Control</a></h2>
                                                        <!--<span class="category">-->
                                                        <!--    <a href="portfolio-category.html">Mechanical</a>,-->
                                                        <!--    <a href="portfolio-category.html">Petro Chemicals</a>-->
                                                        <!--</span>-->
                                                    </div>
                                                </div><!-- ttm-box-view-overlay end-->
                                            </div><!-- featured-item -->
                                        </div>
                                        
                                        
                                        
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div><!-- row end -->
            </div>
        </section>
        <!-- intro-section end -->
        
    </div><!--site-main end-->

    <br><br>
    @endsection

    