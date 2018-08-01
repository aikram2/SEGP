
<!DOCTYPE HTML>

<html>
<head>
<title>LSDDA</title>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<link rel="stylesheet" href="assets/css/main.css" />
</head>
<body>
 
<!--------------------------------student Search------------------------------------->
<div class="container banner-content">  
<div id="pleasant" class="tabcontent"><br><br><br>   

<table border=1>
<tr>
<td><b> Module Code <b></td>
<td><b> Name of student <b></td>
<td><b> ---<b></td> 
</tr>
<?php
include "dbConnect.php";
echo "<button onclick='goBack()'>Go Back</button>";
echo "<br><br>";

$cursor = "SELECT moduleCode, studentID, firstName, lastName, OverallMark FROM student WHERE"

foreach($cursor as $result)
{
?>
<tr>

<td> <?php echo $result ['moduleCode'] ?>
<td> <?php echo $result ['studentID'] ?>
<td> <?php echo $result ['firstName'] ?>
<td> <?php echo $result ['lastName'] ?>
<td> <?php echo $result ['overallMark'] ?>
<?php
}
?>
</table>
</div>
</div>


<!-- Scripts -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/jquery.scrollex.min.js"></script>
<script src="assets/js/skel.min.js"></script>
<script src="assets/js/util.js"></script>
<script src="assets/js/main.js"></script>
<script>
function goBack() {
window.history.back()
}
</script>

</body>
</html>
