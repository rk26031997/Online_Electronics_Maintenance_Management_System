<!-- Code for Admin delete Support record connection -->
<?php require_once "admin-newcontrollerUserData.php"; ?>	<!-- It is used for unique session for particular admin in all web pages-->
<?php


include("admin-newconnection.php");			//Including connection file

$message = "Record has been deleted sucessfully";
$delete_id=$_GET['del'];
$delete_query="delete from support WHERE support_id ='$delete_id'";
$run=mysqli_query($con,$delete_query);

//Alert popup
if($run)
{

	echo "<script type='text/javascript'>alert('$message');</script>";
    echo "<script>window.open('admin-newdeletesupport.php?deleted=Record has been deleted Sucessfully','_self')</script>";
}

?>
