@extends('admin.layouts.master')

@section('content')
<h1>Add New Slider</h1>
<form action="{{route('slider.store')}}" method="post" enctype="multipart/form-data">
	@csrf
	<div class="form-group">
		<label for="category_name">Add Product Category Name</label>
		<input type="text" name="category_name" class="form-control">
	</div>
	<div class="form-group">
		<label for="offer_title">Offer Title</label>
		<input type="text" name="offer_title" class="form-control">
	</div>
	<div class="form-group">
		<label for="description">Description</label>
		<input type="text" name="description" class="form-control">
	</div>
	<div class="form-group">
		<label for="button_text">Button Text (optional)</label>
		<input type="text" name="button_text" class="form-control">
	</div>
	<div class="form-group">
		<label for="button_link">Button Links (optional)</label>
		<input type="text" name="button_link" class="form-control">
	</div>
	<div class="form-group">
		<label for="priority">Priority</label>
		<input type="text" name="priority" class="form-control">
	</div>
	<div class="form-group">
		<label for="image">Product Image</label>
		<input type="file" name="image" class="form-control">
	</div>

	<button type="submit" class="btn btn-success">Add Slider</button>
</form>


@endsection
