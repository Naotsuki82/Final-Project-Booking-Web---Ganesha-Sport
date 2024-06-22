<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        Welcome
                        <form action="{{ route('logout') }}" method="POST" style="display: inline;">
                            @csrf
                            <button type="submit" class="btn btn-link">Logout</button>
                        </form>
                    </div>
                    <div class="card-body">
                        <h3 class="text-center">Choose a Field</h3>
                        <div class="d-flex justify-content-around mt-4">
                            <a href="{{ route('lapangan-futsal') }}" class="btn btn-primary btn-lg">Lapangan Futsal</a>
                            <a href="{{ route('lapangan-basket') }}" class="btn btn-success btn-lg">Lapangan Basket</a>
                            <a href="{{ route('meja-billiar') }}" class="btn btn-danger btn-lg">Meja Billiar</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
