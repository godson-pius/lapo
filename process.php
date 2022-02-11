<?php

require("inc/config.php");
extract($_POST);
$sql = "INSERT INTO loan_requests(fullname,phone_number,location,garantor1,garantor2,amount,loan_type) values('$fname','$phone','$location','$nin1','$nin2','$amount','$ltype')";
		if(mysqli_query($link,$sql)){
			echo "success";
		}

?>