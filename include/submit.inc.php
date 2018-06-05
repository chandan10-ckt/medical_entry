<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);
//isset($_POST['submit'])
if(isset($_POST['submit'])){

	include ("con.inc.php");
	error_reporting(E_ALL);
	ini_set('display_errors', 1);

	$Name = mysqli_real_escape_string($conn, $_POST['Name']);
	$Rollno = mysqli_real_escape_string($conn, $_POST['Rollno']);
	$Sex = mysqli_real_escape_string($conn, $_POST['Sex']);
	$dob = mysqli_real_escape_string($conn, $_POST['dob']);
	$bloodgroup = mysqli_real_escape_string($conn, $_POST['bloodgroup']);
	$height = mysqli_real_escape_string($conn, $_POST['height']);
	$weight = mysqli_real_escape_string($conn, $_POST['weight']);
	$idmark = mysqli_real_escape_string($conn, $_POST['idmark']);
	$hostel = mysqli_real_escape_string($conn, $_POST['hostel']);
	$room = mysqli_real_escape_string($conn, $_POST['room']);
	$sem = mysqli_real_escape_string($conn, $_POST['sem']);
	$dept = mysqli_real_escape_string($conn, $_POST['dept']);
	$contact = mysqli_real_escape_string($conn, $_POST['contact']);
	$email = mysqli_real_escape_string($conn, $_POST['email']);

	$vaccine = '';
	foreach($_POST["vaccine"] as $row){
		$vaccine .= $row . ',';
	}

	$vaccine = substr($vaccine, 0,-1);
	

	$disability = '';
	foreach($_POST["disability"] as $row2){
		$disability .= $row2 . ',';
	}

	$disability = substr($disability, 0,-1);

	//Error handelers
	//Check for empty fields

	if(empty($Name) || empty($Rollno) || empty($Sex) || empty($dob) ||  empty($bloodgroup) || empty($height) || empty($weight) || empty($hostel)  || empty($room)  || empty($sem) || empty($dept) || empty($contact) || empty($email)){
		header("Location: ../index.php?submit=empty");
		exit();
	}else{
		//check if input characters are valid
		if(!preg_match("/[a-zA-Z]/", $Name) || !preg_match("/[a-zA-Z0-9]/", $room)){
			header("Location: ../index.php?submit=invalid");
			exit();
		}else {
			//check if email is valid
			if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
				header("Location: ../index.php?submit=invalid_email");
				exit();
			}else{
				//check if roll no is already present in database
				$sql = "SELECT * FROM Medical_Entry WHERE Roll_Number='$Rollno'";
				$result = mysqli_query($conn, $sql);
				$resultCheck = mysqli_num_rows($result);

				if($resultCheck > 0){
					header("Location: ../index.php?submit=usertaken");
					exit();
				}else{
					//Injecting data into database
					$sql = "INSERT INTO Medical_Entry (Name, Roll_Number, Sex, Date_of_Birth, Blood_Group, Height, Weight, Identification_Mark, Vaccination_Record, Disability, Hostel, Room_Number, Semester, Department, Contact_Number, Email_Id) VALUES ('$Name', '$Rollno', '$Sex', '$dob', '$bloodgroup', '$height', '$weight', '$idmark', '$vaccine', '$disability' ,'$hostel', '$room', '$sem', '$dept', '$contact', '$email')";
					mysqli_query($conn , $sql);
					header("Location: ../index.php?submit=sucess");
				}
			}
		}

	}
				


}else{
	header("Location: ../index.php");
	exit();
}