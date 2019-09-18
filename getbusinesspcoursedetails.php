<?php
include 'connection.php';
   $Proposal_no= $_GET["q"];
$sql=mysqli_query($connect,"select * from business_proposal where Proposal_no='$Proposal_no'");
//echo"select * from business_proposal where Proposal_no='$Proposal_no'";
while($rows=mysqli_fetch_array($sql)){
	$proposal_type=$rows["proposal_type"];
	//echo $proposal_type;
	$Enquiry_no=$rows["Enquiry_no"];
	//echo $Enquiry_no;
	if($proposal_type=="enquiry"){
		$sqlenquirycourse=mysqli_query($connect,"select RequiredCourse from enquiry where Enquiry_no='$Enquiry_no'");
		//echo "select RequiredCourse from enquiry where Enquiry_no='$Enquiry_no'";
		while($rowsenquirycourse=mysqli_fetch_array($sqlenquirycourse)){
		 $RequiredCourse=$rowsenquirycourse["RequiredCourse"];
		$Required_Course=explode(',',$RequiredCourse);
		foreach($Required_Course as $requiredcourse){
			//echo $requiredcourse;
			$sqlgetCoursedetails=mysqli_query($connect,"select * from course where Course_name IN ('$requiredcourse')");
			//echo "select * from course where Course_nameIN ('$requiredcourse')";
			
	$rowsgetCoursedetails=mysqli_fetch_array($sqlgetCoursedetails);
	do{  

 
?>

<tr>
<td><?php echo $rowsgetCoursedetails["Course_no"];?></td>
<td><?php echo $requiredcourse;?></td>
<td><?php echo $rowsgetCoursedetails["Duration"];?></td>
<td><?php echo $rowsgetCoursedetails["Cost"];?></td>
<td><?php echo $rowsgetCoursedetails["No_of_students"];?></td>
<td><?php echo $rowsgetCoursedetails["Course_start_date"];?></td>
<td><?php echo $rowsgetCoursedetails["Course_end_date"];?></td>
<td><?php echo $totalcourse=$rowsgetCoursedetails["Cost"] * $rowsgetCoursedetails["No_of_students"] ;?></td>
<td><?php echo $othercost=0;?></td>
<td><?php echo $totalamount=$totalcourse+$othercost;?></td>



</tr>




	<?php  } while($rowsgetCoursedetails=mysqli_fetch_array($sqlgetCoursedetails));
	}
	
		}
		}
			
	else{
	
		$Course_no=$rows["Course_no"];
		$Course_No=explode(',',$Course_no);

foreach($Course_No as $courseno){
	
	$sqlgetCoursedetails=mysqli_query($connect,"select * from course where Course_no IN ('$courseno')");
	//echo"select * from course where Course_no IN ('$courseno')";
	$rowsgetCoursedetails=mysqli_fetch_array($sqlgetCoursedetails);
	do{  

 
?>

<tr>
<td><?php echo $courseno;?></td>
<td><?php echo $rowsgetCoursedetails["Course_name"];?></td>
<td><?php echo $rowsgetCoursedetails["Duration"];?></td>
<td><?php echo $rowsgetCoursedetails["Cost"];?></td>
<td><?php echo $rowsgetCoursedetails["No_of_students"];?></td>
<td><?php echo $rowsgetCoursedetails["Course_start_date"];?></td>
<td><?php echo $rowsgetCoursedetails["Course_end_date"];?></td>
<td><?php echo $totalcourse=$rowsgetCoursedetails["Cost"] * $rowsgetCoursedetails["No_of_students"] ;?></td>
<td><?php echo $othercost=0;?></td>
<td><?php echo $totalamount=$totalcourse+$othercost;?></td>



</tr>




	<?php  } while($rowsgetCoursedetails=mysqli_fetch_array($sqlgetCoursedetails));
	}
	}
	
	


	
}

?>
