@extends('admin.layouts.master')

@section('content')
<h1>Edit Product</h1>

<form action="{{route('product.update',$product->id)}}" method="post" enctype="multipart/form-data">
	@csrf
	<div class="form-group">
		<label for="title">Product Title</label>
		<input type="text" name="title" class="form-control" value="{{$product->title}}">
	</div>
	<div class="form-group">
		<label for="description">Product Description</label>
		<input type="text" name="description" class="form-control" value="{{$product->description}}">
	</div>
	<div class="form-group">
		<label for="weight">Product Weight</label>
		<input type="text" name="weight" class="form-control" value="{{$product->weight}}">
	</div>
	<div class="form-group">
		<label for="price">Product Price</label>
		<input type="number" name="price" class="form-control" value="{{$product->price}}">
	</div>
	<div class="form-group">
		<label for="offer_price">Product Offer_Price</label>
		<input type="number" name="offer_price" class="form-control" value="{{$product->offer_price}}">
	</div>
	<div class="form-group">
		<label for="category_id">Product Category Id</label>
		<input type="number" name="category_id" class="form-control" value="{{$product->category_id}}">
	</div>
	<div class="form-group">
		<label for="admin_id">Product Admin Id</label>
		<input type="number" name="admin_id" class="form-control" value="{{$product->admin_id}}">
	</div>
	<div class="form-group">
		<label for="image">Product Image</label>
		<input type="file" name="image" class="form-control">
	</div>

	<button type="submit" class="btn btn-success">Update Product</button>
</form>

@endsection
