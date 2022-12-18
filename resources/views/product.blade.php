@extends('layout.master')
@section('content')
<div class="custom-product">

<div class="trending-wrapper">
  <h3 style="font-family: 'Times New Roman', Times, serif;">Products</h3>  
  @foreach($products as $items)
  <div class="trending-item">
    <a href="detail/{{$items['id']}}">
    <img src="{{$items['gallery']}}" class="trending-image">
    <div class="">
    <h4 style="color: black; font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif; font-weight: normal;">{{$items['name']}}</h4>
    <!-- <h4 style="color: palevioletred; font-weight: bold;">Rs.</h4> -->
    <h4 style="color: palevioletred; font-weight: bold;">IDR {{$items['price']}}</h4>
    
    </div>
    <br> <br> <br> <br>
</a>
  </div>
 
  @endforeach

  
</div>

</div>
</div>

@endsection