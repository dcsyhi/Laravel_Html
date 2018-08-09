<!DOCTYPE html>
<html>
<head>
   <title>@yield('title')</title>
   <meta charset="utf-8" />


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
</body>
</html>

