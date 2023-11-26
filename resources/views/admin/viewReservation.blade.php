<x-app-layout>
</x-app-layout>

<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.admin_css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        .custom-button {
            background: linear-gradient(to right, #007bff, #00a0e3);
            border-radius: 20px;
            color: #fff;
            padding: 10px 20px;
            text-decoration: none;
        }
    </style>
</head>

<body>
    <!-- navbar -->
    <div class="container-scroller">
    @include('admin.navigator')

    <div class="container mt-5">
        <!-- First Row -->
        <div class="row mb-4">

            @foreach ($res as $item)

            <div class="col-md-4">
                <!-- Column 1 Content -->
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Name: {{$item->name}}</h5>
                        <p class="card-text">Time: {{$item->time}}</p>
                        <p class="card-text">Date: {{$item->date}}</p>
                        <p class="card-text">Email: {{$item->email}}</p>
                        <p class="card-text">Phone: {{$item->phone}}</p>
                        <p class="card-text">reserved at: {{$item->created_at}}</p>
                        <a href="{{url('/deleteReservation',$item->id)}}" class="custom-button">
                            <i class="fas fa-star"></i> Delete
                        </a>                    
                    </div>
                </div>
            </div>
            
            @endforeach
            

        </div>
    </div>

    </div>
    <!-- end of the navbar -->

</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
</html>