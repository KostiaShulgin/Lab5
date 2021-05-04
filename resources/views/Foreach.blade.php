@extends('Navigation')
<html lang="en">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/lobby.css') }}" >
    <body>
    @section('content')
        @if(count($surnames) > 0)
            @foreach($surnames as $surname)
                <p>{{$surname}}</p>
                <br>
            @endforeach
        @else
            <p>No surnames</p>
        @endif
    @endsection
    </body>
</html>


