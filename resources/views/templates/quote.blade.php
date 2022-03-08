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
      <div class="breadcrumb-area quote-breadcrumb-bg">
         <div class="container">
            <div class="row">
               <div class="col-lg-7">
                  <div class="breadcrumb-txt">
                     <span>Quote</span>
                     <h1>request a quote for delivery</h1>
                     <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                           <li class="breadcrumb-item"><a href="/home">Home</a></li>
                           <li class="breadcrumb-item active" aria-current="page">Quote</li>
                        </ol>
                     </nav>
                  </div>
               </div>
            </div>
         </div>
         <div class="breadcrumb-overlay"></div>
      </div>
      <!--  breadcrumb end  -->


      <!--   quote section start    -->
      <div class="quote-section quote-page">
         <div class="container">
            <div class="row">
               <div class="col-xl-6 col-lg-6">
                  <div class="row">
                     <div class="col-lg-9">
                        <span class="title">Quote</span>
                        <h2 class="subtitle">Request a quote</h2>
                     </div>
                  </div>
                  @include('mail.error')
                  <form action="#" method="post">
                     @csrf
                     <div class="red-text" style="color: red; font-family:cursive; font-weight:700">@error('email'){{$message}}@enderror</div>
                     
                     <div class="row">
                        <div class="col-lg-6">
                           <div class="form-element"><input name="name" type="text" placeholder="Your name"></div>
                        </div>
                  
                        <div class="col-lg-6">
                           <div class="form-element">
                              <div class="select-wrapper">
                                 <select name="carrier" >
                                    <option value="" selected disabled>Select Carrier</option>
                                    <option value="Bike">Bike</option>
                                    <option value="Tricycle">Tricycle</option>
                                    <option value="Mini Van">Mini Van</option>
                                    <option value="Buses">Buses</option>
                                    <option value="Cars">Cars</option>
                                 </select>
                              </div>
                           </div>
                        </div>
                        <div class="col-lg-6">
                           <div class="form-element"><input name="email" type="email" placeholder="Email"></div>
                        </div>

                        <div class="col-lg-6">
                           <div class="form-element"><input name="phone_number" type="text" placeholder="Phone"></div>
                        </div>

                        <div class="col-lg-6">
                           <div class="form-element"><input name="drop_address" type="text" placeholder="Drop off Address"></div>
                        </div>

                        <div class="col-lg-6">
                           <div class="form-element"><input name="weight" type="text" placeholder="Weight(in Kg)"></div>
                        </div>

                        <div class="col-lg-6">
                           <div class="form-element"><input name="pickup_address" type="text" placeholder="pick-up address"></div>
                        </div>

                        <div class="col-lg-6">
                           <div class="form-element"><input name="distance" type="text" placeholder="Distance(in Km)"></div>
                        </div>
                        <div class="col-lg-12">
                           <div class="form-element mb-0"><button type="submit" name="submit"class="boxed-btn"><span> <a href=""> Submit </a></span></button></div>
                        </div>


                     </div>
                  </form>
               </div>
               <!--  contact infos start  -->
               <div class="col-xl-5 offset-xl-1 col-lg-6">
                  <div class="contact-infos">
                     <div class="single-info">
                        <div class="icon-wrapper"><i class="fas fa-home"></i></div>
                        <div class="info-txt">
                           <p>143 castle road 517</p>
                           <p>district, kiyev port south Canada</p>
                        </div>
                     </div>
                     <div class="single-info">
                        <div class="icon-wrapper"><i class="fas fa-phone"></i></div>
                        <div class="info-txt">
                           <p>+3 123 456 789</p>
                           <p>+1 222 345 342</p>
                        </div>
                     </div>
                     <div class="single-info">
                        <div class="icon-wrapper"><i class="far fa-envelope"></i></div>
                        <div class="info-txt">
                           <p>info@yourmail.com</p>
                           <p>transpix@yourmail2.com</p>
                        </div>
                     </div>
                  </div>
               </div>
               <!--  contact infos end  -->
            </div>
         </div>
      </div>
      <!--   quote section end    -->


      <!--  features section start  -->
      <div class="features-section home-2 border">
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
         <div class="container border-bottom">
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

@include('components.footer')
@endsection