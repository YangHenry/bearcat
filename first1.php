<html>
<body>

<?php
// set access parameters
//$db = "D:\wamp\www\bearcat\users.db";
$db="./users.db";

// open database file
// make sure script has read/write permissions!
$conn = sqlite_open('../users.db') or die ("ERROR: Cannot open database");

// create and execute INSERT query
$sql = "INSERT INTO users (id, username, country) VALUES (5, 'pierre', 'FR')";
$result = sqlite_query($conn, $sql) or die("Error in query execution: " . sqlite_error_string(sqlite_last_error($conn)));

// create and execute SELECT query
$sql = "SELECT username, country FROM users";
$result = sqlite_query($conn, $sql) or die("Error in query execution: " . sqlite_error_string(sqlite_last_error($conn)));


// check for returned rows
 //print if available
if (sqlite_num_rows($result) > 0) {
　　　while($row = sqlite_fetch_array($result)) {
　　　　　　 echo $row[0] . " (" . $row[1] . ") ";
　　　}
}

// close database file
sqlite_close($conn);
?>

</body>
</html>