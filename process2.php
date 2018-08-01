<?php

include "DBconnect.php";



$mCode = $_POST["moduleCode"];
$sID = $_POST["studentID"];
$fName = $_POST["firstName"];
$lName = $_POST["lastName"];
$oMark = $_POST["overallMark"];

$sql = "INSERT INTO studentInformation (moduleCode, studentID, firstName, lastName, overallMark ) 
	VALUES ('$mCode', '$sID', '$fName', '$lName', '$oMark' )";
			if($conn->query($sql) === TRUE) {
				echo "<h3>You have succesfully recorded this student.</h3>";

			}
			else{
				echo "Error: " . $sql . "<br>" . $conn->error;
			}

			$conn->close();


?>