<?php
if (isset($_GET["username"])) {
    $username=$_GET['username'];

    require_once('db.php');
    $sql="SELECT * FROM users WHERE username='$username'";
    $result=mysql_query($sql);

    $count=mysql_num_rows($result);
    if($count==1){
        $row = mysql_fetch_assoc($result);
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