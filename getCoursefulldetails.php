<?php
include 'connection.php';
  $enquiry_no =$_GET["q1"];
//echo $enquiry_no
$sql="select * from enquiry where Enquiry_no='$enquiry_no' || Mobile_No='$enquiry_no' || Civil_Id='$enquiry_no'";
$result=mysqli_query($connect,$sql);
while($rows=mysqli_fetch_array($result)){
	$RequiredCourse=$rows["RequiredCourse"];
	//echo $RequiredCourse;
	$RequiredCourse1 = explode(',', $RequiredCourse);
}
foreach($RequiredCourse1 as $reqcourse)
	{
		//echo $reqcourse . ',';
		$sqlCoursedetails = "SELECT * FROM course WHERE Course_name IN ('$reqcourse')";
	//echo"SELECT Course_no FROM course WHERE Course_name IN ('$reqcourse')";
	$resultCoursedetails=mysqli_query($connect,$sqlCoursedetails);
	$rowsCoursedetails=mysqli_fetch_array($resultCoursedetails);
	
do{ ?>
<tr>
<td><?php echo $rowsCoursedetails["Course_no"];?></td>
<td><?php echo $reqcourse;?></td>
<td><?php echo $rowsCoursedetails["Duration"];?></td>
<td><?php echo $rowsCoursedetails["Cost"];?></td>
<td><?php echo $rowsCoursedetails["No_of_students"];?></td>
<td><?php echo $rowsCoursedetails["Course_start_date"];?></td>
<td><?php echo $rowsCoursedetails["Course_end_date"];?></td>
</tr>




	<?php  } while($rowsCoursedetails=mysqli_fetch_array($resultCoursedetails));
	}
	?>
	