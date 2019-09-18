<?php
include 'connection.php';
  $enquiry_no =$_GET["q"];

$sql="select * from business_proposal where Enquiry_no='$enquiry_no'";
//echo"select * from business_proposal where Enquiry_no='$enquiry_no'";
$result=mysqli_query($connect,$sql);
while($rows=mysqli_fetch_array($result)){
	//echo $rows["Proposal_no"];

?>
<div class="col-md-12">
                            <div class="box-header with-border">
                                <h3 class="box-title">Business Proposal Details  </h3>
                            </div>
                        </div>
                        <div class="col-md-12 ">
                            <div class="col-md-3 "> 
                              <p>Proposal Number</p>
                              <h5><?php echo $rows["Proposal_no"];?></h5>  
                 
                            </div>
                            <div class="col-md-3 "> 
                              <p>Proposal Date </p>
                              <h5><?php echo $rows["Proposal_date"];?></h5> 
                            </div>
                     </div>
<?php  
}
?>

