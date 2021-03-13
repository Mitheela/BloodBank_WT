<!DOCTYPE html>
<?php
$name = "";
$err_name = "";
$uname = "";
$err_uname = "";
$pass = "";
$err_pass = "";
$cpass = "";
$err_cpass = "";
$email = "";
$err_email = "";
$phonenumber = "";
$err_phonenumber = "";
$dob = "";
$err_dob = "";
$street = "";
$err_street = "";
$city = "";
$err_city = "";
$state = "";
$err_state = "";
$zip = "";
$err_zip = "";
$hasError = false;
$err_gender = "";
$blood = "";
$err_blood = " ";
$dob = "";
$err_dob = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["name"])) {
        $err_name = "<br>&nbsp;&nbsp;*Name is Required";
        $hasError = true;
    } else {
        $name = htmlspecialchars($_POST["name"]);
    }
    if (empty($_POST["uname"])) {
        $err_uname = "<br>&nbsp;&nbsp;*User Name Required";
        $hasError = true;
    } else if (strlen($_POST["uname"]) < 6) {
        $err_uname = "<br>&nbsp;&nbsp;*Username should be at least 6 characters";
        $hasError = true;
    } else {
        $uname = htmlspecialchars($_POST["uname"]);
    }
    if (empty($_POST["pass"])) {
        $err_pass = "<br>&nbsp;&nbsp;*Password is Required";
        $hasError = true;
    } else if (strlen($_POST["pass"]) < 8) {
        $err_pass = "<br>&nbsp;&nbsp;*Password should be at least 8 characters";
        $hasError = true;
    } else {
        $pass = $_POST["pass"];
    }
    if (empty($_POST["cpass"])) {
        $err_cpass = "<br>&nbsp;&nbsp;*Confirm Password is Required";
        $cpass = $_POST["cpass"];
        $hasError = true;
    }
    if ($pass == $cpass) {
        $cpass = $_POST["cpass"];
    } else {
        $err_cpass = "<br>&nbsp;&nbsp;*Password & Confirm Password Is Not Same";
        $hasError = true;
    }
    if (empty($_POST["email"])) {
        $err_email = "<br>&nbsp;&nbsp;*Email is Required";
        $hasError = true;
    } else {
        $email = $_POST["email"];
    }
    if (empty($_POST["phonenumber"])) {
        $err_phonenumber = "<br>&nbsp;&nbsp;Phone Number is Required";
        $hasError = true;
    } else if (strlen($_POST["phonenumber"]) == 10) {
        $err_phonenumber = "<br>&nbsp;&nbsp;*Phone Number should be 11 characters";
        $hasError = true;
    } else {
        $phonenumber = $_POST["phonenumber"];
    }
    if (empty($_POST["dob"])) {
        $err_dob = "<br>&nbsp;&nbsp;*DOB is Required";
        $hasError = true;
    } else {
        $dob = htmlspecialchars($_POST["dob"]);
    }
    if (empty($_POST["street"])) {
        $err_street = "<br>&nbsp;&nbsp;*Street is Required";
        $hasError = true;
    } else {
        $street = $_POST["street"];
    }
    if (empty($_POST["city"])) {
        $err_city = "<br>&nbsp;&nbsp;City is Required";
        $hasError = true;
    } else {
        $city = $_POST["city"];
    }
    if (empty($_POST["state"])) {
        $err_state = "<br>&nbsp;&nbsp;State is Required";
        $hasError = true;
    } else {
        $state = $_POST["state"];
    }
    if (empty($_POST["zip"])) {
        $err_zip = "<br>&nbsp;&nbsp;Zip is Required";
        $hasError = true;
    } else {
        $zip = $_POST["zip"];
    }
    if (!isset($_POST["gender"])) {
        $err_gender = "<br>&nbsp;&nbsp;Gender is Required";
        $hasError = true;
    }

    if (empty($_POST["blood"])) {
        $err_blood = "<br>&nbsp;&nbsp;Blood Group is Required";
        $hasError = true;
    }else{
        $blood = $_POST["blood"];
    }
    if (!$hasError) {
        header("Location: login.php");
    }
}

?>

<html lang="en">

<head>

    <title>Registration</title>
    <link rel="stylesheet" type="text/css" href="regStyle.css">
</head>

