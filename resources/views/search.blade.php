@extends('master')
@section('content')
<div class="custom-product">
  <div class="col-sm-4">
     <a href="">filter</a>
  </div>
  <div class="col-sm-4">

    <div class="searching-item">
        <h4>Result for Products</h4>
        @foreach ($product as $item)
        <div class="searching-items">
          <a href="details/{{$item['id']}}">
              <img class="trending-image" src="{{ $item['gallery'] }}" alt="{{ $item['name'] }}">
              <div class="">
              <h3>{{ $item['name'] }}</h3>
              <h5>{{ $item['description'] }}</h5>
              </div>
          </a>
        </div>
        @endforeach
    </div>

  </div>
</div>
@endsection
