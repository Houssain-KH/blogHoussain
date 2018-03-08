<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Houssain</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    @include('inc.navbar')

    <div class="container">
        @if(Request::is('/'))
            @include('inc.showcase')
        @endif
        <div class="row">
            @if(Request::is('/'))
            <div class="col-md-8 col-lg-8">
                @include('inc.messages')
                @yield('content')
            </div>
                @else
                <div class="col-md-12 col-lg-12">
                    @include('inc.messages')
                    @yield('content')
                </div>
            @endif
            <div class="col-md-4 col-lg-4">
                @if(Request::is('/'))
                    @include('inc.sidebar')
                @endif
            </div>
        </div>
    </div>

    <footer id="footer" class="text-center">
        <p>Copyright 2018 &copy; Houssain </p>
    </footer>


</body>
<script src="{{ asset('js/app.js') }}"></script>
</html>