@extends('layouts.app')
@section('main')
<h5>Product Details</h5>
        <hr>
        <nav>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item  active">View Product</li>
          </ol>
        </nav>

        <div class="card ">
          <img src="/products/{{$product->image}}" alt="{{$product->name}}" srcset="" class="card-img-top">
          <div class="card-body">
            <h5 class="card-title fw-bold">{{$product->name}}</h5>
            <p class="card-text">
              {{$product->description}}
            </p>
            <p class="fw-bold">Price: <small class="text-danger text-decoration-line-through">{{$product->price}} euro</small></p>
            <p class="fw-bold">Selling Price: <small class="text-success ">{{$product->sellingPrice}} euro</small></p>
          </div>
        </div>

@endsection
