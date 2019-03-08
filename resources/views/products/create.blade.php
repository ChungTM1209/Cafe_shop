@extends('home')
@section('title', 'Thêm mới')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <h2>Create</h2>
        </div>
        <div class="col-md-12">
            <form method="post" action="{{ route('products.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" class="form-control" name="name" >
                </div>
                <div class="form-group">
                    <label>Price</label>
                    <input type="text" class="form-control" name="price" >
                </div>
                <div class="form-group">
                    <label>Amount</label>
                    <input type="text" class="form-control" name="amount" >
                </div>
                <div class="form-group">
                    <label>Detail</label>
                    <input type="text" class="form-control" name="detail" >
                </div>
                <div class="form-group">
                    <label for="exampleFormControlFile1">Category_id</label>
                    <select class="form-control" name="category_id">
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Create</button>
                <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Cancel</button>
            </form>
        </div>
    </div>

@endsection