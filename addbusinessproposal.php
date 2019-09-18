<?php
include'connection.php';
$proposal=$_POST["proposals"];
//echo $proposal;
 $enquiry_no=$_POST["enquiry_type"];
$customer_code=$_POST["p_customer_code"];

	if(isset($_POST["searchcourse"]) && is_array($_POST["searchcourse"])){
	$searchcourse= implode(",", $_POST["searchcourse"]); 
	
} 
	
  

if($proposal=="enquiry")
{
	$sqlgetEnquiry_no=mysqli_query($connect,"Select Enquiry_no from business_proposal where Enquiry_no='".$_POST["enquiry_type"]."' ");
	while($rows=mysqli_fetch_array($sqlgetEnquiry_no)){
		$Enquiry_no=$rows["Enquiry_no"];
		//echo $Enquiry_no;
	}
	$trows=mysqli_num_rows($sqlgetEnquiry_no);
	if($trows>0){
		echo"<script>
	
	window.location.href='createbusinessproposal.php'
	alert('proposal already exists for this enquiry_no');;
	</script>";
	}
	else{
	$sql="INSERT INTO `business_proposal`(`proposal_type`, `Proposal_no`, `Langauge`, `Proposal_date`, `Enquiry_no`) VALUES ('".$_POST["proposals"]."','".$_POST["enquiry_proposalno"]."','".$_POST["enquiry_lang"]."','".$_POST["enquiry_pdate"]."','".$_POST["enquiry_type"]."')";
	//echo "INSERT INTO `business_proposal`(`proposal_type`, `Proposal_no`, `Langauge`, `Proposal_date`, `Enquiry_no`) VALUES ('".$_POST["proposals"]."','".$_POST["enquiry_proposalno"]."','".$_POST["enquiry_lang"]."','".$_POST["enquiry_pdate"]."','".$_POST["enquiry_type"]."')";
	$result=mysqli_query($connect,$sql);
	header("Location:createbusinessproposal.php");
	}
}
else{
	$sqlcustomercode=mysqli_query($connect,"select Customer_code from customer where Customer_code='$customer_code'");
	while($rowscustomercode=mysqli_fetch_array($sqlcustomercode)){
		$Customercode1=$rowscustomercode["Customer_code"];
		
	}
	$trowscustomerexists_customer=mysqli_num_rows($sqlcustomercode);
	if($trowscustomerexists_customer>0){
	
	
	
	}
	else{
		$sqlcustomer="INSERT INTO `customer`( `Customer_name`, `Customer_code`, `Mobile`,  `Civil_No`) VALUES ('".$_POST["p_name"]."','".$_POST["p_customer_code"]."','".$_POST["p_mobno"]."','".$_POST["p_cno"]."')";
	//echo"INSERT INTO `customer`( `Customer_name`, `Customer_code`, `Mobile`,  `Civil_No`) VALUES ('".$_POST["p_name"]."','".$_POST["p_customer_code"]."','".$_POST["p_mobno"]."','".$_POST["p_cno"]."')";
	$resultcustomer=mysqli_query($connect,$sqlcustomer);
		
		
	}
	$sqlcustomerexists=mysqli_query($connect,"select Customer_code from business_proposal where Customer_code='$customer_code'");
	while($rowscustomercode=mysqli_fetch_array($sqlcustomerexists)){
		$Customerexists=$rowscustomercode["Customer_code"];
		
	}
	$trowscustomercode=mysqli_num_rows($sqlcustomerexists);
	if($trowscustomercode>0){
	echo"<script>
	
	window.location.href='createbusinessproposal.php'
	alert('proposal already exists for this customer_code');;
	</script>";
	}
	else{
	$sqlbusinessproposal="INSERT INTO `business_proposal`( `proposal_type`, `Proposal_no`,`Proposal_date`, `Candidate_type`, `Customer_code`,`Customer_name`, `Mobile_no`,`Civil_Id`, `Prefared_by`,`Course_no`) VALUES ('".$_POST["proposals"]."','".$_POST["business_proposalno"]."','".$_POST["business_pdate"]."','".$_POST["proposalcandidate_type"]."','".$_POST["p_customer_code"]."','".$_POST["p_name"]."','".$_POST["p_mobno"]."','".$_POST["p_cno"]."','".$_POST["preferred_by"]."','".$searchcourse."')";
	//echo"INSERT INTO `business_proposal`( `proposal_type`, `Proposal_no`,`Proposal_date`, `Candidate_type`, `Customer_code`,`Customer_name`, `Mobile_no`,`Civil_Id`, `Prefared_by`,`Course_no` ) VALUES ('".$_POST["proposals"]."','".$_POST["business_proposalno"]."','".$_POST["business_pdate"]."','".$_POST["proposalcandidate_type"]."','".$_POST["p_customer_code"]."','".$_POST["p_name"]."','".$_POST["p_mobno"]."','".$_POST["p_cno"]."','".$_POST["preferred_by"]."','".$searchcourse."')";
	$result=mysqli_query($connect,$sqlbusinessproposal);	
		
		
	}
	
}




?> 