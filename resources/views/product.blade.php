@extends('master')
@section('content')



    {{-- <div id="carouselExampleControls" class="carousel slide mx-2" data-bs-ride="carousel">
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
</div> --}}


<header class="py-5 bg-header">
    <div class="container px-4 px-lg-5 my-5">
        <div class="text-center text-white">
            <h1 class="display-2 fw-bolder py-4">BIG SALE !</h1>
            <h4 ">SAVE UP TO 30% OFF</h4>
        </div>
    </div>
</header>

{{-- <div class="trending-wrapper">
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
</div> --}}


<section class="py-5">
    <div class="container px-4 px-lg-2 mt-5">
        <div class="row gx-4 gx-lg-5 row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 justify-content-center">

            <!-- Loop through products -->
            @foreach ($products as $item)
            <div class="col mb-5">
                <div class="card h-100">
                    <!-- Product image-->
                    <a href="detail/{{$item['id']}}">
                        <img class="card-img-top" src="{{ $item['gallery'] }}" alt="..." />
                    </a>
                    <!-- Product details-->
                    <div class="card-body p-4">
                        <div class="text-center">
                            <!-- Product name-->
                            <h5 class="fw-bolder">{{ $item['name'] }}</h5>
                            <!-- Product price-->
                            ₱ {{ $item['price'] }}
                        </div>

                    </div>
                    
                    <!-- Product actions-->
                    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                        <div class="text-center">
                            <a class="btn btn-outline-dark mt-auto" href="detail/{{$item['id']}}">View Item</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</section>
@endsection
