</head>
<body>

<h4>Login</h4>
<form method="post">
    Username: <input type="text" name="login_username"><br>
    Password: <input type="text" name="login_password"><br>
    <input type="submit">
</form>

<?php
if (isset($_POST["login_username"]) && isset($_POST["login_password"])) {
    $username=$_POST['login_username'];
    $password=$_POST['login_password'];

    require_once('db.php');
    $sql="SELECT * FROM users WHERE username='$username' and password='$password'";
    $result=mysql_query($sql);

    $count=mysql_num_rows($result);
    if($count==1){
        session_start();
        $_SESSION['username'] = $username;
        header("location:profile.php?username=$username");
    } else {
        echo "The username or password you entered is incorrect.";
    }
}
?>
<br>

<h4>Register</h4>
<form method="post">
    First Name: <input type="text" name="fname"><br>
    Last Name: <input type="text" name="lname"><br>
    Email: <input type="text" name="email"><br>
    Username: <input type="text" name="register_username"><br>
    Password: <input type="text" name="register_password"><br>
    <input type="submit">
</form>

<?php
if (isset($_POST["register_username"]) && isset($_POST["register_password"])) {
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $email=$_POST['email'];
    $username=$_POST['register_username'];
    $password=$_POST['register_password'];

    $mysql_hostname = "localhost";
    $mysql_user = "root";
    $mysql_password = "password";
    $mysql_database = "WebSecurityAttacks";
    $prefix = "";
    $bd = mysqli_connect($mysql_hostname, $mysql_user, $mysql_password, $mysql_database) or die("Could not connect database");

    $insert_query = "INSERT INTO users (fname, lname, email, username, password) VALUES ('$fname', '$lname', '$email', '$username', '$password')";
    mysqli_multi_query($bd, $insert_query);

    session_start();
    $_SESSION['username'] = $username;
    header("location:profile.php?username=$username");
}
?>

</body>
</html>