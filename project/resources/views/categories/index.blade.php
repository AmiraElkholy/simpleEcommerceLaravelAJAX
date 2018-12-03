<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>List Categories</title>
    </head>
    <body>
        <section id="myContent">

        <h1>Categories</h1>

        <a style="float:right;margin" href="/categories/create">Create New Category</a>

        <table>
            @foreach ($categories as $category)
                <tr>
                    <td href="/categories/{{$category->id}}"> {{$category->name}}</td>
                    <td><a href="/categories/{{$category->id}}">view</a></td>
                    <td><a href="/categories/{{$category->id}}/edit">update</a></td>
                    <td><a href="/categories/{{$category->id}}/destroy/">delete</a></td>
                </tr>
            @endforeach
        </table>
        </section>
    </body>
</html>
