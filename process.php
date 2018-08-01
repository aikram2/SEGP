<?php

include "DBconnect.php";



$mName = $_POST["moduleName"];
$mCode = $_POST["moduleCode"];
$mLeader = $_POST["moduleLeader"];
$type = $_POST["assessmentType"];
$number = $_POST["assessmentNumber"];

$sql = "INSERT INTO ModuleInfo (moduleName, moduleCode, moduleLeader, assessmentType, assessmentNumber ) 
	VALUES ('$mName', '$mCode', '$mLeader', '$type', '$number' )";
			if($conn->query($sql) === TRUE) {
				echo "<h3>You have succesfully recorded this module.</h3>";

			}
			else{
				echo "Error: " . $sql . "<br>" . $conn->error;
			}

			$conn->close();


?>