<!DOCTYPE html>
<html>
<body>

<h2>Employee Forms</h2>

<form action="{{ route('store.employee')}}" method="POST">
    @csrf
  <label for="name">Name:</label><br>
  <input type="text" id="name" name="name" ><br>
  
  <label for="email">Email:</label><br>
  <input type="text" id="email" name="email" ><br>

  <label for="phone">phone:</label><br>
  <input type="text" id="phone" name="phone" ><br>


  <input type="submit" value="Submit">
</form> 



</body>
</html>

