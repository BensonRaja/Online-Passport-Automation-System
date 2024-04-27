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
<title>Untitled Document</title>
</head>
<body bgcolor="#b5b575">
<center>

<form method="post" action="otherinsert.php">
<fieldset>
<legend><h1>Other details</h1></legend>
<pre>
<div align="left">

Type of passport Type        :	<input type="radio" name="passporttype" value="normal" />Normal	<input type="radio" name="passport type" value="Tatkal" />Tatkal



Educational qualification    :	<select name="education">
<option value="select option" selected>Select the category</option>
<option value="matriculate">Matriculation</option>
<option value="HSC">HSC</option>
<option value="degree">degree</option>
<option value="post graduate">Post Graduate</option>
</select>


Nationality                  :  <select name="nationality">
<option value="select option" selected> Select the category</option>
<option value="Indian">Indian</option>
<option value="Anglo indian">Anglo Indian</option>
<option value="Others">others</option>
</select>


Religion                     :  <select name="religion">
<option value="select option" selected> Select the category</option>
<option value="Hindu">Hindu</option>
<option value="christian">Christian</option>
<option value="Islam">Islam</option>
<option value="others">others</option>
</select>

Aadhaar Card Number          :  <input type="text" name="acnumber" required />

PAN Card Number	             :  <input type="text" name="pannumber" required />

Email                        :  <input type="email" name="email" required />

<input type="submit" name="submit" value="submit">
</div>

</pre>
</fieldset>
</form>
<a href="reference2.php" class="link">Next</a>
</body>
</html>
