@extends('home')
@section('title', 'Danh sách công viêc')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <h2>List</h2>
        </div>

        <div class="col-12">
            @if(count($products)==0)
                <p>Khong co du lieu</p>
            @else
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">Stt</th>
                        <th scope="col">Name</th>
                        {{--<th scope="col">Price</th>--}}
                        {{--<th scope="col">Amount</th>--}}
                        {{--<th scope="col">Detail</th>--}}
                        {{--<th scope="col">Category_id</th>--}}
                    </tr>

                    </thead>
                    <tbody>
                    @foreach($products as $key =>$product)
                        <tr>
                            <td>{{++$key}}</td>
                            <td>{{$product->name}}</td>
                            {{--<td>{{$product->price}}</td>--}}
                            {{--<td>{{$product->amount}}</td>--}}
                            {{--<td>{{$product->detail}}</td>--}}
                            {{--<td>{{$product->category_id}}</td>--}}
                            <td><a href="{{route('products.destroy', $product->id)}}" class="btn btn-danger">Delete</a></td>
                            <td><a href="{{route('products.edit', $product->id)}}" class="btn btn-warning">Update</a></td>
                            <td><a href="{{route('products.show', $product->id)}}" class="btn btn-warning">Show</a></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            @endif
            <a href="{{ route('products.create') }}" class="btn btn-primary">Create</a>
        </div>
    </div>
@endsection