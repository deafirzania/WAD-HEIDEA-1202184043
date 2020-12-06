<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Tambah</title>

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
                    <!-- <input type="number" class="form-control" id="price" name="price"> -->
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