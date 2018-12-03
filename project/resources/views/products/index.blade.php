@extends('layout')


@section('content')
    <section id="main-content" class="clearfix">
              <h1>All products</h1>
              <hr>

              <div id="listings">


              @foreach ($products as $product)
                  <div class="product">
                    <a href="/products/{{$product->id}}"><img id="productImage" src="/storage/<?php $path=(string)$product->image; $parts = explode("/", $path); echo(@$parts[1]); ?>" alt="{{$product->name}}" class="feature"></a>

                    <h3><a href="/products/{{$product->id}}">{{$product->name}}</a></h3>

                    <p>{{$product->description}}</p>


                    @if($product->quantity > 0)
                    <h5>Availability: <span class="instock">In Stock</span></h5>
                    @else
                    <h5>Availability: <span class="outofstock">Out of Stock</span></h5>
                    <@endif

                    <p>
                        Price:	<span class="price">$ {{$product->price}}</span>
                    </p>
                    <p>
                        Found in category: <a href="/categories/{{$product->category->id}}">{{$product->category->name}}</a>
                    </p>
                    </div>
              @endforeach

              </div><!-- end listings -->
          </section><!-- end main-content -->

          <hr />

          <!-- <section id="pagination">
              <p>Page:
                  <span class="current">1</span> /
                  <a href="#">2</a> /
                  <a href="#">3</a>
              </p>
          </section> --><!-- end pagination -->

          <hr />
      @endsection
