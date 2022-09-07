<?php
//These are the defined authentication environment in the db service

// The MySQL service named in the docker-compose.yml.
$host = 'db';

// Database user name
$user = 'MYSQL_USER';

//database user password
$pass = 'MYSQL_PASSWORD';

$db = 'MYSQL_DATABASE';

// check the MySQL connection status
$mysqli = new mysqli($host, $user, $pass, $db);
if ($mysqli->connect_error) {
    die('Connection failed: ' . $mysqli->connect_error);
}

// select query
$query = 'SELECT * FROM users';

$result = $mysqli->query($query);
if (!$result) {
    die('No results.');
}

/* fetch object array */
while ($obj = $result->fetch_object()) {
    echo $obj->username . ": " .  $obj->password;
    echo '<br>';
    echo '<br>';
}
