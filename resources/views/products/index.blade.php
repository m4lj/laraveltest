<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>
<body>
    <div>
        @if(session()->has('success'))
<div>
    {{session('success')}}
</div>
    @endif
    </div>
    <div>
        <h1>Laravel</h1>
        <a href="{{route('product.create')}}" class="btn btn-primary" style="float: right;">Create Product</a>
        <form method="get" action="{{url('product/search')}}">
            <input name="search" placeholder="Search">
            <input type="submit" class="btn btn-primary">
        </form>
</div>
    <div>
        <table border="1" style="width:100%">
<tr>
    <th>No</th>
    <th>Name</th>
    <th>Price (RM)</th>
    <th>Details</th>
    <th>Publish</th>
    <th colspan="3" style="width:10%">Action</th>
</tr>
@foreach($products as $product)
<tr>
    <td>{{$product->id}}</td>
    <td>{{$product->Name}}</td>
    <td>{{$product->Price}}</td>
    <td>{{$product->Details}}</td>
    <td>{{$product->Publish}}</td>
    <td>
    <a href="{{route('product.view',['product' => $product])}}" class="btn btn-info">Show</a>
</td>
<td>
    <a href="{{route('product.edit',['product' => $product])}}" class="btn btn-primary">Edit</a>
</td>
    <td>
    <form method="post" action="{{route('product.destroy',['product'=>$product])}}">
        @csrf
        @method('delete')
        <input type="submit" value="Delete" class="btn btn-danger"/>
</form>
</td>
</td>
</tr>
@endforeach
    </table>
    </div>
</body>
</html>