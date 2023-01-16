<!DOCTYPE html>
<html>
<body>

<h2>Add New Doctor</h2>

<form action="{{ route('store.doctor')}}" method="POST">
    @csrf
  <label for="name">Name:</label><br>
  <input type="text" id="name" name="dr_name" > 
  @if($errors->has('dr_name'))
      <span> {{$errors->first('dr_name')}}</span>
  @endif
  
  <br>
  
  <label for="email">Email:</label><br>
  <input type="text" id="email" name="dr_email" >
    @if( $errors->has('dr_email'))
      <span> {{$errors->first('dr_email')}}</span>
    @endif
  <br>

  <label for="phone">phone:</label><br>
  <input type="text" id="phone" name="dr_phone" >
  @if( $errors->has('dr_phone'))
  <span> {{$errors->first('dr_phone')}}</span>
  @endif
<br>


  <input type="submit" value="Submit">
</form> 



</body>
</html>

