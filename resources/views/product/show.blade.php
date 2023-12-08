@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Data Product
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <label class="form-label">Nama</label>
                        <input type="text" class="form-control" value="{{$product->name}}" name="name" disabled>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Price</label>
                        <input type="email" class="form-control" value="{{$product->price}}" name="email" disabled>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Stock</label>
                        <input type="email" class="form-control" value="{{$product->stock}}" name="email" disabled>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
