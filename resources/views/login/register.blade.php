<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="{{ asset('css/login.css') }}">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <title>Login</title>
  <style>
    .gradient-form {
      background-color: #eee;
    }
    .gradient-custom-2 {
      background: linear-gradient(to right, #fbc2eb, #a6c1ee);
    }
    .text-center img {
      width: 150px;
    }
    .form-outline {
      margin-bottom: 20px;
    }
  </style>
</head>
<body>
  <section class="h-100 gradient-form">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-xl-4 col-lg-5 col-md-6">
          <div class="card rounded-3 text-black">
            <div class="card-body p-md-5 mx-md-4">
              <div class="text-center mb-4">
                <img src="{{ asset('img/pizza-bg.png') }}" alt="logo">
              </div>
  
              <form action="{{ route('store') }}" method="POST">
                @csrf
                
                <!-- Name input -->
                <div class="form-outline mb-4">
                  <input type="text" id="formName" name="name" class="form-control" placeholder="Enter your name" required />
                </div>

                <!-- Email input -->
                <div class="form-outline mb-4">
                  <input type="email" id="formEmail" name="email" class="form-control" placeholder="Enter your email" required />
                </div>
  
                <!-- Password input -->
                <div class="form-outline mb-4">
                  <input type="password" id="formPassword" name="password" class="form-control" placeholder="Enter your password" required />
                </div>
  
                <!-- Submit button -->
                <div class="text-center">
                  <button type="submit" class="btn btn-primary btn-block gradient-custom-2">Login</button>
                </div>
  
              </form>
  
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
