@extends('admin.layouts.master')

@section('content')
<h1>Manage Products</h1>

<table class="table">
    <thead>
        <tr>
            <th>Id</th>
            <th>Title</th>
            <th>Price</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>

        @foreach ($products as $product)
            <tr>
            <td>{{$product->id}}</td>
            <td scope="row">{{$product->title}}</td>
            <td>{{$product->price}}</td>
            <td>
                <form action="{{route('product.delete',$product->id)}}" method="get">
                    @csrf
                <button type="submit" class="btn btn-danger">Delete</button>
                </form>

            </td>

        </tr>
        @endforeach


    </tbody>
</table>
@endsection
