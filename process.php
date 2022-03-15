<?php

require("admin/inc/config.php");
$userid = $_SESSION['users'];
extract($_POST);
$sql = "INSERT INTO loan_requests(user_id,fullname,phone_number,location,garantor1,garantor2,amount,loan_type) values('$userid','$fname','$phone','$location','$nin1','$nin2','$amount','$ltype')";
		if(mysqli_query($link,$sql)){
			echo "success";
		}

?>