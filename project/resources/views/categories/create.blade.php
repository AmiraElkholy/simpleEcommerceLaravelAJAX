<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Create Category</title>
    </head>
    <body>
        <section class="myContent">
            <h1>Create New Category</h1>
            <form action="/categories" method="post">
                {{csrf_field()}}
                <table>
                    <tbody>
                        <tr>
                            <td>
                                <label for="name">Name:</label>
                            </td>
                            <td>
                                <input type="text" name="name" required>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="description">Description:</label>
                            </td>
                            <td>
                                <input type="text" name="description">
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2" style="text-align:center"><br><input type="submit" name="submit" value="create category"></td>
                        </tr>
                    </tbody>
                </table>
            </form>
        </section>
    </body>
</html>
