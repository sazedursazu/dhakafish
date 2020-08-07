@extends('admin.layouts.master')

@section('content')
<h1>Add Product</h1>

<form action="{{route('product.store')}}" method="post" enctype="multipart/form-data">
	@csrf
	<div class="form-group">
		<label for="title">Product Title</label>
		<input type="text" name="title" class="form-control">
	</div>
	<div class="form-group">
		<label for="description">Product Description</label>
		<input type="text" name="description" class="form-control">
	</div>
	<div class="form-group">
		<label for="weight">Product Weight</label>
		<input type="text" name="weight" class="form-control">
	</div>
	<div class="form-group">
		<label for="price">Product Price</label>
		<input type="number" name="price" class="form-control">
	</div>
	<div class="form-group">
		<label for="offer_price">Product Offer_Price</label>
		<input type="number" name="offer_price" class="form-control">
	</div>
	 <div class="form-group">
    <label for="category_id">Add Category</label>
   <select name="category_id" id="" class="form-control">
       <option value="">Select Category</option>
        @foreach ($categories as $category)
            <option value="{{$category->id}}" {{$category->id==$category->parent_id ? 'selected':''}}>{{$category->name}}</option>
        @endforeach
   </select>
  </div>
	<div class="form-group">
		<label for="admin_id">Product Admin Id</label>
		<input type="number" name="admin_id" class="form-control">
	</div>
	<div class="form-group">
		<label for="image">Product Image</label>
		<input type="file" name="image" class="form-control">
	</div>

	<button type="submit" class="btn btn-success">Save Product</button>
</form>

@endsection
