<html>
<head>
<title> Signup/login </title>
<link rel="stylesheet" href="external.css">
<script>
function ValidateForm() {
var username = document.validate.username; 
var emailid = document.validate.emailid; 
var phone = document.validate.number; 
var cp = document.validate.cp;
var pass = document.validate.password; 
var address = document.validate.address; 
var team = document.validate.team;
var cb = document.validate.cb;
if (username.value == "") 
{
alert("Please enter your name.");
 username.focus();
 return false; 
} 
if (emailid.value == "") 
{ 
window.alert("Please enter avalid e-mail address.");
 return false; 
} 
if (emailid.value.indexOf("@", 0) < 0)
 { 
window.alert("Please enter a valid e-mail address."); 
 return false; 
} 
if (pass.value == "") 
{ 
window.alert("Please enter a valid password.");
 return false; 
}
if (cp.value != pass.value) 
{ 
window.alert("Password does not match.");
 return false; 
}
if (emailid.value.indexOf(".", 0) < 0)
 {
 window.alert("Please enter a valid e-mail address.");
 
 return false; 
} 
if (isNaN(phone.value) || phone.value < 1000000000 || phone.value > 9999999999) 
	{
         window.alert("Please enter valid, 10 digit phone number.");
		 return false;
    }
if (cp.value == "") 
{
alert("Please re-enter your password");
 cp.focus();
 return false; 
} 

if (cb.checked == false) 
{ 
alert("Please accept terms and conditions"); 
 return false; 
} 
return true;

}
</script>
<?php
include('formdef.php');
$username = @$_POST['username'];
$emailid = @$_POST['emailid'];
$password = @$_POST['password'];
$number = @$_POST['number'];
if(isset($_POST['login']))
{
$user = mysqli_real_escape_string($conn, @$_POST['username']);
$mail = mysqli_real_escape_string($conn, @$_POST['emailid']);
$select_user = "SELECT email FROM users WHERE email='$mail' ";
$run_user=mysqli_query($conn, $select_user);
$check_user= mysqli_num_rows($run_user);
if($check_user>0)
{
echo '<script language="javascript">';
echo 'alert("E-mail already exists")';
echo '</script>';
}		
else
{
$sql = "INSERT INTO users (username, password, email, mobile)
VALUES ('$username', '$password', '$emailid', '$number')";
if ($conn->query($sql) === TRUE) {
    
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}
}


?>
</head>
<body>
<font align="center">
<h1> Create An Account </h1>
<div>
<form name="validate" onsubmit="return ValidateForm()"  method="post">
 
  <input type="text" name="username" value="" placeholder="Enter Username"><br>
  
  <input type="text" name="emailid" value="" placeholder="Enter e-mail ID"><br>

  <input type="password" name="password" value="" placeholder="Enter Password"><br>

  <input type="password" name="cp" value="" placeholder="Please re-enter Password"><br>

  <input type="text" name="number" value="" placeholder="Enter Mobile Number"><br>
 
  <br>

<p><input type="checkbox" name="cb">I accept the terms & conditions <br></p>
  <br>
    <input type="submit" name="login" value="Submit">
  <input type="reset">
  <br>
  <a href="home.html"><input type="button" value="Go Back" style=" background-color: #4CAF50;
    border: none;
    color: white;
    padding: 16px 32px;
    text-decoration: none;
    margin: 4px 2px;
    cursor: pointer;"></a>
</form>
</div>
</body>
</html>
