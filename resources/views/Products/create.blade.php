@extends('layouts.app')
@section('main')
<h5>Add New Product</h5>
        <hr>
        <nav>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item  active">Add New Product</li>
          </ol>
        </nav>

        <div class="col-md-6">
          <form action="/Products/store" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row mb-3">
              <div class="col-md-12">
                <label for="name" class="form-label">Name</label>
                <input type="text" name="name"
                  class="form-control @if($errors->has('name')) {{'is-invalid'}} @endif"
                  placeholder="Enter Product Name"
                  value="{{old('name')}}"
                >
                  @if($errors->has('name'))
                  <div class="invalid-feedback">
                    {{$errors->first("name")}}
                  </div>
                @endif
              </div>
            </div>

            <div class="row mb-3">
              <div class="col-md-6">
                <label for="price" class="form-label">Price</label>
                <input type="text" name="price"
                    class="form-control @if($errors->has('price')) {{'is-invalid'}} @endif"
                    placeholder="actual price"
                    value="{{old('price')}}"
                >
                @if($errors->has('price'))
                  <div class="invalid-feedback">
                    {{$errors->first("price")}}
                  </div>
                @endif
              </div>
              <div class="col-md-6">
                <label for="sellingprice" class="form-label">Selling Price</label>
                <input type="text" name="sellingprice"
                    class="form-control @if($errors->has('sellingprice')) {{'is-invalid'}} @endif"
                    placeholder="Selling price"
                    value="{{old('selling_price')}}"
                >
                 @if($errors->has('sellingprice'))
                  <div class="invalid-feedback">
                    {{$errors->first("sellingprice")}}
                  </div>
                @endif
              </div>
            </div>

            <div class="row mb-3">
              <div class="col-md-12">
                <label for="description" class="form-label ">Description</label>
                <textarea class="form-control @if($errors->has('description')) {{'is-invalid'}} @endif"
                    name="description" id="description"
                    style="resize: none; height: 150px;"
                    placeholder="Enter Description"
                >{{old('description')}}</textarea>
                 @if($errors->has('description'))
                  <div class="invalid-feedback">
                    {{$errors->first("description")}}
                  </div>
                @endif
              </div>
            </div>

            <div class="row mb-3">
              <div class="col-md-12">
                <label for="image" class="form-label">Product Image</label>
                <input type="file" name="image" id="image"
                    class="form-control  @if($errors->has('image')) {{'is-invalid'}} @endif"
                >
                @if($errors->has('image'))
                  <div class="invalid-feedback">
                    {{$errors->first("image")}}
                  </div>
                @endif
              </div>
            </div>

            <div class="mb-3">
              <button type="submit" class="btn btn-info">Save Product</button>
               <button type="submit" class="btn btn-danger">clear</button>
            </div>
          </form>
        </div>
@endsection
