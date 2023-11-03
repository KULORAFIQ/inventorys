<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>Login</title>
</head>

<!-- allert/validasi -->
<body>
    @if (session()->has('loginError'))
    <div class="alert alert-danger col-lg-10 mx-auto col-lg-5" role="alert">
        {{ session('loginError') }}
    </div>
@endif

@if (session()->has('loginberhasil'))
    <div class="alert alert-success col-lg-10 mx-auto col-lg-5" role="alert">
        {{ session('loginberhasil') }}
    </div>
@endif
    <div class="container py-5">
        <div class="w-50 border rounded px-3 py-3 mx-auto">
            <h1 class="mb-3">Login</h1>
            <form action="{{Route('poslog')}}" method="POST">
                @csrf <!-- Ini adalah token CSRF untuk keamanan -->
                <div class="mb-3">
                    <label for="name" class="form-label">Username</label>
                    <input type="text" name="name" class="form-control" id="name" required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" id="password" required>
                </div>
                <!-- tombol untuk masuk -->
                <div class="mb-3">
                    <button type="submit" class="btn btn-primary btn-block">Login</button>
                </div>
                <!-- tombol untuk kembali ke halaman awal -->
                <a href="/" class="btn btn-primary">Kembali</a>

            </form>
        </div>
    </div>
</body>
</html>
