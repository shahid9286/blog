<!DOCTYPE html>
<html>
<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>

<h2>Teacher Table</h2> <a href="{{route('create.teacher')}}">Add New Teacher</a> <br><br>

<table>
  <tr>
    <th>Name</th>
    <th>Email</th>
    <th>Phone</th>
    <th colspan="2">Actions</th>
  </tr>
        @foreach ($teachers as $item)
            <tr>
                <td>{{$item->name }}</td>
                <td>{{$item->email }}</td>
                <td>{{$item->phone }}</td>
                <td><a href="{{route('delete.teacher',$item->id)}}">Delete</a></td>
                <td><a href="{{route('edit.teacher',$item->id)}}">Edit</a></td>
            </tr>
         
        @endforeach
</table>

</body>
</html>

