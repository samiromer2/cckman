<?php //this will not run 
echo "testing the page with the guys";
echo "<br>"; //new line
//print_r($_POST);

//print_r 
//$_POST <- array of inputs

//now lets try to make use of each one 
$username = $_POST['username'];
$pass     = $_POST['password'];
$name     = $_POST['name'];
$hometown = $_POST['hometown'];
$age      = $_POST['age']; 
echo "<br>";

?>
<table border = "2">
<tr>
<td>User name</td>
<td>Password</td>
<td>Name</td>
<td>Address</td>
<td>Age</td>
</tr>
<tr>
<td><?php echo $username;?></td>
<td><?php echo $pass;?></td>
<td><?php echo $name;?></td>
<td><?php echo $hometown;?></td>
<td><?php echo $age;?></td>
</tr>
</table>



