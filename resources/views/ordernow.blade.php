@extends('layout.master')
@section('content')
<div class="custom-product">

<div class="col-sm-10">
<table class="table table-striped">
    <tbody>
      <tr>
        <td>Amount</td>
        <td>IDR {{$total}}</td>
      </tr>
      <tr>
        <td>Tax</td>
        <td>IDR 0</td>
      </tr>
      <tr>
        <td>Delivery</td>
        <td>IDR 10000</td>
        
      </tr>
      <tr>
        <td>Total Amount</td>
        <td>IDR {{$total+10000}}</td>
        
      </tr>
    </tbody>
  </table>
  <div>
  <form action="/orderplace" method="POST">
    @csrf
  <div class="form-group">
    <textarea name="address" type="email" placeholder="Enter Your Address" class="form-control"></textarea>
  </div>
  <div class="form-group">
      <p>
    <label for="pwd">Payment Method</label>
</p>
    <input type="radio" value="cash" name="payment"><span>Credit/Debit</span><br>
    <input type="radio" value="cash" name="payment"><span>COD</span>
  </div>
  <button type="submit" class="btn btn-default order">Order Now</button>
</form>
  </div>
</div>
</div>

@endsection