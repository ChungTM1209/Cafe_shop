@extends('home')
@section('title', 'Cập nhật công viêc')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <h2>Edit</h2>
        </div>
        <div class="col-md-12">
            <form method="post" action="{{ route('products.update', $product->id) }}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="exampleInputEmail1">Name</label>
                    <input type="text" value="{{$product->name}}" class="form-control" name="name" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Price</label>
                    <input type="number" value="{{$product->price}}" class="form-control" name="price" id="exampleInputPassword1" >
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Amount</label>
                    <input type="text" value="{{$product->amount}}" class="form-control" name="amount" id="exampleInputPassword1" >
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Detail</label>
                    <input type="text" value="{{$product->detail}}" class="form-control" name="detail" id="exampleInputPassword1" >
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Category_id</label>
                    <select class="form-control" name="category_id">
                        @foreach($categories as $category)
                            <option
                                    @if($product->category_id == $category->id)
                                    {{"selected"}}
                                    @endif
                                    value="{{$category->id}}">{{$category->name}}</option>
                        @endforeach
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>


@endsection