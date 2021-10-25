@extends('layouts.app')
@section('content')
<div style="text-align:center">
<form class="subform"  method="post" action="{{ route('update.support') }}" enctype="multipart/form-data">
{{ csrf_field() }}
@foreach($supports as $support)
{{$support->name}}

    <p>

		<label for="ID" class="label">Support ID</label>

		<input type="text" name="ID" id="id" value="{{$support->id}}" readonly>

	</p>

	<p>

		<label for="name" class="label">Name :</label>

		<input type="text" name="name" id="name" value="{{$support->name}}">

	</p>

        <label for="name" class="label">Main Question :</label>

        <input type="text" name="mainQuestion" id="mainQuestion" value="{{$support->mainQuetion}}">

    </p>


    <p>

        <label for="name" class="label">Sub Question :</label>

        <input type="text" name="subQuestion" id="subQuestion" value="{{$support->subQuetion}}">

    </p>

	<p>

		<label for="name" class="label">Solution :</label>

		<input type="text" name="Solution" id="Solution" value="{{$support->Solution}}">

	</p>

	<p>

		<input type="submit" name="edit" value="Edit">

	</p>
    @endforeach
</form>
</div>
@endsection