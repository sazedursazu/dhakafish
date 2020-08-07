@extends('admin.layouts.master')

@section('content')
<h1>Add Category</h1>
<form action="{{route('categories.store')}}" enctype="multipart/form-data" method="POST">
    @csrf
<div class="form-group">
  <label for="name">Category Name</label>
  <input type="text" name="name" id="" class="form-control" placeholder="" aria-describedby="helpId">

</div>
<div class="form-group">
    <label for="description">Description</label>
    <input type="text" name="description" id="" class="form-control" placeholder="" aria-describedby="helpId">
  </div>
  <div class="form-group">
    <label for="image">Category Image</label>
    <input type="file" name="image" id="" class="form-control" placeholder="" aria-describedby="helpId">
  </div>
  <div class="form-group">
    <label for="parent_id">Primary Category</label>
   <select name="parent_id" id="" class="form-control">
       <option value="">Select Primary Category</option>
        @foreach (App\Category::orderBy('name','asc')->where('parent_id',NULL)->get() as $category)
            <option value="{{$category->id}}">{{$category->name}}</option>
        @endforeach
   </select>
  </div>
  <button type="submit" class="btn btn-success">Save Category</button>
</form>

@endsection
