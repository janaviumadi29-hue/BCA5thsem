<!DOCTYPE html> 
<html> 
<body> 
<h2>Odd or Even Number</h2> 
<form method="post"> 
Enter a Number: 
<input type="number" name="num" required> 
<input type="submit" name="check" value="Check"> 
</form> 
<?php 
if(isset($_POST['check'])) 
{ 
} 
?> 
$num = $_POST['num']; 
if($num % 2 == 0) 
{ 
} 
echo "<h3>$num is an Even Number</h3>"; 
else 
{ 
} 
echo "<h3>$num is an Odd Number</h3>"; 
</body> 
</html>