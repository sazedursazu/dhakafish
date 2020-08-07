@extends('frontend.layouts.master')

@section('slider')
<div id="carouselId" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselId" data-slide-to="0" class="active"></li>
        <li data-target="#carouselId" data-slide-to="1"></li>
        <li data-target="#carouselId" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner" role="listbox">

        @foreach($sliders as $slider)

        <div class="carousel-item {{$loop->index==0 ? 'active':''}}">
          <div class="hero__item set-bg" data-setbg="{{asset('/images/sliders/'.$slider->image)}}">
              <div class="hero__text ">
                  <div class="badge badge-warning mb-4 p-4">
                      <span>{{$slider->category_name}}</span>
                  <h2>{{$slider->offer_title}} <br />100% Fresh</h2>
                  <p>{{$slider->description}}</p>
                  </div>
              </div>
          </div>
        </div>
      </div>
    </div>
 @endforeach

@endsection

@section('content')


@php

$products = $category->products()->paginate(5);

@endphp

@if($products->count()>0)

 <!-- Featured Section Begin -->
    <section class="featured spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2><span class="badge badge-info">" {{$category->name}} "</span> Category</h2>
                    </div>

                </div>
            </div>
            <div class="row featured__filter">

                @foreach($products as $product)
               <div class="col-12 col-sm-8 col-md-6 col-lg-3">
                      <div class="card">

                        @php $i=1; @endphp

                        @foreach($product->images as $image)
                        @if($i>0)
                        <img class="card-img" src="{{asset('images/'.$image->image)}}" alt="Vans" style="height: 300px">
                        @endif

                        @php $i--; @endphp

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
@endif


@endsection
