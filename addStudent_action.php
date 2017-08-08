<?php
//1. Collect all Data from Form
	$name = $_POST["name"];
	$account_no = $_POST["acc_no"];
	$department = $_POST["dept"];
	$reg_no = $_POST["reg"];
	$faculty = $_POST["faculty"];
	
	
	
	//2.Business Login Implementation & Data Login Implementation
	if($reg_no!=""){
			require("Include/database.php");
			$sql = "INSERT INTO add_students(name, account_no, department, reg_no, faculty) "
						." VALUES('$name','$account_no','$department','$reg_no','$faculty')";
        if(mysqli_query($con, $sql)){
				echo "<h1> Successfull!</h1>";
			}else {
				echo "Error : " . mysqli_error($con);
			}
        }else{
            echo "please enter the registration number";
        }
	
?>

