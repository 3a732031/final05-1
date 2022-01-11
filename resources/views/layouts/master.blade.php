<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>BOTTLES SHOP</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="images/logo.jpg" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="{{asset('css/styles.css')}}" rel="stylesheet" />
    <style>
        .page-item{
            display:inline-block;
            padding:10px;
        }
    </style>
</head>
<body>
<!-- Navigation -->
@include('layouts.navigation')

@yield('content')
<!-- Footer -->
@include('layouts.footer')
</body>
</html>
