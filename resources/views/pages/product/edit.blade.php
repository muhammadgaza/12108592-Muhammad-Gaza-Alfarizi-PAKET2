@extends('components.navbar')
@section('content')
<div class="card card-danger">
    <div class="card-header">
      <h3 class="card-title">Different Width</h3>
    </div>
    <div class="card-body">
        <form action="{{ route('product.update', $product->id)}}" method="post" novalidate class="needs-validation" enctype="multipart/form-data">
            @csrf
            @method('PATCH')
            <div class="row">
                <div class="col-3">
                    <label for="exampleFormControlInput1">Product Name</label>
                    <input type="text" class="form-control" name="name" id="name" placeholder="Product Name">
                </div>
                <div class="col-4">
                    <label for="exampleFormControlInput1">Product Price</label>
                    <input type="number" class="form-control" name="price" id="price" placeholder="Product Price">
                </div>
            </div>
            <button class="btn btn-success">Create</button>
            <a href="{{ route('product') }}" class="btn btn-danger">Back</a>  
        </form>  
    </div>
</div>
@endsection