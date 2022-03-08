@extends('layouts.app')
@section('content')

<div class="container mt-5 ms-5 p-5 mb-5" style="background: #eee; width:100%; height:95vh;">


  <form action="#" method="POST" enctype="multipart/form-data">
   @include('mail.error')
     @csrf
     <div class="row">       
        </div>
        <div class="col-md-12">
         <div class="form-element"><input type="file" placeholder="" name="image"></div>
         
      </div>
     
        <div class="col-md-12">
           <div class="">
              <textarea name="content" value=""
              cols="80" rows="20" placeholder="Content">
              {{$output->content}}
              </textarea>
             
           </div>
        </div>
        <div class="col-md-12">
           <div class="form-element">
              
        <a href=""><button type="submit"
          style="padding: 7px 25px;"
          class="btn btn-primary">Edit</button></a>
           </div>
        </div>
   
  </form>
</div>

</div>
</div>











{{-- 
<div class="container">
<div class="row mt-5 p-4">
  
<div class="row">
  <div class="container mt-5 p-5 " style="width: 100%; height:80vh">
  <form action="" method="post" enctype="multipart/form-data">

    @csrf
    <input type="file" name="image">

    <textarea name="" id="" cols="80" rows="20">
  
</textarea>
</form>


</div>

</div> --}}


@endsection