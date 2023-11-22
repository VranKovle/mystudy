
<!DOCTYPE html>
<html>
<head>
    <title>Materi PDF</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 50px;
        }

        h1 {
            color: #333;
        }

        p {
            color: #555;
        }
    </style>
</head>
<body>

    <h1>{{ $materi->judulmateri }}</h1>

    <p>{!! $materi->isimateri !!}</p>

</body>
</html>
