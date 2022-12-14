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
    {{ $abouts->coy_name }} | Contact Us
@endsection

    <!-- page-title -->
    <div class="ttm-page-title-row">
        <div class="section-overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div style="background-color:rgb(2,13,38)"  class="title-box">
                        <div class="page-title-heading">
                            <h1 class="title">Contact Us</h1>
                        </div>
                        <div class="breadcrumb-wrapper">
                            <span>
                                <a title="Homepage" href="{{ url('/') }}"><i class="fa fa-home"></i>&nbsp;&nbsp;Home</a>
                            </span>
                            <span class="ttm-bread-sep"> &nbsp; ⁄ &nbsp;</span>
                            <span><span>Contact Us </span></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- page-title end-->


    <!--site-main start-->

    <div class="site-main">

        <!--intro-section-->
        <section class="ttm-row break-991-colum bg-layer res-991-p-0 clearfix">
            <div class="container">
                <div class="row">
                    <div class="col-md-9">
                       <div class="ttm-col-bgcolor-yes ttm-bg ttm-bgcolor-darkgrey padding-8">
                            <div class="ttm-col-wrapper-bg-layer ttm-bg-layer"></div>
                            <div class="layer-content row m-0">
                                <div class="col-md-10">
                                    <!-- section title -->
                                    <div class="section-title clearfix">
                                        <h2 class="title">Send<strong>Us Message!</strong></h2>
                                        <div class="heading-seperator"><span></span></div>
                                        <p>Please fill out the request for quote form below and our expert team will get back to you shortly.</p>
                                    </div><!-- section title end -->
                                    <form id="contactform" class="contactform style2 wrap-form clearfix" method="post" action="{{ route('contact.store') }}" novalidate="novalidate">
                                            @csrf
                                        <label>
                                            <i class="ti ti-user"></i>
                                            <span class="ttm-form-control">
                                                <input class="text-input" name="name" type="text" value="" placeholder="Your Name:*" required="required">
                                            </span>
                                            @if ($errors->has('name'))
                                                <span class="text-danger">{{ $errors->first('name') }}</span>
                                            @endif
                                        </label>
                                        <label>
                                            <i class="ti ti-email"></i>
                                            <span class="ttm-form-control">
                                                <input class="text-input" name="email" type="text" value="" placeholder="Your email-id:*" required="required">
                                            </span>
                                            @if ($errors->has('email'))
                                                <span class="text-danger">{{ $errors->first('email') }}</span>
                                            @endif
                                        </label>
                                        <label>
                                            <i class="ti ti-headphone"></i>
                                            <span class="ttm-form-control">
                                                <input class="text-input" name="phone" type="text" value="" placeholder="Your Number:*" required="required">
                                            </span>
                                            @if ($errors->has('phone'))
                                                <span class="text-danger">{{ $errors->first('phone') }}</span>
                                            @endif
                                        </label>
                                        <label>
                                            <i class="ti ti-headphone"></i>
                                            <span class="ttm-form-control">
                                                <input class="text-input" name="subject" type="text" value="" placeholder="Subject:*">
                                            </span>
                                        </label>
                                        <label>
                                            <i class="ti ti-comment"></i>
                                            <span class="ttm-form-control">
                                                <textarea class="text-area" name="message" placeholder="Your Message:*" required="required"></textarea>
                                            </span>
                                            @if ($errors->has('message'))
                                                <span class="text-danger">{{ $errors->first('message') }}</span>
                                            @endif
                                        </label>
                                        <button class="btn btn-success btn-submit">Submit</button>
                                        {{-- <input name="submit" type="submit" value="Submit Now!" class="ttm-btn ttm-btn-size-md  ttm-btn-style-border ttm-btn-color-white" id="submit" title="Submit now"/> --}}
                                    </form>

                                </div>
                                <div class="col-md-2"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <!-- testimonial-box -->
                        <div class="ttm-col-bgcolor-yes ttm-bg ttm-bgcolor-skincolor padding-8 ml_170 res-991-ml-0 mt-100 res-991-mt-0">
                            <div class="ttm-col-wrapper-bg-layer ttm-bg-layer"></div>
                            <div class="layer-content">
                                <h2 class="ttm-textcolor-white mb-20">Drop in our office</h2>
                                <!--featured-box-->
                                <div class="featured-box style9 left-icon">
                                    <div class="featured-icon icon-white">
                                        <i class="ti ti-mobile"></i>
                                    </div>
                                    <div class="featured-content">
                                        <div class="featured-title">
                                            <h5>Phone</h5>
                                        </div>
                                        <div class="featured-desc">
                                            <p>(+234) 703 373 6586</p>
                                            <p>(+234) 912 687 4608</p>
                                            <!-- <p>(+234) 703 902 7816</p>
                                            <p>(+234) 814 621 2205</p> -->
                                        </div>
                                    </div>
                                </div><!-- featured-box end-->
                                <!--featured-box-->
                                <div class="featured-box style9 left-icon">
                                    <div class="featured-icon icon-white">
                                        <i class="ti ti-email"></i>
                                    </div>
                                    <div class="featured-content">
                                        <div class="featured-title">
                                            <h5>Email</h5>
                                        </div>
                                        <div class="featured-desc">
                                            <p>info@fanimic.com</p>
                                            <p>contact@fanimic.com</p>
                                        </div>
                                    </div>
                                </div><!-- featured-box end-->
                                <!--featured-box-->
                                <div class="featured-box style9 left-icon">
                                    <div class="featured-icon icon-white">
                                        <i class="ti ti-location-pin"></i>
                                    </div>
                                    <div class="featured-content">
                                        <div class="featured-title">
                                            <h5>
                                                 Head Office
                                            </h5>
                                        </div>
                                        <div class="featured-desc">
                                            <p>25, Ayomide Street, Ijako Sango ota, Ogun State.</p>
                                        </div>
                                    </div>
                                </div><!-- featured-box end-->
                                <!--featured-box-->
                                <div class="featured-box style9 left-icon">
                                    <div class="featured-icon icon-white">
                                        <i class="ti ti-location-pin"></i>
                                    </div>
                                    <div class="featured-content">
                                        <div class="featured-title">
                                            <h5>Branch</h5>
                                        </div>
                                        <div class="featured-desc">
                                           <p>329, College Rd, Eleyo, Opp. High Court, Ikere Ekiti, Ekiti State.</p>
                                        </div>
                                    </div>
                                </div><!-- featured-box end-->
                                <div class="social-icons circle social-hover mt-15 mb-50 res-991-mb-0">
                                    <ul class="list-inline">
                                        <li class="social-facebook"><a class="tooltip-top" target="_blank" href="" data-tooltip="Facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                        <li class="social-twitter"><a class="tooltip-top" target="_blank" href="" data-tooltip="Twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                        <li class="social-gplus"><a class=" tooltip-top" target="_blank" href="" data-tooltip="Google+"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                        <li class="social-linkedin"><a class=" tooltip-top" target="_blank" href="" data-tooltip="LinkedIn"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- row end -->
            </div>
        </section>
        <!-- intro-section end -->

        <div style="padding-bottom: 600px;" class="map-wrapper">
            <div id="map_canvas">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3962.3366444565004!2d3.2162026142654345!3d6.728717195135673!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x103b9862b5afbba9%3A0x7be08c0310ebaa42!2sChurch%20Ijako!5e0!3m2!1sen!2sng!4v1633146465320!5m2!1sen!2sng" width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>


    </div><!--site-main end-->

<br><br>
@endsection
