

@extends('master')
@section('content')

    <section class=" custom-login mt-5">
        <!-- Jumbotron -->
        <div class="px-4 py-5 px-md-5 text-center text-lg-start ">
          <div class="container ">
            <div class="row gx-lg-5 justify-content-center">
      
      
              <div class="col-lg-6 mb-5 mb-lg-0">
                <div class="card shadow ">
                  <div class="card-body py-5 px-md-5 ">
                    <form action="addproduct" method="POST">
                      @csrf
                      <!-- Email input -->
                      <div class="form-outline mb-4">
                        <input type="text" id="form3Example3" name="name"  class="form-control" />
                        <label class="form-label"  for="form3Example3">Product Name</label>
                      </div>
      
                      <!-- Password input -->
                      <div class="form-outline mb-4">
                        <input type="text" id="form3Example4" name="price" class="form-control" />
                        <label class="form-label"  for="form3Example4">Price</label>
                      </div>

                      <div class="form-outline mb-4">
                        <input type="text" id="form3Example4" name="category" class="form-control" />
                        <label class="form-label"  for="form3Example4">Category</label>
                      </div>

                      <div class="form-outline mb-4">
                        <textarea id="form3Example4" name="description" class="form-control"></textarea>

                        <label class="form-label"  for="form3Example4">Description</label>
                      </div>

                      <div class="form-outline mb-4">
                        <input type="text" id="form3Example4" name="gallery" class="form-control" />
                        <label class="form-label"  for="form3Example4">Gallery</label>
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


