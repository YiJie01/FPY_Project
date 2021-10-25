@extends('layouts.topbar')

<style>
            .line{
                width: 72%;
                height: 47px;
                border-bottom: 1px solid black;
                position: absolute;
                padding-top: 100px;
            }
</style>

			<style>

            .info_info {
                padding-left: 5px;
                border: none;
                overflow: hidden;
                
            }
            
            .info_info tr{
                float: left;
                width: 30%;
                margin: 0px;
                padding: 0px;
                height: 30px;
                line-height: 30px;
            }

            .div{
                display: block;
            }
            .backgroup{
                background-image:url("image/gamestorelogo3.jpg");
                                 
            }


            a:link {

            text-decoration:none;
            font-family: 'Nunito', Cursive;
            }

            

        </style>
        <br><br><br>
        <fieldset>
        <fieldset class="container border p-2" style="overflow:hidden;">
        
        @foreach($products as $product)
        <form action="{{ route('add.to.cart') }}" method="post">
        {{ csrf_field() }}
            <table>
                <div  style="padding: 10px;">
                    <div >
                        <img width="400" height="352" src="{{ asset('image/') }}/{{$product->image}}" />
                    </div>
                </div>
                    <br>
                    <div class="col-xs-5" style="border:0px solid gray">
                    <input type="hidden" name="id" id="id" value="{{$product->productid}}">
                    <tr>    
                        <th style="padding-right: 150px;">   
                            <input type="hidden" id="productname" name="productname" value="{{$product->name}}">
                            <span style="font-weight: bold;font-size:150%;" >Game Name: {{$product->productname}}</span>
                            
                        </th>
                        <th style="padding-right: 150px;">
                            <input style="font-weight: bold;" type="hidden" id="productprice" name="productprice" value="{{$product->productprice}}">
                            <span style="font-weight: bold;font-size:150%;">Game Price: RM{{$product->productprice}}</span>
                            
                        </th>   
                        <th>
                            <span style="font-weight: bold;font-size:150%;">Game Type: {{$product->type}}</span>    
                            
                        </th>
                    </tr>
                    
                    <tr>
                        <th>    
                            <span style="font-weight: bold;font-size:150%;">Status: {{$product->status}}</span>       
                                    
                        </th>
                        <th>
                            <span style="font-weight: bold;font-size:150%;">Publisher: {{$product->publisher}} </span>
                                        
                        </th>
                        <th>
                            <span style="font-weight: bold;font-size:150%;">Date: {{$product->date}}</span>           
                            
                        </th>
                    </tr>
                    <tr>
                        <button class="btn btn-warning" type="submit" style="float:right;btn btn-success;">Add To Cart</button>
                        <!--<button type="button"style="float:right" >Buy</button>-->
                    <tr>
                </div>
            </table>

        </form>
        <hr style="height:1px;border-width:0;color:gray;background-color:gray">
                        
                            <span style="font-weight: bold;font-size: 16px;font-size:200%;">Game Introduction:</span>
                            <p style="line-height:23px;font-size:180%;">
                                {{$product->introduction}}
                            </p>
                @endforeach   
            </fieldset>                        
			</fieldset>
