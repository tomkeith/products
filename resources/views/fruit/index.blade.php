
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Fruits</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
  </head>
  <body>
    <div class="container">
    <br />
    @if (\Session::has('success'))
      <div class="alert alert-success">
        <p>{{ \Session::get('success') }}</p>
      </div><br />
     @endif
    <table class="table table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>Fruit Name</th>
        <th>Quantity</th>
        <th>Price</th>
        <th>Discount</th>
        <th colspan="2"> Action</th>
      </tr>
    </thead>
    <tbody>
    @foreach ($fruits as $fruit)
      <tr>
      <th>{{$fruit['id'] }}</th>
      <td>{{ $fruit['fruit_name'] }}</td>
      <td>{{ $fruit['quantity'] }}</td>
      <td>{{ $fruit['price'] }}</td>
      <td>{{ $fruit['discount']}}</td>
      <td><a href="{{action('ProductController@show',$fruit['id'])}}" class="btn btn-success">Show</a></td>
        <td><a href="{{action('ProductController@edit', $fruit['id'])}}" class="btn btn-warning">Edit</a></td>
        <td>
          <form action="{{action('ProductController@destroy', $fruit['id'])}}" method="post">
          <input type="hidden" name="_token" value="{{csrf_token()}}">
          <input type="hidden" name="_method" value="DELETE">
           
            <button class="btn btn-danger" type="submit">Delete</button>
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  </div>
  </body>
</html>