@extends('layouts.main')
@section('content')

 <section class="inner-intro bg-img light-color overlay-before parallax-background">
    <div class="container">
      <div class="row title">
      	<div class="title_row">
      		<h1 data-title="Blog"><span>Blog</span></h1>
      		<div class="page-breadcrumb">
							<a>Home</a>/ <span>Blog</span>
						</div>

      	</div>

      </div>
    </div>
  </section>


  <!-- Blog Post Section -->
  <section class="padding pt-xs-40">
    <div class="container">
      <div class="row">
        <!-- Post Item -->
        <div class="col-lg-9">
          <div class="row">
            <div class="col-md-12 col-lg-12 blog-post-hr">
              <div class="blog-post mb-45">
                  <div class="post-media"> <img src="{{ asset('/public/assets/images/blog/img1.jpg')}}" alt="" /><span class="event-calender blog-date"> 21 <span>june</span> </span> </div>
                  <div class="post-meta"> <span>by <a href="javascript:avoid(0);">Admin</a>,</span><span> <a href="javascript:avoid(0);"><i class="fa fa-comment-o"></i> 25</a>,</span><span> <a href="javascript:avoid(0);"><i class="fa fa-heart-o"></i> 57</a>,</span>
                      <div class="post-more-link pull-right">
                          <div class="icons-hover-black"> <a href="#" class="facebook-icon"> <i class="fa fa-facebook"></i> </a><a href="#" class="twitter-icon"> <i class="fa fa-twitter"></i> </a><a href="#" class="googleplus-icon"> <i class="fa fa-google-plus"></i> </a><a href="#" class="linkedin-icon"> <i class="fa fa-linkedin"></i> </a> </div>
                          <a class="btn-text xs-hidden"> <i class="ion-android-share-alt"></i></a> </div>
                  </div>

                <div class="post-header">
                  <h2><a href="blog-detail.html">WASTE RUBBER - SUSTAINABLE CIVIL ENGINEERING</a></h2>
                </div>
                <div class="post-entry">
                  <p> Different types of wastes like plastics, glass waste, industrial byproducts etc., are being used in various applications of Civil Engineering and construction. Rubber with its unique properties of high elasticity is being used in wide range of industries like Automotive, Medical, chemical, healthcare, industrial, military, food processing etc., It is estimated that the global production of Rubber is about 26.9 million tonnes in 2016 and tend to increase annually at an average rate of 2.8% per annum till 2025 (MREPC, IRSG reports).
                  </p>
                </div>
                <div class="post-more-link pull-left"> <a href="blog-detail.html" class="btn-text">Read More</a> </div>
              </div>
              <hr />
              <div class="blog-post mb-45">
                <div class="post-media"> <img src="{{ asset('/public/assets/images/blog/img2.jpg')}}" alt="" /><span class="event-calender blog-date"> 21 <span>june</span> </span> </div>
                <div class="post-meta"> <span>by <a href="javascript:avoid(0);">Admin</a>,</span><span> <a href="javascript:avoid(0);"><i class="fa fa-comment-o"></i> 25</a>,</span><span> <a href="javascript:avoid(0);"><i class="fa fa-heart-o"></i> 57</a>,</span>
                  <div class="post-more-link pull-right">
                    <div class="icons-hover-black"> <a href="#" class="facebook-icon"> <i class="fa fa-facebook"></i> </a><a href="#" class="twitter-icon"> <i class="fa fa-twitter"></i> </a><a href="#" class="googleplus-icon"> <i class="fa fa-google-plus"></i> </a><a href="#" class="linkedin-icon"> <i class="fa fa-linkedin"></i> </a> </div>
                    <a class="btn-text xs-hidden"> <i class="ion-android-share-alt"></i></a> </div>
                </div>
                <div class="post-header">
                  <h2><a href="blog-detail.html">GYROSCOPIC TRANSPORT-FUTURISTIC WAY OF TRAVEL</a></h2>
                </div>
                <div class="post-entry">
                  <p>What if we can use that small gaps on the roads and vehicles of large size move above us while we are driving a car on road? This is the basic vision by Dahir Insaat who proposed GYROSCOPIC Transportation.
                  </p><p>
                      He says “The second level of this mode of transportation has huge potential to provide an efficient, economical, safe, environmentally friendly, comfortable, and maneuverable conveyance that is independent of the general traffic flows on arterial roads. That is because the lane separator between lanes satisfies all of the requirements for the creation of this mode of transportation. It will inevitably take its rightful place as a modern urban form of transportation. It is just simply too tempting to be able to travel without traffic jams at any time of the day or night.” </p>
                </div>
                <div class="post-more-link pull-left"> <a href="blog-detail.html" class="btn-text">Read More</a> </div>
              </div>

              <hr />
              <div class="blog-post mb-45">
                  <div class="post-media"> <img src="{{ asset('/public/assets/images/blog/img3.jpg')}}" alt="" /><span class="event-calender blog-date"> 21 <span>june</span> </span> </div>
                  <div class="post-meta"> <span>by <a href="javascript:avoid(0);">Admin</a>,</span><span> <a href="javascript:avoid(0);"><i class="fa fa-comment-o"></i> 25</a>,</span><span> <a href="javascript:avoid(0);"><i class="fa fa-heart-o"></i> 57</a>,</span>
                      <div class="post-more-link pull-right">
                          <div class="icons-hover-black"> <a href="#" class="facebook-icon"> <i class="fa fa-facebook"></i> </a><a href="#" class="twitter-icon"> <i class="fa fa-twitter"></i> </a><a href="#" class="googleplus-icon"> <i class="fa fa-google-plus"></i> </a><a href="#" class="linkedin-icon"> <i class="fa fa-linkedin"></i> </a> </div>
                          <a class="btn-text xs-hidden"> <i class="ion-android-share-alt"></i></a> </div>
                  </div>

                <div class="post-header">
                  <h2><a href="blog-detail.html">PLASTICS IN CONSTRUCTION – SUSTAINABLE CIVIL ENGINEERING</a></h2>
                </div>
                <div class="post-entry">
                  <p> The importance of sustainability and the usage of sustainable materials in construction are gaining a rapid pace in construction industry. According to UNEP report, Buildings are using almost 40% of the global resources and also responsible for one third of green house gas emissions. So, using alternate resources like plastics in favorable applications not only provide the solution for disposal of these materials but also save resources being depleted. </p>
                </div>
                <div class="post-more-link pull-left"> <a href="blog-detail.html" class="btn-text">Read More</a> </div>
              </div>
              <hr />
              <div class="blog-post mb-45">
                  <div class="post-media"> <img src="{{ asset('/public/assets/images/blog/img4.jpg')}}" alt="" /><span class="event-calender blog-date"> 21 <span>june</span> </span> </div>
                  <div class="post-meta"> <span>by <a href="javascript:avoid(0);">Admin</a>,</span><span> <a href="javascript:avoid(0);"><i class="fa fa-comment-o"></i> 25</a>,</span><span> <a href="javascript:avoid(0);"><i class="fa fa-heart-o"></i> 57</a>,</span>
                      <div class="post-more-link pull-right">
                          <div class="icons-hover-black"> <a href="#" class="facebook-icon"> <i class="fa fa-facebook"></i> </a><a href="#" class="twitter-icon"> <i class="fa fa-twitter"></i> </a><a href="#" class="googleplus-icon"> <i class="fa fa-google-plus"></i> </a><a href="#" class="linkedin-icon"> <i class="fa fa-linkedin"></i> </a> </div>
                          <a class="btn-text xs-hidden"> <i class="ion-android-share-alt"></i></a> </div>
                  </div>
                <div class="post-header">
                  <h2><a href="blog-detail.html">MICROPLASTICS :EVERYTHING YOU NEED TO KNOW</a></h2>
                </div>
                <div class="post-entry">
                  <p>If there is anything other than Climate change that is posing a threat to biosphere, it is Plastic. From the packaging of food we eat to the smart phone we use, Plastic has became a integral part of modern day Human. According to an estimate, Plastic global production has been increased from 1.5 million tonnes during 1950s to 288 million tonnes in 2012 (PlasticsEurope).  Microplastics are minute plastic particles which are formed due to the degradation of larger plastic. Research work has been extensively carried out from past decade to determine whether microplastics are superficial or substantial. </p>
                </div>
                <div class="post-more-link pull-left"> <a href="blog-detail.html" class="btn-text">Read More</a> </div>
              </div>
            </div>
          </div>
          <!-- Pagination Nav -->
          <div class="pagination-nav text-left mt-60 mtb-xs-30">
            <ul>
              <li> <a href="javascript:avoid(0);"><i class="fa fa-angle-left"></i></a> </li>
              <li class="active"> <a href="javascript:avoid(0);">1</a> </li>
              <li> <a href="javascript:avoid(0);">2</a> </li>
              <li> <a href="javascript:avoid(0);">3</a> </li>
              <li> <a href="javascript:avoid(0);"><i class="fa fa-angle-right"></i></a> </li>
            </ul>
          </div>
          <!-- End Pagination Nav -->
        </div>
        <!-- End Post Item -->
        <!-- Sidebar -->
        <div class="col-lg-3 mt-sm-30">
          <div class="sidebar-widget">
            <h5>Search</h5>
            <div class="widget-search pt-15">
              <input class="form-full input-lg" type="text" value="" placeholder="Search Here" name="search" id="wid-search">
              <input type="submit" value="" name="email" id="wid-s-sub">
            </div>
          </div>
          <div class="sidebar-widget">
            <h5>Categories</h5>
            <hr>
            <ul class="categories">
              <li> <a href="#!">simple blog post with image</a> </li>
              <li> <a href="#!">awesome audio post</a> </li>
              <li> <a href="#!">quotes post</a> </li>
              <li> <a href="#!">Neurology</a> </li>
              <li> <a href="#!">awesome video post</a> </li>
              <li> <a href="#!">cool image post</a> </li>
            </ul>
          </div>
          <div class="sidebar-widget">
            <h5>Recent Post</h5>
            <hr>
            <ul class="widget-post pt-15">
              <li> <a class="widget-post-media"> <img src="{{ asset('/public/assets/images/blog/blog-small-img.jpg')}}" alt=""> </a>
                <div class="widget-post-info">
                  <h6><a>veritatis et quasi</a></h6>
                  <div class="post-meta"> <span> <a href="javascript:avoid(0);"><i class="fa fa-heart-o"></i> 57</a>,</span><span>june 16</span> </div>
                </div>
              </li>
              <li> <a class="widget-post-media"> <img src="{{ asset('/public/assets/images/blog/blog-small-img1.jpg')}}" alt=""> </a>
                <div class="widget-post-info">
                  <h6><a>Sed fringilla mauris</a></h6>
                  <div class="post-meta"> <span> <a href="javascript:avoid(0);"><i class="fa fa-heart-o"></i> 57</a>,</span><span>june 16</span> </div>
                </div>
              </li>
              <li> <a class="widget-post-media"> <img src="{{ asset('/public/assets/images/blog/blog-small-img2.jpg')}}" alt=""> </a>
                <div class="widget-post-info">
                  <h6><a>harum quidem rerum</a></h6>
                  <div class="post-meta"> <span> <a href="javascript:avoid(0);"><i class="fa fa-heart-o"></i> 57</a>,</span><span>june 16</span> </div>
                </div>
              </li>
            </ul>
          </div>
          <div class="sidebar-widget">
            <h5>popular Tags</h5>
            <hr>
            <ul class="widget-tag pt-15">
              <li> <a href="#!">Art</a> </li>
              <li> <a href="#!">Business</a> </li>
              <li> <a href="#!">Design</a> </li>
              <li> <a href="#!">Graphic</a> </li>
              <li> <a href="#!">fashion</a> </li>
              <li> <a href="#!">Model</a> </li>
              <li> <a href="#!">Photography</a> </li>
            </ul>
          </div>
        </div>
        <!-- End Sidebar -->
      </div>
    </div>
  </section>
  <!-- End Blog Post Section -->
@endsection

