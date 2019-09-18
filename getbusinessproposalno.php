<?php
include'connection.php';
$proposal_type=$_GET["q1"];
$n=0;
$proposal_no="P";
 $proposal_no = $proposal_no . sprintf("%04d", $n);

//echo $proposal_no;
//echo $enquiry_type;
$sql="select Proposal_no from business_proposal ORDER BY Proposal_no";
$result=mysqli_query($connect,$sql);
while($rows=mysqli_fetch_array($result)){
	$Proposal_no=$rows["Proposal_no"];
	//echo $Enquiry_no;
}



?>

<div class="col-md-4"> 
                <div class="padding_zero">
             <div class="form-group">
                  <label for="exampleInputEmail1">Proposal No:</label>
                  <input type="text" class="form-control" id="ProposalNo1" name="business_proposalno" placeholder=" " value="<?php  
if(!empty($Proposal_no)){
	$proposal_no = explode('P',$Proposal_no)[1]+1;
	$proposal_no = "P"."000".$proposal_no;
	echo $proposal_no;
}
else
{
	 echo $proposal_no;
} 


				  ?>">
                </div>
				</div>
                 
                </div>