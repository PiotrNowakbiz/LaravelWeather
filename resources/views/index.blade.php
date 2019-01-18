<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

        <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/weather.css') }}">

        <title>Laravel Weather</title>

    </head>
    <body>
        <header>
            <nav class="navbar navbar-expand-md navbar-dark bg-dark">
                <a class="navbar-brand" href="#">Fixed navbar</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Link</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled" href="#">Disabled</a>
                        </li>
                    </ul>
                    <form class="form-inline mt-2 mt-md-0">
                        <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                    </form>
                </div>
            </nav>
        </header>

        {{--<section>--}}
            {{--<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">--}}
                {{--<div class="carousel-inner">--}}
                    {{--<div class="carousel-item active">--}}
                        {{--<img class="d-block w-100" src="{{ URL::asset('images/wawa_2.jpg') }}" alt="First slide">--}}
                    {{--</div>--}}
                    {{--<div class="carousel-item">--}}
                        {{--<img class="d-block w-100" src="{{ URL::asset('images/wawa_2.jpg') }}" alt="First slide">--}}
                    {{--</div>--}}
                    {{--<div class="carousel-item">--}}
                        {{--<img class="d-block w-100" src="{{ URL::asset('images/wawa_2.jpg') }}" alt="First slide">--}}
                        {{--<img class="d-block w-100" src="https://dummyimage.com/1920x350/f5f500/fff" alt="Third slide">--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</section>--}}

        <section>
            <div class="container">
                <div class="weather-form-warp">
                    <form class="weather-search-form">
                        <input type="text" placeholder="Wyszukaj miasto">
                        <button class="site-btn">Szukaj</button>
                        <p>Nullam lacinia ex eleifend orci porttitor, suscipit interdum augue condimentum. Etiam pretium turpis eget nibh laoreet iaculis</p>
                    </form>
                </div>
            </div>
            <img class="d-block w-100" src="{{ URL::asset('images/wawa_2.jpg') }}" alt="First slide">
        </section>

        <section class="weather">
            <div class="container">
                <div class="weather-container">
                    <div class="today weather-box">
                        <div class="weather-header">
                            <div class="day">Monday</div>
                            <div class="date">6 Oct</div>
                        </div>
                        <div class="weather-content">
                            <div class="location">New York</div>
                            <div class="degree">
                                <div class="num">23<sup>o</sup>C</div>
                                <div class="weather-icon">
                                    <img src="images/icons/icon-1.svg" alt="" width="90">
                                </div>
                            </div>
                            <span><img src="images/icon-umberella.png" alt="">20%</span>
                            <span><img src="images/icon-wind.png" alt="">18km/h</span>
                            <span><img src="images/icon-compass.png" alt="">East</span>
                        </div>
                    </div>
                    <div class="weather-box">
                        <div class="weather-header">
                            <div class="day">Tuesday</div>
                        </div>
                        <div class="weather-content">
                            <div class="weather-icon">
                                <img src="images/icons/icon-3.svg" alt="" width="48">
                            </div>
                            <div class="degree">23<sup>o</sup>C</div>
                            <small>18<sup>o</sup></small>
                        </div>
                    </div>
                    <div class="weather-box">
                        <div class="weather-header">
                            <div class="day">Tuesday</div>
                        </div>
                        <div class="weather-content">
                            <div class="weather-icon">
                                <img src="images/icons/icon-3.svg" alt="" width="48">
                            </div>
                            <div class="degree">23<sup>o</sup>C</div>
                            <small>18<sup>o</sup></small>
                        </div>
                    </div>
                    <div class="weather-box">
                        <div class="weather-header">
                            <div class="day">Tuesday</div>
                        </div>
                        <div class="weather-content">
                            <div class="weather-icon">
                                <img src="images/icons/icon-3.svg" alt="" width="48">
                            </div>
                            <div class="degree">23<sup>o</sup>C</div>
                            <small>18<sup>o</sup></small>
                        </div>
                    </div>
                    <div class="weather-box">
                        <div class="weather-header">
                            <div class="day">Tuesday</div>
                        </div>
                        <div class="weather-content">
                            <div class="weather-icon">
                                <img src="images/icons/icon-3.svg" alt="" width="48">
                            </div>
                            <div class="degree">23<sup>o</sup>C</div>
                            <small>18<sup>o</sup></small>
                        </div>
                    </div>
                    <div class="weather-box">
                        <div class="weather-header">
                            <div class="day">Tuesday</div>
                        </div>
                        <div class="weather-content">
                            <div class="weather-icon">
                                <img src="images/icons/icon-3.svg" alt="" width="48">
                            </div>
                            <div class="degree">23<sup>o</sup>C</div>
                            <small>18<sup>o</sup></small>
                        </div>
                    </div>
                    <div class="weather-box">
                    <div class="weather-header">
                        <div class="day">Tuesday</div>
                    </div>
                    <div class="weather-content">
                        <div class="weather-icon">
                            <img src="images/icons/icon-3.svg" alt="" width="48">
                        </div>
                        <div class="degree">23<sup>o</sup>C</div>
                        <small>18<sup>o</sup></small>
                    </div>
                </div>
                </div>
            </div>
        </section>

        <footer class="footer mt-auto py-3">
            <div class="container">
                <span class="text-muted">Place sticky footer content here.</span>
            </div>
        </footer>
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    </body>
</html>
