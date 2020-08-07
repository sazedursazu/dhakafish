@extends('frontend.layouts.master')

@section('slider')


    <h1>Your Cart</h1>

    <table class="table">
  <thead>
    <tr>
      
      <th scope="col">Product Name</th>
      <th scope="col">Price</th>
      <th scope="col">Quantity</th>
      <th scope="col">Action</th>

    </tr>
  </thead>
  <tbody>
  	@foreach($cartItems as $item)
    <tr>
      <td>{{$item->name}}</td>
      <td>

      	{{Cart::get($item->id)->getPriceSum()}} Taka

      </td>
      <td>
      	<form action="{{route('cart.update',$item->id)}}" method="post">
      		@csrf
      	<input type="number" name="quantity" value="{{$item->quantity}}">
      	<input type="submit" value="save">
      	</form>
      	

      </td>
      <td><a href="{{route('cart.delete',$item->id)}}" class="btn btn-danger">Delete</a></td>
    </tr>
    
    @endforeach

  </tbody>
</table>
<div class="total">
    	<h4>Total Price- {{Cart::getTotal()}} Taka</h4>

  </div>
<a href="{{route('cart.checkout')}}" class="btn btn-success">Place Order</a>
@endsection