<!DOCTYPE html>
<html lang="en">
<?php
$uname = "";
$err_uname = "";
$pass = "";
$err_pass = "";
$hasError = false;
$err_message = "";
$admin = array("admin" => "1234");
$users = array("sajjad"=>"1234","leon"=>"1234","neha"=>"1234");



if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["uname"])) {
        $err_uname = "Username Required";
        $hasError = true;
    } else {
        $uname = htmlspecialchars($_POST["uname"]);
    }
    if (empty($_POST["pass"])) {
        $err_pass = "Password Required";
        $hassError = true;
    } else {
        $pass = htmlspecialchars($_POST["pass"]);
    }
    if (!$hasError) {
        $found = false;
        foreach ($admin as $u => $p) {
            if ($u == $uname && $p == $pass) {

                header("Location: admin_home.php");
            }
        }
		foreach ($users as $u => $p) {
            if ($u == $uname && $p == $pass) {

                header("Location: user_home.php");
            }
        }
        $err_message = "Invalid username or password";
    }
}
?>

<head>
    <link rel="stylesheet" type="text/css" href="loginStyle.css">
    <title>login</title>
</head>

<body style="background-color:rgb(208, 235, 226)">

    <div class="login-div">


        <table align="center">

            <tr>
                <td><img src="img/Blood_Old.png" width="75px" height="75px"></td>
                <td>
                    <h1 align="center" style="color: red">Seccha Blood Bank</h1>
                </td>
            </tr>
            <tr>

                <td colspan="2">
                    <h2 align="center" style="color: green"> Login here</h2>
                </td>
            </tr>
        </table>
        <form action="" method="post">
            <table align="center">
                <tr>
                    <td><span style="font-weight: bold;" class="my-font">Username:</span> </td>
                    <td><input class="my-font my-text-field" type="text" value="<?php echo $uname; ?>" placeholder="Username" name="uname">
                        <br><span class="err-msg"><?php echo $err_uname; ?></span>
                    </td>
                </tr>
                <tr>
                    <td><span style="margin-top: 5px; font-weight: bold;" class="my-font">Password: </span></td>
                    <td><input style="margin-top: 5px;" class="my-font my-text-field" type="password" placeholder="Password" name="pass">
                        <br><span class="err-msg"><?php echo $err_pass; ?></span>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" align="right"><input class="btn-mine my-font" type="submit" value="Login" name="login">
                </tr>
                <tr>
                    <td></td>
                    <td colspan="2" align="center"><span class="err-msg"><?php echo $err_message; ?></span></td>
                </tr>
                <tr>
                    <td colspan="2" align="center">
                        <label style="color:darkblue">New here?</label><a style="color:green" href="registration.php"> Sign Up</a>
                    </td>
                </tr>
            </table>
        </form>
    </div>

</body>

</html>