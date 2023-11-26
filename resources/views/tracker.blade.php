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
    <br>
    <br>
    <br>
    <br>
    <section>
        <div class="container mt-4">
            <table class="table table-striped table-bordered">
                <thead class="thead-dark">
                    <tr>
                        <th>Order Address</th>
                        <th>Order Products</th>
                        <th>Order Total Price</th>
                        <th>Order Placed On</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($orders as $order)
                    <tr>
                        <td>{{$order->adress}}</td>
                        <td>{{$order->user_products}}</td>
                        <td>{{$order->order_totale}}$</td>
                        <td>{{$order->created_at}}</td>
                        <td>
                            @if($order->status == "")
                            <a class="btn btn-danger btn-sm" href="#">Cancel</a>
                            @else
                            <button class="btn btn-danger btn-sm disabled">Cancel</button>
                            @endif
                            <a class="btn btn-primary btn-sm" href="{{url('/status',$order->id)}}">Track</a>
                        </td>
                    </tr>
                    @endforeach
                    <!-- Add more rows here if needed -->
                </tbody>
            </table>
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