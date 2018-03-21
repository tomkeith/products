<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Fruit Stores </title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
  </head>
  <body>
    <div class="container">
    <section>
    <h2>{{$fruits->fruit_name}} Details</h2><br>

    <label for="name">Fruit Name:{{$fruits->fruit_name}}</label><br>
    <label for="quantity">Quantity:{{$fruits->quantity}}</label><br>
    <label for="price">Price:{{$fruits->price}}</label><br>
    <label for="discount">Discount{{$fruits->discount}}</label>
    </section>
    </div>