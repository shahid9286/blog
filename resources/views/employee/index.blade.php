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

<h2>HTML Table</h2>

<table>
  <tr>
    <th>Name</th>
    <th>Email</th>
    <th>Phone</th>
    <th colspan="2">Actions</th>
  </tr>
        @foreach ($employees as $employee)
            <tr>
                <td>{{$employee->name }}</td>
                <td>{{$employee->email }}</td>
                <td>{{$employee->phone }}</td>
                <td><a href="{{route('delete.employee',$employee->id)}}">Delete</a></td>
                <td><a href="{{route('edit.employee',$employee->id)}}">Edit</a></td>
            </tr>
         
        @endforeach
</table>

</body>
</html>

