<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <div class="container">
        <header>
        </header>
        <div class="mt-5">
            <h1>Add Product Data</h1>
            <form action="{{ url('product/add') }}" method="POST">
              @csrf
                <div class="row">
                  <div class="col-md-6">
                    <div class="mt-2">
                      <input type="text" class="form-control" placeholder="Enter Product Name" name="prod_name" value="{{ $data->product_list->prod_name }}">
                    </div>
                    <div class="mt-2">
                      <input type="text" class="form-control" placeholder="Enter Product Brand" name="prod_brand">
                    </div>
                    <div class="mt-2">
                      <input type="text" class="form-control" placeholder="Enter Product Price" name="prod_price">
                    </div>
                   <div class="mt-2">
                    <input type="text" class="form-control" placeholder="Enter Category Id" name="cat_id">
                   </div>
                   <div class="mt-2">
                    <button type="submit" class="btn btn-primary">Update</button>
                   </div>
                  </div>
                  <div class="col-md-6"> </div>
                </div>
              </form>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>