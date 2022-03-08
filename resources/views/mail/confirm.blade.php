
@extends('layouts.app')
@section('content')
<!-- Main content -->
<section class="content">
  <div class="container-fluid mt-5 ms-5 p-5">
    <div class="row">
      <!-- left column -->
      <div class="col-md-12">
        <!-- jquery validation -->
        <div class="card card-primary w-50">
          <div class="card-header" style="text-align: center;">
            <h1 class="card-title" >SignIn</h1>
          </div>
          <!-- /.card-header -->
          <!-- form start -->
          <form id="quickForm" action="" method="POST">
            @include('mail/error')
            @csrf
            <div class="card-body">
              
              <p></p>
              <div class="form-group">
                <label for="exampleInputPassword1">Token</label>
                <input type="password" name="coupon" class="form-control" id="exampleInputPassword1" placeholder="insert token">
                <div class="red-text" style="color: red;font-family:cursive; font-weight:700">@error('token'){{$message}}@enderror</div>
              </div>
            </div>
            <div class="card-footer">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
          </form>
        </div>
        </div>
      <div class="col-md-6">

      </div>
    </div>
  </div>
</section>
</div>   
@endsection