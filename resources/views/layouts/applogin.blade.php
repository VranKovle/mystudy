<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login & Register</title>

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
            background-color: rgb(0, 107, 179);
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

</head>

<body>



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

</body>




</html>
