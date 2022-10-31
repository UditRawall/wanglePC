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

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$subject = $_POST['subject'];
$username = $_POST['username'];


$s = " select * from Contact_form where firstname = '$username'";

$result = mysqli_query($con,$s);

$num = mysqli_num_rows($result);

if($num == 1)
{
	$message = "You Response was already submited";
    echo "<script>
    alert('$message');
    window.location.href='home.php';
    </script>";
}else
{
	$reg="insert into Contact_form(firstname , lastname , subject , username) values ('$firstname','$lastname','$subject','$username')";
	mysqli_query($con, $reg);
	$message = "Thanku For Your Response";
    echo "<script>
    alert('$message');
    window.location.href='home.php';
    </script>";
}

?>

</body>
</html>
