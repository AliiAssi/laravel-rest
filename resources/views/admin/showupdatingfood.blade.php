<x-app-layout>
</x-app-layout>

<!DOCTYPE html>
<html lang="en">
<head>
    <base href="/public">
    @include('admin.admin_css')
    <link rel="stylesheet" href="foodmenu.css">
    <style>
      .image_pp {
        position: absolute; /* Position the element absolutely within the parent div */
        margin-left: 34%;
        top:0;
        }
        .custom-form{
            border:solid 5px black;
        }
        .rond{
            border-radius: 100%;
        }
    </style>
</head>
<body>
    <!-- navbar -->
    <div class="container-scroller">
        @include('admin.navigator')
        <div class="container mt-5">
            <div class="display_none">
                <div class="col-md-6 offset-md-3">
                    <div class="custom-form">
                        <h2 class="text-center">Update a product</h2>
                        <div class="image_pp" style="height: 50px">
                            <img src="foodimage/{{$food->image}}" alt="s" width="90px" height="20px" class="rond">
                        </div>
                        

                        <form action="{{url('/update' , $food->id )}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input
                                name="title"
                                type="text"
                                class="form-control"
                                id="title"
                                placeholder="Enter title"
                                required
                                value="{{$food->title}}"
                                >
                            </div>
                            <div class="form-group">
                                <label for="description">
                                    Description
                                </label>
                                <textarea
                                name="description"
                                class="form-control"
                                id="description"
                                rows="3"
                                placeholder="Enter description"
                                required
                                >{{$food->description}}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="price">
                                    Price
                                </label>
                                <input
                                name="price"
                                type="text"
                                class="form-control"
                                id="price"
                                placeholder="Enter price"
                                value="{{$food->price}}"
                                >
                            </div>
                            <div class="mb-3">
                                <input
                                type="file"
                                name="image"
                                class="form-control"
                                accept="image/*"
                                >
                            </div>
                            <button type="submit" class="btn btn-primary btn-block">
                                Save
                            </button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- end of the navbar -->
</body>
</html>