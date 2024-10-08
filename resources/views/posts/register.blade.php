<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="{{ asset('css/login.css') }}">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <title>Register</title>
</head>
<body>
  <section class="h-100 gradient-form" style="background-color: #eee;">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-xl-10">
          <div class="card rounded-3 text-black">
            <div class="row g-0">
              <div class="col-lg-6">
                <div class="card-body p-md-5 mx-md-4">
  
                  <div class="text-center">
                    <img src="{{ asset('img/pizza-bg.png') }}"
                      style="width: 185px;" alt="logo">
                    <h4 class="mt-1 mb-5 pb-1">Create an Account</h4>
                  </div>
  
                  <form>
                    <p>Please fill in the form to create an account</p>
                    
                    <!-- Name input -->
                    <div data-mdb-input-init class="form-outline mb-4">
                      <input type="text" id="formName" class="form-control"
                        placeholder="Enter your name" />
                      <label class="form-label" for="formName">Name</label>
                    </div>
  
                    <!-- Email input -->
                    <div data-mdb-input-init class="form-outline mb-4">
                      <input type="email" id="formEmail" class="form-control"
                        placeholder="Enter your email" />
                      <label class="form-label" for="formEmail">Email</label>
                    </div>
  
                    <!-- Password input -->
                    <div data-mdb-input-init class="form-outline mb-4">
                      <input type="password" id="formPassword" class="form-control" />
                      <label class="form-label" for="formPassword">Password</label>
                    </div>
  
                    <!-- Confirm Password input -->
                    <div data-mdb-input-init class="form-outline mb-4">
                      <input type="password" id="formConfirmPassword" class="form-control" />
                      <label class="form-label" for="formConfirmPassword">Confirm Password</label>
                    </div>
  
                    <!-- Submit button -->
                    <div class="text-center pt-1 mb-5 pb-1">
                      <button data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3" type="button">Sign Up</button>
                    </div>
  
                    <!-- Already have an account link -->
                    <div class="d-flex align-items-center justify-content-center pb-4">
                      <p class="mb-0 me-2">Already have an account?</p>
                      <button type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-outline-danger">Login</button>
                    </div>
  
                  </form>
  
                </div>
              </div>
              <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
                <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                  <h4 class="mb-4">Join Our Community</h4>
                  <p class="small mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                    exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
