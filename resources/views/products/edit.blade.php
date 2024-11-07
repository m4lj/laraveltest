<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <title>Edit</title>
    <style>
    .center {
    margin: 0;
    position: absolute;
    top: 50%;
    left: 50%;
    -ms-transform: translate(-50%, -50%);
    transform: translate(-50%, -50%);
    }
    </style>
</head>
<body>
    <h1>Edit a Product</h1>
    <a href="{{route('product.index')}}" class="btn btn-primary" style="float: right;">Back</a>
    <div>
        @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
        @endif
</ul>
</div>
    <form method="post" action="{{route('product.update',['product'=>$product])}}">
        @csrf
        @method('put')
      <div>
        <label>Name</label>
        <input types="text" name="Name" placeholder="name" value="{{$product->Name}}" style="width: 100%;"/>
</div>
<div>
        <label>Price (RM)</label>
        <input types="text" name="Price" placeholder="99.90" value="{{$product->Price}}" style="width: 100%;"/>
</div>
<div>
        <label>Detail</label>
        <input types="text" name="Details" placeholder="Detail" value="{{$product->Details}}" style="width: 100%;"/>
</div>
<div>
        <label>Publish</label><br>
        <input type="radio" name="Publish" value="Yes"{{ $product->Publish == 'Yes' ? 'checked' : '' }}>
        <label for="yes">Yes</label><br>
        <input type="radio" name="Publish" value="No"{{ $product->Publish == 'No' ? 'checked' : '' }}>
        <label for="no">No</label><br>
</div>
<div class="center">
    <input type="submit" value="Submit"/>
</div>
</form>
</body>
</html>