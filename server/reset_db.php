<?php
require_once('db.php');

$query = "TRUNCATE TABLE users";
mysql_query($query);
$insert_query = "INSERT INTO users (fname, lname, email, username, password) VALUES ('Boyang', 'Zhu', 'boyangz@umich.edu', 'boyangz', '123456')";
mysql_query($insert_query);
$insert_query = "INSERT INTO users (fname, lname, email, username, password) VALUES ('Teja', 'Ravipati', 'ravipati@umich.edu', 'ravipati', 'password')";
mysql_query($insert_query);
$insert_query = "INSERT INTO users (fname, lname, email, username, password) VALUES ('Lucas', 'Doge', 'doge@suchsecure.com', 'lucasd', 'muchsecret')";
mysql_query($insert_query);
$insert_query = "INSERT INTO users (fname, lname, email, username, password) VALUES ('Ben', 'Dover', 'bendover@yahoo.com', 'bdubs', 'pass')";
mysql_query($insert_query);

?>