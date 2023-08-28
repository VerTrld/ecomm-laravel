@extends('master')
@section('content')


<section class=" custom-login mt-5">
  <!-- Jumbotron -->
  <div class="px-4 py-5 px-md-5 text-center text-lg-start ">
    <div class="container ">
      <div class="row gx-lg-5 justify-content-center">


        <div class="col-lg-6 mb-5 mb-lg-0">
          <div class="card shadow ">
            <h1 class="text-center mt-4">Login</h1>
            <div class="card-body py-5 px-md-5 ">
              <form action="login" method="POST">
                @csrf
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

@endsection
