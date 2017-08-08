<?php
	require("Include/database.php");
	//1. Collect all Data from Form
	$name = $_POST["name"];
	$account_no = $_POST["acc_no"];
	$department = $_POST["dept"];
	$reg_no = $_POST["reg"];
	$email = $_POST["email"];
	$pw = $_POST["pw"];
        $confirm = $_POST["con_pw"];
	$photo = $_POST["photo"];
	
	
	//2.Business Login Implementation & Data Login Implementation
        
        $folder = "uploads/";
    $file = $folder . basename( $_FILES["photo"]["name"]);
    $sourceFile = $_FILES["photo"]["tmp_name"];

    if (file_exists($file)) {
    	$file = $folder. date("Ydmhis") . basename( $_FILES["photo"]["name"]);
	}
   
   if (move_uploaded_file($sourceFile, $file)) {
	 echo "File has been uploaded.";
   } else {
	 echo "Error Uploading...";
	 $file  =  "images/default.jpg";
   }
        
        
	if($pw == $confirm){
		
		if(filter_var($email, FILTER_VALIDATE_EMAIL)){
                    
                    $query = "SELECT * FROM add_students WHERE reg_no = '$_POST[reg]'";
                    $result = mysqli_query($con, $query);
                    $row = mysqli_fetch_array($result);
                    if($row){
                        
			$sql = "INSERT INTO student(name, account_no, department, reg_no, email, password, photo,join_date,role) "
						." VALUES('$name','$account_no','$department','$reg_no','$email',md5('$pw'),'$photo',now(),'m')";
			if(mysqli_query($con, $sql)){
                            echo "<img src='".$file."' />";
				echo "<h1> Successfull!</h1>";
			}else {
				echo "Error : " . mysqli_error($con);
			}


                    }else{
                        echo "<h1>Sorry!...<br/>You are not selected</h1>";
                    }
			
		}else{
			echo "<h1>Invalid Email</h1>";
		}
		
	}else{
		echo "<h1>Password and Confirm Mismatch</h1>";
	}
	
	
	
?>