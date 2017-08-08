<?php
	
	//1. Collect all Data from Form
	$reg_no = $_POST["reg"];
	$password = $_POST["pw"];
	
	//2.Business Login Implementation & Data Login Implementation
	
	
			
		require("include/database.php");
		$sql = "SELECT * FROM student WHERE reg_no='$reg_no' AND password=md5('$password')";
		$result = mysqli_query($con, $sql);
                $row = mysqli_fetch_array($result);
		if($row){
			if(!isset($_SESSION)){
				session_start();
			}
		
			$_SESSION["NAME"] = $row["name"];
			$_SESSION["ROLE"] = $row["role"];
			$_SESSION["UID"] = $row["id"];
                        $_SESSION["PHOTO"] = $row["photo"];
			/*echo "ID=".$row["Id"];
			echo "UID=".$_SESSION["UID"];*/
			
                        if($row["role"]=="m"){
                        header("Location: View.php");
                        
                        }elseif($row["role"]=="a"){
                           header("Location: iindex.php"); 
                        }
			
		}else {
			echo "<h1> Invalid Login. </h1> ";
                       
		}

			

?>
	
	
	
	
	