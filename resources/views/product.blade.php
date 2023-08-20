@extends('master')
@section('content')



    <div id="carouselExampleControls" class="carousel slide mx-2" data-bs-ride="carousel">
        <div class="carousel-inner ">
            @foreach ($products as $item)
                <div class="carousel-item{{ $loop->first ? ' active' : '' }}">
                    <a href="detail/{{$item['id']}}">
                    <img src="{{ $item['gallery'] }}" class="slider-img d-block w-100" alt="...">
                </div>
            </a>
            @endforeach
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
</div>

<div class="trending-wrapper">
    <h3>Trending Products</h3>
    <div class="carousel-inner">
        @foreach ($products as $item)
            <div class="trending-item">
                <a href="detail/{{$item['id']}}">
                <img src="{{ $item['gallery'] }}" class="trending-image d-block w-100" alt="..."> </a>
                <div class="trending-info"> <!-- Added a class for styling -->
                    <h6>{{ $item['name'] }}</h6>
                </div>
            </div>
        @endforeach
    </div>
</div>




@endsection
