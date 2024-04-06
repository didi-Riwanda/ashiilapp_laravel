<!doctype html>
<html lang="en">

<head>
    <title> Ashiilapp | Aplikasi Dakwah Islam Islamiyah</title>
    <link href="images/ashiil.png" rel="icon">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Mobland - Mobile App Landing Page Template">
    <meta name="keywords" content="HTML5, bootstrap, mobile, app, landing, ios, android, responsive">

    <!-- Font -->
    <link rel="dns-prefetch" href="//fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <!-- Themify Icons -->
    <link rel="stylesheet" href="../css/themify-icons.css">
    <!-- Owl carousel -->
    <link rel="stylesheet" href="../css/owl.carousel.min.css">
    <!-- Main css -->
    <link href="../css/style.css" rel="stylesheet">
</head>

<body data-spy="scroll" data-target="#navbar" data-offset="30">

    <!-- Nav Menu -->

    @include('partials.navbar')

    <div class="section light-bg mt-4">
        @yield('container')
    </div>

    @include('partials.footer')

    <!-- jQuery and Bootstrap -->
    <script src="../js/jquery-3.2.1.min.js"></script>
    <script src="../js/bootstrap.bundle.min.js"></script>
    <!-- Plugins JS -->
    <script src="../js/owl.carousel.min.js"></script>
    <!-- Custom JS -->
    <script src="../js/script.js"></script>

</body>

</html>