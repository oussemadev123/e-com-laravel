@extends('master')
@section('content')
<div class="custom-product">
  <div class="col-sm-10">
    <div class="searching-item">
        <h4>Cart List</h4>
        <a class="btn btn-success" href="ordernow">Order Now</a><br><br>
        @foreach ($products as $item)
        <div class="row searching-items cart-list-devider">
          <div class="col-sm-3">
            <a href="details/{{$item->id}}">
                <img class="trending-image" src="{{ $item->gallery }}" alt="{{ $item->name }}">
            </a>
          </div>
          <div class="col-sm-4">
                <h3>{{ $item->name }}</h3>
                <h5>{{ $item->description }}</h5>
          </div>
          <div class="col-sm-3">
              <a href="/removecart/{{$item->cart_id}}" class="btn btn-warning">Remove To Cart</a>
          </div>
        </div>
        @endforeach
    </div>
    <a class="btn btn-success" href="ordernow">Order Now</a><br><br>
  </div>
</div>
@endsection
