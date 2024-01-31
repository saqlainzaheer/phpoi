<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>DIS</title>
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="icon" href="{{ asset('web/images/favicon.ico')}}" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="{{ asset('web/css/stylenew.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Play:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:wght@400;500;600&family=Inter:wght@100;200;300;400;500;600&family=Play:wght@400;700&family=Plus+Jakarta+Sans:wght@200;300;400;500;600;700&display=swap"
        rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Style+Script&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('web/css/owl.carousel.min.css')}}">
    <script src="{{ asset('web/js/jquery.min.js')}}"></script>
    <script src="{{ asset('web/js/owl.carousel.min.js')}}"></script>
</head>
<style>
@media (max-width: 600px) {
    .homeat h4 {
        line-height: 26px;
        font-size: 16px
    }

}
</style>

<body>
    <main>
        <div class="headercls">
            <div class="container">
                <div class="row">
                    <nav class="navbar navbar-expand-lg homenav">
                        <div class="container-fluid">
                            <a href="{{url('/')}}"
                                class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
                                <div id="mainlogo" style="display:flex;align-items: center;  gap: 10px;">

                                    <img class="logo1" src="{{ asset('web/images/mainlogo.svg')}}">
                                    <span style="width:1px; height:40px; background:#3482AD;"></span>
                                    <img class="logo2" src="{{ asset('web/images/micro.png') }}">
                                </div>
                            </a>

                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul class="nav nav-pills d-flex align-items-center ">
                                    <li class="nav-item"><a href="{{url('we-are')}}" class="nav-link"
                                            aria-current="page">We Are</a></li>
                                    <li class="nav-item"><a href="{{url('our-services')}}" class="nav-link">Services</a>
                                    </li>
                                    <li class="nav-item"><a href="{{url('data-world')}}" class="nav-link">Data World</a>
                                    </li>
                                    <li class="nav-item"><a href="{{url('we-care')}}" class="nav-link">We Care</a></li>
                                    <!-- <li class="nav-item"><a href="{{url('case-study')}}" class="nav-link">Case Study</a></li> -->

                                    <li class="nav-item"><a href="{{url('cloud-providers')}}" class="nav-link">Cloud
                                            Providers</a></li>
                                    <li class="nav-item"><a href="{{url('contact-us')}}" class="nav-link">Contact Us</a>
                                    </li>
                                    <li class="nav-item"><a href="{{url('join-us')}}" class="nav-link">Join Us</a></li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>