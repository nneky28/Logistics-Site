@extends('layouts.app')
 <!--   header area start   -->
 <div class="header-area home-3">
   <div class="info-bar">
      <div class="container">
         <div class="row">
            <div class="col-lg-6">
               <div class="contact-infos">
                  <div class="email">
                     <div class="icon-wrapper"><i class="flaticon-call"></i></div>
                     <div>+ 00 12 123 456</div>
                  </div>
                  <div class="phone">
                     <div class="icon-wrapper"><i class="flaticon-email"></i></div>
                     <div>Support@mail.com</div>
                  </div>
               </div>
            </div>
            <div class="col-lg-6">
               <div class="right-content">
                  <ul class="social-links">
                     <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                     <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                     <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                     <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                  </ul>
                  <div class="language">
                     <a href="#" class="dropdown-btn">EN <i class="flaticon-down-arrow"></i></a>
                     <ul class="language-dropdown">
                        <li>
                           <a href="#">English</a>
                        </li>
                        <li>
                           <a href="#">French</a>
                        </li>
                        <li>
                           <a href="#">Spanish</a>
                        </li>
                        <li>
                           <a href="#">Arabic</a>
                        </li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="support-nav-area">
      <div class="container sticky-top">
         <div class="row">
            <div class="col-lg-2 col-6">
               <div class="logo-wrapper">
                  <div class="logo-wrapper-inner">
                     {{-- <a href=""><img src="assets/img/logo-3.png" alt=""></a> --}}
                     <h1 style="font-family: cursive;color:#fff; font-size:300%; font-weight:bold">LuXury</h1>
                  </div>
               </div>
            </div>
            <div class="col-lg-10 col-6 sticky-top">
               <div class="navbar-area">
                  <div class="row">
                     <div class="col-12 position-static">
                        <nav class="main-menu" id="mainMenuHome3">
                           <ul>
                              <li class="">
                                 <a href="/home">Home</a>
                              </li>
                              <li>
                                 <a href="/about">About Us</a>
                              </li>
                              <li class="">
                                 <a href="/quote">Quote</a>
                                
                              </li>
                              <li class="">
                                 <a href="/blog">Blog</a>
                                 
                              </li>
                              <li class="">
                                 <a href="/services">Services</a>
                                
                              </li>
                              <li class="">
                                 <a href="/track">Track My Parcel</a>
                                 
                              </li>
                              <li>
                                 <a href="/contact">Contact</a>
                              </li>
                             
                           </ul>
                        </nav>
                        <div id="mobileMenuHome3"></div>
                        <ul class="search-cart-area">
                           <li class="search-icon"><a href="#"><i class="flaticon-search"></i></a></li>
                           <li class="shopping-icon">
                              <a href="#"><i class="flaticon-shopping-cart-black-shape"></i></a>
                              <span class="count">0</span>
                           </li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>

<!--   header area end   -->


<!--   search bar popup start   -->
<div class="search-popup">
   <form class="search-form" action="#">
      <div class="form-element"><input type="text" placeholder="Type your search keyword"></div>
   </form>
   <div class="search-popup-overlay" id="searchOverlay"></div>
   <button class="search-close-btn" id="searchCloseBtn"><i class="fas fa-times"></i></button>
</div>
<!--   search bar popup end   -->  


<!--  hero area start  -->
<div class="hero-area hero-bg-3 home-3">
   <div class="container">
      <div class="row">
         <div class="col-xl-6 col-lg-8">
            <div class="hero-txt">
               <span class="wow fadeInDown" data-wow-duration="1.5s">We are LUXURY</span>
               <h1 class="wow fadeInUp" data-wow-duration="1.5s">No# 1 solution for LOGISTICS</h1>
               <a class="wow fadeInUp boxed-btn" data-wow-duration="1.5s" href="services.html"><span>SEE SERVICES</span></a>
            </div>
         </div>
      </div>
   </div>
   <div class="hero-overlay"></div>
</div>
<!--  hero area end  -->



    
