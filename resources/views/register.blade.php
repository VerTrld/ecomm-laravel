@extends('master')
@section('content')

{{-- <div class="container custom-login">
    <div class="row justify-content-center">
        <div class="col-sm-8">
            <form action="register" method="POST">
                @csrf
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Full Name</label>
                  <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="namelHelp">
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Email address</label>
                  <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Password</label>
                  <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3 form-check">
                  <input type="checkbox" class="form-check-input" id="exampleCheck1">
                  <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div>
                <button type="submit" class="btn btn-primary">Regiser</button>
              </form>
        </div>
    </div>
</div> --}}

<!-- Section: Design Block -->
<section class=" custom-register mt-5">
  <!-- Jumbotron -->
  <div class="px-4 py-5 px-md-5 text-center text-lg-start"">
    <div class="container">
      <div class="row gx-lg-5 align-items-center">
        <div class="col-lg-6 mb-5 mb-lg-0">
          <h1 class="my-5 display-3 fw-bold ls-tight">
            The best offer <br />
            <span class="text-primary">for your PC Build</span>
          </h1>
          <p style="color: hsl(217, 10%, 50.8%)">
            Lorem ipsum dolor sit amet consectetur adipisicing elit.
            Eveniet, itaque accusantium odio, soluta, corrupti aliquam
            quibusdam tempora at cupiditate quis eum maiores libero
            veritatis? Dicta facilis sint aliquid ipsum atque?
          </p>
        </div>

        <div class="col-lg-6 mb-5 mb-lg-0">
          <div class="card">
            <div class="card-body py-5 px-md-5">
              <form action="register" method="POST">
                @csrf
                <div class="form-outline mb-4">
                  <input type="text" id="form3Example2" name="name"  class="form-control" />
                  <label class="form-label"  for="form3Example2">Full Name</label>
                </div>

                <!-- Email input -->
                <div class="form-outline mb-4">
                  <input type="email" id="form3Example3" name="email"  class="form-control" />
                  <label class="form-label"  for="form3Example3">Email address</label>
                </div>

                <!-- Password input -->
                <div class="form-outline mb-4">
                  <input type="password" id="form3Example4" name="password" class="form-control" />
                  <label class="form-label"  for="form3Example4">Password</label>
                </div>

                <!-- Checkbox -->
                <div class="form-check d-flex justify-content-center mb-4">
                  <input class="form-check-input me-2" type="checkbox" value="" id="form2Example33" checked />
                  <label class="form-check-label" for="form2Example33">
                    Terms of Service & Privacy Policy
                  </label>
                </div>

                <!-- Submit button -->
                <button type="submit" class="btn btn-primary btn-block mb-4">
                  Sign up
                </button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Jumbotron -->
</section>
<!-- Section: Design Block -->

@endsection
