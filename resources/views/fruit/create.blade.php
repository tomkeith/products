
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Fruit Stores </title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
  </head>
  <body>
    <div class="container">
        <div class="text-centre">
      <h2>Fruit Form </h2><br  />
</div>
      <form method="post" action="{{url('/fruit/create')}}">
      <input type="hidden" name="_token" value="{{csrf_token()}}">
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="name">Fruit Name:</label>
            <input type="text" class="form-control" name="fruit_name">
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="quantity">Quantity:</label>
              <input type="int" class="form-control" name="quantity">
            </div>
          </div>
        
        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="price">Price:</label>
              <input type="int" class="form-control" name="price">
            </div>
          </div>
        
        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="discount">Discount:</label>
              <input type="int" class="form-control" name="discount">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <button type="submit" class="btn btn-success" style="margin-left:38px">Add Product</button>
          </div>
        </div>
      </form>
    </div>
  </body>
</html>