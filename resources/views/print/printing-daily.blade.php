<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
    body{
        margin: 25px;
    }
    table,th {
      margin-top: 30px;
      border: black solid 1px;
      border-collapse: collapse;
    }
    
    table.center {
      margin-left: auto; 
      margin-right: auto;
    }
     
    th{
        text-align: center;
        padding: 4px;
        font-size: 12px;
    }

    td{
        text-align: center;
        padding: 4px;
        font-size: 10px;
    }

    .date
    {
        text-align: right;
        text-decoration: underline;
    }

    .title
    {
     color: #065a1b;
     text-align: center;
    }

    .total
    {
        text-align: right;
        font-size: 12px;
        font-weight: bold;
    }
    .price
    {
        text-align: right;
        font-size: 12px;  
    }
</style>    
<body>
    <p class="title">Terry's Foodiology Sales</p>
    <p class="date">Date: {{ now()->format('m/d/Y') }}</p>
    <table class="center" style="width:100%">
        <tr>
            <th>Order ID</th>
            <th>Customer ID</th>
            <th>Ordered At</th>
            <th>Pick-up at</th>
            <th>Order</th>
            <th>Price</th>
            <th>Total Price</th>
        </tr>
        @foreach ($data as $order)
        <tr>
            <td>{{ "Order #" . substr($order['id'], 0, 8) }}</td>
            <td>{{ $order['firstname'] . ' ' . $order['lastname'] }}</td>
            <td>{{ \Carbon\Carbon::parse($order['created_at'])->format('F d, Y h:i A') }}</td>
            <td>{{ \Carbon\Carbon::parse($order['pickup_date'])->format('F d, Y h:i A') }}</td>
            <td>
                @foreach (json_decode($order['food_name']) as $food)
                    {{ $food }}<br>
                @endforeach
            </td>
            <td>
                @foreach (json_decode($order['order_quantity']) as $quantity)
                    {{ $quantity }}<br>
                @endforeach
            </td>
            <td class="price">{{ $order['total_price'] }}</td>
        </tr>
        @endforeach
        <tr>
            <td colspan="6" class="total">Total:</td>
            <td class="total">{{ $totalPrice }}</td>
        </tr>
    </table>
</body>
</html>
