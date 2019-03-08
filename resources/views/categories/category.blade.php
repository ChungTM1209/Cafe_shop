@extends('layouts.master')
@section('content')
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
@endsection

