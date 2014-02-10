<?php
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

if (isset($_GET["username"])) {
    $username=$_GET['username'];

    include "../server/db.php";
    $sql="SELECT * FROM users WHERE username='$username'";
    mysqli_multi_query($link, $sql);
    $result=mysqli_store_result($link);

    $count=mysqli_num_rows($result);
    if($count==1){
        $row = mysqli_fetch_assoc($result);
        echo "<h2>";
        echo $row['fname'];
        echo " ";
        echo $row['lname'];
        echo "</h2>";
        echo "<h4>";
        echo $row['email'];
        echo "</h4>";
    } else {
        echo "$username not found";
    }
}
?>