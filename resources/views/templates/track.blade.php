@extends('layouts.app')
@include('components.header')
@section('content')

 <!--  features section start  -->
 <div class="features-section home-2 border-top">
  <div class="container">
     <div class="row feature-content">
        <div class="col-xl-5 offset-xl-7 col-lg-6 offset-lg-6 pr-0">
           <div class="features">
              <h2 class="subtitle">Track My Parcel</h2>
              <div class="feature-lists">
                    <div class="feature-details">
                      <form action="" method="post">
                        @csrf
         
                       <div class="col-lg-6">
                        <label for=""></label>
                        <input type="text" name="coupon" placeholder="YourTrack ID" style="padding:10px 35px;border:1px solid #eee" required> 
                       </div>
                       <div class="col-lg-12">
                        <div class="form-element mt-4"><button type="submit" class="boxed-btn"><span>Submit</span></button></div>
                      </div>
                    </div>
                 </div>
                </form>
                    
                    <div class="feature-details">
                                        
                     @if ($message = Session::get('status'))
                     {{-- <div class="alert alert-success alert-block flash mt-1"> --}}
                        <button type="button" class="close" data-dismiss='alert'>{{$message}}</button>
                     
                     {{-- </div> --}}
                     @endif
                 </div>
                    
                 </div>
              </div>
           </div>
        </div>
     </div>
  </div>
</div>
@include('components.footer')
@section('content')
    
@endsection