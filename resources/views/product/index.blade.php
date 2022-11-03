<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Laravel 9 Ajax Crud</title>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
          <div class="card mt-5">
             <div class="card-body">
                <h5 class="card-title d-inline">Show ALl Products</h5>
                <a href="" class="btn btn-success float-end" data-bs-toggle="modal" data-bs-target="#addModal">Add Product</a>
                  <table id="tableId" class="table table-striped table-hover mt-3">
                    <thead>
                      <tr>
                        <th scope="col">SL No</th>
                        <th scope="col">Product Name</th>
                        <th scope="col">Sell Price</th>
                        <th scope="col">Discount Price</th>
                         <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($products as $product)
                      <tr>
                        <th scope="row">{{ $products->firstItem() + $loop->index }}</th>
                        {{-- <th scope="row">{{ $key+1 }}</th> --}}
                        <td>{{ $product->product_name }}</td>
                        <td>{{ $product->sell_price }}</td>
                        <td>{{ $product->discount_price }}</td>
                        <td>
                          <a href="" class="btn btn-success">Edit</a>
                          <a href="" class="btn btn-danger">Delete</a>
                        </td>
                      </tr>
                      @endforeach 
                    </tbody>
                  </table>
                  {{ $products->links() }}
             </div>
          </div>
        </div>
      </div>
    </div>
 
   @include('product.product_js')
   @include('product.add_product_modal')
  </body>
</html>
