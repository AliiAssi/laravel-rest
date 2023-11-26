<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&display=swap" rel="stylesheet">

    <title>Klassy Cafe</title>
    <style>
         .proceed {
            display: inline-block;
            text-decoration: none;
            padding: 10px 20px;
            background-color: #007bff; /* Adjust the background color */
            color: #fff; /* Text color */
            border: none;
            border-radius: 5px; /* Rounded corners */
            margin-left: 50px; /* Margin to separate from other buttons */

        }

        /* Styles for the "Cannot Yet" button (disabled) */
        .proceed_disabled {
            display: inline-block;
            text-decoration: none;
            padding: 10px 20px;
            background-color: #ccc; /* Adjust the background color */
            color: #777; /* Text color */
            border: none;
            border-radius: 5px; /* Rounded corners */
            margin-right: 10px; /* Margin to separate from other buttons */
            cursor: not-allowed; /* Display "not-allowed" cursor for disabled state */
        }

        /* Styles for the "Back to Shop" button */
        .back {
            display: inline-block;
            text-decoration: none;
            padding: 10px 20px;
            background-color: #333; /* Adjust the background color */
            color: #fff; /* Text color */
            border: none;
            border-radius: 5px; /* Rounded corners */
            margin-right: 10px; /* Margin to separate from other buttons */
        }

        /* Hover styles for all buttons (except disabled) */
        .proceed:hover, .back:hover {
            background-color: #0056b3; /* Adjust the background color on hover */
        }
        /* Styles for the minus button */
        .moins-btn {
            display: inline-block;
            text-decoration: none;
            padding: 5px 10px;
            background-color: #FF5733; /* Adjust the background color */
            color: #fff; /* Text color */
            border: 1px solid #FF5733; /* Border color */
            border-radius: 5px; /* Rounded corners */
            margin-right: 10px; /* Margin to separate from other buttons */
        }

        /* Styles for the plus button */
        .add_btn {
            display: inline-block;
            text-decoration: none;
            padding: 5px 10px;
            background-color: #33FF57; /* Adjust the background color */
            color: #fff; /* Text color */
            border: 1px solid #33FF57; /* Border color */
            border-radius: 5px; /* Rounded corners */
            margin-right: 10px; /* Margin to separate from other buttons */
        }

        /* Styles for the delete button */
        .delete {
            display: inline-block;
            text-decoration: none;
            padding: 5px 10px;
            background-color: #FF3366; /* Adjust the background color */
            color: #fff; /* Text color */
            border: 1px solid #FF3366; /* Border color */
            border-radius: 5px; /* Rounded corners */
        }

        /* Hover styles for all buttons */
        .moins-btn:hover, .add_btn:hover, .delete:hover {
            background-color: #FF8C66; /* Adjust the background color on hover */
            border: 1px solid #FF8C66; /* Adjust the border color on hover */
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
        .container1{
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
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  

    @include('header2')

    <section>
        <div class="container1">
            <h1 class="mt-4  ml-5 mb-5  "><b>Shopping Cart</b></h1>
            <div class="cart-container">
                @if(count($items) > 0)
                <div class="cart">
                    <h2>your cart</h2>
                    @foreach ($items as $item)
                    <div class="product">
                        <p class="product-name"> {{$item->title}} </p>
                        <p class="product-price">$ {{$item->price}} </p>
                        <p class="product-quantity">Qty: {{$item->qty}} </p>
                        <a href="{{url('/minus_qty',$item->id)}}" class="moins-btn">-</a>
                        <a href="{{url('/add_qty',$item->id)}}" class="add_btn">+</a>
                        <a href="{{url('/delete_item',$item->id)}}" class="delete">delete</a>
                    </div>
                    @endforeach
                </div>
                @else
                <div>
                    no items yet
                </div>
                @endif    
            </div>
            @if(count($items) > 0)
            <a href="{{url('/checkout')}}" class="proceed">proceed to checkout</a>
            @else
            <a href="#" class="proceed_disabled">cannot yet</a>
            @endif
            <a href="{{url('/redirects')}}" class="back">back to shop</a>
        </div>

    </section>
    
    
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
            $("p").click(function(){
            selectedClass = $(this).attr("data-rel");
            $("#portfolio").fadeTo(50, 0.1);
                $("#portfolio div").not("."+selectedClass).fadeOut();
            setTimeout(function() {
              $("."+selectedClass).fadeIn();
              $("#portfolio").fadeTo(50, 1);
            }, 500);
                
            });
        });

    </script>
  </body>
</html>