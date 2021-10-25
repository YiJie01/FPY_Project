@extends('layouts.topbar')
<br><br><br>

<div class="container">
    <div class="row">
        <div class="col-lg-12 bg-primary p-2 text-white mt-2 text-center text-capitalize">
            product details page 
        </div>
    </div>

    <form action="{{ route('add.to.cart') }}" method="post">
    {{ csrf_field() }}
    <div class="row mt-4">
        <div class="col-lg-1 text-center">
        
            <ul class="nav nav-tabs row text-center pro-details" id="myTab" role="tablist">
                
                <li class="nav-item col-lg-12 mb-2">
                    <img class="img-fluid h-100" src="https://pbs.twimg.com/media/EOYIp0JVUAANGFD?format=jpg&name=small" id="productThree-tab" data-toggle="tab" href="#productThree" role="tab" aria-controls="productThree" aria-selected="false"/>
                </li>
            </ul>
        </div>
        <div class="col-lg-4 text-center border-right border-secondery">
            <div class="tab-content row h-100 d-flex justify-content-center align-items-center" id="myTabContent">
                <div class="tab-pane fade show active col-lg-12" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <img class="img-fluid" src="https://pbs.twimg.com/media/ENktSOKU0AA9Y-6.jpg" />
                </div>
                <div class="tab-pane fade col-lg-12" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                    <img class="img-fluid" src="https://pbs.twimg.com/media/ENktSOTUEAELNMN.jpg" />
                </div>
                <div class="tab-pane fade col-lg-12" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                    <img class="img-fluid" src="https://pbs.twimg.com/media/ENktSONUEAAm6k1.jpg" />
                </div>
                <div class="tab-pane fade col-lg-12" id="product" role="tabpanel" aria-labelledby="product-tab">
                    <img class="img-fluid" src="https://pbs.twimg.com/media/EOYIp0FUYAA0uM1?format=jpg&name=360x360" />
                </div>
                <div class="tab-pane fade col-lg-12" id="productTwo" role="tabpanel" aria-labelledby="productTwo-tab">
                    <img class="img-fluid" src="https://pbs.twimg.com/media/EOYIp0DUUAA29Ft?format=jpg&name=small" />
                </div>
                <div class="tab-pane fade col-lg-12" id="productThree" role="tabpanel" aria-labelledby="productThree-tab">
                    <img class="img-fluid" src="https://pbs.twimg.com/media/EOYIp0JVUAANGFD?format=jpg&name=small" />
                </div>
            </div>
        </div>
        <div class="col-lg-7">
            <h5>
            
                Note 8 Pro (Gamma Green, 128 GB)  (6 GB RAM)
            </h5>
            <h3>
                ₹16,766
            </h3>
            <p>
                Available offers
            </p>
            <ul>
                <li class="pb-2"><b>Bank Offer</b> 5% Unlimited Cashback on  Bank Credit Card <b>T&C</b></li>
                <li><b>Bank Offer</b> 5% Instant Discount on EMI with Bank Credit and Debit Cards <b>T&C</b></li>
            </ul>
        </div>
    </div>
    </form>

</div>