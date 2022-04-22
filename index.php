<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<!-- Bootstrap icons -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

<!-- style -->
<link rel ="stylesheet" href="css/signin.css">
    <title>login</title>
</head>
<body>
<div class="row justify-content-center">
 <div class="col-md-4">

 
  <div class="alert alert-success alert-dismissible fade show" role="alert">

   <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
   </button>
  </div>


  @if(session()->has('loginError'))
  <div class="alert alert-danger alert-dismissible fade show" role="alert">
    {{ session('loginError') }}
   <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
   </button>
  </div>
  @endif 

  <main class="form-signin">
      <h1 class="h3 mb-3 fw-normaltext-center">Please login</h1>
    <form action="config/login.php" method="POST">
      @csrf
      <div class="form-floating">
        <input type="email" name="email" class="form-control @error ('email') is-invalid @enderror" id="email" placeholder="name@example.com" autofocus required value="{{ old('email') }}">
        <label for="email">Email address</label>
        @error ('email') 
        <div class="invalid-feedback">
          {{ $message }}
        </div>
        @enderror
      </div>
      <div class="form-floating">
        <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
        <label for="password">Password</label>
      </div>
      <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
    </form>
    <small class="d-block text-center mt-2">Not registered?<a href="/register">Register Now!</small>
  </main>
 </div>
</div>
</body>
</html>