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

        @method("PUT")
        @csrf
        <div class="form-group">
            <label for="name">Product Name</label>
            <input class="form-control" type="text" name="name" value="{{$data->name}}" required>
        </div>
        <div class="form-group">
            <label for="price">Price</label>
            <div class="input-group-prepend">
                <div class="input-group-text">$USD</div>
                <input type="number" name="price" class="form-control" value="{{$data->price}}" required>
            </div>
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" rows="7" class="form-control" required >{{$data->description}}</textarea>
        </div>
        <div class="form-group">
            <label for="stock">Stock</label>
            <input type="number" name="stock" class="form-control" style="width: 450px" value="{{$data->stock}}" required>
        </div>
        <div class="form-group">
            <label for="img_path">Image File Input</label>
            <input type="file" class="form-control-file" name="img_path">
        </div>
        <button class="btn btn-dark" type="submit">Submit</button>
    </form>
</body>
</html>