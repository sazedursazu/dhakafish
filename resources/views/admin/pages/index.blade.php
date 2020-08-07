@extends('admin.layouts.master')

@section('content')
<div class="card">
    <img class="card-img-top" src="holder.js/100x180/" alt="">
    <div class="card-body">
        <h4 class="card-title">Welcome To Your Administrator Panel</h4>
    <a href="{{route('products.index')}}" class="btn btn-success" target="_blank">Visit Site</a>
    </div>
</div>

@endsection
