<!DOCTYPE htext>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Create Product</h1>
 
    <form method="post" action="{{route('products.store')}}">
        @csrf
        @method('post')
        <div>
            <label for="name">Name</label>
            <input type="text" name="name" placeholder="name">
        </div>
        <div>
            <label for="qty">Qty</label>
            <input type="text" name="qty" placeholder="qty">
        </div>
        <div>
            <label for="name">Price</label>
            <input type="text" name="price" placeholder="price">
        </div>
        <div>
            <label for="name">description</label>
            <input type="text" name="description" placeholder="description">
        </div>

        <div>
            <input type="submit" value="Save a New Product">
        </div>
    </form>
</body>
</html>