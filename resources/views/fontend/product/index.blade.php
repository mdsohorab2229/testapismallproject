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
            <div>
                <a href="" class="btn btn-primary mt-3">Add Data</a>
                <a href="" class="btn btn-primary mt-3 ">Back</a>
            </div>
        </header>
        <div class="mt-5">
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Product Name</th>
                    <th scope="col">Product Brand</th>
                    <th scope="col">Price</th>
                    <th scope="col">Category</th>
                    <th scope="col">description</th>

                  </tr>
                </thead>
                <tbody>
                  {{-- {{ dd($data->product_list) }} --}}
                  @foreach ($data->product_list as $key=>$dt)
                  <tr>
                    <th scope="row">{{ $key+1 }}</th>
                    <td>{{ $dt->prod_name }}</td>
                    <td>{{ $dt->prod_brand }}</td>
                    <td>{{ $dt->prod_price }}</td>
                    <td>{{ $dt->product_category->cat_name }}</td>
                    <td>{{ $dt->product_category->description }}</td>
                    
                  </tr>
                  @endforeach
                 
                  
                </tbody>
              </table>

        </div>

    </div>


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>