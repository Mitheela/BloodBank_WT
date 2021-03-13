<!DOCTYPE html>
<html lang="en">
<?php
	$uname="";
	$err_uname="";
	$pass="";
	$err_pass="";
	$hasError=false;
	$err_message="";
	$admin=array("admin"=>"1234");
	$user=array("sajjad"=>"1234");
	
	
	if($_SERVER["REQUEST_METHOD"] == "POST"){
		if(empty($_POST["uname"])){
			$err_uname="Username Required";
			$hasError = true;
		}
		else{
			$uname = htmlspecialchars($_POST["uname"]);
		}
		if(empty($_POST["pass"])){
			$err_pass="Password Required";
			$hassError = true;
		}
		else{
			$pass=htmlspecialchars($_POST["pass"]);
		}
		if(!$hasError){
			$found=false;
			foreach($admin as $u=>$p){
				if($u==$uname && $p==$pass){
					
					header("Location: admin_home.php");
				}
			}
			foreach($user as $u=>$p){
				if($u==$uname && $p==$pass){
					
					header("Location: user_home.php");
				}
			}
			
			$err_message="Invalid username or password";		
		}
	}
?>
<head>
    <link rel="stylesheet" type="text/css" href="loginStyle.css">
    <title>login</title>
</head>
<body style="background-color:rgb(11, 141, 141)">
    <div class="login" align:"center">
    <form action="" method="post">
        <table style="border-collapse: collapse">
            <tr>
                <td style="border: 3px solid red;">
                    <table>
                        <tr>
                            <td align="center"><img src="Blood_Old.png" height="75" width="75" /> </td>
                        </tr>
                        <tr>
                            <td align="center">
                                <h3 style="color: red;">Sheccha <br> Blood <br> Bank</h3>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <h3 style="color: red; border: 2px solid red;" align="center">Donate Blood. Save Life.</h3>
                            </td>
                        </tr>
                    </table>
                </td>
                <td style="border: 3px solid red;">
                    <table>
                        <tr>
                            <td>
                                <h2 align="center" style="color:green">Login here</h2>
                            </td>
                        </tr>
                        <tr>
                            <td><input style="width:100%" type="text" placeholder="Username" name="uname"><span><?php echo $err_uname;?></span></td>
                        </tr>
                        <tr>
                            <td><input style="width:100%" type="password" placeholder="Password" name="pass"><span><?php echo $err_pass;?></span></td>
                        </tr>
                        <tr>
                            <td colspan="2" align="center"><input style="width:100%; background-color:green; color:white; border: 3px solid darkblue" type="submit" value="Login"><span><?php echo $err_message;?></span></td>
                        </tr>
                        <tr>
                            <td align="center">
                                <label style="color:darkblue">New here?</label><a style="color:green" href="registration.php">Sign Up</a>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            
        </table>
        </form>
    </div>
   
</body>
</html>