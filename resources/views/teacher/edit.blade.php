<!DOCTYPE html>
<html>
<body>

<h2>Teacher Edit</h2>

<form action="{{ route('update.teacher',$teacher->id)}}" method="POST">
    @csrf
  <label for="name">Name:</label><br>
  <input type="text" id="name" name="name" value="{{$teacher->name}}"><br>
  
  <label for="email">Email:</label><br>
  <input type="text" id="email" name="email" value="{{$teacher->email}}" ><br>

  <label for="phone">phone:</label><br>
  <input type="text" id="phone" name="phone" value="{{$teacher->phone}}" ><br>


  <input type="submit" value="Update Teacher">
</form> 



</body>
</html>

