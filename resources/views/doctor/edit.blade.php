<!DOCTYPE html>
<html>
<body>

<h2>Doctor Edit</h2>

<form action="{{ route('update.doctor',$doctor->id)}}" method="POST">
    @csrf
  <label for="name">Name:</label><br>
  <input type="text" id="name" name="name" value="{{$doctor->name}}"><br>
  
  <label for="email">Email:</label><br>
  <input type="text" id="email" name="email" value="{{$doctor->email}}" ><br>

  <label for="phone">phone:</label><br>
  <input type="text" id="phone" name="phone" value="{{$doctor->phone}}" ><br>


  <input type="submit" value="Update Doctor">
</form> 



</body>
</html>

