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
        @if (count($orders) <= 0)
            <div class='mt-5 ml-10'>
                il n y a pas 
            </div>
        @else
        <table class="table">
            <thead>
                <tr>
                    <th>Name,Email</th>
                    <th>items</th>
                    <th>totale</th>
                    <th>placed on</th>
                    <th>actions</th>
                </tr>
            </thead>
            <tbody>
                
                @foreach($orders as $order)
                <tr>
                    <td>{{$order->name}} , {{$order->email}}</td>
                    <td>{{$order->user_products}}</td>
                    <td> {{$order->order_totale}} </td>
                    <td> {{$order->created_at}} </td>
                    <td>
                        <a href="{{url('/pend_order',$order->ordery)}}" class="btn btn-primary">Pending</a>

                        <a href="{{url('/delete_order',$order->ordery)}}" class="btn btn-danger" onclick="confirm('really?')">Reject</a>
                    </td>
                </tr>
                @endforeach

            </tbody>
        </table>
        @endif
    </div>
    </div>
    <!-- end of the navbar -->

</body>

</html>