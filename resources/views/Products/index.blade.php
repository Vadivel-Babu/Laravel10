@extends('layouts.app')
@section('main')
    <div class="d-flex justify-content-between">
        <h5><i class="bi bi-journal-album"></i> Product Details</h5>
        <a href="Products/create" class="btn btn-info"><i class="bi bi-plus-circle-fill"></i> Add product</a>
    </div>
    <!-- table -->
    <div class="col-md-12 table-responsive mt-3">
        <table class="table table-bordered">
        <thead>
            <tr>
            <th>P.No</th>
            <th>Image</th>
            <th>name</th>
            <th>Price</th>
            <th>selling price</th>
            <th>action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
            @php
             $index = ($products->currentPage() -1) * $products->perPage() + $loop->iteration;
            @endphp
            <tr>
            <td>{{$index}}</td>
            <td><img src="products/{{$product->image}}" alt="product" style="width:50px; height:50px; object-fit: contain;"></td>
            <td> <a href="Products/{{$product->id}}/show">{{$product->name}}</a></td>
            <td>{{$product->price}}</td>
            <td>{{$product->sellingPrice}}</td>
            <td>
                <a href="Products/{{$product->id}}/edit" class="btn btn-warning" ><i class="bi bi-pencil-square"></i></a>
                <a href="Products/{{$product->id}}/delete" onclick="return confirm('Are you you want to Delete?')" class="btn btn-danger"><i class="bi bi-trash-fill"></i></a>
            </td>
            </tr>
            @endforeach
        </tbody>
        </table>
        {{$products->links()}}
    </div>

@endsection
