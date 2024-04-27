<?php
$conn = mysqli_connect("localhost", "root","","onine_passport");
$db= mysqli_select_db($conn,"onine_passport");
$username=$_POST['email'];
$password=$_POST['password'];
// SQL query to fetch information of registerd users and finds user match.
$query =("select * from register where email='$username' AND pasword='$password'");
$result=mysqli_query($conn,$query);
if ( mysqli_num_rows($result) == 1)
{
echo '<script language="Javascript">
	alert("Logged In successfully ");
	window.location=("pesonal2.php");</script>';
} 
else
 {
echo '<script language="Javascript">
	alert("Invalid Username Or Password ");
	window.location=("login2.php");
	</script>';
}
mysqli_close($connection); // Closing Connection
?> 
