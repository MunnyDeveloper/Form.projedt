<!DOCTYPE html>
<html>
<head>
	<title>PHP Form</title>
</head>
<body>
<b><center>Registration From</center></b>
<form method="post" action="php_form.php">
<table width="150" border="2" align="center">
<tr>
	<td width="144" bordercolor="#000033" bgcolor="#99CCFF">First Name:<br/>
	<input type="text" name="first" />
	</td>
</tr>
	
<tr>
	<td width="144" bordercolor="#000033" bgcolor="#99CCFF">Last Name:<br/>
	<input type="text" name="last" />
	</td>
</tr>

<tr>
	<td width="144" bordercolor="#000033" bgcolor="#99CCFF">Email:<br/>
	<input type="text" name="email" />
	</td>
</tr>

<tr>
	<td bordercolor="#000033" bgcolor="#99CCFF">Country:<br/>
	<select name="country"><option  value="null">Select Any Coountry</option>
    <option value="pakistan">Pakistan</option>
    <option value="India">Inndia</option>
    <option value="China">China</option>
	</select>
		
	</td>
</tr>

<tr>
	<td bordercolor="#000033" bgcolor="#99CCFF">City:<br/>
	<input type="text" name="city"/></td>
</tr>
<tr>
	<td bordercolor="#000033" bgcolor="#99CCFF">Postal Code:<br/>
	<input type="text" name="area"/></td>
</tr>

<tr>
	<td bordercolor="#000033" bgcolor="#99CCFF">Age:<br/>
	<input type="text" name="age"/></td>
</tr>

<tr>
	<td bordercolor="#000033" bgcolor="#99CCFF">Gender:<br/>
	Male<input type="radio" name="gender" value="male" />
	Female<input type="radio" name="gender" value="female"></td>
</tr>

<tr>
	<td bordercolor="#000033" bgcolor="#99CCFF"><div align="center">
	<input type="submit" name="submit" value="Register" /></div></td>
</tr>
</table>
</form>
</body>
</html>

<?php

$con=mysql_connect('localhost','root',"");
$database=mysql_select_db('usre_reg',$con);

if(isset($_POST['submit']))
{
	$first=$_POST['first'];
	$last=$_POST['last'];
	$email=$_POST['email'];
	$country=$_POST['country'];
	$city=$_POST['city'];
	$code=$_POST['area'];
	$ahe=$_POST['age'];
}

?>