@extends('layouts.topbar')

<div class="row justify-content-center" style="position: relative;">
                    
                        <div class="col-12 col-md-10 col-lg-8" >
                            <form class="card card-sm" action="{{ route('usersearch.product') }}" method="post">
                            {{ csrf_field() }}
                                <div class="card-body row no-gutters align-items-center">
                                    <div class="col">
                                        <input class="form-control form-control-lg form-control-borderless" type="text" name="searchProduct" id="searchProduct" placeholder="Search topics or keywords">
                                    </div>
                                    <!--end of col-->
                                    <div class="col-auto">
                                        <button class="btn btn-lg btn-success" type="submit">Search</button>
                                    </div>
                                    <!--end of col-->
                                </div>
                            </form>
                        </div>
                        <!--end of col-->
    </div>
