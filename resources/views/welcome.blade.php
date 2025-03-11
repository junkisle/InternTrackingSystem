<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
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
    <a class="nav-link disabled" aria-disabled="true">Avvanz Intern</a>
  </li>
  <li class="nav-item">
    <a class="nav-link active" href="https://Avvanz.com">Avvanz</a>
  </li>
  <li class="nav-item">
    <a class="nav-link active" href="{{ route('CDD_Global') }}">CDD Global</a>
  </li>
  <li class="nav-item">
    <a class="nav-link active" href="{{ route('LoginPage') }}">Log in</a>
  </li>
</ul>

</body>
</html>