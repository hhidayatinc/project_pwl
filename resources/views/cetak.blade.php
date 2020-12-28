<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Order</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <style>
        body{
            font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            color:#333;
            text-align:left;
            font-size:18px;
            margin:0;
        }
        .container{
            margin:0 auto;
            margin-top:35px;
            padding:40px;
            width:750px;
            height:auto;
            background-color:#fff;
        }
        caption{
            font-size:28px;
            margin-bottom:15px;
        }
        table{
            border:1px solid #333;
            border-collapse:collapse;
            margin:0 auto;
            width:740px;
        }
        td, tr, th{
            padding:12px;
            border:1px solid #333;
            width:185px;
        }
        th{
            background-color: #f0f0f0;
        }
        h4, p{
            margin:0px;
        }
    </style>
</head>
<body>
    <div class="container">
        <table>
            <caption>
                Ticketing Bromo
            </caption>
            <thead>
                <tr>
                    <th colspan="3">Order <strong>#{{ $order->id }}</strong></th>
                    <th>{{ $order->created_at->format('D, d M Y') }}</th>
                </tr>
                <tr>
                    <td colspan="2">
                        <h4>Website: </h4>
                        <p>BROMO TICKETING.<br>
                            East Java, Indonesia<br>
                            +62 8525 9302 344<br>
                            bromoticketing@gmail.com
                        </p>
                    </td>
                    <td colspan="2">
                        <h4>Pelanggan: </h4>
                        <p>{{ $order->nama }}<br>
                        {{ $order->ktp }}<br>
                        {{ $order->notelp }} <br>
                        {{ $order->email }}
                        </p>
                    </td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th>Nama Wisata</th>
                    <th>Harga</th>
                    <th>Jumlah Orang</th>
                    <th>Total</th>
                </tr>
                <tr>
                    <td>{{ $place->title }}</td>
                    <td>Rp {{ number_format($place->price) }}</td>
                    <td>{{ $order->jmlhorang }}</td>
                    <td>Rp {{ $order->total }}</td>
                </tr>
            </tbody>
            <tfoot>
            </tfoot>
        </table>
    </div>
</body>
</html>