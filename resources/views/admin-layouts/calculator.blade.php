@extends('layouts.app')
@section('content')
<style>
  body{
    background: gray
  }
</style>
<div class="container mt-5 p-5">
<div class="card w-70 mt-5" style="height: 90vh">
  <div class="card-title" style="background: steelblue; padding:20px;"><h1 style="color: #fff; text-align:center"> Quote Calculator </h1></div>
<form action="/calculator" method="post" style="margin-top: 5%; margin-left:30%">
  @csrf
  {{-- <p><input type="number" placeholder="KM" name="distance" disabled><i class="fas fa-arrows-alt-h"></i>
    <input type="text" placeholder="Price"> </p>


     <p><input type="number" placeholder="KG" name="weight"disabled><i class="fas fa-arrows-alt-h"></i>
      <input type="text" placeholder="Price"> 
    </p> --}}
   
    {{-- <p> <select type="number" name="carrier" style="padding: 6px; 
    width:26%; border:1px solid rgb(228, 218, 218); background:#eee">
      {{-- <option value="">Select Carrier</option> --}}
      {{-- <option value="{{$item->distance}}">Bike</option>
      <option value="Tricycle">Tricycle</option>
      <option value="Mini Van">Mini Van</option>
      <option value="Buses">Buses</option>
      <option value="Cars">Cars</option>
   </select><i class="fas fa-arrows-alt-h"></i>
      <input type="text" placeholder="Price"> </p> --}} 
      @include('mail.error')
      @foreach ($data as $item)
      <p><input type="number" placeholder="bike" name="bike" disabled><i class="fas fa-arrows-alt-h"></i>
        <input type="text" placeholder="Price" name="bike" value="{{$item->bike}}"> 
      </p>
      <p><input type="number" placeholder="tricycle" name="distance" disabled><i class="fas fa-arrows-alt-h"></i>
        <input type="text" placeholder="Price" name="tricycle" value="{{$item->tricycle}}"> 
      </p>
      <p><input type="number" placeholder="mini_van" name="distance" disabled><i class="fas fa-arrows-alt-h"></i>
        <input type="text" placeholder="Price" name="mini_van" value="{{$item->mini_van}}"> 
      </p>
      <p><input type="number" placeholder="buses" name="buses" disabled><i class="fas fa-arrows-alt-h"></i>
        <input type="text" placeholder="Price" name="buses" value="{{$item->buses}}"> 
      </p>
      <p><input type="number" placeholder="cars" name="distance" disabled><i class="fas fa-arrows-alt-h"></i>
        <input type="text" placeholder="Price" name="cars" value="{{$item->cars}}"> 
      </p>
  
       <p><input type="number" placeholder="Distance" name="distance" disabled><i class="fas fa-arrows-alt-h"></i>
        <input type="text" placeholder="Price" name="distance" value="{{$item->distance}}"> 
      </p>
      <p><input type="number" placeholder="weight" name="weight" disabled><i class="fas fa-arrows-alt-h"></i>
        <input type="text" placeholder="Price" name="weight"  value="{{$item->weight}}"> 
      </p>
     
<a href="/dashboard">
  <button type="submit"
   class="btn btn-primary mt-4 px-5 p-1">Update</button></a>
</form>
@endforeach
</div>
</div>


@endsection