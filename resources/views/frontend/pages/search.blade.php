@extends('frontend.layouts.master')

@section('slider')

 <!-- Categories Section Begin -->
   
    <!-- Categories Section End -->

    <!-- Featured Section Begin -->
    <section class="featured spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Search Product For <span class="badge badge-info">" {{$search}} "</span ></h2>
                    </div>

                </div>
            </div>
            <div class="row featured__filter">

                @foreach($products as $product)
               <div class="col-12 col-sm-8 col-md-6 col-lg-3">
                      <div class="card">

                        @foreach($product->images as $image)
                        <img class="card-img" src="{{asset('images/'.$image->image)}}" alt="Vans" style="height: 300px">

                        @endforeach
                       
                        <div class="card-body">
                          <h4 class="card-title">{{$product->title}}</h4>
                        
                          <div class="buy d-flex justify-content-between align-items-center">
                            <div class="price text-success"><h5 class="mt-4">{{$product->price}} Taka</h5></div>
                             <a href="{{route('cart.add',$product->id)}}" class="btn btn-warning mt-3">Add to Cart</a>
                          </div>
                        </div>
                      </div>
                    </div>
                @endforeach


            </div>
             <div class="pagination">
                    {{$products->links()}}
                </div>
        </div>
    </section>
    <!-- Featured Section End -->


@endsection
