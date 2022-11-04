<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css"> 
    <link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">
    <title>Laravel 9 Ajax Crud</title>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
          <div class="card mt-5">
            <p  id="message" style="display:none">Saved</p>
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
                          <a href="" 
                          class="btn btn-success"
                          data-bs-toggle="modal" 
                          data-bs-target="#editModal"
                          id="edit_form"
                          data-id="{{ $product->id }}"
                          data-name="{{ $product->product_name }}"
                          data-price="{{ $product->sell_price }}"
                          data-discount="{{ $product->discount_price }}"
                          >Edit</a>
                          <a href="{{ route('delete.product', $product->id) }}" class="btn btn-danger delete"  data-id="{{ $product->id }}">Delete</a>
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
   @include('product.edit_product_modal')

   <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
   <script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
   {!! Toastr::message() !!}
   <script type="text/javascript">

// $(document).on("click", ".delete", function(e){
//     e.preventDefault();
//     url = $(this).attr("href");
//     swal({
//             title:"Do you want delete this item?",
//             type: "warning",
//             showCancelButton: true,
//             confirmButtonClass: 'btn btn-success',
//             cancelButtonClass: 'btn btn-danger',
//             buttonsStyling: false,
//             confirmButtonText: "Delete",
//             cancelButtonText: "Cancel",
//             closeOnConfirm: false,
//             showLoaderOnConfirm: true,
//         },
//         function(isConfirm){
//             if(isConfirm){
//                 $.ajax({
//                     url: url,
//                     type: "POST",
//                     success: function(resp){
//                         // window.location.href = base_url + resp;
//                         $('#tableId').load(location.href+' #tableId');
//                     }
//                 });
//                 }
            
//         });
//     });
 

// Delete product with confirm message
$(document).on("click", ".delete", function(e){
        e.preventDefault();
        // var link = $(this).attr("href");
       var url = $(this).attr("href");
           swal({
             title: "Are you Want to delete?",
             text: "Once Delete, This will be Permanently Delete!",
             icon: "warning",
             buttons: true,
             dangerMode: true,
           })
           .then((willDelete) => {
             if (willDelete) {
                  // window.location.href = link;
                  $.ajax({
                    url: url,
                    type: "POST",
                    success: function(resp){
                        // window.location.href = base_url + resp;
                        //reload table after deleting data
                        $('#tableId').load(location.href+' #tableId');
                    }
                });
             } else {
               swal("Safe Data!");
             }
           });
       });

</script>
{{-- Toastr message --}}
<script>
    function ToastMessage(type,message) {
            Command: toastr[type](message)

              toastr.options = {
                "closeButton": false,
                "debug": false,
                "newestOnTop": false,
                "progressBar": false,
                "positionClass": "toast-top-right",
                "preventDuplicates": false,
                "onclick": null,
                "showDuration": "300",
                "hideDuration": "1000",
                "timeOut": "5000",
                "extendedTimeOut": "1000",
                "showEasing": "swing",
                "hideEasing": "linear",
                "showMethod": "fadeIn",
                "hideMethod": "fadeOut"
              }
          }
</script>
  </body>
</html>
