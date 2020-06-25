<?php
$conn_string="host=ec2-35-172-73-125.compute-1.amazonaws.com port=5432 dbname=dffhqp84hr3lmq user=mmyfjvjjumyowl password=a33f7bcbae40f10c8f358e616e235b39fb584a3e3e12ef435fef9743ac70fd60";
$dbconn= pg_connect($conn_string);
if (isset($_POST['username'])) {
	# code...
	$username = $_POST['username'];
}

if (isset($_POST['pass'])) {
	# code...
	$pass = $_POST['pass'];
}
$sql = "SELECT * FROM tblAccount WHERE _user='".$username."' AND _pass='".$pass."'";
$result =pg_query($dbconn, $sql);
$row = pg_num_rows($result);
if ($row==1)
{
	header('location: electro/index.html');
}
else
{
	echo "Login failed";
}
?>
