@extends('Navigation')

<html lang="en">
<link rel="stylesheet" type="text/css" href="{{ asset('css/lobby.css') }}" >
    <body>
    @section('content')

        <a href="/hello/1"> Say hello to James</a>
        <br>
        <a href="/hello/2"> Say hello to Eric</a>
        <br>
        <a href="/hello/3"> Say hello to Paul</a>
        <br>
        <a href="/hello/4"> Say hello to Henry</a>
    @endsection
    </body>
</html>

