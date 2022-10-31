<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php 

session_start();

function function_alert($message) {
	
	// Display the alert box
	echo "<script>alert('$message');</script>";
}


$con = mysqli_connect('sql303.epizy.com','epiz_28396763','x5N5ldvRxWvo');

mysqli_select_db($con,'epiz_28396763_WanglePC');

$name = $_POST['name'];
$username = $_POST['username'];
$email = $_POST['email'];
$pass = $_POST['password'];


$s = " select * from User_Details where username = '$username'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1)
{
	
	$message = "User Already Registered";
    echo "<script>
    alert('$message');
    window.location.href='index.html';
    </script>";
}else
{
	$reg="insert into User_Details(name , username , email , password) values ('$name','$username','$email','$pass')";
	mysqli_query($con, $reg);
	$message = "Registration Successful";
    echo "<script>
    alert('$message');
    window.location.href='index.html';
    </script>";
}

?>

</body>
</html>
