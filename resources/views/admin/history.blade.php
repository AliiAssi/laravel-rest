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
        @if (count($all) <= 0)
            <div class='mt-5 ml-10'>
                il n y a pas
                <br>
                totale profit : 0 $ 
            </div>
        @else
        <div>
            totale profit : {{$totale_profit}} $
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th>Name,Email</th>
                    <th>items</th>
                    <th>totale</th>
                    <th>placed on</th>
                </tr>
            </thead>
            <tbody>
                
                @foreach($all as $order)
                <tr>
                    <td>{{$order->name}} , {{$order->email}}</td>
                    <td>{{$order->user_products}}</td>
                    <td> {{$order->order_totale}} </td>
                    <td> {{$order->created_at}} </td>
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