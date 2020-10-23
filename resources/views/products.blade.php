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
            <form action="/add_to_card">
                <input type="hidden" name="product_id" value="{{$item['id']}}">
                @csrf
                <button class="btn btn-danger">Add To Card</button>
            </form>
            </a>
        </div>
        @endforeach
    </div>       
</div>
@endsection
