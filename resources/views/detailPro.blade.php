<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Single E-commerce Product Page using HTML, CSS - Codingscape</title>
    <!-- Stylesheet -->
    <link rel="stylesheet" href="{{ asset('css/details.css') }}">
    <!---Boxicons CDN Setup for icons-->


    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <style>
        label {
            margin-bottom: 8px;
            color: #333;
        }

        input {
            padding: 10px;
            margin-bottom: 16px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
        }

        input[type="submit"] {
            background-color: #4caf50;
            color: #fff;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="single-product">
            <div class="row">
                <div class="col-6">
                    <div class="product-image">
                        <div class="product-image-main">
                            <img src="../images/{{ $product['image_name'] }}" alt="" id="product-main-image">
                        </div>
                        <div class="product-image-slider">
                            <img src="../images/{{ $product['image_name'] }}" alt="" class="image-list">
                            <img src="../images/{{ $product['image_name'] }}" alt="" class="image-list">
                            <img src="../images/{{ $product['image_name'] }}" alt="" class="image-list">
                            <img src="../images/{{ $product['image_name'] }}" alt="" class="image-list">
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="breadcrumb">
                        <span><a href="{{ route('home') }}">Home</a></span>
                        <span><a href="{{ route('shop') }}">Products</a></span>
                        <span class="active">{{ $product['name'] }}</span>
                    </div>

                    <div class="product">
                        <div class="product-title">
                            <h2>{{ $product['name'] }}</h2>
                        </div>
                        <div class="product-rating">
                            <span><i class="bx bxs-star"></i></span>
                            <span><i class="bx bxs-star"></i></span>
                            <span><i class="bx bxs-star"></i></span>
                            <span><i class="bx bxs-star"></i></span>
                            <span><i class="bx bxs-star"></i></span>
                            <span class="review">(47 Review)</span>
                        </div>
                        <div class="product-price">
                            <span class="offer-price">{{ $product['price'] }}</span>
                            <span class="sale-price">{{ $product['price'] + 30 }}</span>
                        </div>

                        <div class="product-details">
                            <h3>Description</h3>
                            <p>{{ $product['description'] }}</p>
                        </div>
                        <form action="/mycart/insert" method="post">
                             {{ csrf_field() }}
                             <input type="hidden" name="id_prodact" value={{$product['id']}}>
                            <div class="product-color">
                                <h4>Color</h4>
                                <div class="color-layout">
                                    <input type="radio" name="color" value="black" class="color-input" checked>
                                    <label for="black" class="black"></label>
                                    <input type="radio" name="color" value="red" class="color-input">
                                    <label for="red" class="red"></label>

                                    <input type="radio" name="color" value="blue" class="color-input">
                                    <label for="blue" class="blue"></label>
                                </div>
                            </div>
                            <div>
                                <label for="quantity" class="form-label">Quantity:</label>
                                <input type="number" class="form-control" id="quantity" value="1" name="quantity" min="1"
                                 placeholder="1">
                            </div>
                            <span class="divider"></span>
                            <div class="product-btn-group">
                                    <button  class="button buy-now" type="submit" ><i class='bx bxs-cart'></i>Add to Cart</button>
                               

                            </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!--script-->
    <script src="{{ asset('js/details.js') }}"></script>
</body>

</html>
