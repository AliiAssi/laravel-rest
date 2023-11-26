<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&display=swap"
        rel="stylesheet">

    <title>Klassy Cafe</title>
    <style>
        .proceed {
            display: inline-block;
            text-decoration: none;
            padding: 10px 20px;
            background-color: #007bff;
            /* Adjust the background color */
            color: #fff;
            /* Text color */
            border: none;
            border-radius: 5px;
            /* Rounded corners */
            margin-left: 50px;
            /* Margin to separate from other buttons */

        }

        /* Styles for the "Cannot Yet" button (disabled) */
        .proceed_disabled {
            display: inline-block;
            text-decoration: none;
            padding: 10px 20px;
            background-color: #ccc;
            /* Adjust the background color */
            color: #777;
            /* Text color */
            border: none;
            border-radius: 5px;
            /* Rounded corners */
            margin-right: 10px;
            /* Margin to separate from other buttons */
            cursor: not-allowed;
            /* Display "not-allowed" cursor for disabled state */
        }

        /* Styles for the "Back to Shop" button */
        .back {
            display: inline-block;
            text-decoration: none;
            padding: 10px 20px;
            background-color: #333;
            /* Adjust the background color */
            color: #fff;
            /* Text color */
            border: none;
            border-radius: 5px;
            /* Rounded corners */
            margin-right: 10px;
            /* Margin to separate from other buttons */
        }

        /* Hover styles for all buttons (except disabled) */
        .proceed:hover,
        .back:hover {
            background-color: #0056b3;
            /* Adjust the background color on hover */
        }

        /* Styles for the minus button */
        .moins-btn {
            display: inline-block;
            text-decoration: none;
            padding: 5px 10px;
            background-color: #FF5733;
            /* Adjust the background color */
            color: #fff;
            /* Text color */
            border: 1px solid #FF5733;
            /* Border color */
            border-radius: 5px;
            /* Rounded corners */
            margin-right: 10px;
            /* Margin to separate from other buttons */
        }

        /* Styles for the plus button */
        .add_btn {
            display: inline-block;
            text-decoration: none;
            padding: 5px 10px;
            background-color: #33FF57;
            /* Adjust the background color */
            color: #fff;
            /* Text color */
            border: 1px solid #33FF57;
            /* Border color */
            border-radius: 5px;
            /* Rounded corners */
            margin-right: 10px;
            /* Margin to separate from other buttons */
        }

        /* Styles for the delete button */
        .delete {
            display: inline-block;
            text-decoration: none;
            padding: 5px 10px;
            background-color: #FF3366;
            /* Adjust the background color */
            color: #fff;
            /* Text color */
            border: 1px solid #FF3366;
            /* Border color */
            border-radius: 5px;
            /* Rounded corners */
        }

        /* Hover styles for all buttons */
        .moins-btn:hover,
        .add_btn:hover,
        .delete:hover {
            background-color: #FF8C66;
            /* Adjust the background color on hover */
            border: 1px solid #FF8C66;
            /* Adjust the border color on hover */
        }

        .product {
            margin-bottom: 15px;
            padding: 10px;
            background-color: #f8f9fa;
            border-radius: 8px;
        }

        .product-name {
            font-weight: bold;
        }

        .product-price {
            color: #007bff;
        }

        .product-quantity {
            color: #28a745;
        }

        .cart-container {
            display: flex;
            justify-content: space-between;
        }

        .cart {
            border: 1px solid #ccc;
            border-radius: 8px;
            padding: 20px;
            margin: 10px;
            flex: 1;
        }

        .my-button {
            background-color: #3498db;
            /* Background color */
            border: none;
            /* Remove border */
            color: white;
            /* Text color */
            padding: 10px 20px;
            /* Padding inside the button */
            text-align: center;
            text-decoration: none;
            /* Remove underlines from links */
            display: inline-block;
            font-size: 16px;
            /* Font size */
            margin: 4px 2px;
            cursor: pointer;
            border-radius: 4px;
            /* Rounded corners */
        }

        .my-button1 {
            background-color: #4a4b4c;
            /* Background color */
            border: none;
            /* Remove border */
            color: white;
            /* Text color */
            padding: 10px 20px;
            /* Padding inside the button */
            text-align: center;
            text-decoration: none;
            /* Remove underlines from links */
            display: inline-block;
            font-size: 16px;
            /* Font size */
            margin: 4px 2px;
            cursor: pointer;
            border-radius: 4px;
            /* Rounded corners */
            color: white;

        }

        /* Add a hover effect */
        .my-button:hover {
            background-color: #2980b9;
            /* Darker background color on hover */
            color: white;
        }

        .container1 {
            margin-top: 10%;
        }
    </style>
    <!--
    
TemplateMo 558 Klassy Cafe

https://templatemo.com/tm-558-klassy-cafe

-->
    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="__menu/assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="__menu/assets/css/font-awesome.css">

    <link rel="stylesheet" href="__menu/assets/css/templatemo-klassy-cafe.css">

    <link rel="stylesheet" href="__menu/assets/css/owl-carousel.css">

    <link rel="stylesheet" href="__menu/assets/css/lightbox.css">

</head>

<body>

    <!-- ***** Preloader Start ***** -->

    @include('header2')

    <main>

        <!-- DEMO HTML -->
        <div class="container">
            <div class="py-5 text-center">

                <h2>Checkout form</h2>
            </div>

            <div class="row">
                <div class="col-md-4 order-md-2 mb-4">
                    <h4 class="d-flex justify-content-between align-items-center mb-3">
                        <span class="text-muted">Your cart</span>
                        <span class="badge badge-secondary badge-pill">{{$count}}</span>
                    </h4>
                    <ul class="list-group mb-3">
                        @foreach ($cart_items  as $item)
                        <li class="list-group-item d-flex justify-content-between lh-condensed">
                            <div>
                                <h6 class="my-0">{{$item->title}}</h6>
                                <small class="text-muted">qty:{{$item->qty}}</small>
                            </div>
                            <span class="text-muted">${{$item->price*$item->qty}}</span>
                        </li>
                        @endforeach

                    </ul>
                </div>
                <div class="col-md-8 order-md-1">
                    <h1><b>user info</b></h1>
                    <hr class="mb-4">

                    <form class="needs-validation">
                        <div class="row">

                        </div>

                        <div class="mb-3">
                            <label for="username" class="text-muted">Username:</label><span> {{$users_info->name}}</span>
                        </div>

                        <div class="mb-3">
                            <label for="username" class="text-muted">Username:</label><span> {{$users_info->email}}</span>
                        </div>

                        <div class="mb-3">
                            <hr class="mb-4">
                            <label for="address"><h1><b>Current Adress</b></h1>
                                <br>
                                <span class="text-muted">country:</span> {{$adress->country}} <br>
                                <span class="text-muted">city:</span> {{$adress->city}} <br>
                                <span class="text-muted">area:</span> {{$adress->area}}</label>
                            <br>
                            <a href="{{url('/adress')}}" class="my-button1">change adress</a>
                        </div>
                        <hr class="mb-4">

                        <h4 class="mb-3">Payment</h4>

                        <div class="d-block my-3">
                            <div class="custom-control custom-radio">
                                <input id="credit" name="paymentMethod" type="radio" class="custom-control-input"
                                    checked required>
                                <label class="custom-control-label" for="credit">Credit card</label>
                            </div>
                            <div class="custom-control custom-radio">
                                <input id="debit" name="paymentMethod" type="radio" class="custom-control-input"
                                    required>
                                <label class="custom-control-label" for="debit">Debit card</label>
                            </div>
                            <div class="custom-control custom-radio">
                                <input id="paypal" name="paymentMethod" type="radio" class="custom-control-input"
                                    required>
                                <label class="custom-control-label" for="paypal">PayPal</label>
                            </div>
                        </div>

                        <hr class="mb-4">
                        <a class="my-button" href="{{url('/make_order')}}">make order</a>
                        <a href="{{url('/cart')}}" class="my-button1">back to shop -></a>
                    </form>
                </div>
            </div>

        </div>
        <!-- End Demo HTML -->

    </main>

    <!-- ***** Footer Start ***** -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-xs-12">
                    <div class="right-text-content">
                        <ul class="social-icons">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="logo">
                        <a href="index.html"><img src="__menu/assets/images/white-logo.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-4 col-xs-12">
                    <div class="left-text-content">
                        <p>© Copyright Klassy Cafe Co.

                            <br>Design: TemplateMo</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="__menu/assets/js/jquery-2.1.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="__menu/assets/js/popper.js"></script>
    <script src="__menu/assets/js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="__menu/assets/js/owl-carousel.js"></script>
    <script src="__menu/assets/js/accordions.js"></script>
    <script src="__menu/assets/js/datepicker.js"></script>
    <script src="__menu/assets/js/scrollreveal.min.js"></script>
    <script src="__menu/assets/js/waypoints.min.js"></script>
    <script src="__menu/assets/js/jquery.counterup.min.js"></script>
    <script src="__menu/assets/js/imgfix.min.js"></script>
    <script src="__menu/assets/js/slick.js"></script>
    <script src="__menu/assets/js/lightbox.js"></script>
    <script src="__menu/assets/js/isotope.js"></script>

    <!-- Global Init -->
    <script src="__menu/assets/js/custom.js"></script>
    <script>
        $(function() {
            var selectedClass = "";
            $("p").click(function() {
                selectedClass = $(this).attr("data-rel");
                $("#portfolio").fadeTo(50, 0.1);
                $("#portfolio div").not("." + selectedClass).fadeOut();
                setTimeout(function() {
                    $("." + selectedClass).fadeIn();
                    $("#portfolio").fadeTo(50, 1);
                }, 500);
            });
        });
    </script>
</body>

</html>