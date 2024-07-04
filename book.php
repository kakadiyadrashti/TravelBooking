<!DOCTYPE html>
<?php
 if(isset($_POST['login'])){
    $username = "kakadiyadrashti58@gmail.com";
    $hash ="";

    $test ="0";
    $name = $_POST['name'];
    $sender = "API Test";
    $number= $_POST['num'];
    $otp = mt_rand(10000,999999);
      setcookie("otp",$otp);
    $message ="hey ".$name. "your OTP IS ".$otp;

    $message = urlencode($message);
    $data ="username=".$username. "&hash=".$hash."$message=".$message."&sender=".$sender."&number=".$numbers."&test=".$test;
    $ch =curl_init('http://api.textlocal.com/send/?');
    curl_setpost($ch, CURLOPT_POST,true);
    curl_setpost($ch, CURLOPT_POSTFIELDS,$data);
    curl_setpost($ch, CURLOPT_RETURNTRANSFER,true);
    $result = curl_exex($ch);
     echo("OPT SEND SUCCESSFULLY");
     curl_close($ch);

 }
 if(isset($_POST['ver'])){
    $verotp=$_POST['otp'];
    if($verotp==$_COOKIE['otp']){
        echo("SignIn SUCCESSFULLY");
    }else{
        echo("OTP Worng");
    }
 }
 ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DK Book</title>
</head>
<body>
    <form action="book.php" method="post">
        <table align="center">
            <tr>
                <td>Name</td>
                <td><input type="text" name="name" placeholder="Enter Your Name"></td>
            </tr>
            <tr>
<td>Phone Number</td>
<td><input type="text" name="num" placeholder="Valid! With Counrty Code"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="login" value="sign" style="background:#433396
                ; color:white; border:0px; font-size:15px;">
                </td>
            </tr>
            <tr>
                <td>Verify OTP:</td>
                <td><input type="text" name="otp" placeholder="Enter Received OTP"></td>
            </tr>
            <tr>
                <td>

                </td>
                <td><input type="submit" name="ver" value="verify OTP" style="background:#433396
                ; color:white; border:0px; font-size:15px;"></td>
            </tr>
        </table>
    </form>
   
</body>
</html>