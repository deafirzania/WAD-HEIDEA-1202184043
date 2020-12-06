@extends('layout')

@section('title', 'product')
@push('css')

@endpush
@section('content')
<div class="row pt-2">
    <div class="col d-flex align-items-center justify-content-center mt-2">
        <h4>List product</h4>
    </div>
</div>
<div class="row pt-4 d-flex align-items-center justify-content-center">
    <div class="col-md-6 ">
        <img class="img-fluid" src="{{ asset('images/upload/'.$orders->img_path)}}">
    </div>
    <div class="col-md-4">
        <h3>{{$orders->name}}</h3>
        <p>{{$orders->description}}</p>
        <p>Stock: {{$orders->stock}}</p>
        <h4>${{$orders->price}}</h3>

    </div>
</div>
<div class="row pt-4">
    <div class="col-md-10 offset-md-1">
        <h4 class="text-center">Buyer Information</h4>
        <form method="POST" action="{{ route('detailorderadd') }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="exampleInputEmail1">Nama</label>
                <input type="text" name="nama" class="form-control" id="exampleInputEmail1" name="product_name"
                    aria-describedby="emailHelp">
            </div>
            <div class="form-group">
                <label for="exampleInputstock">Contact Number</label>
                <input type="number" name="phone" class="form-control" id="exampleInputstock" name="stock">
            </div>
            <div class="form-group row">
                <div class="col-sm-4">
                    <label for="exampleInputstock">Quantity</label>
                    <input type="number" name="amount" class="form-control" id="exampleInputstock" name="stock">
                </div>
            </div>
<input type="hidden" name="harga" value="{{$orders->price}}">
<input type="hidden" name="user_id" value="{{$orders->id}}">
            <button type="submit" class="btn btn-success">submit</button>
        </form>
    </div>
</div>
@endsection