<body style="background-color:rgb(208, 235, 226)">
    <div class="header">
        <img id="element1" src="img/Blood_Old.png" height="60" width="60">
        <h1 id="element2"> Sheccha Blood Bank</h1>
    </div>
    <div class="Regbox" align="center">
        <form action="" method="post">
            <h1 style="color: darkblue;">Registration</h1>
            <table>
                <tr>
                    <td><Span>Name</Span></td>
                    <td>: <input class="ph" type="text" placeholder="Name" value="<?php echo $name; ?>" name="name"><span style="color: red;"><?php echo $err_name; ?> </span>
                    </td>
                </tr>
                <tr>
                    <td><span>Username</span></td>
                    <td>: <input class="ph" type="text" placeholder="Username" value="<?php echo $uname; ?>" name="uname"><span style="color: red;"><?php echo $err_uname; ?> </span>
                    </td>
                </tr>
                <tr>
                    <td><span>Password</span></td>
                    <td>: <input class="ph" type="password" placeholder="Password" value="<?php echo $pass; ?>" name="pass"><span style="color: red;"><?php echo $err_pass; ?> </span>
                    </td>
                </tr>
                <tr>
                    <td><span>Confirm Password</span></td>
                    <td>: <input class="ph" type="password" placeholder="Confirm Password" value="<?php echo $cpass; ?>" name="cpass"><span style="color: red;"><?php echo $err_cpass; ?> </span>
                    </td>
                </tr>
                <tr>
                    <td><span>Email</span></td>
                    <td>: <input class="ph" type="email" placeholder="Email" value="<?php echo $email; ?>" name="email"><span style="color: red;"><?php echo $err_email; ?> </span>
                    </td>
                </tr>
                <tr>
                    <td><span>Phone Number</span></td>
                    <td>: <input class="ph" type="number" placeholder="Phone Number" value="<?php echo $phonenumber; ?>" name="phonenumber"><span style="color: red;"><?php echo $err_phonenumber; ?></span>
                    </td>
                </tr>
                <tr>
                    <td>Date Of Birth</td>
                    <td>:
                        <input input class="ph" type="date" name="dob"><span style="color: red;"><?php echo $err_dob; ?></span>
                    </td>
                </tr>
                <tr>
                    <td><span>Gender</span></td>
                    <td>:<input type="radio" value="Male" name="gender">Male<input type="radio" value="Female" name="gender">Female
                    <span style="color: red;"><?php echo $err_gender; ?></span>
                    </td>
                    <!-- <td></td> -->
                </tr>
                <tr>
                    <td>Blood Group</td>
                    <td>:
                        <select name="blood" value="">
                            <option disabled selected>Choose</option>
                            <option value="A+">A+</option>
                            <option value="A-">A-</option>
                            <option value="B+">B+</option>
                            <option value="B-">B-</option>
                            <option value="O+">O+</option>
                            <option value="O-">O-</option>
                            <option value="AB+">AB+</option>
                            <option value="AB-">AB-</option>
                        </select><span style="color: red;"><?php echo $err_blood; ?></span>
                    </td>
                </tr>
                <tr>
                    <td rowspan="4"><span>Address</span></td>
                    <td>: <input class="ph" type="text" placeholder="Street Address" value="<?php echo $street; ?>" name="street"><span style="color: red;"><?php echo $err_street; ?></span>
                    </td>
                </tr>
                <tr>
                    <td>: <input  class="ph" type="text" placeholder="City" value="<?php echo $city; ?>" name="city"><span style="color: red;"><?php echo $err_city; ?></span>
                    </td>
                </tr>
                <tr>
                    <td>: <input class="ph" type="text" placeholder="State" value="<?php echo $state; ?>" name="state"><span style="color: red;"><?php echo $err_state; ?></span>
                    </td>
                </tr>
                <tr>
                    <td>: <input class="ph" type="number" placeholder="Postal/zip code" value="<?php echo $zip; ?>" name="zip"><span style="color: red;"><?php echo $err_zip; ?></span>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" align="center"><input style="width:100%; background-color:darkblue; color:white; border: 3px solid darkblue" type="submit" value="Registration"></td>
                </tr>
                <tr>
                    <td align="center">
                        <label style="color:darkblue">Already have an account?</label><a style="color:green" href="login.php"> Login</a>
                    </td>
                </tr>
            </table>
        </form>
    </div>
</body>

</html>