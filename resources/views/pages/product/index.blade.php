@extends('components.navbar')
@section('content')
<div class="">
    <div class="card">
      <div class="card-header" style="background-color: #41B06E;">
        <h3 class="card-title">Simple Full Width Table</h3>

        
        <div class="card-tools">
            <ul class="pagination pagination-sm float-right">
              <li class="page-item">
                <a href="/dashboard/product/create" class="btn btn-primary">Create Product</a>
              </li>

            </ul>
          </div>
      </div>
      <div class="card-body p-0">
        <table class="table">
          <thead>
            <tr>
              <th style="">No</th>
              <th>Name Product</th>
              <th>Image</th>
              <th>Stock</th>
              <th>Price</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td></td>
              <td</td>
              <td><img src="" alt="" width="100"></td>
              <td></td>
              <td></td>
              <td>
                <a href="" class="btn btn-warning">Edit Product</a>
              <button type="button" class="btn btn-primary btn-update-stock"
                data-product-id="">
                Update Stock
            </button>
            <form action="" method="POST"
              class="d-inline">
              @method('DELETE')
              @csrf
              <button type="submit" class="btn btn-danger"><i
                      class="fas fa-trash"></i>Delete</button>
          </form>
              </td>
              @endforeach
            </tr>
          </tbody>
        </table>
      </div>
      <!-- /.card-body -->
    </div>   
@endsection
