<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<style>
.link{
background-color:#450000;
color:#b5b575;

}
</style>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
</head>
<body bgcolor="#b5b575">
<center>

<form method="post" action="personalinsert.php">
<fieldset>
<legend><h2>Personal Information</h2></legend>
<pre>
<div align="left">
Name		:	<input type="text" name="name" required size=30/>


Last Name	:	<input type="text" name="lastname" required size=30/>


Father's name	:	<input type="text" name="fname" required size=30/>


Mother's name	:	<input type="text" name="mname" required size=30/>


Date of birth	:	<input type="date" name="dob" required size=30/>


Gender		:	<input type="radio" name="gender" value="male" />Male	<input type="radio" name="gender" value="female" />Female


Marital Status	:	<input type="radio" name="maritalstatus" value="single" />Single	<input type="radio" name="maritalstatus" value="married" />Married


Address		:	 <textarea name="address" required size=30></textarea>


Birth place	 :	 <input type="text" name="placeofbirth" required />


City		:	 <input type="text" name="city" required size=30/> 


Phone number	:	 <input type="text" name="phone" required size=30/>


Email		:	 <input type="text" name="email" required size=30/>


				<input type="submit" name="submit" value="submit" />
</div>
				

<a href="other2.php" class="link">Next</a>	
</pre>
</fieldset>
</form>
</body>
</html>
