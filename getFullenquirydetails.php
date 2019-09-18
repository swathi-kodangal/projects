<?php
include 'connection.php';
  $enquiry_no =$_GET["q"];

$sql="select * from enquiry where Enquiry_no='$enquiry_no' || Mobile_No='$enquiry_no' || Civil_Id='$enquiry_no'";
$result=mysqli_query($connect,$sql);
while($rows=mysqli_fetch_array($result)){
	$RequiredCourse=$rows["RequiredCourse"];
	//echo $RequiredCourse;
	$RequiredCourse1 = explode(',', $RequiredCourse);
	
		
	
?>
<div class="row">
<div class="col-md-12  ">
                <div class="col-md-3 "> 
                <p>Enquiry Number</p>
               <h5><?php echo $rows["Enquiry_no"];?></h5>  
                 
                </div>
                <div class="col-md-3 "> 
                 <p>Enquiry Date</p>
               <h5><?php echo $rows["Enquiry_date"];?></h5> 
                </div>
                  <div class="col-md-3 ">
                     <p>Individual / Company</p>
               <h5><?php echo $rows["Candidate_type"];?></h5> 
                </div>
                   <div class="col-md-3 ">
                     <p>Customer Code</p>
               <h5><?php echo $rows["Customer_Code"];?></h5> 
                </div>
				</div>

<div class="col-md-12 pt-20 ">
                <div class="col-md-3 "> 
                <p>Enquiry Type</p>
               <h5><?php echo $rows["Enquiry_type"];?></h5>  
                 
                </div>
                <div class="col-md-3 "> 
                 <p>Name </p>
               <h5><?php echo $rows["Name"];?></h5> 
                </div>
                  <div class="col-md-3 ">
                     <p>Contact Number </p>
               <h5><?php echo $rows["Mobile_No"];?></h5> 
                </div>
                   <div class="col-md-3 ">
                     <p>Email ID </p>
               <h5><?php echo $rows["Email_id"];?></h5> 
                </div>
				</div>
<div class="col-md-12 pt-20 ">
                <div class="col-md-3 "> 
                <p>Civil ID</p>
               <h5><?php echo $rows["Civil_Id"];?> </h5>  
                 
                </div>
                <div class="col-md-3 "> 
				 <p>Course Code </p>
				<?php
				foreach($RequiredCourse1 as $reqcourse)
	{
		//echo $reqcourse . ',';
		$sqlCourseid = "SELECT Course_no FROM course WHERE Course_name IN ('$reqcourse')";
	//echo"SELECT Course_no FROM course WHERE Course_name IN ('$reqcourse')";
	$resultCourseid=mysqli_query($connect,$sqlCourseid);
while($rowsCourseid=mysqli_fetch_array($resultCourseid)){
$Course_no=$rowsCourseid["Course_no"];
?>
                
	<h5><?php echo $Course_no;   }}?></h5> 
                </div>
                  <div class="col-md-3 "> 
                 <p>Required Course </p>
               <h5><?php echo $rows["RequiredCourse"];?></h5> 
                </div>
                  
                </div>

</div>


<?php
	
}
?>