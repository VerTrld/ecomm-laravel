@extends('master')
@section('content')

<div class="container mt-5">
    <div class="row">
        <div class="col-sm-6 mt-5">
            <img class="detail-img" src="{{$products['gallery']}}" alt="">
        </div>
        <div class="col-sm-6 mt-5">
            <p></p>
            <h2>{{$products['name']}}</h2>
            <h3>₱{{$products['price']}}</h3>
            <p>Details: {{$products['description']}}</p>
            <p>Category: {{$products['category']}}</p>

            <form action="/add_to_cart" method="POST">
            @csrf
            <input type="hidden" name="product_id" value="{{$products['id']}}">
            <a href="" class="btn btn-success shadow">Buy Now</a>
            <button class="btn btn-success shadow">Add to Cart</button>
            </form>
        </div>
    </div>
</div>
@endsection


