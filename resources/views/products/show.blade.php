
@extends('home')
@section('title', 'Chi tiết cuốn sach ')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <h2>Show</h2>
        </div>
        <div class="col-12">
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">Stt</th>
                    <th scope="col">Name</th>
                    <th scope="col">Price</th>
                    <th scope="col">Amount</th>
                    <th scope="col">Detail</th>
                    <th scope="col">Category_id</th>
                </tr>

                </thead>
                <tbody>
                <tr>
                    <td>{{$product->name}}</td>
                    <td>{{$product->price}}</td>
                    <td>{{$product->amount}}</td>
                    <td>{{$product->detail}}</td>
                    <td>{{$product->category_id}}</td>
                </tr>
                </tbody>
            </table>
            <td><a href="{{route('products.destroy', $product->id)}}" class="btn btn-danger">Delete</a></td>
            <td><a href="{{route('products.edit', $product->id)}}" class="btn btn-warning">Update</a></td>
            <a href="{{ route('products.index') }}" class="btn btn-primary">Back List</a>
        </div>
    </div>
@endsection