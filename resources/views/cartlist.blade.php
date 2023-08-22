@extends('master')
@section('content')




{{-- <div class="container mt-5">
    <div class="row">
        <div class="col-sm-6 mt-5">

            @foreach ($products as $item )
            <a href="detail/{{$item->id}}"></a>
            <img src="{{$item->gallery}}" alt="" >
            <h2>{{$item->name}}</h2>
            <h2>{{$item->description}}</h2>

            @endforeach


        </div>
    </div>
</div> --}}

{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-8">
                        <div class="p-2">
                            <h4>Shopping cart</h4>
                        </div>
                        @foreach ($products as $item )
                        <div class="d-flex flex-row justify-content-between align-items-center p-2 bg-white mt-4 px-3 rounded">
                            <div class="mr-1"><img class="rounded" src="{{$item->gallery}}" width="70"></div>
                            <div class="d-flex flex-column align-items-center product-details"><span class="font-weight-bold">{{$item->name}}</span>
                            </div>
                            <div class="d-flex flex-row align-items-center qty"><i class="fa fa-minus text-danger"></i>
                                <h5 class="text-grey mt-1 mr-1 ml-1"></h5><i class="fa fa-plus text-success"></i></div>
                            <div>
                                <h5 class="text-grey">₱{{$item->price}}</h5>
                            </div>
                            <a href="removecart/{{$item->cart_id}}">remove</a>
                     
                        </div>

                        @endforeach

                        <button class="btn btn-success mt-5">Checkout</button>
        </div>
    </div>
</div> --}}


<div class="container cartlist">
    <h1 class="h3 mb-5">Payment</h1>
    <div class="row">
      <!-- Left -->
      <div class="col-lg-9">
        <div class="accordion" id="accordionPayment">
          <!-- Credit card -->
          <div class="accordion-item mb-3">
            <h2 class="h5 px-4 py-3 accordion-header d-flex justify-content-between align-items-center">
              <div class="form-check">
                <label class="form-check-label pt-1" for="payment1">
                  Shopping Cart
                </label>
              </div>

              <span>
                <svg width="34" height="25" xmlns="http://www.w3.org/2000/svg">
                  <g fill-rule="nonzero" fill="#333840">
                    <path d="M29.418 2.083c1.16 0 2.101.933 2.101 2.084v16.666c0 1.15-.94 2.084-2.1 2.084H4.202A2.092 2.092 0 0 1 2.1 20.833V4.167c0-1.15.941-2.084 2.102-2.084h25.215ZM4.203 0C1.882 0 0 1.865 0 4.167v16.666C0 23.135 1.882 25 4.203 25h25.215c2.321 0 4.203-1.865 4.203-4.167V4.167C33.62 1.865 31.739 0 29.418 0H4.203Z"></path>
                    <path d="M4.203 7.292c0-.576.47-1.042 1.05-1.042h4.203c.58 0 1.05.466 1.05 1.042v2.083c0 .575-.47 1.042-1.05 1.042H5.253c-.58 0-1.05-.467-1.05-1.042V7.292Zm0 6.25c0-.576.47-1.042 1.05-1.042H15.76c.58 0 1.05.466 1.05 1.042 0 .575-.47 1.041-1.05 1.041H5.253c-.58 0-1.05-.466-1.05-1.041Zm0 4.166c0-.575.47-1.041 1.05-1.041h2.102c.58 0 1.05.466 1.05 1.041 0 .576-.47 1.042-1.05 1.042H5.253c-.58 0-1.05-.466-1.05-1.042Zm6.303 0c0-.575.47-1.041 1.051-1.041h2.101c.58 0 1.051.466 1.051 1.041 0 .576-.47 1.042-1.05 1.042h-2.102c-.58 0-1.05-.466-1.05-1.042Zm6.304 0c0-.575.47-1.041 1.051-1.041h2.101c.58 0 1.05.466 1.05 1.041 0 .576-.47 1.042-1.05 1.042h-2.101c-.58 0-1.05-.466-1.05-1.042Zm6.304 0c0-.575.47-1.041 1.05-1.041h2.102c.58 0 1.05.466 1.05 1.041 0 .576-.47 1.042-1.05 1.042h-2.101c-.58 0-1.05-.466-1.05-1.042Z"></path>
                  </g>
                </svg>
              </span>
            </h2>
            
            <div id="collapseCC" class="accordion-collapse collapse show" data-bs-parent="#accordionPayment" style="">
              <div class="accordion-body">
                <div class="row">


                    @foreach ($products as $item )
                    <div class="d-flex flex-row justify-content-between align-items-center p-2 bg-white mt-4 px-3 rounded">
                        <div class="mr-1"><img class="rounded" src="{{$item->gallery}}" width="70"></div>
                        <div class="d-flex flex-column align-items-center product-details"><span class="font-weight-bold">{{$item->name}}</span>
                        </div>
                        <div class="d-flex flex-row align-items-center qty"><i class="fa fa-minus text-danger"></i>
                            <h5 class="text-grey mt-1 mr-1 ml-1"></h5><i class="fa fa-plus text-success"></i></div>
                        <div>
                            <h5 class="text-grey">₱{{$item->price}}</h5>
                        </div>
                        <a href="removecart/{{$item->cart_id}}">remove</a>
                 
                    </div>

                    @endforeach




                 
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
      <!-- Right -->
      <div class="col-lg-3">
        <div class="card  top-0">
          <div class="p-3 bg-light bg-opacity-10">
            <h6 class="card-title mb-3">Order Summary</h6>
            <div class="d-flex justify-content-between mb-1 small">
              <span>Subtotal</span> <span>$214.50</span>
            </div>
            <div class="d-flex justify-content-between mb-1 small">
              <span>Shipping</span> <span>FREE</span>
            </div>
            <div class="d-flex justify-content-between mb-1 small">
              <span>Coupon (Code: NEWYEAR)</span> <span class="text-danger">-$10.00</span>
            </div>
            <hr>
            <div class="d-flex justify-content-between mb-4 small">
              <span>TOTAL</span> <strong class="text-dark">$224.50</strong>
            </div>
            <div class="form-check mb-1 small">
              <input class="form-check-input" type="checkbox" value="" id="tnc">
              <label class="form-check-label" for="tnc">
                I agree to the <a href="#">terms and conditions</a>
              </label>
            </div>
            <div class="form-check mb-3 small">
              <input class="form-check-input" type="checkbox" value="" id="subscribe">
              <label class="form-check-label" for="subscribe">
                Get emails about product updates and events. If you change your mind, you can unsubscribe at any time. <a href="#">Privacy Policy</a>
              </label>
            </div>
            <button class="btn btn-primary w-100 mt-2">Place order</button>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection



