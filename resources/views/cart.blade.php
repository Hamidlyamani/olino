<!DOCTYPE html>
<html>

<head>
    <title>My Cart - Olino</title>

    <!-- For-Mobile-Apps -->
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords"
        content="OLINO Cart " />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link type="text/css" rel="stylesheet" href="{{ mix('css/app.css') }}">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="{{ asset('css/cart.css') }}" type="text/css" media="all" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/custemresponive.css') }}" />


    <!-- Remove-Item-JavaScript -->
    <script src="js/jquery-3.4.1.min.js"></script>

    <script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.alert-close1').on('click', function() {
                // Find the closest parent with class 'item1'
                var closestItem = $(this).closest('.item1');

                // Get the ID of the item from a data attribute or other source
                var itemId = closestItem.data('item-id');

                // Send an AJAX request to another route with the item ID
                $.ajax({
                    url: '/remove/' + itemId,
                    method: 'POST', // or 'GET' depending on your route definition
                    data: {
                        _token: '{{ csrf_token() }}',
                    }, // Include CSRF token if needed
                    success: function(response) {
                        // Optionally handle the response from the server
                        console.log(response);
                    },
                    error: function(xhr, status, error) {
                        // Handle errors if any
                        console.error(error);
                    }
                });

                // Continue with the existing code to fade out and remove the item
                closestItem.fadeOut('slow', function() {
                    closestItem.remove();
                });
            });
        });

        // $(document).ready(function() {
        //     $('.alert-close1').on('click', function() {
        //         // Find the closest parent with class 'item1' and remove it
        //         $(this).closest('.item1').fadeOut('slow', function() {
        //             $(this).remove();
        //         });
        //     });
        // });
    </script>


</head>

<body>
    <!-- Content-Starts-Here -->
    <div class="container">

        <!-- Mainbar-Starts-Here -->
        <div class="main-bar">
            <div class="product">
                <h3>Product</h3>
            </div>
            <div class="quantity">
                <h3>Quantity</h3>
            </div>
            <div class="price">
                <h3>Price</h3>
            </div>
            <div class="clear"></div>
        </div>
        <!-- //Mainbar-Ends-Here -->

        <!-- Items-Starts-Here -->
        <div class="items">
            @foreach ($cartItems as $prodect)
                <x-cartprodact :prodects='$prodect' />
            @endforeach
        </div>
        <!-- //Items-Ends-Here -->

        <!-- Total-Price-Starts-Here -->
        <div class="total">
            <div class="total1">Total Price</div>
            <div class="total2">{{ $total }}</div>
            <div class="clear"></div>
        </div>
        <!-- //Total-Price-Ends-Here -->

        <!-- Checkout-Starts-Here -->
        <div class="checkout">

            <div class="checkout-btn">
                <a href="/contact">Checkout</a>
            </div>
            <div class="clear"></div>
        </div>
        <!-- //Checkout-Ends-Here -->

    </div>
    <!-- Content-Ends-Here -->




    <div class=" mywid checkout-btn1">
        <div >
            <ul>
                <li class="checkout-btn12"><a href="/my_informations">  Edit my account</a></li>
                <li class="checkout-btn12"> <a href="/shop">  Back </a></li>
                <li class="checkout-btn12"> <a href="/logout">  Log out</a></li>
            </ul>
        </div>
    </div>


    <!-- Copyright-Starts-Here -->
    <div class="copyright">
        {{-- <p>&copy; 2016 E Shop Cart. All Rights Reserved | Template by <a href="http://w3layouts.com/"> W3layouts </a> --}}
        </p>
    </div>
    <!-- //Copyright-Ends-Here -->

</body>
<!-- Body-Ends-Here -->

</html>
