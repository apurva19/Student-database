<!Doctype html>
<html>
<head>
<b><u><center><h2>STUDENT DATABASE</h2></center></u></b>
</head>
<style type="text/css">
body {
    background-color: black;
    color: white;
}
</style>
<body>
<form name="Student" method="POST" action="database.php">
<table align="center">
<tr>
<tr>
<tr>
<tr>
<td>Name:</td><td><input type="text" name="name"></td>
</tr>

<tr>
<td>Roll No:</td><td><input type="text" name="roll_no"></td>
</tr>

<tr>
<td>Address:</td><td><input type="text" name="address"></td>
</tr>

<tr>
<td>Contact No:</td><td><input type="number" name="contact"></td>
</tr>

<tr>
<td>Gender:</td><td><input type="text" name="gender"></td>
</tr>


<tr><td>Category:</td>
<td><input type="radio" name="category" value="General" checked> General</td>
<td><input type="radio" name="category" value="OBC"> OBC</td>
<td><input type="radio" name="category" value="SC"> SC</td>
<td><input type="radio" name="category" value="ST"> ST</td>
</tr>

<tr>
<td>Branch:</td><td><input type="text" name="branch"></td>
</tr>


<tr>
<td><input type="submit" value="Insert" name="insert"></td>
<td><input type="submit" value="Delete" name="delete">
<input type="submit" value="Update" name="update"></td>

</tr>

</form>
</body>
</html>