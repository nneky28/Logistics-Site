@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="card mt-5 w-50">
          <div class="card-title text-center p-3" style="background-color:navy;color:#fff">
              USER DETAILS
          </div>
          {{-- @foreach ($output as $item) --}}
          <div class="card-body" style="font-size:20px">
            
            <div class="col">
              <label for="">Name:{{$output->name}}</label>
            </div>

            <div class="col">
              <label for="">Email:{{$output->email}}</label>
            </div>

            <div class="col">
              <label for="">Phone:{{$output->phone}}</label>
            </div>

            <div class="col">
              <label for="">Subject:{{$output->subject}}</label>
            </div>

            <div class="col">
              <label for="">Comment:{{$output->comment}}</label>
            </div>
          </div>
          {{-- @endforeach --}}
        </div>
    </div>
@endsection