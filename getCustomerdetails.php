<?php
include'connection.php';
$customer_code=$_GET["q"];
//echo $customer_code;
$sql="select * from customer where Customer_code='$customer_code'";
//echo"select * from customer where Customer_code='$customer_code'";
$result=mysqli_query($connect,$sql);
$rows=mysqli_fetch_array($result);
				$trows=mysqli_num_rows($result);
if($trows>0){?>
<?php do{ ?>


<div class="col-md-4"> 
                <div class="padding_zero">
             <div class="form-group">
                  <label for="exampleInputEmail1">Name</label>
                  <input type="text" class="form-control" id="Name" placeholder=" " value="<?php echo $rows["Customer_name"];  ?>"  name="p_name" readonly>
                </div>
				</div>
                </div>
				<div class="col-md-4"> 
                <div class="padding_zero">
             <div class="form-group">
                  <label for="exampleInputEmail1">Contact Number</label>
                  <input type="text" class="form-control" id="cont_no" placeholder=" "
				  value="<?php echo $rows["Mobile"];  ?>" name="p_mobno" readonly>
                </div>
				</div>
                </div>
				<div class="col-md-4"> 
                <div class="padding_zero">
             <div class="form-group">
                  <label for="exampleInputEmail1">CRNo/Civil num</label>
                  <input type="text" class="form-control" id="civil_no" placeholder=" "
				  value="<?php echo $rows["Civil_No"];  ?>" name="p_cno" readonly>
                </div>
				</div>
                </div>
				<?php }while ($rows=mysqli_fetch_array($result));?>
                                    <?php }else{ ?>
									
					<div class="col-md-4"> 
                <div class="padding_zero">
             <div class="form-group">
                  <label for="exampleInputEmail1">Name</label>
                  <input type="text" class="form-control" id="Name" placeholder=" " name="p_name">
                </div>
				</div>
                </div>
				<div class="col-md-4"> 
                <div class="padding_zero">
             <div class="form-group">
                  <label for="exampleInputEmail1">Contact Number</label>
                  <input type="text" class="form-control" id="cont_no" placeholder=" " name="p_mobno">
                </div>
				</div>
                </div>
				<div class="col-md-4"> 
                <div class="padding_zero">
             <div class="form-group">
                  <label for="exampleInputEmail1">CRNo/Civil num</label>
                  <input type="text" class="form-control" id="civil_no" placeholder=" " name="p_cno">
                </div>
				</div>
                </div>				
									
									
									
									
									
									
									
									
									
									
									<?php } ?>