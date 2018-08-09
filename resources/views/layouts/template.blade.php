<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">   <meta charset="utf-8" />

   <title>@yield('title')</title>

<style>
   body { font-size:16pt; color:#999; }
   h1 { font-size:50pt; text-align:right; color:#f6f6f6;
        margin:-20px 0px -30px 0px; letter-spacing:-4pt; }
</style>

</head>

<body>
   <h1>@yield('title')</h1>
   <div class="content">
   @yield('content')
   </div>

<script src="{{ asset('js/jquery-3.3.1.slim.min.js')}}"></script>
<script src="{{ asset('js/popper.min.js')}}"></script>
<script src="{{ asset('js/bootstrap.min.js')}}"></script>
</body>
</html>
