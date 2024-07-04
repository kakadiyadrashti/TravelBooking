<?php
$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'root';
$DATABASE_PASS = '';
$DATABASE_NAME = 'form';

$conn = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);

if (mysqli_connect_error()) {
   exit('error connecting to the database' . mysqli_connect_error());
}


//$conn = mysqli_connect('localhost', 'root', '', 'test1') or die("connection failed:" . mysqli_connect_error());
//if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['phone']) && isset($_POST  ['bgroup'])) {
    $name = $_POST['username'];
    $email = $_POST['email'];
    $phone = $_POST['password'];
  
    $sql= "INSERT INTO users (username,email,password) VALUES ('$name','$email','$phone')";

    $query = mysqli_query($conn , $sql);
     if ($query) {
        echo 'Entry Successfull';
     } 
     else {
        echo 'Error Occurred';
     }
 //}



if (!isset($_POST['username'], $_POST['password'], $_POST['email'])) {
    //exit('Empty field(s)');
}

if (empty($_POST['username'] || empty($_POST['password']) || empty($_POST['email']))){
    //exit('Values Empty');
}

/*if ($stmt = $conn->prepare('SELECT id, password FROM users WHERE username = ?')) {
    $stmt->bind_param('s', $_POST['username']);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        echo 'username already exits. try again';
    }
     else {
        if ($stmt = $conn->prepare('INSERT INTO user (username, password ,email) VALUES(?,?,?')) {
            $password = password_hash($_post['password'], PASSWORD_DEFAULT);
            $stmt->bind_param('sss', $_POST['username'], $password, $_POST['email']);
            $stmt->execute();
            echo 'Succesfully Registerd';
        } else {
            echo 'Error occurred';
        }
    }
   
} 
else {
    echo 'Error occured';
}
*/

?>