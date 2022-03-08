@extends('layouts.app')
@include('components.header')
@section('content')
    

      <!--   search bar popup start   -->
      <div class="search-popup">
         <form class="search-form" action="#">
            <div class="form-element"><input type="text" placeholder="Type your search keyword"></div>
         </form>
         <div class="search-popup-overlay" id="searchOverlay"></div>
         <button class="search-close-btn" id="searchCloseBtn"><i class="fas fa-times"></i></button>
      </div>
      <!--   search bar popup end   -->  


      <!--  breadcrumb start  -->
      <div class="breadcrumb-area services-breadcrumb-bg">
         <div class="container">
            <div class="row">
               <div class="col-lg-8">
                  <div class="breadcrumb-txt">
                     <span>Services</span>
                     <h1>we provide best services</h1>
                     <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                           <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                           <li class="breadcrumb-item active" aria-current="page">Services</li>
                        </ol>
                     </nav>
                  </div>
               </div>
            </div>
         </div>
         <div class="breadcrumb-overlay"></div>
      </div>
      <!--  breadcrumb end  -->


      <!--  service section start  -->
      <div class="service-section services">
         <div class="container">
            <span class="title">Our Services</span>
            <h2 class="subtitle">WHAT WE PROVIDE</h2>
            <div class="row">
               <div class="col-lg-4 col-md-6">
                  <div class="single-service wow fadeInRight" data-wow-duration="1s">
                     <div class="img-wrapper">
                        <img src="assets/img/services/service_1.jpg" alt="">
                     </div>
                     <div class="service-txt">
                        <h4 class="service-title">Air Freight</h4>
                        <p class="service-para">We offers a host of logistic management services and supply chain solutions. consectetur adipiscing elit.</p>
                        <a href="service-details.html" class="readmore">Read More</a>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4 col-md-6">
                  <div class="single-service wow fadeInRight" data-wow-duration="1s" data-wow-delay=".2s">
                     <div class="img-wrapper">
                        <img src="assets/img/services/service_2.jpg" alt="">
                     </div>
                     <div class="service-txt">
                        <h4 class="service-title">Road Freight</h4>
                        <p class="service-para">We offers a host of logistic management services and supply chain solutions. consectetur adipiscing elit.</p>
                        <a href="service-details.html" class="readmore">Read More</a>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4 col-md-6">
                  <div class="single-service wow fadeInRight" data-wow-duration="1s" data-wow-delay=".4s">
                     <div class="img-wrapper">
                        <img src="assets/img/services/service_3.jpg" alt="">
                     </div>
                     <div class="service-txt">
                        <h4 class="service-title">Ocean Freight</h4>
                        <p class="service-para">We offers a host of logistic management services and supply chain solutions. consectetur adipiscing elit.</p>
                        <a href="service-details.html" class="readmore">Read More</a>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4 col-md-6">
                  <div class="single-service wow fadeInRight" data-wow-duration="1s">
                     <div class="img-wrapper">
                        <img src="assets/img/services/service_4.jpg" alt="">
                     </div>
                     <div class="service-txt">
                        <h4 class="service-title">Warehousing</h4>
                        <p class="service-para">We offers a host of logistic management services and supply chain solutions. consectetur adipiscing elit.</p>
                        <a href="service-details.html" class="readmore">Read More</a>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4 col-md-6">
                  <div class="single-service wow fadeInRight" data-wow-duration="1s" data-wow-delay=".2s">
                     <div class="img-wrapper">
                        <img src="assets/img/services/service_5.jpg" alt="">
                     </div>
                     <div class="service-txt">
                        <h4 class="service-title">Storage</h4>
                        <p class="service-para">We offers a host of logistic management services and supply chain solutions. consectetur adipiscing elit.</p>
                        <a href="service-details.html" class="readmore">Read More</a>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4 col-md-6">
                  <div class="single-service wow fadeInRight" data-wow-duration="1s" data-wow-delay=".4s">
                     <div class="img-wrapper">
                        <img src="assets/img/services/service_6.jpg" alt="">
                     </div>
                     <div class="service-txt">
                        <h4 class="service-title">Packaging</h4>
                        <p class="service-para">We offers a host of logistic management services and supply chain solutions. consectetur adipiscing elit.</p>
                        <a href="service-details.html" class="readmore">Read More</a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!--  service section end  -->


      <!--   quote section start    -->
      <div class="quote-section quote-bg">
         <div class="container">
            <div class="row">
               <div class="offset-lg-5 col-lg-7">
                  <div class="quote-form-section">
                     <span class="title">Quote</span>
                     <h2 class="subtitle">Request a free qoute</h2>
                     <form action="#">
                        <div class="row">
                           <div class="col-lg-6">
                              <div class="form-element"><input name="name" type="text" placeholder="You name"></div>
                           </div>
                           <div class="col-lg-6">
                              <div class="form-element">
                                 <div class="select-wrapper">
                                    <select name="freight">
                                       <option value="" selected disabled>Select a Freight</option>
                                       <option value="">Air Freight</option>
                                       <option value="">Ocean Freight</option>
                                       <option value="">Road Freight</option>
                                    </select>
                                 </div>
                              </div>
                           </div>
                           <div class="col-lg-6">
                              <div class="form-element"><input name="email" type="email" placeholder="Email"></div>
                           </div>
                           <div class="col-lg-6">
                              <div class="form-element"><input name="phone" type="text" placeholder="Phone"></div>
                           </div>
                           <div class="col-lg-12">
                              <div class="form-element mb-0"><button type="submit" class="boxed-btn"><span>Submit</span></button></div>
                           </div>
                        </div>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!--   quote section end    -->     


      <!--  features section start  -->
      <div class="features-section home-2 border-bottom">
         <div class="container">
            <div class="row feature-content">
               <div class="col-xl-5 offset-xl-7 col-lg-6 offset-lg-6 pr-0">
                  <div class="features">
                     <span class="title">Features</span>
                     <h2 class="subtitle">WHY CHOOSE US</h2>
                     <div class="feature-lists">
                        <div class="single-feature wow fadeInUp" data-wow-duration="1s">
                           <div class="icon-wrapper"><i class="flaticon-customer-service"></i></div>
                           <div class="feature-details">
                              <h4>24/7 support</h4>
                              <p>We offers logistic management services and supply chain perspiciatis unde omnis iste natus error sit voluptat. </p>
                           </div>
                        </div>
                        <div class="single-feature wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s">
                           <div class="icon-wrapper"><i class="flaticon-email"></i></div>
                           <div class="feature-details">
                              <h4>On time delivery</h4>
                              <p>We offers logistic management services and supply chain perspiciatis unde omnis iste natus error sit voluptat. </p>
                           </div>
                        </div>
                        <div class="single-feature wow fadeInUp" data-wow-duration="1s" data-wow-delay=".4s">
                           <div class="icon-wrapper"><i class="flaticon-worldwide"></i></div>
                           <div class="feature-details">
                              <h4>global service</h4>
                              <p>We offers logistic management services and supply chain perspiciatis unde omnis iste natus error sit voluptat.</p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!--  features section end  -->


      <!--   partner section start    -->
      <div class="partner-section">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="partner-carousel owl-carousel owl-theme">
                     <div class="single-partner-item">
                        <div class="outer">
                           <div class="inner">
                              <img src="assets/img/partner-1.png" alt="">
                           </div>
                        </div>
                     </div>
                     <div class="single-partner-item">
                        <div class="outer">
                           <div class="inner">
                              <img src="assets/img/partner-2.png" alt="">
                           </div>
                        </div>
                     </div>
                     <div class="single-partner-item">
                        <div class="outer">
                           <div class="inner">
                              <img src="assets/img/partner-3.png" alt="">
                           </div>
                        </div>
                     </div>
                     <div class="single-partner-item">
                        <div class="outer">
                           <div class="inner">
                              <img src="assets/img/partner-4.png" alt="">
                           </div>
                        </div>
                     </div>
                     <div class="single-partner-item">
                        <div class="outer">
                           <div class="inner">
                              <img src="assets/img/partner-5.png" alt="">
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!--   partner section end    -->


      <!--   cta section start    -->
      <div class="cta-section cta-bg">
         <div class="container">
            <div class="cta-container">
               <div class="row align-items-center">
                  <div class="col-lg-9">
                     <h2 class="mb-lg-0 text-center text-lg-left">Reach your destination 100% safe & secure</h2>
                  </div>
                  <div class="col-lg-3 text-center text-lg-right">
                     <a href="contact.html" class="boxed-btn"><span>Contact Us</span></a>
                  </div>
               </div>
            </div>
         </div>
         <div class="cta-overlay"></div>
      </div>
      <!--   cta section end    -->

@include('components.footer')
@endsection