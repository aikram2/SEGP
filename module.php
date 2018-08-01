
<!DOCTYPE HTML>

<html>
<head>
<title>LSDDA</title>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<link rel="stylesheet" href="assets/css/main.css" />
</head>
<body>
 
<!--------------------------------Module Search------------------------------------->
<div class="container banner-content">  
<div id="pleasant" class="tabcontent"><br><br><br>   

<table border=1>
<tr>
<td><b> Module Code <b></td>
<td><b> Name of Module <b></td>
<td><b> ---<b></td> 
</tr>
<?php
include "dbConnect.php";
echo "<button onclick='goBack()'>Go Back</button>";
echo "<br><br>";

$cursor = "SELECT moduleID, moduleName, moduleLeader FROM module WHERE"

foreach($cursor as $result)
{
?>
<tr>

<td> <?php echo $result ['moduleID'] ?>
<td> <?php echo $result ['moduleName'] ?>
<td> <?php echo $result ['moduleLeader'] ?>
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
