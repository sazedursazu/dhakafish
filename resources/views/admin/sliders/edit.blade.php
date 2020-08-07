@extends('admin.layouts.master')

@section('content')
<h1>Add New Slider</h1>
<form action="{{route('slider.update',$slider->id)}}" method="post" enctype="multipart/form-data">
	@csrf
	<div class="form-group">
		<label for="category_name">Add Product Category Name</label>
		<input type="text" name="category_name" class="form-control" value="{{$slider->category_name}}">
	</div>
	<div class="form-group">
		<label for="offer_title">Offer Title</label>
		<input type="text" name="offer_title" class="form-control" value="{{$slider->offer_title}}">
	</div>
	<div class="form-group">
		<label for="description">Description</label>
		<input type="text" name="description" class="form-control" value="{{$slider->description}}">
	</div>
	<div class="form-group">
		<label for="button_text">Button Text (optional)</label>
		<input type="text" name="button_text" class="form-control" value="{{$slider->button_text}}">
	</div>
	<div class="form-group">
		<label for="button_link">Button Links (optional)</label>
		<input type="text" name="button_link" class="form-control" value="{{$slider->button_link}}">
	</div>
	<div class="form-group">
		<label for="priority">Priority</label>
		<input type="text" name="priority" class="form-control" value="{{$slider->priority}}">
	</div>
	<div class="form-group">
		<label for="image">Product Image</label>
		<input type="file" name="image" class="form-control">
	</div>

	<button type="submit" class="btn btn-success">Update Slider</button>
</form>


@endsection
