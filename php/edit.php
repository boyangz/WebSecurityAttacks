<!DOCTYPE html>
<html>
<body>

<?php
include "../server/db.php";

session_start();
if (isset($_SESSION['username'])) {
    echo $_SESSION['username'];
    echo " <a href=\"profile.php?username=";
    echo $_SESSION['username'];
    echo "\">Profile</a>";
    echo " <a href=\"edit.php\">Edit</a>";
    echo " <a href=\"../server/logout.php\">Logout</a> <br>";
}
echo " <a href=\"../index.php\">Home</a> <br>";
?>

<h4>Edit</h4>
<form method="post">
    First Name: <input type="text" name="fname"><br>
    <input type="submit">
</form>
<br>
<form method="post">
    Last Name: <input type="text" name="lname"><br>
    <input type="submit">
</form>
<br>
<form method="post">
    Email: <input type="text" name="email"><br>
    <input type="submit">
</form>

<?php
if (isset($_SESSION['username'])) {
    $username=$_SESSION['username'];

    if (isset($_POST['fname'])) {
        $fname=$_POST['fname'];

        $sql="UPDATE users SET fname = '$fname' WHERE username='$username'";
        mysqli_multi_query($link, $sql);
    }
    if (isset($_POST['lname'])) {
        $lname=$_POST['lname'];

        $sql="UPDATE users SET lname = '$lname' WHERE username='$username'";
        mysqli_multi_query($link, $sql);
    }
    if (isset($_POST['email'])) {
        $email=$_POST['email'];

        $sql="UPDATE users SET email = '$email' WHERE username='$username'";
        mysqli_multi_query($link, $sql);
    }
}
?>

</body>
</html>