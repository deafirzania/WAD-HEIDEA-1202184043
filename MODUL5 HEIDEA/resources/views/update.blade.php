
<div class="col-md-8 offset-md-2 mt-1">
    <h4 class="text-center">add product</h4>
    <form method="POST" action="{{ route('updateProduct', $products->id) }}" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="exampleInputEmail1">Product name</label>
            <input type="email" class="form-control" id="exampleInputEmail1" name="product_name"
                aria-describedby="emailHelp" value="{{$products->name}}">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
            <label for="inlineFormInputGroup">Price</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text">$USD</div>
                </div>
                <input type="number" class="form-control" id="inlineFormInputGroup" name="harga"
                    placeholder="" value="{{$products->price}}">
            </div>
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Description</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="deskripsi">{{$products->description}}</textarea>
        </div>
        <div class="form-group row">
            <div class="col-sm-4">
                <label for="exampleInputstock">Stock</label>
                <input type="number" class="form-control" id="exampleInputstock" name="stock" value="{{$products->stock}}">
            </div>
        </div>
        <div class="form-group">
            <label for="exampleFormControlFile1">Example file input</label>
            <input type="file" name="gambar" class="form-control-file" id="exampleFormControlFile1">
            <input type="hidden" name="gambarlama" value="{{$products->img_path}}">
        </div>
        <button type="submit" class="btn btn-dark">submit</button>
    </form>
</div>
