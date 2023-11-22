<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>MyStudy</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/c41a345393.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
        body {
            background-color: rgb(244, 244, 244);
        }
    </style>

</head>

<body class="antialiased">

    <nav class="navbar navbar-light" style="background: linear-gradient(to right, #8989ff, #2443cb);">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                </a>

            @if (Route::has('login'))
                    @auth
                        <a class="btn btn-outline-light" href="{{ url('/home') }}">Home</a>
                    @else
                        <a class="btn btn-outline-light" href="{{ route('login') }}">Login</a>
                    @endauth
            @endif

        </div>
    </nav>

    <center>
    <div class="card text-center text-white w-75" style="margin-top: 100px;border: none;background-color: rgba(255, 255, 255, 0);">
        <div class="card-body" style="background: linear-gradient(to right, #6565a7, #112064);border-radius: 50px;">
          <h5 class="card-title">Selamat Datang Di MyStudy!</h5>
          <p class="card-text">Silahkan login menggunakan akun yang terdaftar</p>

          @if (Route::has('login'))
          @auth
              <a class="btn btn-outline-light" href="{{ url('/home') }}">Home</a>
          @else
              <a class="btn btn-outline-light" href="{{ route('login') }}">Login</a>
          @endauth
  @endif

        </div>
      </div>
    </center>

</body>

</html>
