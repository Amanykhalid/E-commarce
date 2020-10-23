@extends('layout')
@section('contant')
<div class="container">
    <div class="row productLook">
        @foreach ($products as $item)
 
        <div class="col-md-3">
            <a href="detail/{{$item['id']}}">
            <img src="{{$item['gallery']}}" alt="{{$item['name']}}">
            <h3>{{$item['name']}}</h3>
            <p>{{$item['descraption']}}</p>
            <b>{{$item['price']}}</b>
            <button class="btn btn-danger">Add To Card</button>
            </a>
        </div>
        @endforeach
    </div>       
</div>
@endsection
