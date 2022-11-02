 
<!-- Modal -->
<div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="addModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Product</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" id="closeAddModal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="post" id="addProductForm">
          <div id="error"></div>
            
            <div class="mb-3">
              <label for="product_name" class="form-label">Product Name</label>
              <input type="text" class="form-control" id="product_name" name="product_name" placeholder="Enter product name">
                @error('product_name')
                <div class="alert alert-danger">{{ $message }}</div>
               @enderror
            </div>
            @error('product_name')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <div class="mb-3">
              <label for="selling_price" class="form-label">Selling Price</label>
              <input type="text" class="form-control" id="sell_price" name="selling_price" placeholder="Enter selling price">
                @error('sell_price')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

             <div class="mb-3">
              <label for="discount_price" class="form-label">Discount Price</label>
              <input type="text" class="form-control" id="discount_price" id="discount_price" name="discount_price" placeholder="Enter discount price">
            </div>
            <button type="submit" class="btn btn-primary add_product">Add Product</button>
        </form>
      </div>
     
    </div>
  </div>
</div>
