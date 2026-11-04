<!DOCTYPE html> 
<html> 
<body> 
<h2>Dollar to Rupee Conversion</h2> 
<form method="post"> 
Enter Dollar: 
<input type="number" name="dollar" step="any" required> 
<input type="submit" name="submit" value="Convert"> 
</form> 
<?php 
if(isset($_POST['submit'])) 
{ 
$dollar = $_POST['dollar']; 
$rupee = $dollar * 85; 
echo "Dollar = $" . $dollar . "<br>"; 
echo "Rupees = Rs. " . $rupee; 
} 
?> 
</body> 
</html>