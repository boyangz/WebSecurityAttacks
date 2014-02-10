<!DOCTYPE html>
<html>
<head>
    <title>WebHax</title>
</head>
<body>
<a href="php/login.php">Login/Register</a>

<h1>MyMaliciousSpace</h1>
<!--
<h1>Malicious Code in Websites: Fun with SQL Injection, Cross-Site Scripting (XSS), and Cross-Site Request Forgery (CSRF)</h1>
<h4>Boyang Zhu and Teja Ravipati</h4>
<h4>Current Version: February 5th, 2014</h4>

<form name="reset_db_form" action="server/reset_db.php" method="post">
    Reset Database <input type="submit"> <br>
</form>
<br>
-->


<form action="php/profile.php" method="get">
    Search Username: <input type="text" name="username"><br>
    <input type="submit">
</form>

<div>
    <h2>Static XSS Injection</h2>
    <xmp><img src="http://static.fjcdn.com/gifs/Very+doge.+amaze_744518_4869842.gif"></img></xmp>
</div>

</body>
</html>