<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,
        initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" 
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <title>
            ORDER
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

        @if($products -> isEmpty())
            <div class="text-center">
                <p style="margin-top: 20px;color: gray">There is no data...</p>
                <a type="button" class="btn btn-secondary btn-sm" href="/addproducts">Add Product</a>
            </div>

            @else
            <div class="text-center">
                <h3 style="margin-bottom: 30px; margin-top: 30px;">Order</h3>
            </div>

            @foreach($products as $p)
            <div class="container" style="margin-left: 80px;">
                <div class="card" style="width: 18rem; float: left">
                    <img src="{{'/img_product/'.$p->img_path}}" class="card-img-top" alt="..." width="50px">
                    <div class="card-body">
                        <h6 class="card-title">{{$p->name}}</h6>
                        <p class="card-text">{{$p->description}}</p>
                        <h4 class="card-title">{{$p->price}}</h4>
                        <a href="/orderdetail/{{$p->id}}" class="btn btn-success">Order Now</a>
                    </div>
                </div>
            </div>
            @endforeach

        @endif

</body>

</html>