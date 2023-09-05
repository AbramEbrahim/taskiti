<!DOCTYPE html>
<html lang="en">

<head>
    {{-- // fastly   => cdn --}}
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
</head>

<body>

  <table border="1">
        <thead>
            <tr>
                <th>order id </th>
                <th>order price</th>
                <th>products name</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($orders as $orders)
                <tr>
                    <td>{{ $orders->id }}</td>
                    <td>{{ $orders->price }}</td>
                    @foreach ($orders->products as $p)
                    <td>{{ $p->name }}</td>
                    @endforeach
                </tr>
            @endforeach


        </tbody>
    </table>

</body>

</html>
