<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Manage Products</title>
        <link rel="stylesheet" href="/css/manage.css">
    </head>
    <body>
        <h1>Manage Products</h1>

        <a id='link' href="/products/create">Create New Product</a>
        <br><br>
        <table class="display" cellpadding="5">
            <thead>
                <th>Product ID</th>
                <th>Product Name</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Description</th>
                <th>Category</th>
                <th colspan="3">Controls</th>
            </thead>
            <tboby>
            @foreach ($products as $product)
                <tr>
                    <td class="productID">{{$product->id}}</td>
                    <td>{{$product->name}}</td>
                    <td>{{$product->price}}</td>
                    <td>{{$product->quantity}}</td>
                    <td>{{$product->description}}</td>
                    <td><a href="/categories/{{$product->category->id}}">{{$product->category->name}}</a></td>
                    <td ><a class="viewBtn" href="/products/{{$product->id}}">view</a></td>
                    <td ><a class="updateBtn" href="/products/{{$product->id}}/edit">update</a></td>
                    <td ><a class="deleteBtn" href="/products/{{$product->id}}/destroy">delete</a></td>
                </tr>
            @endforeach
            </tboby>
        </table>

        <br><br><br>

        <h2><span id='addH'>Add</span> Product</h2>

    <form action="/posts" method="post" id="addForm" enctype="multipart/form-data">
        {{ csrf_field() }}
        <table id="addTable">
            <tbody>
                <tr>
                    <td><label for="name">Name: </label></td>
                    <td><input type="text" name="name" value="" id="name"><span class="req">*</span></td>
                </tr>
                <tr>
                    <td><label for="price">Price: </label></td>
                    <td><input type="text" name="price" value="" id="price"><span class="req">*</span></td>
                </tr>
                <tr>
                    <td><label for="quantity">Quantity</label></td>
                    <td><input type="text" name="quantity" value="" id="quantity"><span class="req">*</span></td>
                </tr>
                </tr>
                    <td><label for="description">Description</label></td>
                    <td><textarea name="description" id="description"></textarea><span class="req">*</span></td>
                </tr>
                <tr>
                    <td><label for="category_id">Category</label></td>
                    <td>
                        <select name="category_id" id="category_id">
                            @foreach ($selectCategories as $selectCat)
                                <option value="{{$selectCat->id}}">
                                    {{$selectCat->name}}
                                </option>
                            @endforeach
                        </select><span class="req">*</span>
                    </td>
                </tr>
                <tr>
                    <td colspan="2"><br><span class="req">*</span> fields are requried</td>
                </tr>
                <tr>
                    <td colspan="2" style="text-align:center;"><br><input type="submit" name="submit" value="Add Product" id="addBtn"></td>
                </tr>
            </tbody>
        </table>
</form>

        <div class="view">
            <img id="imgP" src="/img/product.gif" alt="">
            <h3 id="nameH">{{'NAME'}}</h3>
            <ul>
                <li id="priceLI">{{'price'}} $</li>
                <li id="qtyLI">{{'quantity'}}</li>
                <li><p id="descP">{{'description'}} Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p></li>
                <li id="catLI">{{'category'}}</li>
            </ul>
        </div>

        <br><br><br><br><br><br><br>
        <br><br><br><br><br><br><br>
        <br><br><br><br><br><br><br>

        <script type="text/javascript" src="/js/vendor/jquery-1.9.1.min.js"></script>
        <script type="text/javascript" src="/js/ajaxCRUD.js"></script>
    </body>
</html>
