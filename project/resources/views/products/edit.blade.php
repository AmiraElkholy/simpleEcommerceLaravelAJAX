@extends('layout')

@section('content')
            <hr />

            <section id="main-content" class="clearfix">
                <div id="new-account">
                    <h1>Update Product</h1>

                    <form action="/products/{{$product->id}}/update" method="post" enctype="multipart/form-data">

                        {{csrf_field()}}

                        <p>
                            <label for="name">
                                <span class="required-field">*</span> Product name
                            </label>
                            <input type="text" id="name" name="name" value='<?= $product->name ?>' required>
                        </p>
                        <p>
                            <label for="price">
                                <span class="required-field">*</span> Product price
                            </label>
                            <input type="number" id="price" name="price" min="0.01" step="0.01" value='{{$product->price}}' required><span> $</span>
                        </p>
                        <p>
                            <label for="quantity">
                                <span class="required-field">*</span> Product quantity
                            </label>
                            <input type="number" id="quantity" name="quantity" min="0" value='{{$product->quantity}}' required>
                        </p>
                        <p>
                            <label for="description">
                                <span class="required-field">*</span> Product description
                            </label>
                            <textarea id="description" name="description" required  rows="6">{{$product->description}}</textarea>
                        </p>
                        <p>
                            <label for="image">
                                Product image
                            </label>
                            <input type="hidden" name="MAX_FILE_SIZE" value="5000000">
                            <input type="file" id="image" name="image" accept="image/jpeg" accept="image/x-png">
                        </p>
                        <p>
                            <label for="category_id">
                                <span class="required-field">*</span>Product category
                            </label>
                            <select name="category_id">
                                @foreach ($categories as $category)
                                    <option value="{{$category->id}}" <?= $category->id == $product->category_id ? 'selected' : '' ; ?>>
                                        {{$category->name}}
                                    </option>
                                @endforeach
                            </select>
                        </p>

                        <ul>

                        </ul>

                        <p>Fields marked with <span class="required-field">*</span> are required.</p>

                        <hr />

                        <input type="submit" value="UPDATE PRODUCT" class="secondary-cart-btn">
                    </form>
                </div><!-- end new-account -->
            </section><!-- end main-content -->

            <hr />
        @endsection
