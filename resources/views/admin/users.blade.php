<x-app-layout>
</x-app-layout>

<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.admin_css')
</head>

<body>
    <!-- navbar -->
    <div class="container-scroller">
        @include('admin.navigator')
        
        <div class="container mt-4">
            <table class="table">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    
                    @foreach($data as $user)
                    <tr>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>

                        @if($user->usertype == 0)
                        <td>
                            <a href="{{url('/deleteuser',$user->id)}}" class="btn btn-danger">Delete</a>
                        </td>
                        @else
                        <td>
                            <button class="btn btn-danger disabled ">not allowed</button>
                        </td>
                        @endif
                    </tr>
                    @endforeach

                </tbody>
            </table>
        </div>

    </div>
    <!-- end of the navbar -->
</body>

</html>