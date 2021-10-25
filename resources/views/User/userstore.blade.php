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
	<legend class="w-auto">Store</legend>
    <div class="bg">
	<form method="post" action="" >
    {{ csrf_field() }}
		<table class="table table-hover table-striped">
		    <thead>
                <tr class="thead-dark">
                    <th style="font-size:150%;">Image</th>
					<th style="font-size:150%;">Name</th>
					<th style="font-size:150%;">Type</th>
					<th></th>
					<th></th>
					<th style="font-size:150%;">Action</th>
				</tr>
            </thead>
        <tbody>
        @foreach($mystores as $store)
        <tr>
        <td><img src="{{ asset('image/') }}/{{$store->image}}" alt="" width="50"></td>
                <td style="max-width:300px">
					<h6 style="font-size:130%;">{{$store->productname}}</h6>		                   
				</td>
                <td><p style="font-size:130%;">{{$store->type}}</p></td>
                <td> </td>
                <td> </td>
                <td>
                <button class="btn btn-success" onclick="location.href='{{$store->url}}'" type="button" name="download" value="download">Download</button>
                <button class="btn btn-warning" onclick="location.href='/refund'"type="button" name="refund" value="refund">Refund</button>
		        </td>
        </tr>        


         @endforeach

                           
					</form>
						

            </div>				
            
             </table>     
	</form>	
		
		
</fieldset>
</div>
@endsection