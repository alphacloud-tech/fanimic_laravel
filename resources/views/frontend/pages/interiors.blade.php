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
    {{ $abouts->coy_name }} | Interiors & Exteriors Decorator
@endsection

    <!-- page-title -->
    {{-- <div style='background-image: url("{% static 'fanimic/images/farm/decorator/office.jpg' %}")'; class="ttm-page-title-row"> --}}
    <div style='background-image: url("{{ asset('frontend/images/farm/decorator/office.jpg') }}")'; class="ttm-page-title-row">

        <div class="section-overlay"></div>
        <div class="container">
            <div class="row">
                <div style="background-color:rgb(2,13,38)" class="col-md-12"> 
                    <div class="title-box">
                        <div class="page-title-heading">
                            <h1 class="title">Interiors & Exteriors Decorator</h1>
                        </div>
                        <div class="breadcrumb-wrapper">
                            <span>
                                <a title="Homepage" href="{{ url('/') }}"><i class="fa fa-home"></i>&nbsp;&nbsp;Home</a>
                            </span>
                            <span class="ttm-bread-sep"> &nbsp; ⁄ &nbsp;</span>
                            <span><span>Interiors & Exteriors Decorator</span></span>
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
                                    <h3 class="widget-title">Interiors & Exteriors Decorator</h3>
                                    <p>  
                                        Fanimic Global Resource is your one stop 
                                        exterior & interior designs and interior
                                        decorator 
                                        service providers. At Fanimic Global Resource we are 
                                        one of the best in the 
                                        Industry, providing cost-effective and reliable home 
                                        decorations. <strong>Our interior and exterior design solutions are always 
                                        within your budget, coupled with our years of experience, 
                                        your satisfaction is our priority.</strong>

                                        Together with our outstanding network of carefully selected 
                                        business partners, we are able to provide an unrivalled standard 
                                        of services that combines all the benefits of in-depth local 
                                        knowledge with truly global expertise to 
                                        provide personalized service that meet your precise needs.
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
                                            {{-- <a href=""> <img class="img-fluid" src="{% static 'fanimic/images/farm/decorator/decorator-4.jpeg' %} " alt="image"></a> --}}
                                            <a href=""> <img class="img-fluid" src="{{ asset('frontend/images/farm/decorator/decorator-4.jpeg') }}" alt="image"></a>

                                        </div>
                                    </div><!-- featured-item -->
                                </div>
                                <div class="ttm-box-col-wrapper">
                                    <!-- featured-item -->
                                    <div class="featured-item featured-portfolio-item">
                                        <div class="featured-thumbnail">
                                            {{-- <a href=""> <img class="img-fluid" src="{% static 'fanimic/images/farm/decorator/decorator-5.jpg' %} " alt="image"></a> --}}
                                            <a href=""> <img class="img-fluid" src="{{ asset('frontend/images/farm/decorator/decorator-5.jpg') }}" alt="image"></a>

                                        </div>
                                    </div><!-- featured-item -->
                                </div>
                                <div class="ttm-box-col-wrapper">
                                    <!-- featured-item -->
                                    <div class="featured-item featured-portfolio-item">
                                        <div class="featured-thumbnail">
                                            {{-- <a href=""> <img class="img-fluid" src="{% static 'fanimic/images/farm/decorator/decorator-10.jpg' %} " alt="image"></a> --}}
                                            <a href=""> <img class="img-fluid" src="{{ asset('frontend/images/farm/decorator/decorator-10.jpg') }}" alt="image"></a>

                                        </div>
                                    </div><!-- featured-item -->
                                </div>
                                <div class="ttm-box-col-wrapper">
                                    <!-- featured-item -->
                                    <div class="featured-item featured-portfolio-item">
                                        <div class="featured-thumbnail">
                                            {{-- <a href=""> <img class="img-fluid" src="{% static 'fanimic/images/farm/decorator/decorator-12.jpg' %} " alt="image"></a> --}}
                                            <a href=""> <img class="img-fluid" src="{{ asset('frontend/images/farm/decorator/decorator-12.jpg') }}" alt="image"></a>

                                        </div>
                                    </div><!-- featured-item -->
                                </div>
                                <div class="ttm-box-col-wrapper">
                                    <!-- featured-item -->
                                    <div class="featured-item featured-portfolio-item">
                                        <div class="featured-thumbnail">
                                            {{-- <a href=""> <img class="img-fluid" src="{% static 'fanimic/images/farm/decorator/decorator-14.jpg' %} " alt="image"></a> --}}
                                            <a href=""> <img class="img-fluid" src="{{ asset('frontend/images/farm/decorator/decorator-14.jpg') }}" alt="image"></a>

                                        </div>
                                    </div><!-- featured-item -->
                                </div>
                                <div class="ttm-box-col-wrapper">
                                    <!-- featured-item -->
                                    <div class="featured-item featured-portfolio-item">
                                        <div class="featured-thumbnail">
                                            {{-- <a href=""> <img class="img-fluid" src="{% static 'fanimic/images/farm/decorator/decorator-16.jpg' %} " alt="image"></a> --}}
                                            <a href=""> <img class="img-fluid" src="{{ asset('frontend/images/farm/decorator/decorator-16.jpg') }}" alt="image"></a>

                                        </div>
                                    </div><!-- featured-item -->
                                </div>
                                <div class="ttm-box-col-wrapper">
                                    <!-- featured-item -->
                                    <div class="featured-item featured-portfolio-item">
                                        <div class="featured-thumbnail">
                                            {{-- <a href=""> <img class="img-fluid" src="{% static 'fanimic/images/farm/decorator/decorator-3.jpg' %} " alt="image"></a> --}}
                                            <a href=""> <img class="img-fluid" src="{{ asset('frontend/images/farm/decorator/decorator-3.jpg') }}" alt="image"></a>

                                        </div>
                                    </div><!-- featured-item -->
                                </div>
                            </div>
                            {{-- <div class="col-md-8 pr-5 res-767-plr-15"><img class="img-fluid pb-5" src="{% static 'fanimic/images/farm/decorator/decorator-4.jpeg' %}" alt=""></div> --}}
                            <div class="col-md-8 pr-5 res-767-plr-15"><img class="img-fluid pb-5" src="{{ asset('frontend/images/farm/decorator/decorator-4.jpeg') }}" alt=""></div>
                            <div class="col-md-4 pl-0 res-767-plr-15">
                                {{-- <img class="img-fluid pb-5" src="{% static 'fanimic/images/farm/decorator/decorator-9.jpg' %}" alt=""> --}}
                                <img class="img-fluid pb-5" src="{{ asset('frontend/images/farm/decorator/decorator-9.jpg') }}" alt="">
                                {{-- <img class="img-fluid pb-5" src="{% static 'fanimic/images/farm/decorator/decorator-12.jpg' %}" alt=""> --}}
                                <img class="img-fluid pb-5" src="{{ asset('frontend/images/farm/decorator/decorator-12.jpg') }}" alt="">
                            </div>
                        </div>

                        <div class="mt-30 mb-35">
                            <h3>Why choose this service</h3>
                            <p>
                                We specialize in exterior & interior designs and interior decorations, 
                                and have the best eyes for detailed perfection for home designs.
                                Looking For Interior Decoration in Nigeria? check our interior 
                                design home decoration pictures. We have the capability 
                                to take on an entire project of house finishes and can execute 
                                them with ease. Some of our interior decoration and finishes work 
                                are listed as follows: 
                                
                            </p>
                        </div>
                        <div class="row mb-10">
                            <div class="col-lg-9 col-md-12">
                                
                                <div class="ttm-tabs element-tab-style-horizontal clearfix">
                                    <!-- tabs -->
                                    <ul class="tabs clearfix">
                                        <li class="tab active"><a href=""><i class="fa fa-cog1"></i>P.O.P  Design</a></li>
                                        <li class="tab"><a href=""><i class="fa fa-binoculars1"></i>Home Painting</a></li>
                                        <li class="tab"><a href=""><i class="fa fa-tasks1"></i>Tiling Design</a></li>
                                        <li class="tab"><a href=""><i class="fa fa-cog1"></i>Interior Design</a></li>
                                        <li class="tab"><a href=""><i class="fa fa-cog1"></i>Plumbing</a></li>
                                    </ul>
                                    <div  class="content-tab">
                                        <div class="content-inner">
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    {{-- <img style="width: 300px; text-align: center;" class="img-fluid" src="{% static 'fanimic/images/farm/decorator/decorator-15.jpg' %} " alt="image"> --}}
                                                    <img style="width: 300px; text-align: center;" class="img-fluid" src="{{ asset('frontend/images/farm/decorator/decorator-15.jpg') }}" alt="image">
                                                </div>
                                                <div style="text-align: center;" class="col-sm-8">
                                                    <p>
                                                        We offer masonry techniques to customize pop designs 
                                                        for TV stands, mini bar, shelves, chandelier roxas, 
                                                        Vase holder, artisan columns and chimney fireplace.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="content-inner">
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    {{-- <img style="width: 300px;" class="img-fluid" src="{% static 'fanimic/images/farm/decorator/decorator-11.jpeg' %} " alt="image"> --}}
                                                    <img style="width: 300px;" class="img-fluid" src="{{ asset('frontend/images/farm/decorator/decorator-11.jpeg') }}" alt="image">

                                                </div>
                                                <div class="col-sm-8">
                                                    <p>
                                                        We provide quality painting services like stucco 
                                                        and regular painting, art wall paintings, 3D wall paper 
                                                        and wall paper design for Living rooms and Bedrooms.

                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="content-inner">
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    {{-- <img class="img-fluid" src="{% static 'fanimic/images/farm/decorator/decorator-13.png' %} " alt="image"> --}}
                                                    <img class="img-fluid" src="{{ asset('frontend/images/farm/decorator/decorator-13.png') }}" alt="image">

                                                </div>
                                                <div class="col-sm-8">
                                                    <p>
                                                        We can offer awe finishing to vitreous tiles like Travertine, 
                                                        Marble, Slate, Ceramic, Porcelain, Faux Wood, 
                                                        Quartzite, Granite, Stone & Pebbles, Onyx and Cement.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="content-inner">
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    {{-- <img style="width: 300px;" class="img-fluid" src="{% static 'fanimic/images/farm/decorator/decorator-1.jpg' %} " alt="image"> --}}
                                                    <img style="width: 300px;" class="img-fluid" src="{{ asset('frontend/images/farm/decorator/decorator-1.jpg') }}" alt="image">

                                                </div>
                                                <div class="col-sm-8">
                                                    <p>
                                                        Our Interior design services comprises of pop 
                                                        ceiling design, floor tiling, wood tiling, kitchen cabinet design, 
                                                        walk in closet designs and space management.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="content-inner">
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    {{-- <img style="width: 300px;" class="img-fluid" src="{% static 'fanimic/images/farm/decorator/decorator-1.jpg' %} " alt="image"> --}}
                                                    <img style="width: 300px;" class="img-fluid" src="{{ asset('frontend/images/farm/decorator/decorator-1.jpg') }}" alt="image">

                                                </div>
                                                <div class="col-sm-8">
                                                    <p>
                                                        Our Interior design services comprises of pop 
                                                        ceiling design, floor tiling, wood tiling, kitchen cabinet design, 
                                                        walk in closet designs and space management.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                       
                    </div>
                    <div class="col-lg-3 sidebar sidebar-left">
                        @include('frontend/body/services_common')
                        
                        <aside class="widget widget_media_image">
                            <!-- <a href="{% url 'contact' %}"><img class="img-fluid" src="{% static 'fanimic/images/banner-image.jpg' %}" alt="banner-image"></a> -->
                        </aside>
                        <aside class="widget contact-widget">
                            <h3 class="widget-title">Get in touch</h3>      
                            <ul class="contact-widget-wrapper">
                                <li><i class="ti ti-mobile"></i>(+234) 912 687 4608</li>
                                <li><i class="ti ti-comment"></i><a href="mailto:info@fanimic.com" target="_blank">info@fanimic.com</a></li>
                                <!-- <li><i class="ti ti-world"></i><a href="http://www.example.com/" target="_blank">http://www.example.com</a> -->
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
        
        <section class="ttm-row bg-img8">
            <div class="container">
                <!-- row -->
                <div class="row">
                    <div class="col-md-4 res-767-mb-30">
                        <!-- featured-item -->
                        <div class="featured-item">
                            <div class="featured-thumbnail">
                                {{-- <img class="img-fluid" src="{% static 'fanimic/images/farm/decorator/decorator-3.jpg' %} " alt=""> --}}
                                <img class="img-fluid" src="{{ asset('frontend/images/farm/decorator/decorator-3.jpg') }}" alt="image">

                            </div>
                            <!-- featured-box -->
                            <div class="featured-box style5 box-shadow">
                                <div class="featured-icon icon-size-md icon-shape-square"> 
                                    <i class="flaticon flaticon-robot-arm"></i>
                                </div>
                                <div class="featured-content">
                                    <div class="featured-title">
                                        <h5> <span style="color: coral;">RESIDENTIAL</span> INTERIORS</h5>
                                    </div>
                                    <div class="featured-desc">
                                        <p>When you give us the responsibility to design interiors for your house, we keep in mind the things that make you tick and involve you wholly into the conceptualizing process.</p>
                                        <!-- <a class="ttm-btn btn-inline ttm-icon-btn-right ttm-btn-color-skincolor" href="#">Read More<i class="ti ti-arrow-circle-right"></i></a> -->
                                    </div>
                                </div>
                            </div><!-- featured-box end -->
                        </div><!-- featured-item -->
                    </div>
                    <div class="col-md-4 res-767-mb-30">
                        <!-- featured-item -->
                        <div class="featured-item">
                            <div class="featured-thumbnail">
                                {{-- <img class="img-fluid" src="{% static 'fanimic/images/farm/decorator/office.jpg' %} " alt="blog-img"> --}}
                                <img class="img-fluid" src="{{ asset('frontend/images/farm/decorator/office.jpg') }}" alt="image">

                            </div>
                            <!-- featured-box -->
                            <div class="featured-box style5 box-shadow">
                                <div class="featured-icon icon-size-md icon-shape-square"> 
                                    <i class="flaticon flaticon-factory-4"></i>
                                </div>
                                <div class="featured-content">
                                    <div class="featured-title">
                                        <h5> <span style="color: coral;">OFFICE</span>  INTERIORS</h5>
                                    </div>
                                    <div class="featured-desc">
                                        <p>An interior designer working with an office space will take in client requirements, integrate them with good office design, and look at various perspectives before finalizing on a solution.</p>
                                        <!-- <a class="ttm-btn btn-inline ttm-icon-btn-right ttm-btn-color-skincolor" href="#">Read More<i class="ti ti-arrow-circle-right"></i></a> -->
                                    </div>
                                </div>
                            </div><!-- featured-box end -->
                        </div><!-- featured-item -->
                    </div>
                    <div class="col-md-4 res-767-mb-30">
                        <!-- featured-item -->
                        <div class="featured-item">
                            <div class="featured-thumbnail">
                                {{-- <img class="img-fluid" src="{% static 'fanimic/images/farm/decorator/decorator-6.png' %} " alt="blog-img"> --}}
                                <img class="img-fluid" src="{{ asset('frontend/images/farm/decorator/decorator-6.png') }}" alt="image">

                            </div>
                            <!-- featured-box -->
                            <div class="featured-box style5 box-shadow">
                                <div class="featured-icon icon-size-md icon-shape-square"> 
                                    <i class="flaticon flaticon-conveyor"></i>
                                </div>
                                <div class="featured-content">
                                    <div class="featured-title">
                                        <h5> <span style="color: coral;">HOME RENOVATION </span> SERVICES</h5>
                                    </div>
                                    <div class="featured-desc">
                                        <p>Our interior design experts, thoroughly understand the personal tastes and likes of the clients and transform them into amazing interior design solutions.</p>
                                        <!-- <a class="ttm-btn btn-inline ttm-icon-btn-right ttm-btn-color-skincolor" href="#">Read More<i class="ti ti-arrow-circle-right"></i></a> -->
                                    </div>
                                </div>
                            </div><!-- featured-box end -->
                        </div><!-- featured-item -->
                    </div>
                </div><!-- row end -->
            </div>
        </section>
        
    </div><!--site-main end-->

    <br><br>
    @endsection
   