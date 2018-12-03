@if(count($errors))

    <br><br>

    <ul>
        @foreach ($errors->all() as $error)

            <li>{{$error}}</li>

        @endforeach

    </ul>

    <br><br>
@endif
