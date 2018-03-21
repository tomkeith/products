
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Fruits </title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
  </head>
  <body>
    <div class="container">
      <h2>Edit A Product</h2><br  />
     
      <form method="post" action="{{action('ProductController@update', $id)}}">
      
        <input name="_token" type="hidden" value="{{ csrf_token() }}">
        <div class="row">
          <div class="col-md-3"></div>
          <div class="form-group col-md-4">
            <label for="name">Name:</label>
            <input type="text" class="form-control" name="fruit_name" value="{{$fruits->fruit_name}}">
          </div>
        </div>
        <div class="row">
          <div class="col-md-3"></div>
            <div class="form-group col-md-4">
              <label for="quantity">Quantity:</label>
              <input type="int" class="form-control" name="quantity" value="{{$fruits->quantity}}">
            </div>
          </div>
        
        <div class="row">
          <div class="col-md-3"></div>
            <div class="form-group col-md-4">
              <label for="price">Price:</label>
              <input type="int" class="form-control" name="price" value="{{$fruits->price}}">
            </div>
          </div>
        
        <div class="row">
          <div class="col-md-3"></div>
            <div class="form-group col-md-4">
              <label for="discount">Discount:</label>
              <input type="int" class="form-control" name="discount" value="{{$fruits->discount}}">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <button type="submit" class="btn btn-success" style="margin-left:38px">Update Product</button>
          </div>
        </div>
      </form>
    </div>
  </body>
</html>