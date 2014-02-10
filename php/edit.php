<!DOCTYPE html>
<html>
<body>

<h4>Edit</h4>
<form action="edit.php" method="post">
    First Name: <input type="text" name="fname"><br>
    <input type="submit">
</form>
<br>
<form action="edit.php" method="post">
    Last Name: <input type="text" name="lname"><br>
    <input type="submit">
</form>
<br>
<form action="edit.php" method="post">
    Email: <input type="text" name="email"><br>
    <input type="submit">
</form>

<?php
session_start();
if (isset($_SESSION['username'])) {
    $username=$_SESSION['username'];

    if (isset($_POST['fname'])) {
        $fname=$_POST['fname'];

        include "../server/db.php";
        $sql="UPDATE users SET fname = '$fname' WHERE username='$username'";
        mysqli_multi_query($link, $sql);
    }
    if (isset($_POST['lname'])) {
        $lname=$_POST['lname'];

        include "../server/db.php";
        $sql="UPDATE users SET lname = '$lname' WHERE username='$username'";
        mysqli_multi_query($link, $sql);
    }
    if (isset($_POST['email'])) {
        $email=$_POST['email'];

        include "../server/db.php";
        $sql="UPDATE users SET email = '$email' WHERE username='$username'";
        mysqli_multi_query($link, $sql);
    }
}
?>

</body>
</html>