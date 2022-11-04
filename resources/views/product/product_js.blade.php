 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
        
    <script type="text/javascript">
      $.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
      });
    </script>

<!-- add product using jquery ajax -->
    <script type="text/javascript">
      $(document).ready(function(){
         $(document).on('click','.add_product', function(e){
          e.preventDefault();

          let product_name = $('#product_name').val();
          let sell_price = $('#sell_price').val();
          let discount_price = $('#discount_price').val();

          // console.log(product_name+" "+sell_price+" "+discount_price)

          $.ajax({
            url: "{{ route('add.product') }}",
            method: "post",
            data:{
              product_name: product_name,
              sell_price:sell_price,
              discount_price:discount_price
            },
            success: function(res){
              console.log(res)
              if(res.status === "success"){
                $('#addModal').modal('hide');
                $('#addProductForm')[0].reset();
                ToastMessage("warning","New product added successfully!")
              //   $("#myElem").show();
              //  setTimeout(function() { $("#myElem").hide(); }, 5000);
                // Reload table data after add product
                $('#tableId').load(location.href+' #tableId');
              }

            },
            error:function(err){
              let errors = err.responseJSON;
              console.log("err",errors)
                $.each( errors.errors, function( key, value ) {
                $("#error").append('<span class="text-danger">'+ value +'</span></br>');
              });
            }
          });

         })

         // close modal
           $(document).on('click','#closeAddModal', function(e){
            console.log("error")
           $('#error').html('')
           });

         
       });

      //  show edit data in the Modal
      $(document).on('click','#edit_form', function(e){

        let id = $(this).data('id');
        let product_name = $(this).data('name');
        let sell_price = $(this).data('price');
        let discount_price = $(this).data('discount');

        $('#product_id').val(id)
        $('#update_product_name').val(product_name)
        $('#update_sell_price').val(sell_price)
        $('#update_discount_price').val(discount_price)

      });

      // update product data
      $(document).on('click','.update_product', function(e){
          e.preventDefault();

          let product_id = $('#product_id').val();
          let product_name = $('#update_product_name').val();
          let sell_price = $('#update_sell_price').val();
          let discount_price = $('#update_discount_price').val();

          console.log(product_id+" "+product_name+" "+sell_price+" "+discount_price)

          $.ajax({
            url: "{{ route('update.product') }}",
            method: "post",
            data:{
              product_id: product_id,
              product_name: product_name,
              sell_price:sell_price,
              discount_price:discount_price
            },
            success: function(res){
              console.log(res)
              if(res.status === "success"){
                $('#editModal').modal('hide');
                $('#editProductForm')[0].reset();

                // Reload table data after add product
                $('#tableId').load(location.href+' #tableId');
              }
            },
            error:function(err){
              let errors = err.responseJSON;
              console.log("err",errors)
                $.each( errors.errors, function( key, value ) {
                $("#error_update").append('<span class="text-danger">'+ value +'</span></br>');
              });
            }
          });

         });




        // function printErrorMsg (msg) {

        //         $(".print-error-msg").find("ul").html('');
        //         $(".print-error-msg").css('display','block');
        //         $.each( msg, function( key, value ) {
        //             $(".print-error-msg").find("ul").append('<li>'+value+'</li>');

        //         });

        // }

        
  
    </script>