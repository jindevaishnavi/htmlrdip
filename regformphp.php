
<html>
<body>

Welcome 
<?php
	 echo $_GET["name"]; 
?>
<br>
Your phone number is: <?php echo $_GET["phoneno"] ; ?><br>
Your Choice of Course is: <?php echo $_GET["course"]; ?><br>
Your Description is: <?php echo $_GET["description"]; ?><br>
Your Interests are:
<?php 
 if(isset($_GET["datascience"]))
echo $_GET["datacsience"];
 ?>
<br>
<?php 
if(isset($_GET["quantumcomputing"]))
echo $_GET["quantumcomputing"];
?>
<br>
<?php 
if(isset($_GET["machinelearning"]))
echo $_GET["machinelearning"];
?>
<br>
<?php 
if(isset($_GET["anthropology"]))
echo $_GET["anthropology"];
?>
<br>

</body>
</html>