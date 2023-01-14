<!DOCTYPE html>
<html>
<body>

<h2>Employee Edit</h2>

<form action="{{ route('update.employee',$employee->id)}}" method="POST">
    @csrf
  <label for="name">Name:</label><br>
  <input type="text" id="name" name="name" value="{{$employee->name}}"><br>
  
  <label for="email">Email:</label><br>
  <input type="text" id="email" name="email" value="{{$employee->email}}" ><br>

  <label for="phone">phone:</label><br>
  <input type="text" id="phone" name="phone" value="{{$employee->phone}}" ><br>


  <input type="submit" value="Update Employee">
</form> 



</body>
</html>

