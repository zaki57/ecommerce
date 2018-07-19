
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<style>
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}

th, td {
    padding : 15px;
}

a {
    color: white;
}
</style>
</head>
<h2> Product information </h2>
<table>
<tr>
    <th>name</th>
    <th>category</th> 
    <th>Price</th>
    <th>Description</th>
  </tr>
  <tr>
    <td>{{$product->name}}</td>
    <td>{{$product->category}}</td>
     <td>{{$product->price}}</td>
    <td>{{$product->desc}}</td>
  </tr>

</table>

<form action="/cartadd/{{$product->id}}" method="post">
{{ csrf_field() }}
  <div class="form-group">
    <label for="quantity">quantity:</label>
    <input type="number" class="form-control" id="quantity" name="quantity">
  </div>

  <input type="submit" class="btn btn-default" value="add to cart"></input>
</form>
<br><br>
    <button type="button" class="btn btn-danger"><a href="/products" >Go back to products</a></button>
<button type="button" class="btn btn-info"><a href="/orderproduct/{{$product->id}}" >Buy Now</button>
