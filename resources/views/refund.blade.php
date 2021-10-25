@extends('layouts.topbar')
@section('content')
<br>
<br>
<br>
<form class="form-compact" method="post" action="{{ route('add.to.refund') }}" >
      {{ csrf_field() }}
            <div class="row paddingBottom20">
                <div class="container col-4">
                    <div class="row">
                        <h6 class="text-center col-12 mb-0">Game Refund</h6>
                        <sub class="text-right text-muted col-12"><a href="#" tabindex="-1"><i class="far fa-edit"></i></a></sub>
                    </div>
                    <div class="dropdown-divider mb-3"></div>
                    <div class="form-group row">
                        <label for="productname" class="col-4 col-form-label-sm text-right" style="font-size:150%;">Game Name:</label> 
                        <div class="col-8">
                            <div class="input-group"> 
                                <input id="productname" name="productname" type="text" class="form-control form-control-sm" >
                            </div>
                        </div>
                    </div> 
                    
                    <div class="form-group row align-items-center">
                        <label for="email" class="col-4 col-form-label-sm text-right" style="font-size:150%;">Email Address:</label> 
                        <div class="col-8">
                          <div class="input-group"> 
                            <input id="email" name="email" type="email" class="form-control form-control-sm">
                          </div>
                        </div>
                    </div>
                    <div class="form-group row align-items-center">
                        <label for="office" class="col-4 col-form-label-sm text-right" style="font-size:200%;">Reason:</label> 
                        <div class="col-8">
                          <div class="input-group">
                          <textarea type="reason" name="reason" id="reason" rows="8" cols="70"></textarea>
                          </div>
                        </div>
                    </div>
                    <input type="submit" value="Insert" class="btn btn-success">
                </div>
            </div>
        </form>

@endsection