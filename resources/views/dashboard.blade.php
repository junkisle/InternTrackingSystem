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
    

</head>
<body>
@include('utility.sidebar', ['user_name' => $user_name], ['user_role' => $user_role])
<p>WELCOME{{ $user_name }} {{ $user_role }}</p>
    <!-- sidebar/sidebar.blade.php -->


</body>
</html>