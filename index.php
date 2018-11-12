<!DOCTYPE html>
<html>
<head>

<title>Hotel Website | Gallery</title>
<style>
label{display:inline-block;width:100px;margin-bottom:10px;}
     body  {
    background-image: url("box.png");
    background-color: #cccccc;
}
fieldset {
  font-size:12px;
  padding:10px;
  width:250px;
  line-height:1.8;}

label:hover {cursor:hand;}
</style>
</head>
<body>
 
<form method="post" action="process.php">
<fieldset>
<legend>Room Booking:</legend>
<label>First Name</label>
<input type="text" name="first_name" />
<br />
<label>Last Name</label>
<input type="text" name="last_name" />
<br />
<label>Room</label><br />
  <select name="room">
    <option value="deluxe">deluxe</option>
    <option value="semi_deluxe">semi deluxe</option>
    <option value="regular">regular</option>
    <option value="luxury">luxury</option>
  </select>
<br />
<label>Duration of stay</label>
<input type="number" name="duration" />
<br />
<label>Email</label>
<input type="text" name="email" />
 
<br />
<input type="submit" value="Book Room">
 </fieldset>
</form>
 
 
 
</body>
</html>