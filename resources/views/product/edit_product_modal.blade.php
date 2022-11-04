 
<!-- Modal -->
<div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Product</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" id="closeAddModal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="post" id="editProductForm">
          @csrf
          <input type="hidden"   id="product_id">
          <div id="error_update"></div>    
            <div class="mb-3">
              <label for="product_name" class="form-label">Product Name</label>
              <input type="text" class="form-control" id="update_product_name" name="product_name">
                @error('product_name')
                <div class="alert alert-danger">{{ $message }}</div>
               @enderror
            </div>
            @error('product_name')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <div class="mb-3">
              <label for="selling_price" class="form-label">Selling Price</label>
              <input type="text" class="form-control" id="update_sell_price" name="selling_price" placeholder="Enter selling price">
                @error('sell_price')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

             <div class="mb-3">
              <label for="discount_price" class="form-label">Discount Price</label>
              <input type="text" class="form-control" id="update_discount_price" id="discount_price" name="discount_price" placeholder="Enter discount price">
            </div>
            <button type="submit" class="btn btn-primary update_product">Update Product</button>
        </form>
      </div>
     
    </div>
  </div>
</div>
