<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
    $conn = mysqli_connect('localhost', 'root', '', 'connect') or die("connection failed:" . mysqli_connect_error());
       if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['places']) && isset($_POST  ['date'] )&& isset($_POST  ['phone']) && isset($_POST  ['age']) &&isset($_POST  ['bgroup']) ){
           $name = $_POST['name'];
           $email = $_POST['email'];
           $phone = $_POST['phone'];
           $age =$_POST['age'];
           $places = $_POST['places'];
           $date = $_POST['date'];
           $bgroup = $_POST['bgroup'];
       
           $sql= "INSERT INTO users (name,email,places,date,phone,age,bgroup) VALUES ('$name','$email','$places','$date','$phone','$age','$bgroup')";

           $query = mysqli_query($conn , $sql);
            if ($query) {
               echo 'Entry Successfull';
            } 
            else {
               echo 'Error Occurred';
            }
        }
    }
   
?>