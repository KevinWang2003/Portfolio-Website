<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/layout.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
          content="Dit is een website die door een HBO-ICT student van het HZ University Of Applied Sciences is gemaakt">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="Cache-control" content="no-cache">
    <script src="https://kit.fontawesome.com/5f690037a3.js" crossorigin="anonymous"></script>
    @yield('title')
</head>

<body>
    @include('common.navbar')

    @yield('content')

    @include('common.footer')
</body>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</html>
