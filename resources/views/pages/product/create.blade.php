@extends('components.navbar')
@section('content')
<div class="card card-danger">
    <div class="card-header">
      <h3 class="card-title">Different Width</h3>
    </div>
    <div class="card-body">
        <form action="{{ route('product.store')}}" method="POST" novalidate class="needs-validation" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-3">
                    <label for="exampleFormControlInput1">Product Name</label>
                    <input type="text" class="form-control" name="name" id="name" placeholder="Product Name">
                </div>
                <div class="col-4">
                    <label for="exampleFormControlInput1">Product Price</label>
                    <input type="number" class="form-control" name="price" id="price" placeholder="Product Price">
                </div>
                <div class="col-5">
                    <label for="exampleFormControlInput1">Product Stock</label>
                    <input type="number" class="form-control" name="stock" id="stock" placeholder="Product Stock">
                </div>
                <div class="col-4">
                    <label for="exampleFormControlInput1">Product Image</label>
                    <input type="file" class="form-control" name="image" id="image" placeholder="Product Image">
                </div>
            </div>
            <button type="submit" class="btn btn-success mt-4">Create</button>
            <a href="{{ route('product') }}" class="btn btn-danger mt-4">Back</a>  
        </form>  
    </div>
</div>
@endsection