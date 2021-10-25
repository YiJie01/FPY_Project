@extends('jjgsAdminHome')
<!---->
@section('updatepage')
<div style="text-align:center">
<form class="subform"  method="post" action="{{ route('update.product') }}" enctype="multipart/form-data">
{{ csrf_field() }}

<h3> Update Product System </h3>

@yield('productcontent1')
    @foreach($products as $product)
    {{$product->name}}
    <!--Name-->
	<p>
		<label for="gamename">Game Name</label>
		<input type="text" name="productname" id="productname" value="{{$product->productname}}">
	</p>
    <!--Game ID-->
	<p>
		<label for="gameid">Game ID</label>
		<input type="text" name="productid" id="productid" value="{{$product->productid}}" readonly>
	</p>
	<!--Price-->
	<p>
		<label for="gamePrice">Game Price</label>
		<input type="int" name="productprice" id="productprice" value="{{$product->productprice}}">
	</p>
    <!--Image-->
    <p align="center">
		Select image to upload:
        <label for="gameImage"></label>
		<input type="file" name="product-image" id="fileToUpload">
	</p>
    <!--Publisher-->
	<p>
		<label for="gamePublisher">Game Publisher</label>
		<input type="text" name="publisher" id="publisher" value="{{$product->publisher}}">
	</p>
    <!--Status-->
	<p>
		<label for="gameStatus">Game Status</label>
		<input type="text" name="status" id="status" value="{{$product->status}}">
	</p>
    <!--Type-->
    <p>
		<label for="GameType" >Game type:</label>
		<input type="text" name="type" id="type" list="browsers">
		<datalist id="browsers">
			<option value="FPS">
			<option value="TPS">
			<option value="RPG">
			<option value="MMORPG">
			<option value="ACT">
			<option value="Survival">
		</datalist>
	</p>
    <!--Date-->
    <p>
		<label for="GameDate">Game Date</label>
		<input type="date" name="date" id="date" value="{{$product->date}}">
	</p>
    <!---->
	<p>
		<label for="introduction" >Game Introduction</label>
		<textarea type="introduction" name="introduction" id="introduction" value="{{$product->introduction}}">{{$product->introduction}}</textarea>
	</p>
	<!---->
    <p>
		<input type="submit" name="edit" value="Edit">
	</p>
	@endforeach
</form>
</div>
@endsection