<!DOCTYPE html>
<html>
<body>

<!--
<table>
    <tr>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Username</th>
        <th>Password</th>
    </tr>

    <?php /*
    include "../server/db.php";

    $sql = "SELECT * FROM users";
    $result = mysqli_query($link, $sql);

    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr> <td>";
        echo $row['fname'];
        echo "</td> <td>";
        echo $row['lname'];
        echo "</td> <td>";
        echo $row['username'];
        echo "</td> <td>";
        echo $row['password'];
        echo "</td> </tr>";
    } */
    ?>
</table>
<br>
-->

<h4>Login</h4>
<form method="post">
    Username: <input type="text" name="login_username"><br>
    Password: <input type="text" name="login_password"><br>
    <input type="submit">
</form>

<?php
if (isset($_POST['login_username']) && isset($_POST['login_password'])) {
    $username=$_POST['login_username'];
    $password=$_POST['login_password'];

    $sql="SELECT * FROM users WHERE username='$username' and password='$password'";
    mysqli_multi_query($link, $sql);
    $result=mysqli_store_result($link);

    $count=mysqli_num_rows($result);
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
if (isset($_POST['register_username']) && isset($_POST['register_password'])) {
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $email=$_POST['email'];
    $username=$_POST['register_username'];
    $password=$_POST['register_password'];

    $insert_query = "INSERT INTO users (fname, lname, email, username, password) VALUES ('$fname', '$lname', '$email', '$username', '$password')";
    mysqli_multi_query($link, $insert_query);

    session_start();
    $_SESSION['username'] = $username;
    header("location:profile.php?username=$username");
}
?>

</body>
</html>