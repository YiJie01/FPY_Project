@extends('jjgsAdminHome')
@section('productmenu')
<form action="{{ route('adminsearch.product') }}" method="post">
    {{ csrf_field() }}
    <input type="text" name="searchProduct" id="searchProduct">
    <button class="btn btn-info" type="sumbit">Search</button>
</form>
        <div class="container">
                <div class="row">
                    <table class="table table-hover table-striped">
                        <thead>
                        <tr class="thead-dark">
                            <th>@sortablelink('productid')</th>
                            <th>Image</th>
                            <th>@sortablelink('productname')</th>
                            <th>@sortablelink('productprice')</th>
                            <th>@sortablelink('date')</th>
                            <th>@sortablelink('type')</th>
                            <th>@sortablelink('publisher')</th>
                            <th>@sortablelink('status')</th>
                        </tr>
                    </thead>
                </div>
        </div>
                <div class="row">
                    <tbody>
                    <talbe>
                    @if($products->count())
                        @foreach($products as $productcontent)
                            <tr>
                                <td>{{$productcontent->productid}}</td>
                                <td><img src="{{ asset('image/') }}/{{$productcontent->image}}" alt="" width="100" height="100"></td>
                                <td>{{$productcontent->productname}}</td>
                                <td>{{$productcontent->productprice}}</td>
                                <td>{{$productcontent->date}}</td>
                                <td>{{$productcontent->type}}</td>
                                <td>{{$productcontent->publisher}}</td>
                                <td>{{$productcontent->status}}</td>
                                <td>
                                <a href="{{ route('edit.product', ['productid' => $productcontent->productid]) }}" class="btn btn-warning">
                                 <i class="fas fa-edit">Edit</i>
                                </a>
                                <a href="{{ route('delete.product',['productid'=>$productcontent->productid]) }}"
                                 class="btn btn-danger" onclick="return confirm('Sure Want Delete?')">Delete</a>
                                </td>
                            <tr>
                        @endforeach
                    @endif       
                    
                    </table>
                    </tboty>
                    </div>
                    {{$products->links()}}
@endsection
<!---->
