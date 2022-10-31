<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>



<?php 

session_start();

$con = mysqli_connect('sql303.epizy.com','epiz_28396763','x5N5ldvRxWvo');

mysqli_select_db($con,'epiz_28396763_WanglePC');

$name = $_POST['name'];
$username = $_POST['username'];
$email = $_POST['email'];
$pass = $_POST['password'];


$s = " select * from User_Details where username = '$username' && password = '$pass'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1)
{
	$_SESSION['username'] = $username;
	header('location:home.php');
}else
{
	$message = "Please Register Yourself First";
    echo "<script>
    alert('$message');
    window.location.href='index.html';
    </script>";
}

?>

</body>
</html>