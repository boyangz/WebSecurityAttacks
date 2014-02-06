<!DOCTYPE html>
<html>
<head>
    <title>WebHax</title>
</head>
<body>
<?php require_once('server/db.php'); ?>

<a href="server/login.php">Login/Register</a>

<h1>Malicious Code in Websites: Fun with SQL Injection, Cross-Site Scripting (XSS), and Cross-Site Request Forgery (CSRF)</h1>
<h4>Boyang Zhu and Teja Ravipati</h4>
<h4>Current Version: February 5th, 2014</h4>

<form name="reset_db_form" action="server/reset_db.php" method="post">
    Reset Database <input type="submit"> <br>
</form>
<br>

<form action="index.php" method="post">
    <input type="text" name="val"><br>
    <input type="submit">
</form>

<?php if (isset($_POST["val"])) echo ($_POST["val"]) ?>

</body>
</html>