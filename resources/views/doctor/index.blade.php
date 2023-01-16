<!DOCTYPE html>
<html>
<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 80%;
  margin: 10px auto;
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

<h2 style="text-align:center;">List of Doctors</h2> 
<h2 style="text-align:center;"><a href="{{route('create.doctor')}}">Add New Doctor</a></h2> 


<table>
  <tr>
    <th>Name</th>
    <th>Email</th>
    <th>Phone</th>
    <th colspan="2">Actions</th>
  </tr>

  @foreach ($doctor_list as $doctor)
      <tr>
        <td>{{$doctor->name}}</td>
        <td>{{$doctor->email}}</td>
        <td>{{$doctor->phone}}</td>
        <td><a href="{{route('edit.doctor',$doctor->id)}}">Edit</a></td>
        <td><a href="{{route('delete.doctor',$doctor->id)}}">Delete</a></td>
      </tr>
  @endforeach
       
</table>

</body>
</html>

