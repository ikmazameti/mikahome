<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

     <title>{{ config('app.name', 'Dashboard') }}</title>


    {{--Compiled JS --}}
    <script src="{{ asset('js/app.js') }}" defer></script>

    {{-- CSS --}}
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    {{--    Font Awesome  --}}
    <link rel="stylesheet" href="{{asset('@fontawesome/fontawesome-free/css/all.min.css')}}">


    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">


    <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">

    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

    <link rel="stylesheet" href="{{asset('plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">

    <link rel="stylesheet" href="{{ asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">

    <link rel="stylesheet" href="{{asset('plugins/jqvmap/jqvmap.min.css')}}">

    <link rel="stylesheet" href="{{asset('dist/css/adminlte.min.css?v=3.2.0')}}">

    <link rel="stylesheet" href="{{ asset('plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">

    <link rel="stylesheet" href="{{ asset('plugins/daterangepicker/daterangepicker.css') }}">

    <link rel="stylesheet" href="{{asset('plugins/summernote/summernote-bs4.min.css')}}">


    <script nonce="36d14270-148d-487b-b070-4d49f4261dfe">(function (w, d) {
            !function (a, e, t, r) {
                a.zarazData = a.zarazData || {}, a.zarazData.executed = [], a.zaraz = {deferred: []}, a.zaraz.q = [], a.zaraz._f = function (e) {
                    return function () {
                        var t = Array.prototype.slice.call(arguments);
                        a.zaraz.q.push({m: e, a: t})
                    }
                };
                for (const e of ["track", "set", "ecommerce", "debug"]) a.zaraz[e] = a.zaraz._f(e);
                a.addEventListener("DOMContentLoaded", (() => {
                    var t = e.getElementsByTagName(r)[0], z = e.createElement(r),
                        n = e.getElementsByTagName("title")[0];
                    for (n && (a.zarazData.t = e.getElementsByTagName("title")[0].text), a.zarazData.x = Math.random(), a.zarazData.w = a.screen.width, a.zarazData.h = a.screen.height, a.zarazData.j = a.innerHeight, a.zarazData.e = a.innerWidth, a.zarazData.l = a.location.href, a.zarazData.r = e.referrer, a.zarazData.k = a.screen.colorDepth, a.zarazData.n = e.characterSet, a.zarazData.o = (new Date).getTimezoneOffset(), a.zarazData.q = []; a.zaraz.q.length;) {
                        const e = a.zaraz.q.shift();
                        a.zarazData.q.push(e)
                    }
                    z.defer = !0;
                    for (const e of [localStorage, sessionStorage]) Object.keys(e).filter((a => a.startsWith("_zaraz_"))).forEach((t => a.zarazData["z_" + t.slice(7)] = JSON.parse(e.getItem(t))));
                    z.referrerPolicy = "origin", z.src = "/cdn-cgi/zaraz/s.js?z=" + btoa(encodeURIComponent(JSON.stringify(a.zarazData))), t.parentNode.insertBefore(z, t)
                }))
            }(w, d, 0, "script");
        })(window, document);</script>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

    {{--    Splash Screen--}}
    @include('layouts.splash')

    {{--    Header--}}
    @include('layouts.header')

    {{--    Left Side Menu--}}
    @include('layouts.mainMenu')

    {{--    Content--}}
    @include('layouts.content')

    {{--    Footer--}}
    @include('layouts.footer')

</div>


<script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>

<script src="{{ asset('plugins/jquery-ui/jquery-ui.min.js') }}"></script>

<script>
    $.widget.bridge('uibutton', $.ui.button)
</script>

<script src="{{asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

<script src="{{ asset('plugins/chart.js/Chart.min.js') }}"></script>

<script src="{{ asset('plugins/sparklines/sparkline.js') }}"></script>

<script src="{{asset('plugins/jqvmap/jquery.vmap.min.js')}}"></script>
<script src="{{ asset('plugins/jqvmap/maps/jquery.vmap.usa.js') }}"></script>

<script src="{{ asset('plugins/jquery-knob/jquery.knob.min.js') }}"></script>

<script src="{{asset('plugins/moment/moment.min.js')}}"></script>
<script src="{{  asset('plugins/daterangepicker/daterangepicker.js') }}"></script>

<script src="{{asset('plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>

<script src="{{ asset('plugins/summernote/summernote-bs4.min.js') }}"></script>

<script src="{{asset('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>

<script src="{{ asset('dist/js/adminlte.js?v=3.2.0') }}"></script>

<script src="{{ asset('dist/js/demo.js') }}"></script>

<script src="{{ asset('dist/js/pages/dashboard.js') }}"></script>
</body>
</html>
