<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>mmmmm</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/c41a345393.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    @livewireStyles()
    <style>
        body {
            background-color: rgb(231, 231, 231);
        }

        .navbar {
            background: linear-gradient(to right, #8989ff, #2443cb);
        }

        /* The sidebar menu */


        /* The sidebar links */
        .sidebar a {
            padding: 8px 8px 8px 10px;
            text-decoration: none;
            font-size: 25px;
            text-decoration: none;
            color: #000000;
            display: block;
            transition: 0.3s;
        }

        .sidebar:hover .a1:hover {
            background-color: rgb(228, 228, 228);
        }

        .sidebar:hover .a2:hover {
            background-color: rgb(228, 228, 228);
        }

        .sidebar:hover .a3:hover {
            background-color: rgb(228, 228, 228);
        }

        .sidebar:hover .a4:hover {
            background-color: rgb(228, 228, 228);
        }

        .sidebar:hover .a5:hover {
            background-color: rgb(228, 228, 228);
        }

        .sidebar {
            padding-top: 1px;
        }

        .sidebar a {
            font-size: 25px;
        }

        .offcanvas {
            max-width: 70%;
        }
    </style>

<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">

</head>
<body>

    <nav class="navbar">
        <div class="container">

            <a class="btn btn-dark" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button"
                aria-controls="offcanvasExample">
                &#9776;
            </a>
            <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample"
                aria-labelledby="offcanvasExampleLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasExampleLabel">Menu</h5>
                    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">

                    <div class="sidebar">
                        <a href="{{ url('home') }}" class="a1">Home</a>
                        <a href="{{ url('account') }}" class="a2">Account</a>

                        @if (Auth::user()->peran=='Moderator')
                        <a href="{{ url('regiskan') }}" class="a3">Registrasikan</a>
                        @endif

                        <a href="#" class="a4">Settings</a>
                        <a href="#" class="a5">Contact</a>
                    </div>

                </div>
            </div>
            @guest
                @if (Route::has('login'))

                @endif
            @else
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    <img src="{{ asset('/storage/' . Auth::user()->gambar) }}"
                        style="border-radius: 900px;
                        height: 30px;
                        border: 0px solid white;">
                    {{ Auth::user()->name }}
                </a>

                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>



                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>

                @endguest
                </a>
            </div>
    </nav>

    @yield('content')

    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
    <script id="rendered-js">
        $('#bologna-list a').on('click', function(e) {
            e.preventDefault();
            $(this).tab('show');
        });
        //# sourceURL=pen.js
    </script>
    @livewireScripts()
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <x-livewire-alert::scripts />

    @stack('scripts')
</body>




</html>
