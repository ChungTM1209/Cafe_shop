@extends('layouts.master')
@section('content')
    @if(count($products)==0)
        <h5 class="text-capitalize text-center mt-5">Hiện tại chưa có products nào được tạo!</h5>
    @else
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h2 class="text-center mt-4 titleproduct ">THỰC ĐƠN CỦA QUÁN</h2>
                    <div class="card-group">
                        @foreach($products as $key =>$product)
                            <div class="card text-white bg-success mb-3 mt-5" style="max-width: 18rem;">
                                <div class="card-header">{{$product->name}}</div>
                                <div class="card-body">
                                    <p class="card-text">Price: {{$product->price}}</p>
                                    <p class="card-text">Amount: {{$product->amount}}</p>
                                    <p class="card-text">Detail: {{$product->detail}}</p>
                                    <p class="card-text">Category: {{$product->category->name}}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

    @endif
@endsection
