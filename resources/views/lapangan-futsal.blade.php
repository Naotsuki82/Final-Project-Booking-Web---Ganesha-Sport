<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lapangan Futsal</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <div class="d-flex justify-content-between">
            <h1>Lapangan Futsal</h1>
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit" class="btn btn-link">Logout</button>
            </form>
        </div>
        <p>Detail informasi mengenai Lapangan Futsal.</p>
    </div>
</body>
</html>
