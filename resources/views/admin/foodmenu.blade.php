<x-app-layout>
</x-app-layout>

<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        .display_none {
            display: none;
        }
        .card{
        height: 100%;
        }
        .card-body{
            height:100%;
        }
        .item-card{
            height: 20%;
        }
    </style>
    <script>
        function show_add_form(){
            // Hide the element with id 'pressed_button'
            document.getElementById('pressed_button').style.display = 'none';
            // Add 'row' class to the element with id 'the_form'
            document.getElementById('the_form').classList.toggle('row');            
        }
    </script>
    @include('admin.admin_css')
    <link rel="stylesheet" href="foodmenu.css">
</head>

<body>
    <!-- navbar -->
    <div class="container-scroller">
        @include('admin.navigator')

        <div class="container mt-5">

            <div class="displayed_button">
                <button class="btn btn-primary" onclick = "show_add_form()" id="pressed_button">add product</button>
            </div>

            <div class="display_none" id="the_form">
                <div class="col-md-6 offset-md-3">
                    <div class="custom-form">
                        <h2 class="text-center">Add a product </h2>
                        <form action="{{url('/uploadfood')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input name="title" type="text" class="form-control" id="title"
                                    placeholder="Enter title" required>
                            </div>
                            <div class="form-group">
                                <label for="description">Description</label>
                                <textarea name="description" class="form-control" id="description" rows="3"
                                    placeholder="Enter description" required></textarea>
                            </div>
                            <div class="form-group">
                                <label for="price">Price</label>
                                <input name="price" type="text" class="form-control" id="price"
                                    placeholder="Enter price">
                            </div>
                            <div class="mb-3">
                                <input type="file" name="image" class="form-control" id="customFile" accept="image/*"
                                    required>
                            </div>
                            <button type="submit" class="btn btn-primary btn-block">Submit</button>
                        </form>
                    </div>
                </div>
            </div>

            <div class="container mt-5">
                <!-- First Row -->
                <div class="row mb-4">

                    @foreach ($food as $item)

                    <div class="col-md-4">
                        <!-- Column 1 Content -->
                        <div class="card">
                            <div class="card-body">
                                <!-- debut -->
                                <div class="item-card">
                                    <div class="image">
                                        <img src="foodimage/{{$item->image}}" class="card-img-top" alt="Item Image" height="100%" width="100px">
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title item-title">{{$item->title}}</h5>
                                        <p class="card-text item-description">{{$item->description}}</p>
                                        <p class="card-text item-price">{{$item->price}}</p>
                                    </div>
                                    <div class="actions">
                                        <div class="d-flex align-items-center justify-content-end">
                                            <a href="{{ url('/deletefood', $item->id) }}" class="btn btn-danger btn-sm mr-2">Delete</a>
                                            <a href="{{ url('/updateview',$item->id)}}" class="btn btn-primary btn-sm">Edit</a>
                                        </div>
                                    </div>                                    
                                </div>
                                <!-- fin -->
                            </div>
                        </div>
                    </div>
                    
                    @endforeach

                </div>
            </div>

        </div>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

        <!-- end of the navbar -->
</body>

</html>