@extends('master')
@section('content')
<div class="custom-product">
  <div class="col-sm-10">
    <div class="searching-item">
        <h4>My Orders</h4>
        @foreach ($orders as $item)
        <div class="row searching-items cart-list-devider">
          <div class="col-sm-3">
            <a href="details/{{$item->id}}">
                <img class="trending-image" src="{{ $item->gallery }}" alt="{{ $item->name }}">
            </a>
          </div>
          <div class="col-sm-4">
                <h3>Name : {{ $item->name }}</h3>
                <h5>Delivery Status : {{ $item->status }}</h5>
                <h4>Adress : {{ $item->adress }}</h4>
                <h5>Payement : {{ $item->status_payment }}</h5>
                <h5>Payement Method: {{ $item->method_payment }}</h5>

          </div>
        </div>
        @endforeach
    </div>
  </div>
</div>
@endsection
