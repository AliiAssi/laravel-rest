<x-app-layout>
</x-app-layout>

<!DOCTYPE html>
<html lang="en">

<head>
    <base href="/public">
    @include('admin.admin_css')
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
    <style>
        /* Style for the chef card */
        .chefs_card {
            border: 1px solid #e0e0e0;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            display: flex;
            justify-content: space-between;
            padding: 10px;
            margin: 10px;
        }

        /* Style for the chef info */
        .chef_info {
            display: flex;
            align-items: center;
        }

        .profile {
            width: 50px; /* Set the desired width for the profile image */
            height: 50px; /* Set the desired height for the profile image */
            border-radius: 50%;
            margin-right: 10px;
        }

        .name {
            font-size: 18px;
            font-weight: bold;
        }

        .info {
            color: #777;
        }

        /* Style for the action buttons */
        .actions {
            display: flex;
            align-items: center;
        }

        .delete_chef,
        .edit_chef {
            margin-right: 10px;
            padding: 5px 10px;
            border: none;
            background-color: #ff6347; /* Tomato color */
            color: #fff;
            border-radius: 5px;
            text-decoration: none;
            transition: background-color 0.3s;
        }

        .delete_chef:hover {
            background-color: #e74c3c; /* Darker shade of Tomato on hover */
        }
        .edit_chef{
            background-color : blue; /* Tomato color */

        }
        .edit_chef:hover{
            background: blueviolet
        }
    </style>
    <script>
        function show_add_form(){
            // Hide the element with id 'pressed_button'
            document.getElementById('pressed_button').style.display = 'none';
            // Add 'row' class to the element with id 'the_form'
            document.getElementById('the_form').style="display:block";            
        }
    </script>
</head>

<body>
    <!-- navbar -->
    <div class="container-scroller">
    @include('admin.navigator')
    <div class="container mt-5">

       

        <div class="" id="the_form">
            <div class="col-md-6 offset-md-3">
                <div class="custom-form">
                    <h2 class="text-center">update a chef </h2>
                    <form action="{{url('/saveChef',$chef->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="title">name</label>
                            <input name="name" type="text" class="form-control" id="title"
                                placeholder="Enter title" value="{{$chef->name}}" required>
                        </div>
                        <div class="form-group">
                            <label for="description">info</label>
                            <textarea name="info" class="form-control" id="description" rows="3"
                                placeholder="Enter description"  required>{{$chef->info}}</textarea>
                        </div>
                        <div class="mb-3">
                            <input type="file" name="image" class="form-control" id="customFile" accept="image/*"
                                >
                        </div>
                        <button type="submit" class="btn btn-primary btn-block">Save</button>
                    </form>
                </div>
            </div>
        </div>

        
    </div>
    <!-- end of the navbar -->

</body>

</html>