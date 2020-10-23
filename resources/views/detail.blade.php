@extends('layout')
@section('contant')

<div class="container">
    <div class="row">
        <div class="col-md-6">
            <img src="{{$products['gallery']}}" alt="{{$products['name']}}" class="w-100">
        </div>
        <div class="col-md-6">
            <h3>{{$products['name']}}</h3>
            <h4>{{$products['category']}}</h4>
            <p>{{$products['descraption']}}</p>
            <b>{{$products['price']}}</b><br><br>
            <button class="btn btn-success">Add To Card</button><br><br>
            <button class="btn btn-primary">Buy now</button><br><br>
            <a href="/">Bake Home</a>
            
        </div>
    </div>
</div>

@endsection
