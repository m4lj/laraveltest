<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <title>View</title>
</head>
<body>
    <h1>Show Product</h1>
    <div>
        @if(session()->has('success'))
<div>
    {{session('success')}}
</div>
    @endif
    </div>
    <a href="{{route('product.index')}}" class="btn btn-primary" style="float: right;">Back</a>
    <div>
    <p><b>Name: </b>{{$product->Name}}</p>
    <p><b>Price (RM): </b>{{$product->Price}}</p>
    <p><b>Details: </b>{{$product->Details}}</p>
    <p><b>Publish: </b>{{$product->Publish}}</p>
</div>
</body>
</html>