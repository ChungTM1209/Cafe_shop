@extends('layouts.master')
@section('content')
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
@endsection
