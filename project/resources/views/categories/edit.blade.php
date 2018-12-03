san <!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Create Category</title>
    </head>
    <body>
        <section class="myContent">
            <h1>update Category</h1>
            <form action="/categories/{{$category->id}}/update" method="post">
                {{csrf_field()}}
                <table>
                    <tbody>
                        <tr>
                            <td>
                                <label for="name">Name:</label>
                            </td>
                            <td>
                                <input type="text" name="name" value="{{$category->name}}" required>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="description">Description:</label>
                            </td>
                            <td>
                                <input type="text" name="description" value="{{$category->description}}">
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2"><input type="submit" name="submit" value="update category"></td>
                        </tr>
                    </tbody>
                </table>
            </form>
        </section>
    </body>
</html>
