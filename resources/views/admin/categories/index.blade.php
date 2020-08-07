@extends('admin.layouts.master')

@section('content')
<h1>Manage Category</h1>
<table class="table">
    <thead>
        <tr>
            <th>Id</th>
            <th>Category Name</th>
            <th>Parent Name</th>
            <th>Category Image</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>

        @foreach ($categories as $category)
            <tr>
            <td scope="row">{{$category->id}}</td>
            <td>{{$category->name}}</td>
            <td>
                @if ($category->parent_id==NULL)
                Primary Category

                @else
                {{$category->parent->name}}

                @endif
            </td>
            <td>
                <img src="{{asset('images/categories/'.$category->image)}}" alt="" width="200">
            </td>
            <td>
                <form action="{{route('categories.edit',$category->id)}}" method="get">
                    @csrf
                    <button class="btn btn-primary">Edit</button>
                </form>
                <a href="{{route('categories.delete',$category->id)}}" class="btn btn-danger mt-4">Delete</a>
            </td>
        </tr>
        @endforeach


    </tbody>
</table>
@endsection
