@extends('admin.layouts.master')

@section('content')

<table class="table">
  <thead>
    <tr>
      
      <th scope="col-1">Id</th>
      <th scope="col-1">Customer Name</th>
      <th scope="col-1">Address</th>
      <th scope="col-1">Phone Number</th>
     
      <th scope="col-1">Grand Total</th>
      <th scope="col-1">Item Count</th>
      <th scope="col-1">Item price</th>
      <th scope="col-1">Action</th>

    </tr>
  </thead>
  <tbody>
  	@foreach($orders as $order)
    <tr>
      <td>{{$order->id}}</td>
      <td>{{$order->shipping_fullname}}</td>
      <td>{{$order->shipping_address}}</td>
      <td>{{$order->shipping_phone}}</td>
     
      <td>{{$order->grand_total}} taka</td>
      <td>{{$order->item_count}}</td>
      @foreach($order->items as $item)
      <td>
      	{{$item->price}}
      </td>  
      @endforeach
      <td>
      	<a href="{{route('item.delete',$order->id)}}" class="btn btn-danger">Delete</a>
      </td>
    </tr>
    @endforeach

  </tbody>
</table>

@endsection
