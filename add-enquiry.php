<?php
include'connection.php';
if(isset($_POST["time"]) && is_array($_POST["time"])){
	$time= implode(",", $_POST["time"]); 
}if(isset($_POST["required_course"]) && is_array($_POST["required_course"])){
	$required_course= implode(",", $_POST["required_course"]); 
}
$Enquiry_exist=$_POST["Enquiry"];
echo "<br>";
if($Enquiry_exist=="yes")
{
$sqlcustomercode=mysqli_query($connect,"Select Customer_code from customer where Customer_code='".$_POST["customer_code"]."' ");
//echo"Select Customer_code from customer where Customer_code='".$_POST["customer_code"]."'";
$rowssqlcustomercode=mysqli_fetch_array($sqlcustomercode);
$trowssqlcustomercode=mysqli_num_rows($sqlcustomercode);
if($trowssqlcustomercode>0){
	echo"<script>
	
	window.location.href='createenquiryform.php'
	alert('customer code already exists');;
	</script>";
	
}
else{
$sql="INSERT INTO `enquiry`(`Candidate_type`, `Enquiry_exist`, `Enquiry_no`, `Enquiry_date`, `Customer_Code`, `Enquiry_type`, `Name`, `Mobile_No`, `Email_id`, `Civil_Id`, `Proposal_Request`, `Contract_Request`, `Direct_Request`, `Nextactiondate`, `Time`, `RequiredCourse`, `Status`, `Enquiry_formtype`, `Preferred_Com_Mode`, `Remarks`, `special_notes`) VALUES ('".$_POST["candidate_type"]."','".$_POST["Enquiry"]."','".$_POST["enquiry_id"]."','".$_POST["enquiry_date"]."','".$_POST["customer_code"]."','".$_POST["enquiry_type"]."','".$_POST["candidate_name"]."','".$_POST["mob_no"]."','".$_POST["email_id"]."','".$_POST["civil_id"]."','".$_POST["proposal_rqst"]."','".$_POST["contract_rqst"]."','".$_POST["direct_rqst"]."','".$_POST["next_actiondate"]."','".$time."','".$required_course."','".$_POST["status"]."','".$_POST["enquiry_formtype"]."','".$_POST["pre_comm_mode"]."','".$_POST["remarks"]."','".$_POST["special_notes"]."')";
echo"INSERT INTO `enquiry`(`Candidate_type`, `Enquiry_exist`, `Enquiry_no`, `Enquiry_date`, `Customer_Code`, `Enquiry_type`, `Name`, `Mobile_No`, `Email_id`, `Civil_Id`, `Proposal_Request`, `Contract_Request`, `Direct_Request`, `Nextactiondate`, `Time`, `RequiredCourse`, `Status`, `Enquiry_formtype`, `Preferred_Com_Mode`, `Remarks`, `special_notes`) VALUES ('".$_POST["candidate_type"]."','".$_POST["Enquiry"]."','".$_POST["enquiry_id"]."','".$_POST["enquiry_date"]."','".$_POST["customer_code"]."','".$_POST["enquiry_type"]."','".$_POST["candidate_name"]."','".$_POST["mob_no"]."','".$_POST["email_id"]."','".$_POST["civil_id"]."','".$_POST["proposal_rqst"]."','".$_POST["contract_rqst"]."','".$_POST["direct_rqst"]."','".$_POST["next_actiondate"]."','".$time."','".$required_course."','".$_POST["status"]."','".$_POST["enquiry_formtype"]."','".$_POST["pre_comm_mode"]."','".$_POST["remarks"]."','".$_POST["special_notes"]."')";


}
}
else{
$sql="UPDATE `enquiry` SET  `Candidate_type`='".$_POST["candidate_type"]."',`Enquiry_date`='".$_POST["enquiry_date"]."',`Customer_Code`='".$_POST["customer_code"]."',`Enquiry_type`='".$_POST["enquiry_type"]."',`Name`='".$_POST["candidate_name"]."',`Email_id`='".$_POST["email_id"]."',`Proposal_Request`='".$_POST["proposal_rqst"]."',`Contract_Request`='".$_POST["contract_rqst"]."',`Direct_Request`='".$_POST["direct_rqst"]."',`Nextactiondate`='".$_POST["next_actiondate"]."',`Time`='".$time."',`RequiredCourse`='".$required_course."',`Status`='".$_POST["status"]."',`Enquiry_formtype`='".$_POST["enquiry_formtype"]."',`Preferred_Com_Mode`='".$_POST["pre_comm_mode"]."',`Remarks`='".$_POST["remarks"]."',`special_notes`='".$_POST["special_notes"]."' WHERE `Enquiry_no`='".$_POST["enquiry_id"]."' || `Mobile_No`='".$_POST["enquiry_id"]."' || `Civil_Id`='".$_POST["enquiry_id"]."'";	
echo"UPDATE `enquiry` SET  `Candidate_type`='".$_POST["candidate_type"]."',`Enquiry_date`='".$_POST["enquiry_date"]."',`Customer_Code`='".$_POST["customer_code"]."',`Enquiry_type`='".$_POST["enquiry_type"]."',`Name`='".$_POST["candidate_name"]."',`Email_id`='".$_POST["email_id"]."',`Proposal_Request`='".$_POST["proposal_rqst"]."',`Contract_Request`='".$_POST["contract_rqst"]."',`Direct_Request`='".$_POST["direct_rqst"]."',`Nextactiondate`='".$_POST["next_actiondate"]."',`Time`='".$time."',`RequiredCourse`='".$required_course."',`Status`='".$_POST["status"]."',`Enquiry_formtype`='".$_POST["enquiry_formtype"]."',`Preferred_Com_Mode`='".$_POST["pre_comm_mode"]."',`Remarks`='".$_POST["remarks"]."',`special_notes`='".$_POST["special_notes"]."' WHERE `Enquiry_no`='".$_POST["enquiry_id"]."' || `Mobile_No`='".$_POST["enquiry_id"]."' || `Civil_Id`='".$_POST["enquiry_id"]."'";	
}
//$result=mysqli_query($connect,$sql);
//header("Location:createenquiryform.php");












?>