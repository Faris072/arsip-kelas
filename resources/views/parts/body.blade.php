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
        <div class="loading">
            <div style="position:absolute; margin:auto; top:0; bottom:0; right:0; left:0;" class="loadingio-spinner-wedges-zleg5tqhh8b"><div class="ldio-mwke7scbiil"><div><div><div></div></div><div><div></div></div><div><div></div></div><div><div></div></div></div></div></div>
        </div>
        <button class="btn btn-primary" id="btn-top"><i class="fas fa-arrow-up"></i></button>
        <div class="container" id="content">
            <br>
            @yield('body')
        </div>
    </div>
    @include('parts\cdnjs')
</body>
</html>
