<html>
<head>
<title> Tickets </title>
<link rel="stylesheet" href="external.css">
<script>
function ValidateForm() {
var username = document.validate.username; 
var emailid = document.validate.emailid; 
var phone = document.validate.number; 
var cp = document.validate.cp;
var pass = document.validate.password; 
var ticket = document.validate.ticket; 
var ticketnum = document.validate.ticketnum;
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
if (ticket.value == "") 
{
alert("Please select a team.");
 ticket.focus();
 return false; 
} 
if (ticketnum.value == "") 
{
alert("Please enter number of tickets.");
 ticketnum.focus();
 return false; 
} 
if (ticketnum.value > 20000) 
{
alert("Not enough available tickets.");
 ticketnum.focus();
 return false; 
} 
alert("Tickets have been booked.");
return true;

}
</script>

</head>
<body>
<font align="center">
<h1> Buy Ticket </h1>
<div>
<form name="validate" onsubmit="return ValidateForm()" action="conticket.php"  method="post">
 
  <input type="text" name="username" value="" placeholder="Enter Name"><br>
  
  <input type="text" name="emailid" value="" placeholder="Enter e-mail ID"><br>



  <input type="text" name="number" value="" placeholder="Enter Mobile Number"><br>
  
 
  <br>
  <table width=100% style="color: red;text-align:center;font-size:20px;">
<p>Team: </p>
<tr> <td>Arsenal</td>
  <td>Barcelona</td>
  <td>Chelsea</td>
  <td>Real Madrid</td> </tr>
  <tr>
  <td><input type="radio" name="ticket" value="Arsenal"></td>
  <td><input type="radio" name="ticket" value="Barcelona"></td>
  <td><input type="radio" name="ticket" value="Chelsea"></td>
  <td><input type="radio" name="ticket" value="Real Madrid"></td>
  </tr>
</table>
  <br><input type="number" name="ticketnum" value="" placeholder="Number of Tickets"><br>
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
