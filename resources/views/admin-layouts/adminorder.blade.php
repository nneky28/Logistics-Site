@extends('layouts.app')
@section('content')
<div class="container mt-5 ms-5 p-5 mb-5" style="background: #eee; width:100%; height:auto;">
<div class="card ms-5 " style="height: 100%" >
  <div class="card-header">
    Users Details
  </div>

  <table class="table table-striped table-hover">
    <thead>
      <tr>
        <th scope="col">Order ID</th>
        <th scope="col">Track Number</th>
        <th scope="col">Status</th>
        <th scope="col">Date of Order</th>
        <th scope="col">Update Status</th>
      </th>
      </tr>
    </thead>
    <tbody>
      
      
      @foreach ($order_all as $item) 
      <form action="/orders" method="post">
        @csrf
      <tr data-widget="expandable-table" aria-expanded="false">
        
       
       
   
        <th><input type="text" name="id" value="{{$item['id']}}" readonly> </th>
        <td> <input type="text" name="coupon" value="{{$item['coupon']}}" readonly></td>
        <td> <input type="text" name="status" value="{{$item['status']}}" readonly></td>
        <td> <input type="text" name="updated_at" value="{{$item['updated_at']}}" readonly></td>
        
            <td>
                <button type="submit" name="details" class="badge badge-success"
                 style="border: none; padding:0.6rem 1em; background-color:navy;" value="{{$item['id']}}">Update</button>
            </td>
      </tr>
      </form>
      @endforeach
    </tbody>
  </table>
  {{$order_all->links('vendor.pagination.bootstrap-4')}} 
</div>
</div>

@endsection