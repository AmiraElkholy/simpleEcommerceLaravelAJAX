@extends('layout')


@section('content')
<hr />

<section id="main-content" class="clearfix">
    <div id="product-image">
        <img src="/storage/<?php $path=(string)$product->image; $parts = explode("/", $path); echo(@$parts[1]); ?>" alt="{{$product->name}}">
    </div><!-- end product-image -->
    <div id="product-details">
        <h1><?=$product->name?></h1>
        <p><?=$product->description?></p>

        <hr />
        <p>Found in Category: <a href="/categories/{{$product->category->id}}">{{$product->category->name}}</a></p>

    </div><!-- end product-details -->
    <div id="product-info">
        <p class="price">$<?=$product->price?></p>
        <p>Availability:
            <?php
                if($product->quantity > 0)echo "<span>In Stock</span>";
                else echo "<span>Out of Stock</span>";
            ?>
        </p>
        <p>Product Code: <span><?=$product->id?></span></p>
    </div><!-- end product-info -->
</section><!-- end main-content -->
<hr />
@endsection
