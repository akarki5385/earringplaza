@extends('layouts.main')
@section('content')
<!-- CONTENT -->
<!-- Intro Section -->
<section class="inner-intro bg-img light-color overlay-before parallax-background">
    <div class="container">
        <div class="row title">
            <div class="title_row">
                <h1 data-title="Project Details"><span>Portfolio</span></h1>
                <div class="page-breadcrumb">
                    <a>Home</a>/ <span>Portfolio</span>
                </div>

            </div>

        </div>
    </div>
</section>
<!-- End Intro Section -->
<!-- End Intro Section -->
<div id="project-detail-section" class="padding pb-60 pt-xs-60">
    <div class="container">
        <div class="row ">
            <div class="col-sm-12">
                <div class="heading-box pb-30 ">
                    <h2><span>Our</span> Portfolio</h2>
                    <span class="b-line l-left"></span>
                </div>

            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="project-details">
                    <figure>
                        <img src="{{ asset('/public/assets/images/parallax1.jpg')}}" alt="">
                    </figure>
                    <div class="project-info col-sm-12 col-lg-4 ">
                        <h3>Project Description</h3>
                        <ul>
                            <li>
                                <strong>Client:</strong> Construction Company
                            </li>
                            <li>
                                <strong>Location:</strong> Durga Bhawan Anamnagar-29, Kathmandu
                            </li>

                            <li>
                                <strong>Years:</strong> 2005-2020
                            </li>
                            <li>
                                <strong>Types:</strong> Goverment & Non Goverment
                            </li>
                            <li>
                                <strong>Architect:</strong> DCDPL
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-lg-7 mt-30">
                <div class="box-title mb-20">
                    <h3>About Us</h3>
                </div>
                <div class="text-content">
                    <p>
                        Dhaulagiri Construction & Development Pvt. Ltd. (hereinafter referred to as “DCDPL”) is a company established by young enthusiasts which aims to provide various construction ser- vices of civil works of hydropower, buildings, roads, bridges, irrigation canal etc. It is a compa-
                        ny registered under laws of Nepal on 4th Bhadra,
                        2074 and its registered address is at Buddhana</p>
                    <p>
                        It has acquired a proprietorship company named “Galkot Bhairav Construction” which was established on 8th Mangshir, 2038 B.S.
                        Since the inception of the firm, it has involved in the construction of complete civil works of hy- dropower project, various roadwork etc. Apart from civil works, it has also completed construc- tion of transmission line & switchyard.
                    </p>
                </div>
            </div>

            <div class="col-sm-12 col-lg-7 mt-40 mt-xs-15">
                <div class="row">
                    <div class="col-sm-6 mb-xs-30">
                        <div class="box-title mb-20">
                            <h4>Our Objective</h4>
                        </div>
                        <div class="text-content">
                            <p>
                                <ul>
                                <li>To enhance the quality of construction and design work</li>
                                <li>To complete all the projects through its cost-effective ideas, high quality and optimum
                                utilization of resources</li>
                                <li>To serve with best value for money and high return on project</li>
                                <li>To serve with an environment of professionalism, team work and excellence</li>
                                <li>To build an organization that fosters teamwork, innovation and develops our staff to their maximum potential</li>
                            </ul>
                            </p>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="box-title mb-20">
                            <h4>Our Services</h4>
                        </div>
                        <div class="text-content">
                            <p>
                                We provide professional and quality services in the following sector
                                <ul>
                                <li>Hydropower Projects</li>
                                <li>Tunnel</li>
                                <li>Transmission Line</li>
                                <li>Buildings, Roads and Bridges</li>
                                <li>EPC & EPCF of Hydropower projects</li>
                                <li>Program / Project implementation</li>
                                <li>Survey and design works</li>
                                <li>Equipment rental and Maintenance</li>
                            </ul>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-lg-5 mt-40">
                <ul class="project-gallery text-right">
                    <li>
                        <a href="{{ asset('/public/assets/images/popup/small-1-1.jpg')}}" class="fancylight" data-fancybox-group="light"><img src="assets/images/popup/small-1-1.jpg" alt=""></a>
                    </li>
                    <li>
                        <a href="{{ asset('/public/assets/images/popup/small-2-1.jpg')}}" class="fancylight" data-fancybox-group="light"><img src="assets/images/popup/small-2-1.jpg" alt=""></a>
                    </li>
                    <li>
                        <a href="{{ asset('/public/assets/images/popup/small-3-1.jpg')}}" class="fancylight" data-fancybox-group="light"><img src="assets/images/popup/small-3-1.jpg" alt=""></a>
                    </li>
                    <li>
                        <a href="{{ asset('/public/assets/images/popup/small-4-1.jpg')}}" class="fancylight" data-fancybox-group="light"><img src="assets/images/popup/small-4-1.jpg" alt=""></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>


@endsection
