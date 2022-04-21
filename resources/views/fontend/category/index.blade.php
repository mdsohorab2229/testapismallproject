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
                    <th scope="col">Description</th>
                  </tr>
                </thead>
                <tbody>
                  {{-- {{ dd($data->product_list) }} --}}
                 
                  @foreach ($cat->categories as $key=>$cd )
                  <tr>
                     
                    <th scope="row">{{ $key+1 }}</th>
                    <td>{{ $cd->cat_name }}</td>
                    <td>{{ $cd->description }}</td>
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