<html>
    <head>
        <title>Products</title>
    </head>
    <body>
        @extends('layouts.app')
        @section('content')

        <center><h3>Welcome To Product Page</h3>
        <h5>
        @foreach($pnames as $n)
            <li>{{$n}}</li>
        @endforeach
        </h5>
        </center>
        @endsection
    </body>
</html>