@extends('layouts.master')
@section('content')
<<<<<<< HEAD
    <div class="container">
        <div class="row head">
            <div class="col-sm-12">
                <h2 class="text-center mt-5">List Category</h2>
            </div>
        </div>
        <div class="alltable">
            <div class="d-flex justify-content-around  mb-3 mt-4">
                @foreach($categories as $key =>$category)
                    <div class="listtable">
                        <a href="{{route('products.index')}}" class="btn btn-success ">{{$category->name}}</a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
=======
<div class="noidung">
    <h3 class="text-center titleCategory">THỰC ĐƠN CỦA QUÁN</h3>
    <nav class="navbar navbar-expand-lg navbar-light ">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse " id="navbarTogglerDemo01">
                @foreach($categories as $key => $category)
                        <a class="nav-link btn btn-success category" href="{{route('category.filter', $category->id)}}" name="category_id">{{$category->name}} <span class="sr-only">(current)</span></a>
                @endforeach
        </div>
    </nav>
</div>
>>>>>>> a89824a49ddf3a7614e8d182a1aec178290f3b83
@endsection

