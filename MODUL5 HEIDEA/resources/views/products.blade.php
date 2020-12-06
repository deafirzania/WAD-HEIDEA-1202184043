<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,
        initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" 
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <title>
            HOME
        </title>
    </head>


    <body>
        <nav class="navbar navbar-expand-md navbar-light">
            <div class="collapse navbar-collapse d-flex justify-content-center">
            <div class="navbar-nav">
                <a class="nav-link active" href="/">HOME</a>
                <a class="nav-link active" href="/products">PRODUCT</a>
                <a class="nav-link active" href="/orders">ORDER</a>
                <a class="nav-link active" href="/history">HISTORY</a>
            </div>
            </div>
        </nav>

        <!-- cek dari controller -->
        @if($products -> isEmpty())
            <div class="text-center">
                <p style="margin-top: 30px; color: gray">Tidak ada data</p>
                <a type="button" class="btn btn-secondary btn-sm" href="/addproducts">Add Product</a>
            </div>

            @else
            <div class="container" style="margin-bottom: 80px;">
                <div class="text-center" style="margin-bottom: 20px; margin-top: 40px;">
                    <h3>List Product</h3>
                </div>

                <a href="/addproducts" type="button" class="btn btn-dark">Add Product</a>
                <table class="table" style="margin-top: 20px">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Price</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php $x = 1 ?>
                        @foreach($products as $p)
                        <tr>
                            <th scope="row"><?php echo $x;
                                            $x++ ?></th>
                            <td>{{$p->name}}</td>
                            <td>{{$p->price}}</td>
                            <td><a type="button" href="/updateproducts/{{$p->id}}" class="btn btn-primary">Edit</a>
                                <a href="deleteproducts/{{$p->id}}" type="button" class="btn btn-danger">Delete</a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            @endif

    </body>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</html>