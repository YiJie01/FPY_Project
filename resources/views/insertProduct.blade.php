@extends('jjgsAdminHome')
<!---->
@section('insertpage')
<div style="text-align:center">
<form class="subform"  method="post" action="{{ route('addProduct.insert') }}" enctype="multipart/form-data">
{{ csrf_field() }}

<h3 style="font-size:230%;"> Insert Product System </h3>

<!--@yield('productcontent1')-->

    <!--Name-->
	<p>
		<label for="gamename" style="font-size:130%;">Game Name:</label>
		<input type="text" name="productname" id="productname">
	</p>
    <!--Game ID-->

	<!--Price-->
	<p>
		<label for="gamePrice" style="font-size:130%;">Game Price:</label>
		<input type="int" name="productprice" id="productprice" >
	</p>
    <!--Image-->
    <p align="center" style="font-size:130%;">
		Select image to upload:
        <label for="gameImage" ></label>
		<input type="file" name="product-image" id="fileToUpload" >
	</p>
    <!--Publisher-->
	<p>
		<label for="gamePublisher" style="font-size:130%;">Game Publisher:</label>
		<input type="text" name="publisher" id="publisher" >
	</p>
    <!--Status-->
	<p>
		<label for="gameStatus" style="font-size:130%;">Game Status:</label>
		<input type="text" name="status" id="status" >
	</p>
    <!--Type-->
    <p>
		<label for="GameType" style="font-size:130%;">Game type:</label>
		<input type="text" name="type" id="type" list="browsers">
		<datalist id="browsers">
			<option value="FPS">
			<option value="TPS">
			<option value="RPG">
			<option value="AVG">
			<option value="MMORPG">
			<option value="ACT">
			<option value="Survival">
			<option value="TBG">
			<option value="RTS">
			<option value="AVG">
			<option value="AAVG">
			<option value="VR">
			
		</datalist>
	</p>
    <!--Date-->
    <p>
		<label for="GameDate" style="font-size:130%;">Game Date:</label>
		<input type="date" name="date" id="date" >
	</p>
    <!---->
	<p>
		<label for="introduction" style="font-size:130%;">Game Introduction</label>
		<textarea type="introduction" name="introduction" id="introduction"></textarea>
	</p>
	<!---->
    <p>
		<input type="submit" name="insert" value="Insert">
	</p>
	
</form>
</div>
@endsection




