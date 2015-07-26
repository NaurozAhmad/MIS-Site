<?php
require_once('connection.php'); 
if(isset($_POST['hidden']) && $_POST['hidden']=="employee")
{
	$name = $_POST['employee_name'];
	$fhname = $_POST['employee_fhname'];
	$designation = $_POST['employee_designation'];
	$status = $_POST['employee_status'];
	$bs = $_POST['employee_bs'];
	//File Uploads here
	$validated_form=array("jpeg","jpg","JPG","JPEG");
	
		 $pic=$_FILES['file']['name'];
		 if($pic!="")
		 {
		 list($filename,$ext)=explode(".",$pic);}
		 $size=$_FILES['file']['size'];
		 $type=$_FILES['file']['type'];
		 
		 $tmp=$_FILES['file']['tmp_name'];	
		
		if($pic!="")
		{
			if(in_array($ext,$validated_form))
			{
				if(file_exists("uploads/".$pic))
				{
				$pic=$pic."_".time()."_".$pic;
				}
				$dir="uploads/".$pic;
				if(move_uploaded_file($tmp,$dir))
				{
$sql = "INSERT INTO employee (employee_name, employee_fhname, employee_image, employee_designation, employee_status, employee_bs)
VALUES ('$name', '$fhname', '$pic', '$designation','$status','$bs')";

if (mysqli_query($conn, $sql)) {
    
	header("Location: employee.php");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);	
				}
			}
			else
			{
				echo "Only JPEG AND JPG ARE ALLOWED";
			}	
		}
		else{
			echo "please Select a file";
		}
		//File Uploads Here
		}

if(isset($_POST['hidden']) && $_POST['hidden']=="training")
{
	$name = $_POST['employee_name'];
	$fhname = $_POST['employee_fhname'];
	$designation = $_POST['employee_designation'];
	$status = $_POST['employee_status'];
	$bs = $_POST['employee_bs'];
	//File Uploads here
	$validated_form=array("jpeg","jpg","JPG","JPEG");
	
		 $pic=$_FILES['file']['name'];
		 if($pic!="")
		 {
		 list($filename,$ext)=explode(".",$pic);}
		 $size=$_FILES['file']['size'];
		 $type=$_FILES['file']['type'];
		 
		 $tmp=$_FILES['file']['tmp_name'];	
		
		if($pic!="")
		{
			if(in_array($ext,$validated_form))
			{
				if(file_exists("uploads/".$pic))
				{
				$pic=$pic."_".time()."_".$pic;
				}
				$dir="uploads/".$pic;
				if(move_uploaded_file($tmp,$dir))
				{
$sql = "INSERT INTO employee (employee_name, employee_fhname, employee_image, employee_designation, employee_status, employee_bs)
VALUES ('$name', '$fhname', '$pic', '$designation','$status','$bs')";

if (mysqli_query($conn, $sql)) {
    
	header("Location: employee.php");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);	
				}
			}
			else
			{
				echo "Only JPEG AND JPG ARE ALLOWED";
			}	
		}
		else{
			echo "please Select a file";
		}//File Uploads Here
		}
?>