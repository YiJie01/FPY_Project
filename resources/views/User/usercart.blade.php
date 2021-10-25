@extends('layouts.topbar')
@section('content')
<script>
function Cal(){
    var prices = document.getElementsByName('price[]');  
    var total=0;
    var cboxes = document.getElementsByName('item[]');
    
    var len = cboxes.length;
    var subtotal=0;
    for(var i=0; i<len; i++){
        if(cboxes[i].checked){	//calculate if checked		
			subtotal+=parseFloat(prices[i].value);
			}
    }
    
    document.getElementById('amount').value=subtotal.toFixed(2);
}
</script>


<!--<script src="{{ asset('js/cart.js') }}" async></script> 
<script src="{{ asset('js/cart.js') }}" defer></script>-->
<br><br><br>
<fieldset class="container border p-2">
	<legend class="w-auto">Cart</legend>
	<form method="post" action="{{ route('create.order') }}">
    {{ csrf_field() }}
		<table class="table table-hover table-striped">
		    <thead>
                <tr class="thead-dark">
                    <th style="font-size:150%;">Select</th>
					<th style="font-size:150%;">Image</th>
					<th style="font-size:150%;">Name</th>
					<th style="font-size:150%;">Type</th>
					<th style="font-size:150%;">Unit Price</th>
					<th style="font-size:150%;">Action</th>
				</tr>
            </thead>
        <tbody>
        @foreach($carts as $cart)
        <tr>
			<td><input type="checkbox" name="item[]" value="{{$cart->cid}}" onchange="Cal()"/></td>
                <td><img src="{{ asset('image/') }}/{{$cart->image}}" alt="" width="50"></td>
                <td style="max-width:300px">
					<h6>{{$cart->productname}}</h6>		                   
				</td>
                <td><p>{{$cart->type}}</p></td>
                @php
					$subtotal = $cart->productprice;
				@endphp
                <td>{{$subtotal}}</td>
                <input type="hidden" value="{{$subtotal}}" name="price[]" id="price[]"/>
                <input type="hidden" name="id" id="id" value="{{$cart->productid}}">
                <td>
                <a href="{{ route('delete.cart', ['id' => $cart->cid]) }}" 
				class="btn btn-danger" onclick="return confirm('Sure Want Delete?')">Remove</a>
                </td>
                
@endforeach
				<table>

<br>
   
            <hr style="height:1px;border-width:0;color:gray;background-color:gray">
            
            <div class="crat-total">
            
            <legend class="w-auto" style="font-size:200%;">Total Price: </legend>
            
            
            </div>
            <br>
            
            <span><input type="text" name="amount" id="amount" onchange="Cal()"  value=""></span>
            <input class="btn btn-success" type="submit" name="checkout" value="Order">
            <!--<a href="myorder" class="btn btn-success" onclick="return confirm('Sure Want Delete?')">Go Payment</a>-->
            <a href="/" class="btn btn-warning">Continu Shop</a>
						
			<br>	
            </div>				
            
             </table>     
	</form>	
		
		
</fieldset>

@endsection