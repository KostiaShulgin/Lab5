@extends('Navigation')

<html lang="en">
<link rel="stylesheet" type="text/css" href="{{ asset('css/lobby.css') }}" >
<body>
@section('content')
    <form action="/postComment" method="POST">
        {{ csrf_field() }}
        <input type="text" name="text">
        <input type="submit" value="Post">
    </form>
    <p>{{$comment}}</p>
@endsection
</body>
</html>
