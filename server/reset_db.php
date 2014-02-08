<?php
include "db.php";

$query = "TRUNCATE TABLE users";
mysqli_multi_query($link, $query);
$insert_query = "INSERT INTO users (fname, lname, email, username, password) VALUES ('Boyang', 'Zhu', 'boyangz@umich.edu', 'boyangz', '123456')";
mysqli_multi_query($link, $insert_query);
$insert_query = "INSERT INTO users (fname, lname, email, username, password) VALUES ('Teja', 'Ravipati', 'ravipati@umich.edu', 'ravipati', 'password')";
mysqli_multi_query($link, $insert_query);
$insert_query = "INSERT INTO users (fname, lname, email, username, password) VALUES ('Lucas', 'Doge', 'doge@suchsecure.com', 'lucasd', 'muchsecret')";
mysqli_multi_query($link, $insert_query);
$insert_query = "INSERT INTO users (fname, lname, email, username, password) VALUES ('Ben', 'Dover', 'bendover@yahoo.com', 'bdubs', 'pass')";
mysqli_multi_query($link, $insert_query);

?>