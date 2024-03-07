<?php
$FirstName = filter_input(INPUT_POST, 'FirstName');
$Surname = filter_input(INPUT_POST, 'Surname');
$Email = filter_input(INPUT_POST, 'Email');
$Password = filter_input(INPUT_POST, 'Password');
$ConfirmPassword = filter_input(INPUT_POST, 'ConfirmPassword');

if(!empty($FirstName)){
if(!empty($Surname)){
if(!empty($Email)){
if(!empty($Password)){
if(!empty($ConfirmPassword)){
$host ="localhost";
$dbusername ="root";
$dbpassword ="";
$dbname ="btmm";

//connection
$conn = new mysql ($host,$dbusername,$dbpassword,$dbname);
if(msqli_connect_error()){
	die('Connect Error('.mysqli_connect_errno().')'
		.mysqli_connect_errno());
}
esle{
	$sql = "INSERT INTO clients(FirstName,Surname,Email,Password,ConfirmPassword)
	values ('$FirstName','$Surname','$Email','$Password','$ConfirmPassword')";

	if($conn->query($sql)){
		echo "New record is inserted sucessfully";
	}

	esle{
		echo "Error: ". $sql ."<br". $conn->error;
	}
	$conn->close();
}

}
esle{
	echo "Confirm Password should not be empty";
	die();
}
}
esle{
	echo "Password should not be empty";
	die();
}
}
esle{
	echo "Email should not be empty";
	die();
}

}
esle{
	echo "Surname should not be empty";
	die();
}
}
esle{
	echo "FirstName should not be empty";
	die();
}
?>