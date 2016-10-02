<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>SimpleB2B - B2B Marketplace application in PHP</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">SimpleB2B</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
                <li class="active"><a href="home.html">Home</a></li>
                <li><a href="#">Importers</a></li>
                <li><a href="#">Suppliers</a></li>
                <li><a href="#">Products</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#"><span class="fa fa-user"></span> Sign Up</a></li>
                <li><a href="#"><span class="fa fa-sign-in"></span> Login</a></li>
                <li><a href="#"><span class="fa fa-envelope"></span> Messages</a></li>
                <li><a href="#"><span class="fa fa-sign-in"></span> Login</a></li>
            </ul>
        </div>

    </div>
</nav>
<div class="container">
    @include('partials._searchbar')
    @yield('content')

    <footer class="row margin-top">
        <div class="class-md-12 text-center">
            <div class="row">
                <div class="col-md-12">
                    &copy;2016 myBiz
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    Home | Sell Offers | Buyers | Products | Companies | Trade Alert | Premium Services | Hot Products
                </div>
            </div>
        </div>
    </footer>
</div>
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>