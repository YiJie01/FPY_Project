@extends('layouts.topbar')
@section('content')

<style>
.bg{
    background-color: #999999 ;
}

</style>
<!--<script src="{{ asset('js/cart.js') }}" async></script> 
<script src="{{ asset('js/cart.js') }}" defer></script>-->
<br><br><br>
<fieldset class="container border p-2">
	<legend class="w-auto">Order</legend>
    <div class="bg">

    <form method="post" action="{!! URL::to('paypal') !!}">
	
    
    {{ csrf_field() }}
		<table class="table table-hover table-striped">
		    <thead>
                <tr class="thead-dark">
                    <th>Oder No</th>
					<th>Image</th>
					<th>Name</th>
					<th>Type</th>
					<th>Unit Price</th>
					<th>Status</th>
				</tr>
            </thead>
        <tbody>
        @php
			$total=0;
		@endphp
        @foreach($myorders as $order)
        <tr>
        <td>{{$order->id}}</td>
                <td><img src="{{ asset('image/') }}/{{$order->image}}" alt="" width="50"></td>
                <td style="max-width:300px">
					<h6>{{$order->productname}}</h6>		                   
				</td>
                <td><p>{{$order->type}}</p></td>
                @php
					$subtotal = $order->productprice;

                    $total=$total+$subtotal;
				@endphp
                <td>{{$subtotal}}</td>
                <td>
		            {{ $order->paymentStatus }}
		        </td>
                <input type="hidden" name="id" id="id" value="{{$order->productid}}">
@endforeach
				<table>
</div>
        <br>
   
            <hr style="height:1px;border-width:0;color:gray;background-color:gray">
            
            <div class="crat-total">
            
            <legend class="w-auto">Payment method</legend>
            
            
            </div>
            <br>

            
            <td><form  method="post" action="{{ route('delete.order') }}">
						{{ csrf_field() }}
                        <tr>
                        <th><img src="{{ asset('image/paypal.jpg') }}" alt="" width="65"></td><br>
                        <th><img src="{{ asset('image/credit.jpg') }}" alt="" width="65"></td>
                        
                        </tr>
                        
                        
                        <td><input class="btn btn-success" type="submit" name="paynow"  οnclick="javascript:this.form.action={{ route('add.to.store') }}'" value="PayPal"></td>
						<td><input class="btn btn-success" type="submit" name="paynow" value="Credit"></td>
                        <td><input type="hidden" name="amount" value="{{ $total }}"></td>
					</form>
						
			<br>	
            </div>				
            
             </table>     
	</form>

		
		
</fieldset>

@endsection