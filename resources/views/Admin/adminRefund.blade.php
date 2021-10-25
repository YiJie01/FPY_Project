@extends('jjgsAdminHome')
@section('allRefund')
<form action="" method="post">
    {{ csrf_field() }}
    <input type="text" name="searchProduct" id="searchProduct">
    <button class="btn btn-info" type="sumbit">Search</button>
</form>
        <div class="container">
                <div class="row">
                    <table class="table table-hover table-striped">
                        <thead>
                        <tr class="thead-dark">
                            <th>User ID</th>
                            <th>Product Name</th>
                            <th>User Email</th>
                            <th>Refund Reason</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                </div>
        </div>
                <div class="row">
                    <tbody>
                    <talbe>

                        @foreach($refunds as $refund)
                            <tr>
                                
                                <td>{{$refund->userID}}</td>
                                <td>{{$refund->productname}}</td>
                                <td>{{$refund->email}}</td>
                                <td>{{$refund->reason}}</td>
                                <td>
                                <a href="{{ route('delete.refund', ['id' => $refund->id]) }}">
                                 <i class="btn btn-success">Approve</i>
                                </a>
                                <a href="{{ route('delete.refund', ['id' => $refund->id]) }}">
                                 <i class="btn btn-danger">Reject</i>
                                </a>
                                </td>
                            <tr>
                        @endforeach
  
                    
                    </table>
                    </tboty>
                    </div>
                    
@endsection