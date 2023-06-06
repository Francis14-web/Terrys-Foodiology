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
        <p class="date">Date:mm/dd/yyyy</p>
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
            <tr>
                <td>Order#9955cb51</td>
                <td>Maria Anders</td>
                <td>June 5,2023 1:00pm</td>
                <td>June 5,2023 1:30pm</td>
                <td>Burger<br>Coofee<br></td>
                <td>100<br>100<br></td>
                <td class="price">200</td>
            </tr>
            <tr>
                <td>Order#9955cb51</td>
                <td>Maria Anders</td>
                <td>June 5,2023 1:00pm</td>
                <td>June 5,2023 1:30pm</td>
                <td>Burger x2<br>Coofee<br></td>
                <td>100<br>100<br></td>
                <td class="price">200</td>
            </tr>
            <tr>
                <td colspan="6" class="total">Total:</td>
                <td class="total">400</td>
            </tr>
        </table>
    </div> 
</body>
</html>
