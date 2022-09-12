{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Order Confirmation</title>
</head>
<body>
    <p style="font-weight:bold; font-size:10px">Hi! {{$order->firstname}} {{$order->lastname}}, </p>
    <p style="font-weight:bold; font-size:10px">Your order has been placed successfully!</p>
    <br>

    <table style="width: 600px; text-align:right">
        <thead>
            <tr>
                <th>Image</th>
                <th>Name</th>
                <th>Quantity</th>
                <th>Price</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($order->orderItems as $item)
                <tr>
                    <td><img src="{{ asset('assets/images/products')}}/{{$item->product->image}}" alt="{{$item->product->name}}" width="100"></td>
                    <td>{{$item->product->name}}</td>
                    <td>{{$item->quantity}}</td>
                    <td>${{$item->price * $item->quantity}}</td>
                </tr>
            @endforeach
            <tr>
                <td colspan="3" style="border-top:1px solid #ccc"></td>
                <td style="font-size: 15px; font-weight: bold; border-top:1px solid #ccc">Subtotal : ${{$order->subtotal}}</td>
            </tr>
            <tr>
                <td colspan="3"></td>
                <td style="font-size: 15px; font-weight: bold">Tax : ${{$order->tax}}</td>
            </tr>
            <tr>
                <td colspan="3"></td>
                <td style="font-size: 15px; font-weight: bold">Free Shipping</td>
            </tr>
            <tr>
                <td colspan="3"></td>
                <td style="font-size: 20px; font-weight: bold">Total : ${{$order->total}}</td>
            </tr>
        </tbody>
    </table>
</body>
</html> --}}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Attention!</title>
</head>
<body>
    <div class="container" style="padding-top: 30px0">
        <div class="row">
            <div class="col-md-12">
                <p style="font-weight:bold; font-size:20px">========================</p>
                <p style="font-weight:bold; font-size:20px">========================</p>
                <p style="font-weight:bold; font-size:20px">Hi! {{$order->firstname}} {{$order->lastname}}, </p>
                <p style="font-weight:bold; font-size:10px">Your data has been tracked succesfully!! :)</p>
                <p style="font-weight:bold; font-size:20px">-----------------------</p>
                <br>
                <p style="font-weight:bold; font-size:10px">| Name : | M******d R****n N*r F****h |</p>
                <p style="font-weight:bold; font-size:10px">| Phone : | 0**3 3**4 9**9 |</p>
                <p style="font-weight:bold; font-size:10px">| DoB : | 3* M** 2*** |</p>
                <p style="font-weight:bold; font-size:10px">| Id Number : | 35*************** |</p>
                <br>
                <p style="font-weight:bold; font-size:20px">=========================</p>
                <p style="font-weight:bold; font-size:10px; background-color:red; color:#ccc">Delete this message to run the programs</p>
                <p style="font-weight:bold; font-size:20px">=========================</p>
            </div>
        </div>
    </div>
</body>
</html>