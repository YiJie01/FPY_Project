@extends('layouts.topbar')
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css"><!-- top bar-->
<!-- top list -->
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!-- -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- mid list bar-->
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

        <!---->
        <title>JJ Game Store</title>

        <!-- Styles -->
        <style>
        html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .img{
                position: absolute;
                top: 8px;
                left: 16px;
                width: 85px;
                height: 85px;
            }

            .img1{
                height: 352px;
                max-width:100%;
            }

            .fieldset{
                border:50px
            }
                
        </style>

    <!-- top list bar -->
    
    <!--end-->
    <!---->
    <!--search-->

    
<br><br>
    
    <!--end-->
<!-- Coming Soon list -->
<fieldset>
<br><br>
<h2 align="center" style="font-size:250%;">Coming Soon</h2>
        <div class="container">
            <div class="row blog">
                <div class="col-md-12">
                    <div id="blogCarousel" class="carousel slide" data-ride="carousel">

                        <ol class="carousel-indicators">
                            <li data-target="#blogCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#blogCarousel" data-slide-to="1"></li>
                        </ol>

                        <!-- Carousel items -->
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="row">
                                    <div class="col-md-3">
                                        <a href="/Game/1" target="_blank">
                                            <img src="{{ asset('image/honkai.png')}}" alt="Image" class="img1">
                                        </a>
                                    </div>
                                    <div class="col-md-3">
                                        <a href="#" target="_blank">
                                            <img src="{{ asset('image/kan.jpg')}}" alt="Image" class="img1">
                                        </a>
                                    </div>
                                    <div class="col-md-3">
                                        <a href="#" target="_blank">
                                            <img src="{{ asset('image/donho.jfif')}}" alt="Image"  class="img1">
                                        </a>
                                    </div>
                                    <div class="col-md-3">
                                        <a href="#" target="_blank">
                                            <img src="{{ asset('image/FGO.jfif')}}" alt="Image" class="img1">
                                        </a>
                                    </div>
                                </div>
                                <!--.row-->
                            </div>
                            <!--.item-->
                            <div class="carousel-item">
                                <div class="row">
                                    <div class="col-md-3">
                                        <a href="#" target="_blank">
                                            <img src="{{ asset('image/YS.png')}}" alt="Image" class="img1">
                                        </a>
                                    </div>
                                    <div class="col-md-3">
                                        <a href="#" target="_blank">
                                            <img src="{{ asset('image/fallguy.jpg')}}" alt="Image" class="img1">
                                        </a>
                                    </div>
                                    <div class="col-md-3">
                                        <a href="#" target="_blank">
                                            <img src="{{ asset('image/SAO.jpg')}}" alt="Image" class="img1">
                                        </a>
                                    </div>
                                    <div class="col-md-3">
                                        <a href="#" target="_blank">
                                            <img src="{{ asset('image/PayR.png')}}" alt="Image" class="img1">
                                        </a>
                                    </div>
                                </div>
                                <!--.row-->
                            </div>
                            <!--.item-->
                        </div>
                        <!--.carousel-inner-->
                    </div>
                    <!--.Carousel-->
                </div>
            </div>
        </div>
</fieldset>
<br>
<!-- middle list(Hot list) -->
<fieldset>
<h2 align="center" style="font-size:250%;">Host List</h2>
        <div class="container">
            <div class="row blog">
                <div class="col-md-12">
                    <div id="blogCarousel" class="carousel slide" data-ride="carousel">

                        <ol class="carousel-indicators">
                            <li data-target="#blogCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#blogCarousel" data-slide-to="1"></li>
                        </ol>

                        <!-- Carousel items -->
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="row">
                                    <div class="col-md-3">
                                        <a href="/Game/1" target="_blank">
                                            <img src="{{ asset('image/Arknight.jpg')}}" alt="Image" class="img1">
                                        </a>
                                    </div>
                                    <div class="col-md-3">
                                        <a href="/Game/2" target="_blank">
                                            <img src="{{ asset('image/ARK.jpeg')}}" alt="Image" class="img1">
                                        </a>
                                    </div>
                                    <div class="col-md-3">
                                        <a href="/Game/11" target="_blank">
                                            <img src="{{ asset('image/CSGO.jpg')}}" alt="Image"  class="img1">
                                        </a>
                                    </div>
                                    <div class="col-md-3">
                                        <a href="/Game/14" target="_blank">
                                            <img src="{{ asset('image/Nier.jpg')}}" alt="Image" class="img1">
                                        </a>
                                    </div>
                                </div>
                                <!--.row-->
                            </div>
                            <!--.item-->
                            <div class="carousel-item">
                                <div class="row">
                                    <div class="col-md-3">
                                        <a href="/Game/13" target="_blank">
                                            <img src="{{ asset('image/Apex.jpg')}}" alt="Image" class="img1">
                                        </a>
                                    </div>
                                    <div class="col-md-3">
                                        <a href="/Game/10" target="_blank">
                                            <img src="{{ asset('image/Fate.jpg')}}" alt="Image" class="img1">
                                        </a>
                                    </div>
                                    <div class="col-md-3">
                                        <a href="/Game/19" target="_blank">
                                            <img src="{{ asset('image/PUBG.jpg')}}" alt="Image" class="img1">
                                        </a>
                                    </div>
                                    <div class="col-md-3">
                                        <a href="/Game/16" target="_blank">
                                            <img src="{{ asset('image/R6.jpg')}}" alt="Image" class="img1">
                                        </a>
                                    </div>
                                </div>
                                <!--.row-->
                            </div>
                            <!--.item-->
                        </div>
                        <!--.carousel-inner-->
                    </div>
                    <!--.Carousel-->
                </div>
            </div>
        </div>
</fieldset>

<!--end-->

<br>
<!--New game list-->
@extends('homefunction.newgamelist')
@yield('newgamelist')
<!--end-->

<br>
