@extends('jjgsAdminHome')
@section('support')
<div style="text-align:center">
<form class="subform"  method="post" action="{{ route('adminInsertSupport.insert') }}" enctype="multipart/form-data">
{{ csrf_field() }}
	<p>
	
		<label for="name" class="label" style="color: #000000;font-size:200%;">Problem :</label>

		<input type="text" name="name" id="name">

	</p>

	<p>

		<label for="name" class="label" style="color: #000000;font-size:200%;">Main Question :</label>

		<input type="text" name="mainQuestion" id="mainQuestion">

	</p>


	<p>

		<label for="name" class="label" style="color: #000000;font-size:200%;">Sub Question :</label>

		<input type="text" name="subQuestion" id="subQuestion">

	</p>

	<p>

		<label for="name" class="label" style="color: #000000;font-size:200%;">Solution :</label>

		<input type="text" name="Solution" id="Solution">

	</p>
	
	<p>

		<input type="submit" name="submit" value="Submit">

	</p>

</form>
</div>
@endsection