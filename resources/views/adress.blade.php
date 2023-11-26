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
        /* Define the button styles */
        .custom-button {
            display: inline-block;
            padding: 10px 20px;
            background-color: black;
            color: black;;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            text-align: center;
            text-decoration: none;
            transition: background-color 0.3s ease;
            background-color: #2980b9;

        }

        /* Change button background color on hover */
        .custom-button:hover {
            background-color: #2980b9;
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
    <br><br>
    <section>
        <h1>Location Information</h1>

        <div class="container mt-8">
            <form action="{{url('/put_adress')}}" method="post">
                @csrf
                <div class="form-group">
                    <label for="country">Country:</label>
                    <input type="text" name="country" class="form-control" id="country" placeholder="Enter your country" value="{{$country}}" required>
                </div>
                <div class="form-group">
                    <label for="city">City:</label>
                    <input type="text" name="city" class="form-control" id="city" placeholder="Enter your city"value="{{$city}}" required>
                </div>
                <div class="form-group">
                    <label for="area">Area:</label>
                    <input type="text" name="area" class="form-control" id="area" placeholder="Enter your area"value="{{$area}}" required>
                </div>
                <button type="submit" class="custom-button">save</button>
            </form>
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