
    <!-- ***** Menu Area Starts ***** -->
    <style>
        /* Apply styles to the form container */
    

        /* Style the input field */
        .qty {
            width: 50%;
            padding: 5px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        /* Style the "Add to Cart" button */
        .btn-add {
            background-color: #007bff;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        /* Add hover effect to the button */
        .btn-add:hover {
            background-color: green;
        }

        /* Center the button within its container */
        .add_to_cart {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 50%;
        }
        .message{
            color: red;
            background: orange;
        }
    </style>
    <section class="section" id="menu">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="section-heading">
                        <h6>Our Menu</h6>
                        <h2>Our selection of cakes with quality taste</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="menu-item-carousel">
            <div class="col-lg-12">
                <div class="owl-menu-item owl-carousel">

                    @foreach ($food as $item)
                    <div class="item">
                        
                        <div class="card" style="background: url('foodimage/{{ $item->image }}'); background-size: cover; background-position: center; width: 300px; height: 200px;"> 
                            <div class="price"><h6> {{$item->price}} $ </h6></div>
                            <div class='info'>
                              <h1 class='title'>{{$item->title}}</h1>
                              <p class='description'>{{$item->description}}</p>
                              <div class="main-text-button">
                                  <div class="scroll-to-section"><a href="#reservation">Make Reservation <i class="fa fa-angle-down"></i></a></div>
                              </div>
                            </div>
                        </div>
                        @if(Auth::check())
                        <form action="{{url('/addtocart',$item->id)}}" method="post" class="the_form">
                            @csrf
                            <div class="add_to_cart">
                                <input type="number" value="1" required min="1" class="qty" name="number" id="">
                                <button class="btn-add">add to cart</button>
                            </div>
                           
                        </form>
                        @endif
                    </div>
                   
                    @endforeach
       
                </div>
                @if(session()->has('success'))
                    <div class="message">
                    {{ session('success') }}
                    </div>
                @endif
                @if(session()->has('no'))
                    <div class="message">
                    {{ session('no') }}
                    </div>
                @endif
            </div>
        </div>
    </section>
   <head>
    @if(session()->has('section'))
    <script>
        // Scroll to the section with the specified anchor
        var targetSection = document.getElementById('{{ session('section') }}');
        if (targetSection) {
            targetSection.scrollIntoView({ behavior: 'smooth' });
        }
    </script>
    @endif
   </head>
    <!-- ***** Menu Area Ends ***** -->