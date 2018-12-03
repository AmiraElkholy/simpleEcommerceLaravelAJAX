<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Show Category</title>
    </head>
    <body>
        <section id="myContent">
            <h1>{{$category->name}}</h1>
            <p>Desc: {{$category->description}}</p>

            <a href="/categories">Back to all categories</a>

            <br><br>
            <h3>({{$category->name}})'s Products</h3>
            <ul>
                @foreach ($category->products as $catproduct)
                    <li><a href="/products/{{$catproduct->id}}">{{$catproduct->name}}</a></li>
                @endforeach
            </ul>

        </section>
    </body>
</html>
