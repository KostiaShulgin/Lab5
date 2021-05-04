<html lang="en">
<link rel="stylesheet" type="text/css" href="{{ asset('css/headstyle.css') }}" >
<body>
<div id="menu">
    <nav>
        <a href="/navigation">Navigation</a>
        <a href="/lobby">Hello Lobby</a>
        <a href="/foreach">Foreach</a>
        <a href="/comments">Comments</a>
    </nav>
</div>
<div id="content">
    @yield('content')
</div>
</body>
</html>
