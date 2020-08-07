@extends('admin.layouts.master')

@section('content')
<h1>Edit Category</h1>
 <form action="{{route('categories.update',$category->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                <label for="name">Category Name</label>
                <input type="text" name="name" id="" class="form-control" placeholder="" aria-describedby="helpId" value="{{$category->name}}">
                </div>
                <div class="form-group">
                  <label for="description">Description</label>
                  <textarea class="form-control" name="description" id="" cols="30" rows="10">{{$category->description}}</textarea>

                </div>

                  <div class="form-group">
                    <label for="parent_id">Select Category</label>
                    <select name="parent_id" class="form-control" id="">
                        <option value="">Select Primary Category</option>
                        @foreach ($categories as $cat)

                        <option value="{{$cat->id}}" {{$cat->id==$category->parent_id? 'selected':''}}>
                        {{$category->name}}
                        </option>

                        @endforeach
                    </select>

                  </div>
                  <div class="form-group">
                    <label for="oldimage">Old Category Image</label><br>
                    <img src="{{asset('images/categories/'.$category->image)}}" width="200"><br><br>
                     <input type="file" name="image" id="image" class="form-control" placeholder="" aria-describedby="helpId">
                  </div>
                  <div class="form-group">
                    <input type="submit" value="Update Category" id="" class="form-control btn btn-primary" placeholder="" aria-describedby="helpId">
                  </div>
             </form>

@endsection
