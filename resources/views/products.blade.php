<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

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
                <h5 class="card-title">Show ALl Products</h5>
                  <table class="table table-striped table-hover">
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
                      <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>200</td>
                        <td>300</td>
                        <td>
                          <a href="" class="btn btn-success">Edit</a>
                          <a href="" class="btn btn-danger">Delete</a>
                        </td>
                      </tr>
                      
                    </tbody>
                  </table>
             </div>
          </div>
        </div>
      </div>
    </div>
 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    
  </body>
</html>
