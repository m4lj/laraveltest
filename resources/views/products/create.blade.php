<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <title>Create</title>
    <style>
.center {
  margin: 0;
  position: absolute;
  top: 50%;
  left: 50%;
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
}
.float-right{
  float:right;
}
</style>
</head>
<body>
    <h1>Add New Product</h1>
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
    <form method="post" action="{{route('product.store')}}">
        @csrf
        @method('post')
      <div>
        <label>Name</label><br>
        <input types="text" name="Name" placeholder="name" style="width: 100%;"/>
</div>
<div>
        <label>Price (RM)</label><br>
        <input types="text" name="Price" placeholder="99.90" style="width: 100%;"/>
</div>
<div>
        <label>Detail</label><br>
        <input types="text" name="Details" placeholder="Detail" style="width: 100%;"/>
</div>
<div>
        <label>Publish</label><br>
        <input type="radio" id="yes" name="Publish" value="Yes">
        <label for="yes">Yes</label><br>
        <input type="radio" id="no" name="Publish" value="No">
        <label for="no">No</label><br>
</div>
<div class="center">
    <input type="submit" value="Submit"/>
</div>
</form>
</body>
</html>