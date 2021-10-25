
@extends('layouts.topbar')
@section('content')
<br><br><br>

<div class="container">
    <div class="panel panel-default">
        <div class="panel-heading" style="font-size:250%;">Support List</div>
        <div class="panel-body">
        <div class="col-sm-3">
            <table width="100%">
                <ul class="nav nav-pills brand-pills nav-stacked" role="tablist" style="">
                    <li style="font-size:200%;color:blue;" role="presentation" class="brand-nav active"><a href="#tab1" aria-controls="tab1" role="tab" data-toggle="tab">*Register & Login&nbsp;&nbsp;</a></li>
                    <li style="font-size:200%;" role="presentation" class="brand-nav"><a href="#tab2" aria-controls="tab2" role="tab" data-toggle="tab">*Hot Sals List & Purchase Product&nbsp;&nbsp;</a></li>
                    <li style="font-size:200%;" role="presentation" class="brand-nav"><a href="#tab3" aria-controls="tab3" role="tab" data-toggle="tab">*Search & Payment&nbsp;&nbsp;</a></li>
                    <li style="font-size:200%;" role="presentation" class="brand-nav"><a href="#tab4" aria-controls="tab4" role="tab" data-toggle="tab">*Download & Refund&nbsp;&nbsp;</a></li>
                    <li style="font-size:200%;" role="presentation" class="brand-nav"><a href="#tab4" aria-controls="tab4" role="tab" data-toggle="tab">*How buy product&nbsp;&nbsp;</a></li>
                </ul>
            </table>
            </div>
            <br><br><br><br>
            <div class="col-sm-9">
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="tab1">
                        <p style="font-size:160%;">
                            How to Register?<br>
                            Solution:<br>
                            1. Go to the "Main Page".<br>
                            2. Click on the button "Register"<br>
                            3. Key in the "Name","Email Address","Password", and "Confirm Password".<br>
                            4. Click the button "Register" to submit.<br>
                        </p>
                        <p style="font-size:160%;">
                            How to Login ?<br>
                            Solution:<br>
                            1. Go to the "Main Page".<br>
                            2. Click on the button "Login".<br>
                            3. Key in the "Email Address" and "Password".<br>
                            4. Click the button "Login" to submit.<br> 
                        </p>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="tab2">
                        <p style="font-size:160%;">
                            How to view the Hot Sales List ?<br>
                            Solution:<br>
                            1. Log-in to the account first.<br>
                            2. Go to the Main Page.<br>
                            3. You can see the Hot Sales List in the Main Page.<br>
                            
                        </p>
                        <p style="font-size:160%;">
                            How to purchase a product ? <br>
                            1. Go to the "Game List Page".<br>
                            2. View and Select a product.<br>
                            3. You will go to the "Product's Details Page".<br>
                            4. Click the button "Add to Cart" to add the product to the cart.<br>
                        </p>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="tab3">
                        <p style="font-size:160%;">
                            How to search the product ?<br>
                            Solution:<br>
                            1. Go to the Main Page.<br>
                            2. You will see the "Search" column at top of the page.<br>
                            3. Key in the Keywords of the product.<br>
                            4. Click the button "Search".<br>
                            5. You will see the related result is shown.<br>
                        </p>
                        <p style="font-size:160%;">
                            How to make the payment ?<br>
                            Solution :<br>
                            1. Log-in to the account first.<br>
                            2. Go to the Main Page.<br>
                            3. Click the button "Cart" to go to the cart page.<br>
                            4. View all the details of the product that you selected.<br>
                            5. Click the button "Buy" to process.<br>
                            6. Follow the instruction to make the payment.<br>
                            
                        </p>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="tab4">
                        <p style="font-size:160%;">
                            Where is the download location?<br>
                            Solution :<br>
                            1. Log-in to the account first.<br>
                            2. Go to the Main Page.<br>
                            3. Click the button "Store" to go to the Store page. <br>
                            4. Click the button "Download" to download game.<br>
                        </p>
                        <p style="font-size:160%;">
                            How to make refund ?<br>
                            Solution :<br>
                            1. Log-in to the account first.<br>
                            2. Go to the Main Page.<br>
                            3. Click the button "Store" to go to the Store page. <br>
                            4. Click the button "Refund" to go to the make refund page.<br>
                            5. Input the reason and submit.<br>
                        </p>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="tab5">
                        <p style="font-size:160%;">
                            How buy product?<br>
                            Solution :<br>
                            1. Log-in to the account first.<br>
                            2. Go to the Main Page.<br>
                            3. Click the Product to go to the Product page. <br>
                            4. Click the button "Add to Cart" to Order game.<br>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection