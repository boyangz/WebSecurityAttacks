<!DOCTYPE html>
<html>
<head>
    <title>WebHax</title>
</head>
<body>
<?php
session_start();
if (isset($_SESSION['username'])) {
    echo $_SESSION['username'];
    echo " <a href=\"php/profile.php?username=";
    echo $_SESSION['username'];
    echo "\">Profile</a>";
    echo " <a href=\"php/edit.php\">Edit</a>";
    echo " <a href=\"server/logout.php\">Logout</a> <br>";
}
else {
    echo "<a href=\"php/login.php\">Login/Register</a> <br>";
}
?>

<h1>MyMaliciousSpace</h1>

<form action="php/profile.php" method="get">
    Search Username: <input type="text" name="username"><br>
    <input type="submit">
</form>
<br>

<table>
    <tr>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Username</th>
    </tr>

    <?php
    include "server/db.php";

    $sql = "SELECT * FROM users";
    $result = mysqli_query($link, $sql);

    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr> <td>";
        echo $row['fname'];
        echo "</td> <td>";
        echo $row['lname'];
        echo "</td> <td>";
        echo $row['username'];
        echo "</td> </tr>";
    }
    ?>
</table>

</body>
</html>