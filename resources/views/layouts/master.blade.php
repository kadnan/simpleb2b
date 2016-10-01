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
    <!--Search bar-->
    <div class="row">
        <div class="col-lg-7 col-md-offset-2">
            <div class="input-group">
                <div class="input-group-btn">
                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Select <span class="caret"></span></button>
                    <ul class="dropdown-menu">
                        <li><a href="#">Importers</a></li>
                        <li><a href="#">Suppliers</a></li>
                        <li><a href="#">Products</a></li>
                    </ul>
                </div>
                <input type="text" class="form-control" aria-label="...">
                <span class="input-group-btn">
                        <button class="btn btn-default" type="button">Go!</button>
                    </span>
            </div>
        </div>
    </div>
    <!--Categories-->
    <div class="row medium-margin-top">
        <div class="col-md-2">
            <ul class="list-group">
                <li  class="list-group-item" style="background-color: #222222;color: white;">Categories</li>
                <li  class="list-group-item" ><a title="Agriculture" href="categories.html">Agriculture</a></li>
                <li  class="list-group-item" ><a title="Clothing" href="categories.html">Clothing</a></li>
                <li  class="list-group-item" ><a title="Automobiles" href="categories.html">Automobiles</a></li><li  class="list-group-item" ><a title="Agriculture" href="#">Agriculture</a></li>
                <li  class="list-group-item" ><a title="Clothing" href="categories.html">Clothing</a></li>
                <li  class="list-group-item" ><a title="Automobiles" href="categories.html">Automobiles</a></li><li  class="list-group-item" ><a title="Agriculture" href="#">Agriculture</a></li>
                <li  class="list-group-item" ><a title="Clothing" href="categories.html">Clothing</a></li>
                <li  class="list-group-item" ><a title="Automobiles" href="categories.html">Automobiles</a></li><li  class="list-group-item" ><a title="Agriculture" href="#">Agriculture</a></li>
                <li  class="list-group-item" ><a title="Clothing" href="categories.html">Clothing</a></li>
                <li  class="list-group-item" ><a title="Automobiles" href="categories.html">Automobiles</a></li>
            </ul>
        </div>
        <!--Mid Portion-->
        <div class="col-md-8">
            <!--Main Banner/Slider-->
            <div class="row">
                <div class="col-md-12">
                    <img style="width: 100%;" class="img-responsive" src="https://www.cubecart.com/img/sellers/173/173/master.jpg" alt="">
                </div>
                <!--Latest Sell offers and Products-->
                <div class="row large-margin-top hidden-xs">
                    <div class="col-md-5 col-md-offset-1">
                        <ul class="list-group">
                            <li  class="list-group-item" style="background-color: #222222;color: white;">Latest Offers</li>
                            <li  class="list-group-item" ><a title="Agriculture" href="#">Agriculture</a></li>
                            <li  class="list-group-item" ><a title="Clothing" href="#">Clothing</a></li>
                            <li  class="list-group-item" ><a title="Clothing" href="#">Clothing</a></li>
                            <li  class="list-group-item" ><a title="Clothing" href="#">Clothing</a></li>
                            <li  class="list-group-item" ><a title="Clothing" href="#">Clothing</a></li>
                        </ul>
                    </div>
                    <div style="margin-left: -20px;" class="col-md-5  ">
                        <ul class="list-group">
                            <li  class="list-group-item" style="background-color: #222222;color: white;">Latest Products</li>
                            <li  class="list-group-item" ><a title="Agriculture" href="#">Agriculture</a></li>
                            <li  class="list-group-item" ><a title="Clothing" href="#">Clothing</a></li>
                            <li  class="list-group-item" ><a title="Clothing" href="#">Clothing</a></li>
                            <li  class="list-group-item" ><a title="Clothing" href="#">Clothing</a></li>
                            <li  class="list-group-item" ><a title="Clothing" href="#">Clothing</a></li>
                        </ul>
                    </div>
                </div>
                <!--Trade Shows-->
                <div class="row margin-top">
                    <div class="col-md-10 col-md-offset-1">
                        <ul class="list-group">
                            <li  class="list-group-item" style="background-color: #222222;color: white;">Featured Products</li>
                            <li  class="list-group-item grid" >
                                <div class="row text-center">
                                    <div class="col-md-4 text-center">
                                        <img width="75" height="75"  src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAgAAZABkAAD/7AARRHVja3kAAQAEAAAAKAAA/+4ADkFkb2JlAGTAAAAAAf/bAIQADAgICAkIDAkJDBELCgsRFQ8MDA8VGBMTFRMTGBcSFBQUFBIXFxscHhwbFyQkJyckJDUzMzM1Ozs7Ozs7Ozs7OwENCwsNDg0QDg4QFA4PDhQUEBEREBQdFBQVFBQdJRoXFxcXGiUgIx4eHiMgKCglJSgoMjIwMjI7Ozs7Ozs7Ozs7/8AAEQgASwBLAwEiAAIRAQMRAf/EAI8AAAEFAQEAAAAAAAAAAAAAAAUBAgMEBgAHAQADAQEAAAAAAAAAAAAAAAAAAgMEARAAAgECBAMGAgYKAwAAAAAAAQIDABEhMUEEURIFYXGBIjIToQaRsdFSYiPwweFCgpIzgxQVNEQWEQACAgEDAwEJAAAAAAAAAAAAARECEiExA0FRYaFxkSIyUhMjBBT/2gAMAwEAAhEDEQA/AJCVvTHAzpw5daRgOFYTCRV1gaWwFqXyWroD1RaawUVwZVFczIcqAIGC6Cm2WpGONqaVUnvoOjVruWmmwyrr0AXiotSHC2ZJyFTwQtM5APKqi7scgKuo0UOEAsfvnFj46eFNSjsNTjdvC7lJOmbuYA8ntji55fhnVlOhMfVOo7FBP2Ve2sE+4eyAnixyHfRaDp6xm8p5zoBlVVx0W+pZcFfLAK/LiMP+Qf5P20v/AJWV7iPcC/4lI+o1oJnRE8oCldBr3UNm3u4h3A9vAWuBa9weNc/H9PqP/PWANuPlrqqE8iCYDSM4/QbUNlhlhbklRo3XNWBB+NbPadYXm/OQq49VsRROWDY9Rh5JUWdCNcx3HMV18VX8r95O3DGx5qwF6S1HfmD5dfpyHc7YmTa639Sd/EdtAPdXj21LC2WPUli5jqHEXk2S2v8AmOxY8eWwFEul9NEgWaXEaKaHbWRZIzt3IUHzRscg2Vj2Gj3THYKY3GKaHA3p620UGrgh0UdAigSJAqDuApkkhHmysPCkZrYNa31VXmKzNyr/AEx6jx/S1DZVIr7iYDmN/LkAcddKGFpXmLn8sEWJOVjfLKiMzxPI23wAty4Z3f6sqgmikMgQAGOJLnMi5yU9udKODkPtr5W5nXBjja+htRHZbmSAqS4JJxscPGqrRMGYoLOxF7HO9xrepZYSERr3P73Lrc8KZOBGjRho95EVcAxyrYqciDmK8/8A9LHe3P8A9/8Awv4bXvWpl6tB0zpY3Exs1iIoz6mbQVhf9luvvj+v7/8Ac41azWVe8N+hmcZ1XtCqYk200NEdp1Sbb2jc86DAXzA4A0NiS2Rvjj208ItvMQeNZK2dXoQVnVymHo+pbaS3uSFbm5Vtbacwqyd1GxWRCr2GCIwzOp7qy73GAIp8+x6hDGsxiLxOAyuh5hY91WrjbZNGin7De6k0ZEkcQblVnJJsPMfE1FLHI0j8xtGbPjiL5G1ZN95ImBLD6arydRfIczHxNdwXkp9/waovt445FnljjJNxY82HdjVDffM2y2CMYrzOb2L4Xv2ZmsdvuuSo7RRr5xgSchQtp5ZW55GLMdaMYEtzt6IK9Q6xu+obj39w5Y5IuijgBVb/ACG461UBPGnXajqSnWTcr6MONccLa5Uq5D0+FcfCs5EaWFwTpjVjb9Zn2sXsFfdhF7KcCL/dNV2z+yq0vpHd4U/Hll8G52szoLvepbOS7ey6nUWB/XQXd9RYgrt4uX8TZ/QKtz2xy141Qflx9Px4Vonk6oonbsC2iYnmbFibk8TSCI52q41vw/Go8LafGk1AhCmpLdlLhfT40uHZ8aAP/9k=" />

                                    </div>
                                </div>
                                <div class="row text-center">
                                    <div class="col-md-12" style="font-size: 12px;">
                                        Text Goes here
                                    </div>
                                </div>
                            </li>
                            <li  class="list-group-item grid" >
                                <div class="row text-center">
                                    <div class="col-md-4">
                                        <img width="75" height="75"  src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAgAAZABkAAD/7AARRHVja3kAAQAEAAAAKAAA/+4ADkFkb2JlAGTAAAAAAf/bAIQADAgICAkIDAkJDBELCgsRFQ8MDA8VGBMTFRMTGBcSFBQUFBIXFxscHhwbFyQkJyckJDUzMzM1Ozs7Ozs7Ozs7OwENCwsNDg0QDg4QFA4PDhQUEBEREBQdFBQVFBQdJRoXFxcXGiUgIx4eHiMgKCglJSgoMjIwMjI7Ozs7Ozs7Ozs7/8AAEQgASwBLAwEiAAIRAQMRAf/EAI8AAAEFAQEAAAAAAAAAAAAAAAUBAgMEBgAHAQADAQEAAAAAAAAAAAAAAAAAAgMEARAAAgECBAMGAgYKAwAAAAAAAQIDABEhMUEEURIFYXGBIjIToQaRsdFSYiPwweFCgpIzgxQVNEQWEQACAgEDAwEJAAAAAAAAAAAAARECEiExA0FRYaFxkSIyUhMjBBT/2gAMAwEAAhEDEQA/AJCVvTHAzpw5daRgOFYTCRV1gaWwFqXyWroD1RaawUVwZVFczIcqAIGC6Cm2WpGONqaVUnvoOjVruWmmwyrr0AXiotSHC2ZJyFTwQtM5APKqi7scgKuo0UOEAsfvnFj46eFNSjsNTjdvC7lJOmbuYA8ntji55fhnVlOhMfVOo7FBP2Ve2sE+4eyAnixyHfRaDp6xm8p5zoBlVVx0W+pZcFfLAK/LiMP+Qf5P20v/AJWV7iPcC/4lI+o1oJnRE8oCldBr3UNm3u4h3A9vAWuBa9weNc/H9PqP/PWANuPlrqqE8iCYDSM4/QbUNlhlhbklRo3XNWBB+NbPadYXm/OQq49VsRROWDY9Rh5JUWdCNcx3HMV18VX8r95O3DGx5qwF6S1HfmD5dfpyHc7YmTa639Sd/EdtAPdXj21LC2WPUli5jqHEXk2S2v8AmOxY8eWwFEul9NEgWaXEaKaHbWRZIzt3IUHzRscg2Vj2Gj3THYKY3GKaHA3p620UGrgh0UdAigSJAqDuApkkhHmysPCkZrYNa31VXmKzNyr/AEx6jx/S1DZVIr7iYDmN/LkAcddKGFpXmLn8sEWJOVjfLKiMzxPI23wAty4Z3f6sqgmikMgQAGOJLnMi5yU9udKODkPtr5W5nXBjja+htRHZbmSAqS4JJxscPGqrRMGYoLOxF7HO9xrepZYSERr3P73Lrc8KZOBGjRho95EVcAxyrYqciDmK8/8A9LHe3P8A9/8Awv4bXvWpl6tB0zpY3Exs1iIoz6mbQVhf9luvvj+v7/8Ac41azWVe8N+hmcZ1XtCqYk200NEdp1Sbb2jc86DAXzA4A0NiS2Rvjj208ItvMQeNZK2dXoQVnVymHo+pbaS3uSFbm5Vtbacwqyd1GxWRCr2GCIwzOp7qy73GAIp8+x6hDGsxiLxOAyuh5hY91WrjbZNGin7De6k0ZEkcQblVnJJsPMfE1FLHI0j8xtGbPjiL5G1ZN95ImBLD6arydRfIczHxNdwXkp9/waovt445FnljjJNxY82HdjVDffM2y2CMYrzOb2L4Xv2ZmsdvuuSo7RRr5xgSchQtp5ZW55GLMdaMYEtzt6IK9Q6xu+obj39w5Y5IuijgBVb/ACG461UBPGnXajqSnWTcr6MONccLa5Uq5D0+FcfCs5EaWFwTpjVjb9Zn2sXsFfdhF7KcCL/dNV2z+yq0vpHd4U/Hll8G52szoLvepbOS7ey6nUWB/XQXd9RYgrt4uX8TZ/QKtz2xy141Qflx9Px4Vonk6oonbsC2iYnmbFibk8TSCI52q41vw/Go8LafGk1AhCmpLdlLhfT40uHZ8aAP/9k=" />
                                    </div>
                                </div>
                                <div class="row text-center">
                                    <div class="col-md-12" style="font-size: 12px;">
                                        Text Goes here
                                    </div>
                                </div>
                            </li>
                            <li  class="list-group-item grid" >
                                <div class="row text-center">
                                    <div class="col-md-4">
                                        <img width="75" height="75"  src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAgAAZABkAAD/7AARRHVja3kAAQAEAAAAKAAA/+4ADkFkb2JlAGTAAAAAAf/bAIQADAgICAkIDAkJDBELCgsRFQ8MDA8VGBMTFRMTGBcSFBQUFBIXFxscHhwbFyQkJyckJDUzMzM1Ozs7Ozs7Ozs7OwENCwsNDg0QDg4QFA4PDhQUEBEREBQdFBQVFBQdJRoXFxcXGiUgIx4eHiMgKCglJSgoMjIwMjI7Ozs7Ozs7Ozs7/8AAEQgASwBLAwEiAAIRAQMRAf/EAI8AAAEFAQEAAAAAAAAAAAAAAAUBAgMEBgAHAQADAQEAAAAAAAAAAAAAAAAAAgMEARAAAgECBAMGAgYKAwAAAAAAAQIDABEhMUEEURIFYXGBIjIToQaRsdFSYiPwweFCgpIzgxQVNEQWEQACAgEDAwEJAAAAAAAAAAAAARECEiExA0FRYaFxkSIyUhMjBBT/2gAMAwEAAhEDEQA/AJCVvTHAzpw5daRgOFYTCRV1gaWwFqXyWroD1RaawUVwZVFczIcqAIGC6Cm2WpGONqaVUnvoOjVruWmmwyrr0AXiotSHC2ZJyFTwQtM5APKqi7scgKuo0UOEAsfvnFj46eFNSjsNTjdvC7lJOmbuYA8ntji55fhnVlOhMfVOo7FBP2Ve2sE+4eyAnixyHfRaDp6xm8p5zoBlVVx0W+pZcFfLAK/LiMP+Qf5P20v/AJWV7iPcC/4lI+o1oJnRE8oCldBr3UNm3u4h3A9vAWuBa9weNc/H9PqP/PWANuPlrqqE8iCYDSM4/QbUNlhlhbklRo3XNWBB+NbPadYXm/OQq49VsRROWDY9Rh5JUWdCNcx3HMV18VX8r95O3DGx5qwF6S1HfmD5dfpyHc7YmTa639Sd/EdtAPdXj21LC2WPUli5jqHEXk2S2v8AmOxY8eWwFEul9NEgWaXEaKaHbWRZIzt3IUHzRscg2Vj2Gj3THYKY3GKaHA3p620UGrgh0UdAigSJAqDuApkkhHmysPCkZrYNa31VXmKzNyr/AEx6jx/S1DZVIr7iYDmN/LkAcddKGFpXmLn8sEWJOVjfLKiMzxPI23wAty4Z3f6sqgmikMgQAGOJLnMi5yU9udKODkPtr5W5nXBjja+htRHZbmSAqS4JJxscPGqrRMGYoLOxF7HO9xrepZYSERr3P73Lrc8KZOBGjRho95EVcAxyrYqciDmK8/8A9LHe3P8A9/8Awv4bXvWpl6tB0zpY3Exs1iIoz6mbQVhf9luvvj+v7/8Ac41azWVe8N+hmcZ1XtCqYk200NEdp1Sbb2jc86DAXzA4A0NiS2Rvjj208ItvMQeNZK2dXoQVnVymHo+pbaS3uSFbm5Vtbacwqyd1GxWRCr2GCIwzOp7qy73GAIp8+x6hDGsxiLxOAyuh5hY91WrjbZNGin7De6k0ZEkcQblVnJJsPMfE1FLHI0j8xtGbPjiL5G1ZN95ImBLD6arydRfIczHxNdwXkp9/waovt445FnljjJNxY82HdjVDffM2y2CMYrzOb2L4Xv2ZmsdvuuSo7RRr5xgSchQtp5ZW55GLMdaMYEtzt6IK9Q6xu+obj39w5Y5IuijgBVb/ACG461UBPGnXajqSnWTcr6MONccLa5Uq5D0+FcfCs5EaWFwTpjVjb9Zn2sXsFfdhF7KcCL/dNV2z+yq0vpHd4U/Hll8G52szoLvepbOS7ey6nUWB/XQXd9RYgrt4uX8TZ/QKtz2xy141Qflx9Px4Vonk6oonbsC2iYnmbFibk8TSCI52q41vw/Go8LafGk1AhCmpLdlLhfT40uHZ8aAP/9k=" />
                                    </div>
                                </div>
                                <div class="row text-center">
                                    <div class="col-md-12" style="font-size: 12px;">
                                        Text Goes here
                                    </div>
                                </div>
                            </li>
                            <li  class="list-group-item grid" >
                                <div class="row text-center">
                                    <div class="col-md-4">
                                        <img width="75" height="75"  src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAgAAZABkAAD/7AARRHVja3kAAQAEAAAAKAAA/+4ADkFkb2JlAGTAAAAAAf/bAIQADAgICAkIDAkJDBELCgsRFQ8MDA8VGBMTFRMTGBcSFBQUFBIXFxscHhwbFyQkJyckJDUzMzM1Ozs7Ozs7Ozs7OwENCwsNDg0QDg4QFA4PDhQUEBEREBQdFBQVFBQdJRoXFxcXGiUgIx4eHiMgKCglJSgoMjIwMjI7Ozs7Ozs7Ozs7/8AAEQgASwBLAwEiAAIRAQMRAf/EAI8AAAEFAQEAAAAAAAAAAAAAAAUBAgMEBgAHAQADAQEAAAAAAAAAAAAAAAAAAgMEARAAAgECBAMGAgYKAwAAAAAAAQIDABEhMUEEURIFYXGBIjIToQaRsdFSYiPwweFCgpIzgxQVNEQWEQACAgEDAwEJAAAAAAAAAAAAARECEiExA0FRYaFxkSIyUhMjBBT/2gAMAwEAAhEDEQA/AJCVvTHAzpw5daRgOFYTCRV1gaWwFqXyWroD1RaawUVwZVFczIcqAIGC6Cm2WpGONqaVUnvoOjVruWmmwyrr0AXiotSHC2ZJyFTwQtM5APKqi7scgKuo0UOEAsfvnFj46eFNSjsNTjdvC7lJOmbuYA8ntji55fhnVlOhMfVOo7FBP2Ve2sE+4eyAnixyHfRaDp6xm8p5zoBlVVx0W+pZcFfLAK/LiMP+Qf5P20v/AJWV7iPcC/4lI+o1oJnRE8oCldBr3UNm3u4h3A9vAWuBa9weNc/H9PqP/PWANuPlrqqE8iCYDSM4/QbUNlhlhbklRo3XNWBB+NbPadYXm/OQq49VsRROWDY9Rh5JUWdCNcx3HMV18VX8r95O3DGx5qwF6S1HfmD5dfpyHc7YmTa639Sd/EdtAPdXj21LC2WPUli5jqHEXk2S2v8AmOxY8eWwFEul9NEgWaXEaKaHbWRZIzt3IUHzRscg2Vj2Gj3THYKY3GKaHA3p620UGrgh0UdAigSJAqDuApkkhHmysPCkZrYNa31VXmKzNyr/AEx6jx/S1DZVIr7iYDmN/LkAcddKGFpXmLn8sEWJOVjfLKiMzxPI23wAty4Z3f6sqgmikMgQAGOJLnMi5yU9udKODkPtr5W5nXBjja+htRHZbmSAqS4JJxscPGqrRMGYoLOxF7HO9xrepZYSERr3P73Lrc8KZOBGjRho95EVcAxyrYqciDmK8/8A9LHe3P8A9/8Awv4bXvWpl6tB0zpY3Exs1iIoz6mbQVhf9luvvj+v7/8Ac41azWVe8N+hmcZ1XtCqYk200NEdp1Sbb2jc86DAXzA4A0NiS2Rvjj208ItvMQeNZK2dXoQVnVymHo+pbaS3uSFbm5Vtbacwqyd1GxWRCr2GCIwzOp7qy73GAIp8+x6hDGsxiLxOAyuh5hY91WrjbZNGin7De6k0ZEkcQblVnJJsPMfE1FLHI0j8xtGbPjiL5G1ZN95ImBLD6arydRfIczHxNdwXkp9/waovt445FnljjJNxY82HdjVDffM2y2CMYrzOb2L4Xv2ZmsdvuuSo7RRr5xgSchQtp5ZW55GLMdaMYEtzt6IK9Q6xu+obj39w5Y5IuijgBVb/ACG461UBPGnXajqSnWTcr6MONccLa5Uq5D0+FcfCs5EaWFwTpjVjb9Zn2sXsFfdhF7KcCL/dNV2z+yq0vpHd4U/Hll8G52szoLvepbOS7ey6nUWB/XQXd9RYgrt4uX8TZ/QKtz2xy141Qflx9Px4Vonk6oonbsC2iYnmbFibk8TSCI52q41vw/Go8LafGk1AhCmpLdlLhfT40uHZ8aAP/9k=" />
                                    </div>
                                </div>
                                <div class="row text-center">
                                    <div class="col-md-12" style="font-size: 12px;">
                                        Text Goes here
                                    </div>
                                </div>
                            </li>
                            <li  class="list-group-item grid" >
                                <div class="row text-center">
                                    <div class="col-md-4">
                                        <img width="75" height="75"  src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAgAAZABkAAD/7AARRHVja3kAAQAEAAAAKAAA/+4ADkFkb2JlAGTAAAAAAf/bAIQADAgICAkIDAkJDBELCgsRFQ8MDA8VGBMTFRMTGBcSFBQUFBIXFxscHhwbFyQkJyckJDUzMzM1Ozs7Ozs7Ozs7OwENCwsNDg0QDg4QFA4PDhQUEBEREBQdFBQVFBQdJRoXFxcXGiUgIx4eHiMgKCglJSgoMjIwMjI7Ozs7Ozs7Ozs7/8AAEQgASwBLAwEiAAIRAQMRAf/EAI8AAAEFAQEAAAAAAAAAAAAAAAUBAgMEBgAHAQADAQEAAAAAAAAAAAAAAAAAAgMEARAAAgECBAMGAgYKAwAAAAAAAQIDABEhMUEEURIFYXGBIjIToQaRsdFSYiPwweFCgpIzgxQVNEQWEQACAgEDAwEJAAAAAAAAAAAAARECEiExA0FRYaFxkSIyUhMjBBT/2gAMAwEAAhEDEQA/AJCVvTHAzpw5daRgOFYTCRV1gaWwFqXyWroD1RaawUVwZVFczIcqAIGC6Cm2WpGONqaVUnvoOjVruWmmwyrr0AXiotSHC2ZJyFTwQtM5APKqi7scgKuo0UOEAsfvnFj46eFNSjsNTjdvC7lJOmbuYA8ntji55fhnVlOhMfVOo7FBP2Ve2sE+4eyAnixyHfRaDp6xm8p5zoBlVVx0W+pZcFfLAK/LiMP+Qf5P20v/AJWV7iPcC/4lI+o1oJnRE8oCldBr3UNm3u4h3A9vAWuBa9weNc/H9PqP/PWANuPlrqqE8iCYDSM4/QbUNlhlhbklRo3XNWBB+NbPadYXm/OQq49VsRROWDY9Rh5JUWdCNcx3HMV18VX8r95O3DGx5qwF6S1HfmD5dfpyHc7YmTa639Sd/EdtAPdXj21LC2WPUli5jqHEXk2S2v8AmOxY8eWwFEul9NEgWaXEaKaHbWRZIzt3IUHzRscg2Vj2Gj3THYKY3GKaHA3p620UGrgh0UdAigSJAqDuApkkhHmysPCkZrYNa31VXmKzNyr/AEx6jx/S1DZVIr7iYDmN/LkAcddKGFpXmLn8sEWJOVjfLKiMzxPI23wAty4Z3f6sqgmikMgQAGOJLnMi5yU9udKODkPtr5W5nXBjja+htRHZbmSAqS4JJxscPGqrRMGYoLOxF7HO9xrepZYSERr3P73Lrc8KZOBGjRho95EVcAxyrYqciDmK8/8A9LHe3P8A9/8Awv4bXvWpl6tB0zpY3Exs1iIoz6mbQVhf9luvvj+v7/8Ac41azWVe8N+hmcZ1XtCqYk200NEdp1Sbb2jc86DAXzA4A0NiS2Rvjj208ItvMQeNZK2dXoQVnVymHo+pbaS3uSFbm5Vtbacwqyd1GxWRCr2GCIwzOp7qy73GAIp8+x6hDGsxiLxOAyuh5hY91WrjbZNGin7De6k0ZEkcQblVnJJsPMfE1FLHI0j8xtGbPjiL5G1ZN95ImBLD6arydRfIczHxNdwXkp9/waovt445FnljjJNxY82HdjVDffM2y2CMYrzOb2L4Xv2ZmsdvuuSo7RRr5xgSchQtp5ZW55GLMdaMYEtzt6IK9Q6xu+obj39w5Y5IuijgBVb/ACG461UBPGnXajqSnWTcr6MONccLa5Uq5D0+FcfCs5EaWFwTpjVjb9Zn2sXsFfdhF7KcCL/dNV2z+yq0vpHd4U/Hll8G52szoLvepbOS7ey6nUWB/XQXd9RYgrt4uX8TZ/QKtz2xy141Qflx9Px4Vonk6oonbsC2iYnmbFibk8TSCI52q41vw/Go8LafGk1AhCmpLdlLhfT40uHZ8aAP/9k=" />
                                    </div>
                                </div>
                                <div class="row text-center">
                                    <div class="col-md-12" style="font-size: 12px;">
                                        Text Goes here
                                    </div>
                                </div>
                            </li>
                            <li  class="list-group-item grid" >
                                <div class="row text-center">
                                    <div class="col-md-4">
                                        <img width="75" height="75"  src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAgAAZABkAAD/7AARRHVja3kAAQAEAAAAKAAA/+4ADkFkb2JlAGTAAAAAAf/bAIQADAgICAkIDAkJDBELCgsRFQ8MDA8VGBMTFRMTGBcSFBQUFBIXFxscHhwbFyQkJyckJDUzMzM1Ozs7Ozs7Ozs7OwENCwsNDg0QDg4QFA4PDhQUEBEREBQdFBQVFBQdJRoXFxcXGiUgIx4eHiMgKCglJSgoMjIwMjI7Ozs7Ozs7Ozs7/8AAEQgASwBLAwEiAAIRAQMRAf/EAI8AAAEFAQEAAAAAAAAAAAAAAAUBAgMEBgAHAQADAQEAAAAAAAAAAAAAAAAAAgMEARAAAgECBAMGAgYKAwAAAAAAAQIDABEhMUEEURIFYXGBIjIToQaRsdFSYiPwweFCgpIzgxQVNEQWEQACAgEDAwEJAAAAAAAAAAAAARECEiExA0FRYaFxkSIyUhMjBBT/2gAMAwEAAhEDEQA/AJCVvTHAzpw5daRgOFYTCRV1gaWwFqXyWroD1RaawUVwZVFczIcqAIGC6Cm2WpGONqaVUnvoOjVruWmmwyrr0AXiotSHC2ZJyFTwQtM5APKqi7scgKuo0UOEAsfvnFj46eFNSjsNTjdvC7lJOmbuYA8ntji55fhnVlOhMfVOo7FBP2Ve2sE+4eyAnixyHfRaDp6xm8p5zoBlVVx0W+pZcFfLAK/LiMP+Qf5P20v/AJWV7iPcC/4lI+o1oJnRE8oCldBr3UNm3u4h3A9vAWuBa9weNc/H9PqP/PWANuPlrqqE8iCYDSM4/QbUNlhlhbklRo3XNWBB+NbPadYXm/OQq49VsRROWDY9Rh5JUWdCNcx3HMV18VX8r95O3DGx5qwF6S1HfmD5dfpyHc7YmTa639Sd/EdtAPdXj21LC2WPUli5jqHEXk2S2v8AmOxY8eWwFEul9NEgWaXEaKaHbWRZIzt3IUHzRscg2Vj2Gj3THYKY3GKaHA3p620UGrgh0UdAigSJAqDuApkkhHmysPCkZrYNa31VXmKzNyr/AEx6jx/S1DZVIr7iYDmN/LkAcddKGFpXmLn8sEWJOVjfLKiMzxPI23wAty4Z3f6sqgmikMgQAGOJLnMi5yU9udKODkPtr5W5nXBjja+htRHZbmSAqS4JJxscPGqrRMGYoLOxF7HO9xrepZYSERr3P73Lrc8KZOBGjRho95EVcAxyrYqciDmK8/8A9LHe3P8A9/8Awv4bXvWpl6tB0zpY3Exs1iIoz6mbQVhf9luvvj+v7/8Ac41azWVe8N+hmcZ1XtCqYk200NEdp1Sbb2jc86DAXzA4A0NiS2Rvjj208ItvMQeNZK2dXoQVnVymHo+pbaS3uSFbm5Vtbacwqyd1GxWRCr2GCIwzOp7qy73GAIp8+x6hDGsxiLxOAyuh5hY91WrjbZNGin7De6k0ZEkcQblVnJJsPMfE1FLHI0j8xtGbPjiL5G1ZN95ImBLD6arydRfIczHxNdwXkp9/waovt445FnljjJNxY82HdjVDffM2y2CMYrzOb2L4Xv2ZmsdvuuSo7RRr5xgSchQtp5ZW55GLMdaMYEtzt6IK9Q6xu+obj39w5Y5IuijgBVb/ACG461UBPGnXajqSnWTcr6MONccLa5Uq5D0+FcfCs5EaWFwTpjVjb9Zn2sXsFfdhF7KcCL/dNV2z+yq0vpHd4U/Hll8G52szoLvepbOS7ey6nUWB/XQXd9RYgrt4uX8TZ/QKtz2xy141Qflx9Px4Vonk6oonbsC2iYnmbFibk8TSCI52q41vw/Go8LafGk1AhCmpLdlLhfT40uHZ8aAP/9k=" />
                                    </div>
                                </div>
                                <div class="row text-center">
                                    <div class="col-md-12" style="font-size: 12px;">
                                        Text Goes here
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <!--Feature Products-->
                <div class="row margin-top">
                    <div class="col-md-10 col-md-offset-1">
                        <ul class="list-group">
                            <li  class="list-group-item" style="background-color: #222222;color: white;">Trade Shows</li>
                            <li  class="list-group-item grid" >
                                <div class="row text-center">
                                    <div class="col-md-4">
                                        <img width="75" height="75"  src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAgAAZABkAAD/7AARRHVja3kAAQAEAAAAKAAA/+4ADkFkb2JlAGTAAAAAAf/bAIQADAgICAkIDAkJDBELCgsRFQ8MDA8VGBMTFRMTGBcSFBQUFBIXFxscHhwbFyQkJyckJDUzMzM1Ozs7Ozs7Ozs7OwENCwsNDg0QDg4QFA4PDhQUEBEREBQdFBQVFBQdJRoXFxcXGiUgIx4eHiMgKCglJSgoMjIwMjI7Ozs7Ozs7Ozs7/8AAEQgASwBLAwEiAAIRAQMRAf/EAI8AAAEFAQEAAAAAAAAAAAAAAAUBAgMEBgAHAQADAQEAAAAAAAAAAAAAAAAAAgMEARAAAgECBAMGAgYKAwAAAAAAAQIDABEhMUEEURIFYXGBIjIToQaRsdFSYiPwweFCgpIzgxQVNEQWEQACAgEDAwEJAAAAAAAAAAAAARECEiExA0FRYaFxkSIyUhMjBBT/2gAMAwEAAhEDEQA/AJCVvTHAzpw5daRgOFYTCRV1gaWwFqXyWroD1RaawUVwZVFczIcqAIGC6Cm2WpGONqaVUnvoOjVruWmmwyrr0AXiotSHC2ZJyFTwQtM5APKqi7scgKuo0UOEAsfvnFj46eFNSjsNTjdvC7lJOmbuYA8ntji55fhnVlOhMfVOo7FBP2Ve2sE+4eyAnixyHfRaDp6xm8p5zoBlVVx0W+pZcFfLAK/LiMP+Qf5P20v/AJWV7iPcC/4lI+o1oJnRE8oCldBr3UNm3u4h3A9vAWuBa9weNc/H9PqP/PWANuPlrqqE8iCYDSM4/QbUNlhlhbklRo3XNWBB+NbPadYXm/OQq49VsRROWDY9Rh5JUWdCNcx3HMV18VX8r95O3DGx5qwF6S1HfmD5dfpyHc7YmTa639Sd/EdtAPdXj21LC2WPUli5jqHEXk2S2v8AmOxY8eWwFEul9NEgWaXEaKaHbWRZIzt3IUHzRscg2Vj2Gj3THYKY3GKaHA3p620UGrgh0UdAigSJAqDuApkkhHmysPCkZrYNa31VXmKzNyr/AEx6jx/S1DZVIr7iYDmN/LkAcddKGFpXmLn8sEWJOVjfLKiMzxPI23wAty4Z3f6sqgmikMgQAGOJLnMi5yU9udKODkPtr5W5nXBjja+htRHZbmSAqS4JJxscPGqrRMGYoLOxF7HO9xrepZYSERr3P73Lrc8KZOBGjRho95EVcAxyrYqciDmK8/8A9LHe3P8A9/8Awv4bXvWpl6tB0zpY3Exs1iIoz6mbQVhf9luvvj+v7/8Ac41azWVe8N+hmcZ1XtCqYk200NEdp1Sbb2jc86DAXzA4A0NiS2Rvjj208ItvMQeNZK2dXoQVnVymHo+pbaS3uSFbm5Vtbacwqyd1GxWRCr2GCIwzOp7qy73GAIp8+x6hDGsxiLxOAyuh5hY91WrjbZNGin7De6k0ZEkcQblVnJJsPMfE1FLHI0j8xtGbPjiL5G1ZN95ImBLD6arydRfIczHxNdwXkp9/waovt445FnljjJNxY82HdjVDffM2y2CMYrzOb2L4Xv2ZmsdvuuSo7RRr5xgSchQtp5ZW55GLMdaMYEtzt6IK9Q6xu+obj39w5Y5IuijgBVb/ACG461UBPGnXajqSnWTcr6MONccLa5Uq5D0+FcfCs5EaWFwTpjVjb9Zn2sXsFfdhF7KcCL/dNV2z+yq0vpHd4U/Hll8G52szoLvepbOS7ey6nUWB/XQXd9RYgrt4uX8TZ/QKtz2xy141Qflx9Px4Vonk6oonbsC2iYnmbFibk8TSCI52q41vw/Go8LafGk1AhCmpLdlLhfT40uHZ8aAP/9k=" />
                                    </div>
                                </div>
                                <div class="row text-center">
                                    <div class="col-md-12" style="font-size: 12px;">
                                        Text Goes here
                                    </div>
                                </div>
                            </li>
                            <li  class="list-group-item grid" >
                                <div class="row text-center">
                                    <div class="col-md-4">
                                        <img width="75" height="75"  src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAgAAZABkAAD/7AARRHVja3kAAQAEAAAAKAAA/+4ADkFkb2JlAGTAAAAAAf/bAIQADAgICAkIDAkJDBELCgsRFQ8MDA8VGBMTFRMTGBcSFBQUFBIXFxscHhwbFyQkJyckJDUzMzM1Ozs7Ozs7Ozs7OwENCwsNDg0QDg4QFA4PDhQUEBEREBQdFBQVFBQdJRoXFxcXGiUgIx4eHiMgKCglJSgoMjIwMjI7Ozs7Ozs7Ozs7/8AAEQgASwBLAwEiAAIRAQMRAf/EAI8AAAEFAQEAAAAAAAAAAAAAAAUBAgMEBgAHAQADAQEAAAAAAAAAAAAAAAAAAgMEARAAAgECBAMGAgYKAwAAAAAAAQIDABEhMUEEURIFYXGBIjIToQaRsdFSYiPwweFCgpIzgxQVNEQWEQACAgEDAwEJAAAAAAAAAAAAARECEiExA0FRYaFxkSIyUhMjBBT/2gAMAwEAAhEDEQA/AJCVvTHAzpw5daRgOFYTCRV1gaWwFqXyWroD1RaawUVwZVFczIcqAIGC6Cm2WpGONqaVUnvoOjVruWmmwyrr0AXiotSHC2ZJyFTwQtM5APKqi7scgKuo0UOEAsfvnFj46eFNSjsNTjdvC7lJOmbuYA8ntji55fhnVlOhMfVOo7FBP2Ve2sE+4eyAnixyHfRaDp6xm8p5zoBlVVx0W+pZcFfLAK/LiMP+Qf5P20v/AJWV7iPcC/4lI+o1oJnRE8oCldBr3UNm3u4h3A9vAWuBa9weNc/H9PqP/PWANuPlrqqE8iCYDSM4/QbUNlhlhbklRo3XNWBB+NbPadYXm/OQq49VsRROWDY9Rh5JUWdCNcx3HMV18VX8r95O3DGx5qwF6S1HfmD5dfpyHc7YmTa639Sd/EdtAPdXj21LC2WPUli5jqHEXk2S2v8AmOxY8eWwFEul9NEgWaXEaKaHbWRZIzt3IUHzRscg2Vj2Gj3THYKY3GKaHA3p620UGrgh0UdAigSJAqDuApkkhHmysPCkZrYNa31VXmKzNyr/AEx6jx/S1DZVIr7iYDmN/LkAcddKGFpXmLn8sEWJOVjfLKiMzxPI23wAty4Z3f6sqgmikMgQAGOJLnMi5yU9udKODkPtr5W5nXBjja+htRHZbmSAqS4JJxscPGqrRMGYoLOxF7HO9xrepZYSERr3P73Lrc8KZOBGjRho95EVcAxyrYqciDmK8/8A9LHe3P8A9/8Awv4bXvWpl6tB0zpY3Exs1iIoz6mbQVhf9luvvj+v7/8Ac41azWVe8N+hmcZ1XtCqYk200NEdp1Sbb2jc86DAXzA4A0NiS2Rvjj208ItvMQeNZK2dXoQVnVymHo+pbaS3uSFbm5Vtbacwqyd1GxWRCr2GCIwzOp7qy73GAIp8+x6hDGsxiLxOAyuh5hY91WrjbZNGin7De6k0ZEkcQblVnJJsPMfE1FLHI0j8xtGbPjiL5G1ZN95ImBLD6arydRfIczHxNdwXkp9/waovt445FnljjJNxY82HdjVDffM2y2CMYrzOb2L4Xv2ZmsdvuuSo7RRr5xgSchQtp5ZW55GLMdaMYEtzt6IK9Q6xu+obj39w5Y5IuijgBVb/ACG461UBPGnXajqSnWTcr6MONccLa5Uq5D0+FcfCs5EaWFwTpjVjb9Zn2sXsFfdhF7KcCL/dNV2z+yq0vpHd4U/Hll8G52szoLvepbOS7ey6nUWB/XQXd9RYgrt4uX8TZ/QKtz2xy141Qflx9Px4Vonk6oonbsC2iYnmbFibk8TSCI52q41vw/Go8LafGk1AhCmpLdlLhfT40uHZ8aAP/9k=" />
                                    </div>
                                </div>
                                <div class="row text-center">
                                    <div class="col-md-12" style="font-size: 12px;">
                                        Text Goes here
                                    </div>
                                </div>
                            </li>
                            <li  class="list-group-item grid" >
                                <div class="row text-center">
                                    <div class="col-md-4">
                                        <img width="75" height="75"  src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAgAAZABkAAD/7AARRHVja3kAAQAEAAAAKAAA/+4ADkFkb2JlAGTAAAAAAf/bAIQADAgICAkIDAkJDBELCgsRFQ8MDA8VGBMTFRMTGBcSFBQUFBIXFxscHhwbFyQkJyckJDUzMzM1Ozs7Ozs7Ozs7OwENCwsNDg0QDg4QFA4PDhQUEBEREBQdFBQVFBQdJRoXFxcXGiUgIx4eHiMgKCglJSgoMjIwMjI7Ozs7Ozs7Ozs7/8AAEQgASwBLAwEiAAIRAQMRAf/EAI8AAAEFAQEAAAAAAAAAAAAAAAUBAgMEBgAHAQADAQEAAAAAAAAAAAAAAAAAAgMEARAAAgECBAMGAgYKAwAAAAAAAQIDABEhMUEEURIFYXGBIjIToQaRsdFSYiPwweFCgpIzgxQVNEQWEQACAgEDAwEJAAAAAAAAAAAAARECEiExA0FRYaFxkSIyUhMjBBT/2gAMAwEAAhEDEQA/AJCVvTHAzpw5daRgOFYTCRV1gaWwFqXyWroD1RaawUVwZVFczIcqAIGC6Cm2WpGONqaVUnvoOjVruWmmwyrr0AXiotSHC2ZJyFTwQtM5APKqi7scgKuo0UOEAsfvnFj46eFNSjsNTjdvC7lJOmbuYA8ntji55fhnVlOhMfVOo7FBP2Ve2sE+4eyAnixyHfRaDp6xm8p5zoBlVVx0W+pZcFfLAK/LiMP+Qf5P20v/AJWV7iPcC/4lI+o1oJnRE8oCldBr3UNm3u4h3A9vAWuBa9weNc/H9PqP/PWANuPlrqqE8iCYDSM4/QbUNlhlhbklRo3XNWBB+NbPadYXm/OQq49VsRROWDY9Rh5JUWdCNcx3HMV18VX8r95O3DGx5qwF6S1HfmD5dfpyHc7YmTa639Sd/EdtAPdXj21LC2WPUli5jqHEXk2S2v8AmOxY8eWwFEul9NEgWaXEaKaHbWRZIzt3IUHzRscg2Vj2Gj3THYKY3GKaHA3p620UGrgh0UdAigSJAqDuApkkhHmysPCkZrYNa31VXmKzNyr/AEx6jx/S1DZVIr7iYDmN/LkAcddKGFpXmLn8sEWJOVjfLKiMzxPI23wAty4Z3f6sqgmikMgQAGOJLnMi5yU9udKODkPtr5W5nXBjja+htRHZbmSAqS4JJxscPGqrRMGYoLOxF7HO9xrepZYSERr3P73Lrc8KZOBGjRho95EVcAxyrYqciDmK8/8A9LHe3P8A9/8Awv4bXvWpl6tB0zpY3Exs1iIoz6mbQVhf9luvvj+v7/8Ac41azWVe8N+hmcZ1XtCqYk200NEdp1Sbb2jc86DAXzA4A0NiS2Rvjj208ItvMQeNZK2dXoQVnVymHo+pbaS3uSFbm5Vtbacwqyd1GxWRCr2GCIwzOp7qy73GAIp8+x6hDGsxiLxOAyuh5hY91WrjbZNGin7De6k0ZEkcQblVnJJsPMfE1FLHI0j8xtGbPjiL5G1ZN95ImBLD6arydRfIczHxNdwXkp9/waovt445FnljjJNxY82HdjVDffM2y2CMYrzOb2L4Xv2ZmsdvuuSo7RRr5xgSchQtp5ZW55GLMdaMYEtzt6IK9Q6xu+obj39w5Y5IuijgBVb/ACG461UBPGnXajqSnWTcr6MONccLa5Uq5D0+FcfCs5EaWFwTpjVjb9Zn2sXsFfdhF7KcCL/dNV2z+yq0vpHd4U/Hll8G52szoLvepbOS7ey6nUWB/XQXd9RYgrt4uX8TZ/QKtz2xy141Qflx9Px4Vonk6oonbsC2iYnmbFibk8TSCI52q41vw/Go8LafGk1AhCmpLdlLhfT40uHZ8aAP/9k=" />
                                    </div>
                                </div>
                                <div class="row text-center">
                                    <div class="col-md-12" style="font-size: 12px;">
                                        Text Goes here
                                    </div>
                                </div>
                            </li>
                            <li  class="list-group-item grid" >
                                <div class="row text-center">
                                    <div class="col-md-4">
                                        <img width="75" height="75"  src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAgAAZABkAAD/7AARRHVja3kAAQAEAAAAKAAA/+4ADkFkb2JlAGTAAAAAAf/bAIQADAgICAkIDAkJDBELCgsRFQ8MDA8VGBMTFRMTGBcSFBQUFBIXFxscHhwbFyQkJyckJDUzMzM1Ozs7Ozs7Ozs7OwENCwsNDg0QDg4QFA4PDhQUEBEREBQdFBQVFBQdJRoXFxcXGiUgIx4eHiMgKCglJSgoMjIwMjI7Ozs7Ozs7Ozs7/8AAEQgASwBLAwEiAAIRAQMRAf/EAI8AAAEFAQEAAAAAAAAAAAAAAAUBAgMEBgAHAQADAQEAAAAAAAAAAAAAAAAAAgMEARAAAgECBAMGAgYKAwAAAAAAAQIDABEhMUEEURIFYXGBIjIToQaRsdFSYiPwweFCgpIzgxQVNEQWEQACAgEDAwEJAAAAAAAAAAAAARECEiExA0FRYaFxkSIyUhMjBBT/2gAMAwEAAhEDEQA/AJCVvTHAzpw5daRgOFYTCRV1gaWwFqXyWroD1RaawUVwZVFczIcqAIGC6Cm2WpGONqaVUnvoOjVruWmmwyrr0AXiotSHC2ZJyFTwQtM5APKqi7scgKuo0UOEAsfvnFj46eFNSjsNTjdvC7lJOmbuYA8ntji55fhnVlOhMfVOo7FBP2Ve2sE+4eyAnixyHfRaDp6xm8p5zoBlVVx0W+pZcFfLAK/LiMP+Qf5P20v/AJWV7iPcC/4lI+o1oJnRE8oCldBr3UNm3u4h3A9vAWuBa9weNc/H9PqP/PWANuPlrqqE8iCYDSM4/QbUNlhlhbklRo3XNWBB+NbPadYXm/OQq49VsRROWDY9Rh5JUWdCNcx3HMV18VX8r95O3DGx5qwF6S1HfmD5dfpyHc7YmTa639Sd/EdtAPdXj21LC2WPUli5jqHEXk2S2v8AmOxY8eWwFEul9NEgWaXEaKaHbWRZIzt3IUHzRscg2Vj2Gj3THYKY3GKaHA3p620UGrgh0UdAigSJAqDuApkkhHmysPCkZrYNa31VXmKzNyr/AEx6jx/S1DZVIr7iYDmN/LkAcddKGFpXmLn8sEWJOVjfLKiMzxPI23wAty4Z3f6sqgmikMgQAGOJLnMi5yU9udKODkPtr5W5nXBjja+htRHZbmSAqS4JJxscPGqrRMGYoLOxF7HO9xrepZYSERr3P73Lrc8KZOBGjRho95EVcAxyrYqciDmK8/8A9LHe3P8A9/8Awv4bXvWpl6tB0zpY3Exs1iIoz6mbQVhf9luvvj+v7/8Ac41azWVe8N+hmcZ1XtCqYk200NEdp1Sbb2jc86DAXzA4A0NiS2Rvjj208ItvMQeNZK2dXoQVnVymHo+pbaS3uSFbm5Vtbacwqyd1GxWRCr2GCIwzOp7qy73GAIp8+x6hDGsxiLxOAyuh5hY91WrjbZNGin7De6k0ZEkcQblVnJJsPMfE1FLHI0j8xtGbPjiL5G1ZN95ImBLD6arydRfIczHxNdwXkp9/waovt445FnljjJNxY82HdjVDffM2y2CMYrzOb2L4Xv2ZmsdvuuSo7RRr5xgSchQtp5ZW55GLMdaMYEtzt6IK9Q6xu+obj39w5Y5IuijgBVb/ACG461UBPGnXajqSnWTcr6MONccLa5Uq5D0+FcfCs5EaWFwTpjVjb9Zn2sXsFfdhF7KcCL/dNV2z+yq0vpHd4U/Hll8G52szoLvepbOS7ey6nUWB/XQXd9RYgrt4uX8TZ/QKtz2xy141Qflx9Px4Vonk6oonbsC2iYnmbFibk8TSCI52q41vw/Go8LafGk1AhCmpLdlLhfT40uHZ8aAP/9k=" />
                                    </div>
                                </div>
                                <div class="row text-center">
                                    <div class="col-md-12" style="font-size: 12px;">
                                        Text Goes here
                                    </div>
                                </div>
                            </li>
                            <li  class="list-group-item grid" >
                                <div class="row text-center">
                                    <div class="col-md-4">
                                        <img width="75" height="75"  src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAgAAZABkAAD/7AARRHVja3kAAQAEAAAAKAAA/+4ADkFkb2JlAGTAAAAAAf/bAIQADAgICAkIDAkJDBELCgsRFQ8MDA8VGBMTFRMTGBcSFBQUFBIXFxscHhwbFyQkJyckJDUzMzM1Ozs7Ozs7Ozs7OwENCwsNDg0QDg4QFA4PDhQUEBEREBQdFBQVFBQdJRoXFxcXGiUgIx4eHiMgKCglJSgoMjIwMjI7Ozs7Ozs7Ozs7/8AAEQgASwBLAwEiAAIRAQMRAf/EAI8AAAEFAQEAAAAAAAAAAAAAAAUBAgMEBgAHAQADAQEAAAAAAAAAAAAAAAAAAgMEARAAAgECBAMGAgYKAwAAAAAAAQIDABEhMUEEURIFYXGBIjIToQaRsdFSYiPwweFCgpIzgxQVNEQWEQACAgEDAwEJAAAAAAAAAAAAARECEiExA0FRYaFxkSIyUhMjBBT/2gAMAwEAAhEDEQA/AJCVvTHAzpw5daRgOFYTCRV1gaWwFqXyWroD1RaawUVwZVFczIcqAIGC6Cm2WpGONqaVUnvoOjVruWmmwyrr0AXiotSHC2ZJyFTwQtM5APKqi7scgKuo0UOEAsfvnFj46eFNSjsNTjdvC7lJOmbuYA8ntji55fhnVlOhMfVOo7FBP2Ve2sE+4eyAnixyHfRaDp6xm8p5zoBlVVx0W+pZcFfLAK/LiMP+Qf5P20v/AJWV7iPcC/4lI+o1oJnRE8oCldBr3UNm3u4h3A9vAWuBa9weNc/H9PqP/PWANuPlrqqE8iCYDSM4/QbUNlhlhbklRo3XNWBB+NbPadYXm/OQq49VsRROWDY9Rh5JUWdCNcx3HMV18VX8r95O3DGx5qwF6S1HfmD5dfpyHc7YmTa639Sd/EdtAPdXj21LC2WPUli5jqHEXk2S2v8AmOxY8eWwFEul9NEgWaXEaKaHbWRZIzt3IUHzRscg2Vj2Gj3THYKY3GKaHA3p620UGrgh0UdAigSJAqDuApkkhHmysPCkZrYNa31VXmKzNyr/AEx6jx/S1DZVIr7iYDmN/LkAcddKGFpXmLn8sEWJOVjfLKiMzxPI23wAty4Z3f6sqgmikMgQAGOJLnMi5yU9udKODkPtr5W5nXBjja+htRHZbmSAqS4JJxscPGqrRMGYoLOxF7HO9xrepZYSERr3P73Lrc8KZOBGjRho95EVcAxyrYqciDmK8/8A9LHe3P8A9/8Awv4bXvWpl6tB0zpY3Exs1iIoz6mbQVhf9luvvj+v7/8Ac41azWVe8N+hmcZ1XtCqYk200NEdp1Sbb2jc86DAXzA4A0NiS2Rvjj208ItvMQeNZK2dXoQVnVymHo+pbaS3uSFbm5Vtbacwqyd1GxWRCr2GCIwzOp7qy73GAIp8+x6hDGsxiLxOAyuh5hY91WrjbZNGin7De6k0ZEkcQblVnJJsPMfE1FLHI0j8xtGbPjiL5G1ZN95ImBLD6arydRfIczHxNdwXkp9/waovt445FnljjJNxY82HdjVDffM2y2CMYrzOb2L4Xv2ZmsdvuuSo7RRr5xgSchQtp5ZW55GLMdaMYEtzt6IK9Q6xu+obj39w5Y5IuijgBVb/ACG461UBPGnXajqSnWTcr6MONccLa5Uq5D0+FcfCs5EaWFwTpjVjb9Zn2sXsFfdhF7KcCL/dNV2z+yq0vpHd4U/Hll8G52szoLvepbOS7ey6nUWB/XQXd9RYgrt4uX8TZ/QKtz2xy141Qflx9Px4Vonk6oonbsC2iYnmbFibk8TSCI52q41vw/Go8LafGk1AhCmpLdlLhfT40uHZ8aAP/9k=" />
                                    </div>
                                </div>
                                <div class="row text-center">
                                    <div class="col-md-12" style="font-size: 12px;">
                                        Text Goes here
                                    </div>
                                </div>
                            </li>
                            <li  class="list-group-item grid" >
                                <div class="row text-center">
                                    <div class="col-md-4">
                                        <img width="75" height="75"  src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAgAAZABkAAD/7AARRHVja3kAAQAEAAAAKAAA/+4ADkFkb2JlAGTAAAAAAf/bAIQADAgICAkIDAkJDBELCgsRFQ8MDA8VGBMTFRMTGBcSFBQUFBIXFxscHhwbFyQkJyckJDUzMzM1Ozs7Ozs7Ozs7OwENCwsNDg0QDg4QFA4PDhQUEBEREBQdFBQVFBQdJRoXFxcXGiUgIx4eHiMgKCglJSgoMjIwMjI7Ozs7Ozs7Ozs7/8AAEQgASwBLAwEiAAIRAQMRAf/EAI8AAAEFAQEAAAAAAAAAAAAAAAUBAgMEBgAHAQADAQEAAAAAAAAAAAAAAAAAAgMEARAAAgECBAMGAgYKAwAAAAAAAQIDABEhMUEEURIFYXGBIjIToQaRsdFSYiPwweFCgpIzgxQVNEQWEQACAgEDAwEJAAAAAAAAAAAAARECEiExA0FRYaFxkSIyUhMjBBT/2gAMAwEAAhEDEQA/AJCVvTHAzpw5daRgOFYTCRV1gaWwFqXyWroD1RaawUVwZVFczIcqAIGC6Cm2WpGONqaVUnvoOjVruWmmwyrr0AXiotSHC2ZJyFTwQtM5APKqi7scgKuo0UOEAsfvnFj46eFNSjsNTjdvC7lJOmbuYA8ntji55fhnVlOhMfVOo7FBP2Ve2sE+4eyAnixyHfRaDp6xm8p5zoBlVVx0W+pZcFfLAK/LiMP+Qf5P20v/AJWV7iPcC/4lI+o1oJnRE8oCldBr3UNm3u4h3A9vAWuBa9weNc/H9PqP/PWANuPlrqqE8iCYDSM4/QbUNlhlhbklRo3XNWBB+NbPadYXm/OQq49VsRROWDY9Rh5JUWdCNcx3HMV18VX8r95O3DGx5qwF6S1HfmD5dfpyHc7YmTa639Sd/EdtAPdXj21LC2WPUli5jqHEXk2S2v8AmOxY8eWwFEul9NEgWaXEaKaHbWRZIzt3IUHzRscg2Vj2Gj3THYKY3GKaHA3p620UGrgh0UdAigSJAqDuApkkhHmysPCkZrYNa31VXmKzNyr/AEx6jx/S1DZVIr7iYDmN/LkAcddKGFpXmLn8sEWJOVjfLKiMzxPI23wAty4Z3f6sqgmikMgQAGOJLnMi5yU9udKODkPtr5W5nXBjja+htRHZbmSAqS4JJxscPGqrRMGYoLOxF7HO9xrepZYSERr3P73Lrc8KZOBGjRho95EVcAxyrYqciDmK8/8A9LHe3P8A9/8Awv4bXvWpl6tB0zpY3Exs1iIoz6mbQVhf9luvvj+v7/8Ac41azWVe8N+hmcZ1XtCqYk200NEdp1Sbb2jc86DAXzA4A0NiS2Rvjj208ItvMQeNZK2dXoQVnVymHo+pbaS3uSFbm5Vtbacwqyd1GxWRCr2GCIwzOp7qy73GAIp8+x6hDGsxiLxOAyuh5hY91WrjbZNGin7De6k0ZEkcQblVnJJsPMfE1FLHI0j8xtGbPjiL5G1ZN95ImBLD6arydRfIczHxNdwXkp9/waovt445FnljjJNxY82HdjVDffM2y2CMYrzOb2L4Xv2ZmsdvuuSo7RRr5xgSchQtp5ZW55GLMdaMYEtzt6IK9Q6xu+obj39w5Y5IuijgBVb/ACG461UBPGnXajqSnWTcr6MONccLa5Uq5D0+FcfCs5EaWFwTpjVjb9Zn2sXsFfdhF7KcCL/dNV2z+yq0vpHd4U/Hll8G52szoLvepbOS7ey6nUWB/XQXd9RYgrt4uX8TZ/QKtz2xy141Qflx9Px4Vonk6oonbsC2iYnmbFibk8TSCI52q41vw/Go8LafGk1AhCmpLdlLhfT40uHZ8aAP/9k=" />
                                    </div>
                                </div>
                                <div class="row text-center">
                                    <div class="col-md-12" style="font-size: 12px;">
                                        Text Goes here
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-2">
            <div class="row margin-top">
                <div class="col-md-12">
                    <ul class="list-group" style="border-top: 0 none">
                        <li  class="list-group-item" style="border-top: 0 none; background-color: #222222;color: white;">Buyers Guide</li>
                        <li style="border: 0 none;"  class="list-group-item" ><i class="fa fa-search"></i> How to find buyers</li>
                        <li style="border: 0 none;"  class="list-group-item" ><i class="fa fa-user"></i> Membership</li>
                    </ul>
                </div>
            </div>
            <div class="row margin-top text-center">
                <div class="col-md-12">
                    Advertise With Us
                </div>
            </div>
        </div>
    </div>
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