<head>
<style>
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}

th, td {
    padding : 10px;
}
</style>
</head>

<table>
<tr>
<th> Products </th><tr>
@foreach($product as $a)
<tr><td><a href="/products/{{$a->id}}">{{$a->name}}</a></td></tr>
@endforeach

</table>