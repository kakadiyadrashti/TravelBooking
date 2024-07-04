<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login Page</title>
    <link href="style.php" rel="stylesheet" type="text/css">
</head>

<body style="    background-color: #435165;
margin: 0;">
    <div class="register" style="    width: 400px;
    background-color: rgb(255, 255, 255);
    box-shadow: 0 0 9px 0 rgb(0 0 0 / 30%);
    margin: 100px auto;">
        <h1 style="    text-align: center;
        color: #5b6574;
        font-size: 24px;
        padding: 20px 0 20px 0;
        border-bottom: 1px solid white;">LogIn</h1>
<form action="login.php" method="post" style="    display: flex;
        flex-wrap: wrap;
        justify-content: center;
        padding-top: 20px;">
            <label for="username"></label>
            <input type="text" name="username" placeholder="username" id="username" style="width: 320px;
            height: 50px;
            border: 1px solid white;
            margin-bottom: 20px;
            padding: 0 15px;
        " required>

            <label for="password"></label>
            <input type="password" name="password" placeholder="password" id="password" style="width: 320px;
            height: 50px;
            border: 1px solid white;
            margin-bottom: 20px;
            padding: 0 15px;
            " required>

            <label for="email"></label>
            <input type="email" name="email" placeholder="email" id="email" style="width: 320px;
            height: 50px;
            border: 1px solid white;
            margin-bottom: 20px;
            padding: 0 15px;
        " required>

            <input type="submit" style="    width: 100%;
            padding: 15px;
            margin-top: 20px;
            background-color: rgb(220, 168, 244);
            border: 0;
            cursor: pointer;
            font-weight: bold;
            color: white;
            transition: background-color 0.2s;" value="Login">
        </form>
    </div>
</body>

</html>