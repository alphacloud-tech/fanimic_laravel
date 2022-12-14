
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
    {{ $abouts->coy_name }} | Pure &amp; Bottle Manufacturing
@endsection

    <!-- page-title -->
    {{-- <div style='background-image: url("{% static 'fanimic/images/farm/water-04.jpg' %}")'; class="ttm-page-title-row"> --}}
    <div style='background-image: url("{{ asset('frontend/images/farm/water-04.jpg') }}")'; class="ttm-page-title-row">

        <div class="section-overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12"> 
                    <div style="background-color:rgb(2,13,38)" class="title-box">
                        <div class="page-title-heading">
                            <h1 class="title">Pure &amp; Bottle Manufacturing</h1>
                        </div>
                        <div class="breadcrumb-wrapper">
                            <span>
                                <a title="Homepage" href="{{ url('/') }}"><i class="fa fa-home"></i>&nbsp;&nbsp;Home</a>
                            </span>
                            <span class="ttm-bread-sep"> &nbsp; ⁄ &nbsp;</span>
                            <span><span>Manufacturing</span></span>
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

                        <!-- start adams slider -->
                        <div class="client-section2 ttm-bgcolor-darkgrey">
                            <div class="row">
                                <div class="col-lg-12">
                                    <!-- ttm-client -->
                                    <div class="ttm-client water-logo2 owl-carousel owl-theme owl-loaded" >
                                        <div class="client-box">
                                            <div class="client">
                                                <div class="ttm-client-logo-tooltip" data-tooltip="Fanimic Water">
                                                    {{-- <img class="img-fluid" src="{% static 'fanimic/images/farm/water-2.jpg' %} " alt="image"> --}}
                                                    <img class="img-fluid" src="{{ asset('frontend/images/farm/water-2.jpg') }}" alt="image">

                                                </div>
                                            </div>
                                        </div>
                                        <div class="client-box">
                                            <div class="client">
                                                <div class="ttm-client-logo-tooltip" data-tooltip="Fanimic Water">
                                                    {{-- <img class="img-fluid" src="{% static 'fanimic/images/farm/water-3.jpg' %} " alt="image"> --}}
                                                    <img class="img-fluid" src="{{ asset('frontend/images/farm/water-3.jpg') }}" alt="image">

                                                </div>
                                            </div>
                                        </div>
                                        <div class="client-box">
                                            <div class="client">
                                                <div class="ttm-client-logo-tooltip" data-tooltip="Fanimic Water">
                                                    {{-- <img class="img-fluid" src="{% static 'fanimic/images/farm/water-8.jpg' %} " alt="image"> --}}
                                                    <img class="img-fluid" src="{{ asset('frontend/images/farm/water-8.jpg') }}" alt="image">

                                                </div>
                                            </div>
                                        </div>
                                        <div class="client-box">
                                            <div class="client">
                                                <div class="ttm-client-logo-tooltip" data-tooltip="Fanimic Water">
                                                    {{-- <img class="img-fluid" src="{% static 'fanimic/images/farm/water-03.jpg' %} " alt="image"> --}}
                                                    <img class="img-fluid" src="{{ asset('frontend/images/farm/water-03.jpg') }}" alt="image">

                                                </div>
                                            </div>
                                        </div>
                                        <div class="client-box">
                                            <div class="client">
                                                <div class="ttm-client-logo-tooltip" data-tooltip="Fanimic Water">
                                                    {{-- <img class="img-fluid" src="{% static 'fanimic/images/farm/water-04.jpg' %} " alt="image"> --}}
                                                    <img class="img-fluid" src="{{ asset('frontend/images/farm/water-04.jpg') }}" alt="image">

                                                </div>
                                            </div>
                                        </div>
                                        <div class="client-box">
                                            <div class="client">
                                                <div class="ttm-client-logo-tooltip" data-tooltip="Fanimic Water">
                                                    {{-- <img class="img-fluid" src="{% static 'fanimic/images/farm/water-05.jpeg' %} " alt="image"> --}}
                                                    <img class="img-fluid" src="{{ asset('frontend/images/farm/water-05.jpeg') }}" alt="image">

                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- ttm-client end -->      
                                </div>
                            </div>
                        </div>
                        <!-- end adams slider -->
                        
                        <br>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="mb-35">
                                    <h3>Pure &amp; Bottle Manufacturing</h3>
                                        <p>
                                            Fanimic Global Resources produce high water Intensity.
                                            Our core interest is in providing clean hygienic water 
                                            and innovative water dispensers with accessories and 
                                            technology that supports healthy water drinking habit for all.
                                            Indeed, our impact is felt in every home, event ceremony 
                                            and corporate offices as we developed products for all 
                                            target market segments.
                                            Our factories are installed with the best of Hi-Tech 
                                            equipment in the industry and mostly situated within well 
                                            organized environments that meet standards.
                                        </p>
                                </div>
                            </div>
                        </div>
                       
                        <div class="row">
                            {{-- <div class="col-md-8 pr-5 res-767-plr-15"><img class="pb-5 img-fluid" src="{% static 'fanimic/images/farm/waters-3.jpg' %}" alt=""></div> --}}
                            <div class="col-md-8 pr-5 res-767-plr-15"><img class="pb-5 img-fluid" src="{{ asset('frontend/images/farm/waters-3.jpg') }}" alt=""></div>
                            <div class="col-md-4 pl-0 res-767-plr-15">
                                {{-- <img class="img-fluid pb-5" src="{% static 'fanimic/images/farm/waters-1.jpg' %}" alt=""> --}}
                                <img class="img-fluid pb-5" src="{{ asset('frontend/images/farm/waters-1.jpg') }}" alt="image">

                                {{-- <img class="img-fluid pb-5" src="{% static 'fanimic/images/farm/waters-2.jpg' %}" alt=""> --}}
                                <img class="img-fluid pb-5" src="{{ asset('frontend/images/farm/waters-2.jpg') }}" alt="image">

                            </div>
                        </div>
                        <div class="row">
                            {{-- <div class="col-md-12 pr-5 res-767-plr-15"><img class="pb-5 img-fluid" src="{% static 'fanimic/images/farm/water-04.jpg' %}" alt=""></div> --}}
                            <div class="col-md-12 pr-5 res-767-plr-15"><img class="pb-5 img-fluid" src="{{ asset('frontend/images/farm/water-04.jpg') }}" alt=""></div>
                        </div>
                       
                        <!-- element-style-section -->
                        <!-- <section class="element-row element-style">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="section-title clearfix">
                                            <h2 class="title">
                                                CLEAN WATER: A BASIC ESSENTIAL NEED FOR ALL
                                            </h2>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="wrap-acadion">
                                        <div class="accordion">
                                            <div class="toggle active">
                                                <div class="toggle-title active">
                                                    <a data-toggle="collapse" href=""><i class="fa fa-cog"></i>MOTHER AND CHILD</a>
                                                </div>
                                                <div class="toggle-content">
                                                    <div class="row">
                                                        <div class="col-sm-3">
                                                            <div class="toggle-figure">
                                                                <img class="img-fluid" src="images/blog/04.jpg" alt="image">
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-9">
                                                            <p>
                                                                Every mother should always take a water brand trusted for healthy 
                                                                quality benefit to her and her baby daily.
                                                                Clean Water plays an essential role in the life of 
                                                                every pregnant mother and her baby. The quality of the water consumed at this period is crucial and a determining 
                                                                factor to the health status of the baby and that of the mother.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="toggle">
                                                <div class="toggle-title">
                                                    <a data-toggle="collapse" href="#"><i class="fa fa-cog"></i>How should i beleive about your product?</a></div>
                                                <div class="toggle-content">
                                                    <div class="row">
                                                        <div class="col-sm-3">
                                                            <div class="toggle-figure">
                                                                <img class="img-fluid" src="images/blog/04.jpg" alt="image">
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-9">
                                                            <p>
                                                                We’re committed to delivering crisp, clean tasting water, and we have high standards. 
                                                                That’s why every drop goes through a rigorous different steps quality process.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="toggle">
                                                <div class="toggle-title">
                                                    <a data-toggle="collapse" href="#"><i class="fa fa-cog"></i>Tectxon standard blog and executive team.</a>
                                                </div>
                                                <div class="toggle-content">
                                                    <div class="row">
                                                        <div class="col-sm-3">
                                                            <div class="toggle-figure">
                                                                <img class="img-fluid" src="images/blog/04.jpg" alt="image">
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-9">
                                                            <p>Praesentium voluptatum deleniti atque corrupti quos as excepturi sint occaecati cupiditate non provident, similique sunt in</p>
                                                            <a class="ttm-btn ttm-btn-color-skincolor btn-inline" href="#">Read More</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>                   
                                    </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </section> -->
                        <!-- element-style-section end-->
                    </div>
                    <div class="col-lg-3 sidebar sidebar-left">
                        @include('frontend/body/services_common')
                        <aside class="widget widget-download">
                            <h3 class="widget-title">
                                <span>Our Water process</span>
                            </h3>
                            <ul class="download">
                                <li><i class="fa fa-check"></i><a href="">Source receiving</a></li>
                                <li><i class="fa fa-check"></i><a href="">Pre-treatment</a></li>
                                <li><i class="fa fa-check"></i><a href="">Sand filtration</a></li>
                                <li><i class="fa fa-check"></i><a href="">Water storage and monitoring</a></li>
                                <li><i class="fa fa-check"></i><a href="">Micro filtration</a></li>
                                <li><i class="fa fa-check"></i><a href="">Bottling control</a></li>
                                <li><i class="fa fa-check"></i><a href="">Packaging control</a></li>
                            </ul>
                        </aside> 
                        
                        <aside class="widget contact-widget">
                            <h3 class="widget-title">Get in touch</h3>      
                            <ul class="contact-widget-wrapper">
                                <li><i class="ti ti-mobile"></i>
                                    
                                    (+234) 912 687 4608   <br>
                                    (+234) 703 902 7816 
                                    
                                </li>
                                <li><i class="fa fa-envelope"></i>
                                    <a href="mailto:info@fanimic.com" target="_blank">info@fanimic.com</a> <br>
                                    <a href="mailto:contact@fanimic.com" target="_blank">contact@fanimic.com</a>
                                </li>
                                <li><i class="ti ti-location-pin"></i>329, College Rd, Eleyo, Opp. High Court, Ikere Ekiti, Ekiti State.</li>
                                <li><i class="ti ti-alarm-clock"></i>Mon to Fri - 9:00am to 6:00pm <br>(Sunday Closed)</li>
                            </ul>
                        </aside>
                        <aside class="widget widget_media_image">
                            
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3955.7263458304615!2d5.210345263602002!3d7.495435613183215!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1047f1f640da17ef%3A0x7f3a40144355f014!2sEleyo%20High%20School%2C%20361101%2C%20Ikere!5e0!3m2!1sen!2sng!4v1634450844540!5m2!1sen!2sng" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                            <!--<a href="{% url 'contact' %}"><img class="img-fluid" src="{% static 'fanimic/images/banner-image.jpg' %}" alt="banner-image"></a>-->
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
                    
                <div class="mt-30 mb-35">
                    <h3>Why choose this service</h3>
                    <br>
                    <div class="heading-seperator"><span></span></div>
                    <p>
                        We maunfacturing with best treatment to render it fit to meet 
                        tight quality specifications use in any occassion. 
                        We care for poepls's health as we thoroughly
                        extract all hazardous that can damage human system.
                    </p>
                </div>
                </div><!-- row end -->
                <div class="row row-equal-height">
                    <div class="col-lg-4 col-md-6 col-sm-12">
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
                                    <h5>MOTHER AND CHILD</h5>
                                </div>
                                <div class="featured-desc">
                                    <p>
                                        Getting plenty of water is essential during 
                                        pregnancy. It helps carry nutrients through 
                                        your body to your baby, helps maintain healthy 
                                        levels of amniotic fluid, and can even help prevent 
                                        bladder infections, constipation, and swelling, 
                                        which are common complaints during pregnancy.
                                    </p>
                                </div>
                            </div>
                        </div><!-- featured-box end-->
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
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
                                    <h5>GROWING CHILDREN</h5>
                                </div>
                                <div class="featured-desc">
                                    <p>
                                        Children as widely known, are of the active group 
                                        that on daily basis need to take fluid -Water especially, 
                                        to help reduce rate of dehydration as they engage in their 
                                        play time activities as in football , dancing, or 
                                        games all of which increases their need for water.
                                    </p>
                                </div>
                            </div>
                        </div><!-- featured-box end-->
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
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
                                    <h5>THE AGED</h5>
                                </div>
                                <div class="featured-desc">
                                    <p>
                                        As we age it can become more difficult to 
                                        stay hydrated due to age-related changes 
                                        within the body; this can be further 
                                        complicated by certain diseases or health conditions, 
                                        along with physical frailty or cognitive 
                                        changes (such as dementia). 

                                        Drinking enough, or encouraging an older person 
                                        to do so can be difficult at times, but the 
                                        numerous health benefits are well worth the effort. 
                                       
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
    
    <div style="padding-bottom: 600px;" class="map-wrapper">
        <div id="map_canvas">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3955.7263458304615!2d5.210345263602002!3d7.495435613183215!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1047f1f640da17ef%3A0x7f3a40144355f014!2sEleyo%20High%20School%2C%20361101%2C%20Ikere!5e0!3m2!1sen!2sng!4v1634450844540!5m2!1sen!2sng" width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            <!--<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3962.3366444565004!2d3.2162026142654345!3d6.728717195135673!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x103b9862b5afbba9%3A0x7be08c0310ebaa42!2sChurch%20Ijako!5e0!3m2!1sen!2sng!4v1633146465320!5m2!1sen!2sng" width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy"></iframe>-->
        </div>
    </div>

    
    <br><br>
 @endsection

   
   