<html>
<head>
<title> Tickets </title>
<link rel="stylesheet" href="external.css">

<?php
$username = @$_POST['username'];
$emailid = @$_POST['emailid'];
$number = @$_POST['number'];
$team = @$_POST['ticket'];
$ticket = @$_POST['ticketnum'];


?>
</head>
<body>
<font align="center">
<h1> Your Tickets! </h1>
<br>
<br>
<br>
<br>
<br>
  <table width=100% height=50% style="color: red;text-align:center;font-size:20px;" border="1">

<tr> <td colspan="2" style="color: red;text-align:center;font-size:30px;"><?php echo $_POST["ticket"]; ?></td>
  <td style="color: red;text-align:center;font-size:30px;"><?php echo $_POST["ticketnum"]; ?></td>
 
  </tr>
  <tr> <td style="color: black;">Name</td>
  <td style="color: black;">Email</td>
  <td style="color: black;">Mobile Number</td>
  </tr>
  <tr>
  <td><?php echo $_POST["username"]; ?></td>
  <td><?php echo $_POST["emailid"]; ?></td>
  <td><?php echo $_POST["number"]; ?></td>
  </tr>
</table>
  <br>
  <a href="home.html"><input type="button" value="Home" style=" background-color: #4CAF50;
    position: relative;
	left: 47%;
	border: none;
    color: white;
    padding: 16px 32px;
    text-decoration: none;
    margin: 4px 2px;
    cursor: pointer;"></a>
	
</body>
</html>
