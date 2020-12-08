<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,
        initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" 
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <title>
            ADD
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

        <div class="container" style="margin-bottom: 80px;">
        <h3 class="text-center" style="margin: 50px">Input Product</h3>

                <form style="margin: 20px" role="form" method="post" enctype="multipart/form-data" action="/addproduct">

                    @csrf
                    @method('post')
                    <div class="form-group">
                        <label for="name">Product Name</label>
                        <input type="text" class="form-control" id="name" name="name" aria-describedby="emailHelp">
                    </div>

                    <div class="form-group">
                        <label for="price">Price</label>
                        <div class="input-group-prepend">
                            <div class="input-group-text">$ USD</div>
                            <input class="form-control" type="text" id="price" name="price" >
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="Description">Description</label>
                        <textarea class="form-control" id="Description" name="Description" rows="3"></textarea>
                    </div>

                    <div class="form-group">
                        <label for="stock">Stock</label>
                        <input type="number" name="stock" id="stock" class="form-control" style="width: 300px">
                    </div>

                    <div class="form-group">
                        <label for="img">Image file input</label>
                        <input type="file" class="form-control-file" id="img" name="img">
                    </div>

                    <button type="submit" class="btn btn-dark">Submit</button>

                </form>

            </div>
</body>

</html>