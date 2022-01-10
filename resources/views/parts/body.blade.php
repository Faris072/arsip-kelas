<!doctype html>
<html lang="id">
<head>
    <title>{{-- $title --}}</title>
    @include('parts\cdnbootstrap')
</head>
<body>
    @include('parts\navbar')
    @include('parts\sidebar')
    <div class="content">
        <div class="container" id="content">
            <br>
            @yield('body')
            <br>
            <br>
            <br>
            <br>
            <br>
        </div>
    </div>
    @include('parts\cdnjs')
</body>
</html>
