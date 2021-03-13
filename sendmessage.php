<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="commonStyle.css">
<title>Contact Us</title>
<?php
$name="";
$err_name="";
$email="";
$err_email="";
$phonenumber="";
$err_phonenumber="";
$message="";
$err_message="";
if ($_SERVER["REQUEST_METHOD"] == "POST")
   {
	   if(empty($_POST["name"]))
	    {
			$err_name="Name is Required";
			$hasError=true;
		}
		else
		{
			$name=htmlspecialchars($_POST["name"]);
		}
		if(empty($_POST["email"]))
		{
			$err_email="Email is Required";
			$hasError=true;
		}
		else
		{
			 $email=$_POST["email"];
		}
		if(empty($_POST["phonenumber"]))
		{
			$err_phonenumber="Phone Number is Required";
			$hasError=true;
		}
		else if(strlen($_POST["phonenumber"]) == 10)
		{
			$err_phonenumber="Phone Number should be 11 characters";
			$hasError=true;
		}
		else
		{
			 $phonenumber=$_POST["phonenumber"];
		}
		if(empty($_POST["message"]))
		{
			$err_message="Message is Required";
			$hasError=true;
		}
		else
		{
			$message=$_POST["message"];
		}
		
   }
?>

</head>
<body style="background-color:rgb(219, 235, 241)">
<div class="header"><table>
	<tr><td><img id="element1" src="Blood_Old.png" height="50px" width="50px"></td>
        <td><b>Sheccha<br>Blood<br>Bank</b></td></tr></table></div>
		<div align="right" class="rightinfo">
		<table><tr>
	    <td> <b><a href="user_home.php">Welcome, User</a></b><a href="admin_settings.php"> <img id="element2 "src="settings.png" height="20px" width="20px"></a>
			              <a href="login.php"> <img id="element3"src="logout.png" height="20px" width="20px"></a></td></tr></table></div>
<div class="menu"><table>
	<tr align="center"><td class="menucell"><b><a href="user_sendreq.php">Send Request</a></b></td></tr>
	<tr align="center"><td class="menucell" ><b><a href="user_donorInfo.php">Donor List</a></b></td></tr>
	<tr align="center"><td class="menucell" ><b><a href="user_available.php">Available Stock</a></b></td>
	<tr align="center"><td class="menucell" ><b><a href="sendmessage.php">Contact Us</a></b></td></tr>
	</table></div>
<div class="otherpage">
<form action="" method="post">
<h3>Got a question?</h3>
<table>
<tr>
<td><Span>Name</Span></td>
<td>: <input type="text" placeholder="Name" name="name"><br> <span><?php echo $err_name;?> </span></td>
</tr>
<tr>
<td><span>Email</span></td>
<td>: <input type="email" placeholder="Email" name="email"><br><span><?php echo $err_email;?> </span>
</td>
</tr>
<tr>
<td><span>Phone Number</span></td>
<td>: <input type="number" placeholder="Phone Number" name="phonenumber"><br><span><?php echo $err_phonenumber;?></span></td>
</tr>
<tr>
					<td><span>Message</span></td>
					<td>:<textarea placeholder="Message" name="message"></textarea><br><span><?php echo $err_message;?></span></td>
				</tr>
				<tr>
					<td align="center" colspan="2"><input type="submit" value="Send Us"></td>
				</tr>
</table>
</form>
</div>
</body>
</html>