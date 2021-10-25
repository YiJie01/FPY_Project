@extends('layouts.topbar')
@section('homefunction')
<fieldset>
            <div class="container text-center my-3">
                <h2>Hot List</h2>
                <div id="recipeCarousel" class="carousel slide w-100" data-ride="carousel">
                    <div class="carousel-inner w-100" role="listbox">
                        <div class="carousel-item row no-gutters active">
                            <div class="col-3 float-left"><img class="img-fluid" src="{{ asset('image/maomao.jpg')}}"></div>
                            <div class="col-3 float-left"><img class="img-fluid" src="{{ asset('image/maomao.jpg')}}"></div>
                            <div class="col-3 float-left"><img class="img-fluid" src="{{ asset('image/maomao.jpg')}}"></div>
                            <div class="col-3 float-left"><img class="img-fluid" src="{{ asset('image/maomao.jpg')}}"></div>
                        </div>
                        <div class="carousel-item row no-gutters">
                            <div class="col-3 float-left"><img class="img-fluid" src="{{ asset('image/maomao.jpg')}}"></div>
                            <div class="col-3 float-left"><img class="img-fluid" src="{{ asset('image/maomao.jpg')}}"></div>
                            <div class="col-3 float-left"><img class="img-fluid" src="{{ asset('image/maomao.jpg')}}"></div>
                            <div class="col-3 float-left"><img class="img-fluid" src="{{ asset('image/maomao.jpg')}}"></div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#recipeCarousel" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#recipeCarousel" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
    </fieldset>
<!--end-->
@endsection