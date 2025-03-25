<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <title>Signup</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" 
    rel="stylesheet" 
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" 
    crossorigin="anonymous">
    <style>
        .sidebar {
            position: fixed;
            height: 100vh;
            overflow-y: auto;
        }


    </style>

</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar (Fixed & Scrollable) -->
            <div class="col-md-3 col-xl-2 px-sm-2 px-0 bg-dark min-vh-100 position-fixed" style="height: 100vh;">
                @include('utility.sidebar', ['user_data' => session('user_data')])
            </div>

            <!-- Main Content (Beside Sidebar) -->
            <div class="col-md-9 col-xl-10 offset-md-3 offset-xl-2 py-3" style="height: 100vh; overflow-y: auto;">
                @for ($i = 0; $i < 30; $i++)
                    <p class="fw-bold fs-4">WELCOME {{ session('user_data')->name_first }}</p>
                @endfor
            </div>
        </div>
    </div>
</body>



</html>