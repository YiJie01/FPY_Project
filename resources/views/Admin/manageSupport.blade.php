@extends('jjgsAdminHome')
@section('MS')
<style>
.label{
	
}


</style>

<div class="container">
	    <div class="row">
		    <table class="table table-hover table-striped">
		        <thead>
		        <tr class="thead-dark">
                    <th>ID</th>
		            <th>Problem	</th>
		            <th>Main Question</th>
		            <th>Sub Question</th>
		            <th>Solution</th>
		        </tr>
		    </thead>
		        <tbody>
		        @foreach($supports as $support)
		            <tr>
		                <td>{{$support->id}}</td>
		                <td style="max-width:300px">
		                    <h6>{{$support->name}}</h6>
		                </td>
		                <td>{{$support->mainQuestion}}</td>
                        <td>{{$support->subQuestion}}</td>
		                <td>
		                    <a href="{{ route('edit.support', ['id' => $support->id]) }}" 
                            class="btn btn-warning"><i class="fas fa-edit"></i>Edit</a> | 
		                    <a href="{{ route('delete.support', ['id' => $support->id]) }}" 
                            class="btn btn-danger" onclick="return confirm('Sure Want Delete?')">Delete</a>
		                </td>
		            </tr>
		            
		            
		        @endforeach
		        </tbody>
		    </table>
	</div>
    </div>
@endsection