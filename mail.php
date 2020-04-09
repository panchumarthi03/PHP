<?php
 
if(isset($_POST['submit'])){
	$name=$_POST['name'];
	$emailFrom=$_POST['email'];
	$message=$_POST['message'];
	
	
    $emailTo="panchumarthilavanya94@gmail.com";
	$headers="From:" .$emailFrom;
	$txt="You have received a message from".$name.".\n\n".$message;

	mail($emailTo, $txt, $headers);
	header("Location:index.html");
	
}
?>
