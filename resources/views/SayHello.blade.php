@extends('Navigation')
<html lang="en">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/lobby.css') }}" >
    <body>
    @section('content')
        @if ($namep === "Wrong id!")
            <p>{{$namep}}</p>
        @else
            <p>Hello {{$namep}}</p>
        @endif
    @endsection
    </body>
</html>




