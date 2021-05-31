<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1 class="mt-3">Form Login</h1>
        <form action="/login" method="post">
            @csrf

            <div class="form-floating mb-3 col-sm-5">
            <input type="email" name="email" class="form-control ">
            <label for="floatingInput">Email address</label>
            </div>

            <div class="form-floating mb-3 col-sm-5">
            <input type="password" name="password" class="form-control ">
            <label for="floatingInput">Password</label>
            </div>

            <input type="submit" name="add" class="btn btn-primary" value="Tambah Data">
    </div>
</body>
</html>