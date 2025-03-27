<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <title>Login</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" 
    rel="stylesheet" 
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" 
    crossorigin="anonymous">

    <style>
        body {
            background-image: url('images/Homepage.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            height: 100vh;
        }
    </style>
</head>
<body>

<ul class="nav justify-content-center bg-light">
  <li class="nav-item">
  <a class="nav-link active" href="{{ route('welcome') }}">Avvanz Intern</a>
  </li>
  <li class="nav-item">
    <a class="nav-link active" href="https://Avvanz.com">Avvanz</a>
  </li>
  <li class="nav-item">
    <a class="nav-link active" href="{{ route('CDD_Global') }}">CDD Global</a>
  </li>
</ul>

<section class="vh-100" style="">
  
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card shadow-2-strong" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">

            <h3 class="mb-5">Sign in</h3>
            @if($errors -> any())
              @foreach ($errors->all() as $error)
                <div class="alert alert-danger" role="alert">
                    {{ $error }}
                </div>
              @endforeach
            @endif
            <form action="{{ route('login_User') }}" method="post">
            @csrf
            @method('post')
            
            <div data-mdb-input-init class="form-outline mb-4">
              <input type="email" id="email" name="email" class="form-control form-control-lg" />
              <label class="form-label" for="email">Email</label>
            </div>

            <div data-mdb-input-init class="form-outline mb-4">
              <input type="password" id="password" name="password" class="form-control form-control-lg" />
              <label class="form-label" for="password">Password</label>
            </div>


            <button data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-lg btn-block" type="submit">Login</button>
            <hr class="my-4">
            <div class="warning">Don't have an account?</div>
            <a href="{{ route('SignupPage') }}">Signup here</a>

            </form>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>

</body>
</html>