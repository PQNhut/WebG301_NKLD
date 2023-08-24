<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title> <!-- Add Bootstrap CSS link here -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <style>
        /* Add custom CSS styles here */
    </style>
</head>

<body> <!-- Navigation section -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light"> <a class="navbar-brand" href="#">Your Brand</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation"> <span
                class="navbar-toggler-icon"></span> </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active"> <a class="nav-link" href="{{ url('customer/index') }}">Home</a> </li>
                <li class="nav-item"> <a class="nav-link" href="products.html">Products</a> </li>
                <!-- Add more navigation links if needed -->
            </ul>
        </div>
    </nav>
    <!-- Products section -->
    <div class="products">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage">
                        <!-- Add title or heading for your products section -->
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($pro as $p)
                    <div class="col-md-4 margin_bottom1">
                        <div class="product_box">
                            <a href="#" title="Click this product to view details">
                                <img src="../pro_img\{{ $p->productImage1 }}" alt="img"
                                    style="height:200px ;width:200px" />
                            </a>
                            <h3>{{ $p->productName }}</h3>
                            <p>Price: {{ $p->productPrice }}</p>
                        </div>
                    </div>
                @endforeach
                <!-- Add more product boxes if needed -->
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6 text-center"> <a class="btn btn-outline-dark" href="#">See More</a> </div>
            </div>
        </div>
    </div>
    <!-- End of Products section -->

    <!-- Add Bootstrap JS scripts here -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>

</html>
