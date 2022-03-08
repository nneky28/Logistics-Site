@extends('layouts.app')
@section('content')

<style>

@import url(https://fonts.googleapis.com/css?family=Open+Sans:600,300);

.frame {
  position: absolute;
  top: 50%;
  left: 50%;
  width: 400px;
  height: 70vh;
  margin-left: -500px;
  margin-top: -300px;
  border-radius: 2px;
  box-shadow: 1px 2px 10px 0px rgba(0,0,0,0.3);
	background: #CA7C4E;
  background: -webkit-linear-gradient(bottom left, #EEBE6C 0%, #CA7C4E 100%);
  background: -moz-linear-gradient(bottom left, #EEBE6C 0%, #CA7C4E 100%);
  background: -o-linear-gradient(bottom left, #EEBE6C 0%, #CA7C4E 100%);
  background: linear-gradient(to top right, #EEBE6C 0%, #CA7C4E 100%); 
  filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#EEBE6C', endColorstr='#CA7C4E',GradientType=1 ); 
  color: $brown;
	font-family: 'Open Sans', Helvetica, sans-serif;
	-webkit-font-smoothing: antialiased;
	-moz-osx-font-smoothing: grayscale;
}

.center {
  position: absolute;
  top: 50px;
  left: 40px;
	height: 80%;
	width: 320px;
	background: #fff;
	border-radius: 3px;
	overflow: hidden;
	box-shadow: 10px 10px 15px 0 rgba(0,0,0,0.3);
}

.profile {
	float: left;
	width: 200px;
	height: 55vh;
	text-align: center;
}
	
	.image {
		position: relative;
		width: 70px;
		height: 70px;
		margin: 38px auto 0 auto;
  }			
</style>

<div class="frame">
  <div class="center">
    {{-- @foreach ($order_all as $item)  --}}
    <form action="/update" method="post">
      @csrf
    <div class="col">
      <label for="">Name:{{$order_all->name}}</label>
      {{-- <input type="text" name="name" value="{{$item['name']}}" readonly> --}}
    </div>

    <div class="col">
      <label for="">Email:{{$order_all->email}}</label>
    </div>

    <div class="col">
      <label for="">Pickup Address:{{$order_all->pickup_address}}</label>
    </div> 
    
   <div class="col">
      <label for="">Phone Number:{{$order_all->phone_number}}</label>
    </div> 
    
   <div class="col">
      <label for="">DropOff Address:{{$order_all->drop_address}}</label>
    </div> 

    <div class="col">
      <label for="">Distance:{{$order_all->distance}}</label>
    </div>

    <div class="col">
      <label for="">Weight:{{$order_all->weight}}</label>
    </div>

    <div class="col">
      <label for="">Track-ID:</label>
      <input type="text" name="coupon" value="{{$order_all->coupon}}">
    </div>
   
    <div class="col">
      <select name="status" >
        <option value="" selected disabled>Update Status</option>
        <option value="pending">Pending</option>
        <option value="In-transit">In-transit</option>
        <option value="completed">Completed</option>
     </select>
    </div>

    <div class="col">
    <button type="submit" class="btn btn-dark px-4 mt-5">Save</button>
    </div>
  </form>
  {{-- @endforeach --}}
</div>
  </div>
</div>
@endsection