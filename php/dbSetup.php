  
<?php

// ---------------------------------------------------------------------------------
// https://devcenter.heroku.com/articles/cleardb#using-cleardb-with-php
// ---------------------------------------------------------------------------------
$url = parse_url(getenv("CLEARDB_DATABASE_URL"));
$server = $url["host"];
$username = $url["user"];
$password = $url["pass"];
$db = substr($url["path"], 1);
$conn = new mysqli($server, $username, $password, $db);
// ---------------------------------------------------------------------------------

// ---------------------------------------------------------------------------------
// Generate a table (if not already there)
// ---------------------------------------------------------------------------------
$sql = "CREATE TABLE IF NOT EXISTS labels (id int not null auto_increment primary key, label varchar(200))";
$conn->query($sql);
// ---------------------------------------------------------------------------------

?>
