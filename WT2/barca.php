<html>
<head>
<style>
body{
background-image: url("a7785453e0117464dc67afec5a60ad51.jpg")


}
p.users{
 position: relative;
 
 top: 0px;
 font-size: 20px;
 color: white;
 text-align: center;
}
input[type=text] {
    width: 98%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
input[type=password] {
    width: 98%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=submit] {
    width: 49%;
    background-color: #ffff00;
    color: #7647a2;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #ffff4c;
}
input[type=button] {
    width: 49%;
    background-color: #ffff00;
    color: #7647a2;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}
input[type=button].hi{
    width: 98%;
    background-color: #ffff00;
    color: #7647a2;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=button]:hover {
    background-color: #ffff4c;
}

div.login {
    border-radius: 5px;
    background-color: #7647a2;
    padding: 20px;
    width: 20%;
	top:95;
	position:relative;
}
p.match{
    width: 98%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
	text-align: center;
	color: white;
	 
}



div.match{
    border-radius: 5px;
    background-color: #7647a2;
    padding: 20px;
    width: 20%;
	right: 0px;
	top: 110px;
	position: absolute;
}
</style>
<?php
include('formdef.php');
if(isset($_POST['login']))
{
$username = mysqli_real_escape_string($conn, @$_POST['username']);
$password = mysqli_real_escape_string($conn, @$_POST['password']);
$select_user = "SELECT * FROM users WHERE username='$username' AND password='$password'";
$run_user=mysqli_query($conn, $select_user);
$check_user= mysqli_num_rows($run_user);
if($check_user>0)
{
header('location:barcabs.html');
}	

}	
?>
<script>
function noBack(){ window.history.forward();}
noBack();
window.onload = noBack;
window.onpageshow = function (evt) { if (evt.persisted) noBack();}
window.onunload = function () { void (0);}
</script>
</head>
<title>Barcelona
</title>
<body>
<iframe src="barcaheader.html" height="110" width="99%"  style="border:none;top: 0px;position: absolute;"></iframe>
<div class="login">
<p class="users">For System Users</p>
<form action="" method="post">
<br>
<input type="text" id="uname" name="username" placeholder="Enter your username"><br>
<input type="password" id="pass" name="password" placeholder="Enter you password"><br>
<input name ="login" type="submit" value="Login">
<a href = "http://localhost/WT2/form.php"><input type="button" value="SignUp"></a>
<a href = "http://localhost/WT2/home.html"><input class="hi" type="button" value="Choose another club"></a>
</form>
</div>
<div class="match">
<p class="users">Matches</p>
<p class="match">Date&emsp;&emsp;&emsp;Day&emsp;&emsp;&emsp;Opponent</p>
<p class="match">18/10/17&emsp;Wednesday&emsp;&emsp;Real Madrid</p>
<p class="match">20/10/17&emsp;Friday&emsp;&emsp;&emsp;&emsp;&emsp;Girona</p>
<p class="match">25/10/17&emsp;Wednesday&emsp;&emsp;&emsp;Eibar</p>
<a href = "http://localhost/WT2/barcavid.html"><input class="hi" type="button" value="Highlights"></a>
</div>
<iframe  src="barcanews.html" height="70%" width="50%"  style="border:none;top:110px;left: 25%;position: absolute;"></iframe>
<div>
<iframe  src="about.html" height="100" width="99%"  style="border:none;bottom: 0px;position: absolute;"></iframe>
</div>
</body>
</html>