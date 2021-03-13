<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="commonStyle.css">
<title>Send Request</title>
<?php
$name=" ";
$err_name=" ";
$phonenumber=" ";
$err_phonenumber=" ";
$blood="";
$err_blood="";
$quantity="";
$err_quantity=" ";
$hname="";
$err_hname="";
$hlocation="";
$err_hlocation="";
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
		if ($_POST["blood"] != '0')
		{
			$err_blood = "Blood Group is Required"; 
			$hasError=true;
		}
		if ($_POST["quantity"] != '0')
		{
			$err_quantity = "Quantity is Required"; 
			$hasError=true;
		}
		if(empty($_POST["hname"]))
	    {
			$err_hname="Hospital Name is Required";
			$hasError=true;
		}
		else
		{
			$hname=htmlspecialchars($_POST["hname"]);
		}
		if(empty($_POST["hlocation"]))
	    {
			$err_hlocation="Hospital Location is Required";
			$hasError=true;
		}
		else
		{
			$hlocation=htmlspecialchars($_POST["hlocation"]);
		}
		if(!$hasError)
		{
			header("Location: user_home.php");
		}
   }
?>
</head>
<body style="background-color:rgb(219, 235, 241)">
<div class="header">
<table>
	<tr><td><img id="element1" src="Blood_Old.png" height="50px" width="50px"></td>
        <td><b>Sheccha<br>Blood<br>Bank</b></td></tr></table></div>
		<div align="right" class="rightinfo">
		<table><tr>
	    <td> <b><a href="user_home.php">Welcome, User</a></b><a href="admin_settings.php"> <img id="element2 "src="settings.png" height="20px" width="20px"></a>
			              <a href="login.php"> <img id="element3"src="logout.png" height="20px" width="20px"></a></td></tr></table>
</div>
<div class="menu">
<table>
	<tr align="center"><td class="menucell"><b><a href="user_sendreq.php">Send Request</a></b></td></tr>
	<tr align="center"><td class="menucell" ><b><a href="user_donorInfo.php">Donor List</a></b></td></tr>
	<tr align="center"><td class="menucell" ><b><a href="user_available.php">Available Stock</a></b></td>
	<tr align="center"><td class="menucell" ><b><a href="sendmessage.php">Contact Us</a></b></td></tr>
	</table></div>

<form action="" method="post">
<div class="otherpage">
<h1>Send Request</h1>
 <tr>
 <td><Span>Name</Span></td>
 <td>: <input type="text" placeholder="Name" value="<?php  echo $name; ?>" name="name"><br> <span><?php echo $err_name;?> </span>
 </td>
 </tr>
 <tr>
 <td><Span>Number</Span></td>
 <td>: <input type="number" placeholder="Number" value="<?php  echo $phonenumber; ?>" name="phonenumber"><br> <span><?php echo $err_phonenumber;?> </span>
 </td> 
 </tr>
 <tr>
                    <td>Blood Group</td>
                    <td>:
                        <select name="blood" value="">
                            <option disabled selected>Choose</option>
                            <option>A+</option>
                            <option>A-</option>
                            <option>B+</option>
                            <option>B-</option>
                            <option>O+</option>
                            <option>O-</option>
                            <option>AB+</option>
                            <option>AB-</option>
                        </select><span><?php echo $err_blood;?></span>
                    </td>
            
 </tr>
 <tr>
                    <td>Quantity</td>
                    <td>:
                        <select name="quantity" value="">
                            <option disabled selected>Choose</option>
                            <option>1 Bag</option>
                            <option>2 Bag</option>
                            <option>3 Bag</option>
                        </select><span><?php echo $err_quantity;?></span>
                    </td>
            
 </tr>
 <tr>  
<td><br><Span>Hospital Name</Span></td>
 <td>: <input type="text" placeholder="Hospital Name" value="<?php  echo $hname; ?>" name="hname"><br> <span><?php echo $err_hname;?> </span> 
 </tr>
 <td><Span>Hospital Location</Span></td>
 <td>: <input type="text" placeholder="Hospital Location" value="<?php  echo $hlocation; ?>" name="hlocation"><br> <span><?php echo $err_hlocation;?> </span> 
 </tr>
 <tr>
<td colspan="2" align="center"><input type="submit" value="Send"></td>
 </tr>
<table>
</table></div>
</body>
</html>