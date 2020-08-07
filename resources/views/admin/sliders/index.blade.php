@extends('admin.layouts.master')

@section('content')

<table class="table">
    <thead>
        <tr>
            <th>Id</th>
            <th>Category Name</th>
            <th>Offer Title</th>
            <th>Description</th>
            <th>Image</th>
            <th>Button Text</th>
            <th>Button Link</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>

        @foreach ($sliders as $slider)
            <tr>
            <td>{{$slider->id}}</td>
            <td scope="row">{{$slider->category_name}}</td>
            <td>{{$slider->offer_title}}</td>
            <td>{{$slider->description}}</td>
            <td>
                <img src="{{asset('images/sliders/'.$slider->image)}}">
            </td>
            <td>{{$slider->button_text}}</td>
            <td>{{$slider->button_link}}</td>
            <td>
                <form action="{{route('slider.delete',$slider->id)}}" method="get">
                    @csrf
                <button type="submit" class="btn btn-danger">Delete</button>
                </form>

                <a href="{{route('slider.edit',$slider->id)}}" class="btn btn-success">Edit</a>
            </td>

        </tr>
        @endforeach


    </tbody>
</table>

@endsection