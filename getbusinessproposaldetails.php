<?php
$proposal_no=$_GET["q"];
include 'connection.php';
$sql=mysqli_query($connect,"select * from business_proposal where Proposal_no='$proposal_no'");
//echo "select * from business_proposal where Proposal_no='$proposal_no'";
while($rows=mysqli_fetch_array($sql)){
$proposal_type=$rows["proposal_type"];
$Enquiry_no=$rows["Enquiry_no"];
if($proposal_type=="proposal"){
?>
<div class="col-md-12">
		 <div class="col-md-3 "> 
                <p>Proposal Number</p>
               <h5><?php echo $rows["Proposal_no"]; ?></h5>  
                 
          </div>
		  <div class="col-md-3 "> 
                <p>Proposal Date</p>
               <h5><?php echo $rows["Proposal_date"] ;?></h5>  
                 
          </div>
		  <div class="col-md-3 "> 
                <p>Private Company</p>
               <h5><?php echo $rows["Candidate_type"]; ?></h5>  
                 
          </div>
		  <div class="col-md-3 "> 
                <p>Customer Code</p>
               <h5><?php echo $rows["Customer_code"]; ?></h5>  
                 
          </div>
		  <div class="col-md-3 "> 
                <p>Name</p>
               <h5><?php echo $rows["Customer_name"] ;?></h5>  
                 
          </div>
		  <div class="col-md-3 "> 
                <p>Customer Number</p>
               <h5><?php echo $rows["Mobile_no"]; ?></h5>  
                 
          </div>
		 <!-- <div class="col-md-3 "> 
                <p>EmailId</p>
               <h5>bala@gmail.com</h5>  
                 
          </div>-->
		  <div class="col-md-3 "> 
                <p>CivilId</p>
               <h5><?php echo $rows["Civil_Id"]; ?></h5>  
                 
          </div>
		 </div>
<?php } else {
	$sqlenquirycustomerdetails=mysqli_query($connect,"select * from enquiry where Enquiry_no='$Enquiry_no'");
	//echo"select * from enquiry where Enquiry_no='$Enquiry_no'";
	while($rowsenquirycustomerdetails=mysqli_fetch_array($sqlenquirycustomerdetails))
	{
	?>
<div class="col-md-12">
		 <div class="col-md-3 "> 
                <p>Proposal Number</p>
               <h5><?php echo $rows["Proposal_no"]; ?></h5>  
                 
          </div>
		  <div class="col-md-3 "> 
                <p>Proposal Date</p>
               <h5><?php echo $rows["Proposal_date"] ;?></h5>  
                 
          </div>
		  <div class="col-md-3 "> 
                <p>Private Company</p>
               <h5><?php echo $rowsenquirycustomerdetails["Candidate_type"]; ?></h5>  
                 
          </div>
		  <div class="col-md-3 "> 
                <p>Customer Code</p>
               <h5><?php echo $rowsenquirycustomerdetails["Customer_Code"]; ?></h5>  
                 
          </div>
		  <div class="col-md-3 "> 
                <p>Name</p>
               <h5><?php echo $rowsenquirycustomerdetails["Name"] ;?></h5>  
                 
          </div>
		  <div class="col-md-3 "> 
                <p>Customer Number</p>
               <h5><?php echo $rowsenquirycustomerdetails["Mobile_No"]; ?></h5>  
                 
          </div>
		 <!-- <div class="col-md-3 "> 
                <p>EmailId</p>
               <h5>bala@gmail.com</h5>  
                 
          </div>-->
		  <div class="col-md-3 "> 
                <p>CivilId</p>
               <h5><?php echo $rowsenquirycustomerdetails["Civil_Id"]; ?></h5>  
                 
          </div>
		 </div>













	<?php }}} ?>