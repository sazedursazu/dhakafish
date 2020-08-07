
@extends('frontend.layouts.master')
 
 
@section('slider')
 
 <h1>Checkout</h1>
    <form action="{{route('checkout.store')}}" method="post">
    	@csrf
    	<div class="form-group">
    		<label for="shipping_fullname">Shipping FullName</label>
    		<input type="text" name="shipping_fullname" class="form-control">
    	</div>
    	<div class="form-group">
    		<label for="shipping_address">Shipping Address</label>
    		<input type="text" name="shipping_address" class="form-control">
    	</div>
    	<div class="form-group">
    		<label for="shipping_phone">Shipping Mobile Number</label>
    		<input type="phone" name="shipping_phone" class="form-control">
    	</div>
    	<div class="form-group">
    		
    	<button type="submit" class="btn btn-success">Place Order</button>
    	</div>
    </form>
 
@endsection