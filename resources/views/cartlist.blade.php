@extends('master')
@section('content')



<section class="vh-100" ">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col">
          <p><span class="h2">Shopping Cart </span><span class="h4"></span></p>
  
          <div class="card mb-4">
            <div class="card-body p-4">
  
                <div class="container">
                    @foreach ($products as $item)
                    <div class="row align-items-center mb-4">
                        <div class="col-md-2">
                            <a href="detail/{{$item->id}}">
                                <img src="{{$item->gallery}}" class="img-fluid" alt="{{$item->name}}">
                            </a>
                        </div>
                        <div class="col-md-2 d-flex justify-content-center">
                            <div>
                                <p class="small text-muted mb-4 pb-2">Name</p>
                                <p class="lead fw-normal mb-0">{{$item->name}}</p>
                            </div>
                        </div>
      

                        <div class="col-md-2 d-flex justify-content-center">
                            <div>
                                <p class="small text-muted mb-4 pb-2">Price</p>
                                <p class="lead fw-normal mb-0">₱{{$item->price}}</p>
                            </div>
                        </div>



                    @endforeach
                

  
            </div>
          </div>
  
          <div class="d-flex justify-content-end">
            <button type="button" class="btn btn-light btn-lg me-2">Continue shopping</button>
            <button type="button" class="btn btn-primary btn-lg">Order</button>
          </div>
  
        </div>
      </div>
    </div>
  </section>



