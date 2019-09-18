<?php
include 'connection.php';
$course_name=$_POST["course_name"];
$status = isset($_POST['status']) ? 1 : 0;
//$status=$_POST["status"];
//echo $status;
$sqlcourse_exist="Select Course_name from course";
$resultcourse_exist=mysqli_query($connect,$sqlcourse_exist);
while($rows=mysqli_fetch_array($resultcourse_exist))
{
	$coursename=$rows["Course_name"];
	//echo $coursename;
}
if($coursename==$course_name){


header("Location:listofcourse.php");
}
else{
	
	
	$sql="INSERT INTO `course`(`Course_no`, `Course_name`, `Duration`, `Cost`, `No_of_students`, `Course_start_date`, `Course_end_date`, `status`) VALUES ('".$_POST["course_id"]."','".$_POST["course_name"]."','".$_POST["duration"]."','".$_POST["course_cost"]."','".$_POST["max_student"]."','".$_POST["course_sdate"]."','".$_POST["course_edate"]."','$status')";
echo"INSERT INTO `course`(`Course_no`, `Course_name`, `Duration`, `Cost`, `No_of_students`, `Course_start_date`, `Course_end_date`, `status`) VALUES ('".$_POST["course_id"]."','".$_POST["course_name"]."','".$_POST["duration"]."','".$_POST["course_cost"]."','".$_POST["max_student"]."','".$_POST["course_sdate"]."','".$_POST["course_edate"]."','$status')";
$result=mysqli_query($connect,$sql);
//header("Location:listofcourse.php");
}



?>