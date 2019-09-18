<?php
include'connection.php';
$enquiry_type=$_GET["q1"];
$enquiry_no=1;
//echo $enquiry_type;
$sql="select Enquiry_no from enquiry ORDER BY Enquiry_no";
$result=mysqli_query($connect,$sql);
while($rows=mysqli_fetch_array($result)){
	$Enquiry_no=$rows["Enquiry_no"];
	//echo $Enquiry_no;
}



?>
<div class="col-md-4">
			
			<div class=" padding_zero">
            <div class="form-group " >
			  <div class=""> <label for="exampleInputEmail1">Enquiry ID</label></div>
                 <div class="">
				  <input type="text" class="form-control" name="enquiry_id" id="enquiry_id" style="width:90%" placeholder="Enquiry Id" value="<?php if(!empty($Enquiry_no)){
	echo $Enquiry_no += 1;
}
else
{
	 echo $enquiry_no;
}   ?>"></div>
				  </div>
				  </div>

             </div>