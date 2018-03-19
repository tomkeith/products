<DOCTYPE! HTML>
<html>
<head>
<title>home page</title>
</head>
<body>
<header><h2>Fruits Form</h2></header>
    <form action="{{url('/product/create')}}" method="post">
    <input type="hidden" name="_token" value="{{csrf_token()}}">
    <label>Fruit Name</label><br>
    <input type="text" placeholder="fruit name" name="fruit_name"><br>
    <label>Quantity</label><br>
    <input type="int" placeholder=" in kgs" name="quantity">
    <br>
    <label >Price</label><br>
    <input type="int" placeholder="price" name="price">
    <br>
    <label >Discount</label><br>
    <input type="int" name="discount" placeholder="discount">
    <br>
    <button type="submit"> Submit</button>
    </form>
</body>
</html>