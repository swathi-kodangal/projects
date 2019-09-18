<?php
include'connection.php';
$enquiry_no=$_GET["q"];
//echo $enquiry_no;
$sql="select * from enquiry where Enquiry_no='$enquiry_no' || Mobile_No='$enquiry_no' || Civil_Id='$enquiry_no'";
/*echo"select * from enquiry where Enquiry_no='$enquiry_no' || Mobile_No='$enquiry_no' || Civil_Id='$enquiry_no'";*/
$result=mysqli_query($connect,$sql);
while($rows=mysqli_fetch_array($result)){
	
?>

<div  id="enquiryiddiv">
<div class="col-md-4 ">
			
			<div class=" padding_zero">
            <div class="form-group">
			  <div class=""> <label for="exampleInputEmail1">Enquiry ID</label></div>
                 <div class="">
				  <input type="text" class="form-control" name="enquiry_id" id="enquiry_id" placeholder="Enquiry Id" value="<?php echo $rows["Enquiry_no"];  ?>"></div>
				  </div>
				  </div>

             </div>
             </div>
			<div class="col-md-4">
				 <div class=" padding_zero ">
			   <div class="form-group">
                <label>Enquiry Date</label>

                <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" class="form-control pull-right" id="datepicker" name="enquiry_date" value="<?php echo $rows["Enquiry_date"];  ?>" >
                </div>
                <!-- /.input group -->
             
		     </div>
			 </div>	
                </div>	
				<div class="col-md-4  ">
                 <div class="  padding_zero">
             <div class="form-group">
                  <label for="exampleInputEmail1">Customer Code</label>
                  <input type="text" class="form-control" id="customer_code" name="customer_code" value="<?php echo $rows["Customer_Code"];  ?>"  placeholder=" ">
                </div>
				</div>
			  </div>
			  <div class="col-md-4">
			 <div class=" padding_zero" >
			   <div class="form-group">
                <label>Enquiry Type</label>
                <select class="form-control select2 select2-hidden-accessible" style="width: 100%;" tabindex="-1" aria-hidden="true" name="enquiry_type" id="enquiry_type">
                  <option  id="enquiry_typeresponse"selected="selected" value="<?php echo $rows["Enquiry_type"];  ?>"><?php echo $rows["Enquiry_type"];  ?></option>
				   <option value="" disabled hidden>Select  </option>
                  <option>Walkins</option>
				  <option>Email</option>
                  <option>Online </option>
                  <option>Reference </option>
                </select>
				
              </div>
			 </div>	
			 </div> 
			 <div class="col-md-12  ">
			  	<div class="col-md-4 ">
			
			<div class=" padding_zero">
            <div class="form-group " >
			  <div class=""> <label for="exampleInputEmail1">Name</label></div>
                 <div class="">
				  <input type="text" class="form-control" id="candidate_name" name="candidate_name" placeholder="Enter your Name " value="<?php echo $rows["Name"];?>"></div>
				  </div>
				  </div>

             </div>
				  
			<div class="col-md-4  ">
<div class="  padding_zero">
             <div class="form-group">
                  <label for="exampleInputEmail1">Mobile No</label>
                  <input type="text"  class="form-control" id="mob_no" name="mob_no" placeholder="Enter your Mobile No " value="<?php echo $rows["Mobile_No"];  ?>">
                </div>
				</div></div>
               
			  <div class="col-md-4">
<div class="  padding_zero">
             <div class="form-group">
                  <label for="exampleInputEmail1">E-mail ID</label>
                  <input type="text" class="form-control" id="email_id" name="email_id" placeholder="Enter your mail id " value="<?php echo $rows["Email_id"];  ?>">
                </div>
				</div>
			  </div>

			  <div class="col-md-4  ">
<div class="  padding_zero">
             <div class="form-group">
                  <label for="exampleInputEmail1">Civil ID</label>
                  <input type="text" class="form-control" id="civil_id" name="civil_id" placeholder=" " value="<?php echo $rows["Civil_Id"];  ?>">
                </div>
				</div>
			  </div>
               <div class="col-md-4  ">
<div class="  padding_zero">
             <div class="form-group">
                  <label for="exampleInputEmail1">Proposal Request</label>
                 <div class="form-group">
				<label>
                
				 <input type="radio"  name="proposal_rqst" id="proposal_rqst" <?php if($rows['Proposal_Request']=="Yes") {echo "checked";}?> value="Yes"> <label style="padding:0 18px">  Yes</label>
                </label>
                <label>
				  <input type="radio"  name="proposal_rqst" id="proposal_rqst" <?php if($rows['Proposal_Request']=="No") {echo "checked";}?>  Value="No" > <label style="padding:0 18px"> No</label>
                 
                </label>
				  
			       </div>
                </div>
				</div>
			  </div>
			  
			  <div class="col-md-4">
<div class="  padding_zero">
             <div class="form-group">
                  <label for="exampleInputEmail1">Contract Request</label>
                 <div class="form-group">
				<label>
                
				 <input type="radio"  name="contract_rqst" id="contract_rqst" <?php if($rows['Contract_Request']=="Yes") {echo "checked";}?>  value="Yes"> <label style="padding:0 18px">  Yes</label>
                </label>
                <label>
				  <input type="radio"  name="contract_rqst" id="contract_rqst"  <?php if($rows['Contract_Request']=="No") {echo "checked";}?> value="No"> <label style="padding:0 18px"> No</label>
                 
                </label>
				  
			       </div>
                </div>
				</div>
			  </div>
			  </div>
			  <div class="col-md-12">
               <div class="col-md-4">
                 <div class="  padding_zero">
             <div class="form-group">
                  <label for="exampleInputEmail1">Direct Request</label>
                 <div class="form-group">
				<label>
                
				 <input type="radio"  name="direct_rqst" id="direct_rqst" <?php if($rows['Direct_Request']=="Yes") {echo "checked";}?>  value="Yes"> <label style="padding:0 18px">  Yes</label>
                </label>
                <label>
				  <input type="radio"  name="direct_rqst" id="direct_rqst" <?php if($rows['Direct_Request']=="No") {echo "checked";}?> value="No"> <label style="padding:0 18px"> No</label>
                 
                </label>
				  
			       </div>
                </div>
				</div>
			  </div>
			  <div class="col-md-4">
                 <div class="padding_zero">
             <div class="form-group">
                  <label for="exampleInputEmail1">Next Action Date</label>
                 <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" class="form-control pull-right" id="datepicker1" name="next_actiondate" value="<?php echo $rows["Nextactiondate"] ?>">
                </div>
                </div>
				</div>
			  </div>
			  <div class="col-md-4">
                 <div class="  padding_zero">
             <div class="form-group">
                  <label for="exampleInputEmail1">Time</label>
                 <select name="time[]" id="time" class="form-control select2 select2-hidden-accessible " multiple data-placeholder="Add Time" style="width: 100%;" tabindex="-1" aria-hidden="true">
                 <option id="timeresponse" selected="selected" value="<?php echo $rows["Time"]; ?>"><?php echo $rows["Time"]; ?></option>
				
                  <option value="6:00">6:00</option>
                                                	                                                	               <option value="6:15">6:15</option>
                                                	                                                	               <option value="6:30">6:30</option>
                                                	                                                	             <option value="6:45">6:45</option>
                                                	                                                	              <option value="7:00">7:00</option>
                                                	                                                	             <option value="7:15">7:15</option>
                                                	                                                	             <option value="7:30">7:30</option>
                                                	                                                	             <option value="7:45">7:45</option>
                                                	                                                	             <option value="8:00">8:00</option>
                                                	                                                	             <option value="8:15">8:15</option>
                                                	                                                	              <option value="8:30">8:30</option>
                                                	                                                	               <option value="8:45">8:45</option>
                                                	                                                	              <option value="9:00">9:00</option>
                                                	                                                	              <option value="9:15">9:15</option>
                                                	                                                	            <option value="9:30">9:30</option>
                                                	                                                	            <option value="9:45">9:45</option>
                                                	                                                	            <option value="10:00">10:00</option>
                                                	                                                	             <option value="10:15">10:15</option>
                                                	                                                	             <option value="10:30">10:30</option>
                                                	                                                	             <option value="10:45">10:45</option>
                                                	                                                	             <option value="11:00">11:00</option>
                                                	                                                	              <option value="11:15">11:15</option>
                                                	                                                	           <option value="11:30">11:30</option>
                                                	                                                	               <option value="11:45">11:45</option>
                                                	                                                	            <option value="12:00">12:00</option>
                                                	                                                	           <option value="12:15">12:15</option>
                                                	                                                	           <option value="12:30">12:30</option>
                                                	                                                	           <option value="12:45">12:45</option>
                                                	                                                	             <option value="13:00">13:00</option>
                                                	                                                	           <option value="13:15">13:15</option>
                                                	                                                	            <option value="13:30">13:30</option>
                                                	                                                	             <option value="13:45">13:45</option>
                                                	                                                	            <option value="14:00">14:00</option>
                                                	                                                	            <option value="14:15">14:15</option>
                                                	                                                	             <option value="14:30">14:30</option>
                                                	                                                	             <option value="14:45">14:45</option>
                                                	                                                	              <option value="15:00">15:00</option>
                                                	                                                	             <option value="15:15">15:15</option>
                                                	                                                	             <option value="15:30">15:30</option>
                                                	                                                	              <option value="15:45">15:45</option>
                                                	                                                	              <option value="16:00">16:00</option>
                                                	                                                	               <option value="16:15">16:15</option>
                                                	                                                	               <option value="16:30">16:30</option>
                                                	                                                	               <option value="16:45">16:45</option>
                                                	                                                	               <option value="17:00">17:00</option>
                                                	                                                	               <option value="17:15">17:15</option>
                                                	                                                	               <option value="17:30">17:30</option>
                                                	                                                	               <option value="17:45">17:45</option>
                                                	                                                	               <option value="18:00">18:00</option>
                                                	                                                	              <option value="18:15">18:15</option>
                                                	                                                	               <option value="18:30">18:30</option>
                                                	                                                	               <option value="18:45">18:45</option>
                                                	                                                	               <option value="19:00">19:00</option>
                                                	                                                	               <option value="19:15">19:15</option>
                                                	                                                	               <option value="19:30">19:30</option>
                                                	                                                	              <option value="19:45">19:45</option>
                                                	                                                	               <option value="20:00">20:00</option>
                                                	                                                	              <option value="20:15">20:15</option>
                                                	                                                	              <option value="20:30">20:30</option>
                                                	                                                	              <option value="20:45">20:45</option>
                                                	                                                	               <option value="21:00">21:00</option>
                                                	                                                	               <option value="21:15">21:15</option>
                                                	                                                	               <option value="21:30">21:30</option>
                                                	                                                	                <option value="21:45">21:45</option>
                                                	                                                	                 <option value="22:00">22:00</option>
                                                	                                                	                <option value="22:15">22:15</option>
                                                	                                                	               <option value="22:30">22:30</option>
                                                	                                                	              <option value="22:45">22:45</option>
                                                	                                                	             <option value="23:00">23:00</option>

                </select>
                </div>
				</div>
			  </div>


			  </div>
			  <div class="col-md-12">
	        
				   <div class="col-md-4 ">
              <div class="  padding_zero">
            <div class="form-group">
                <label>Required Course </label>
                <select class="form-control select2 select2-hidden-accessible" multiple data-placeholder="Add Required Course" style="width: 100%;" tabindex="-1" aria-hidden="true" name="required_course[]" id="required_course">
			
				<option id="requiredcourseresponse" selected="selected" value="<?php echo $rows["RequiredCourse"] ;  ?>" ><?php echo $rows["RequiredCourse"] ;  ?></option>
				
                  <option>HSE INDUCTION</option>
                  <option>Work at height </option>
                  <option>Risk assessment</option>
                  <option>Managing safety</option>
                  <option>Incident amd Accident Investigation</option>
                  <option>Fire fighter</option>
                  <option>Initial fire response</option>
				  
                </select>
				
              </div> </div>
			  
               </div>

			  
			  <div class="col-md-4	">
<div class="  padding_zero">
            <div class="form-group">
                <label>Status</label>
                <select class="form-control select2 select2-hidden-accessible" style="width: 100%;" tabindex="-1" aria-hidden="true" name="status" id="status">
				<option  id="statusresponse" selected="selected" value="<?php 
				echo $rows["Status"];?>"><?php echo $rows["Status"];?></option>
                  <option >Select</option>

                  <option>For Registration  </option>
                  <option>For Admission </option>
                  <option>For Counselling</option>
                  <option>For Calling Later </option>
				  <option>Requested for proposal</option>
                  
                </select>
				
              </div> </div></div>
			  <div class="col-md-4	">
<div class="  padding_zero">
            <div class="form-group">
                <label>Enquiry Type</label>
                <select class="form-control select2 select2-hidden-accessible" style="width: 100%;" tabindex="-1" aria-hidden="true" name="enquiry_formtype" id="enquiry_formtype">
				<option  id="enquiry_formtyperesponse" selected="selected" value="<?php echo $rows["Enquiry_formtype"];?>"><?php echo $rows["Enquiry_formtype"];?></option>
                  <option value="" disabled hidden>Select  </option>
                  <option>Online  </option>
                  <option>Offline </option>
                  
                  
                </select>
				
              </div> 
			  </div>
			  </div>
			  
			  </div>
			  <div class="col-md-12 pa-30">
			   <div class="col-md-4">
			   <div class="  padding_zero">
            <div class="form-group">
                <label>Preferred Comm Mode</label>
                <select class="form-control select2 select2-hidden-accessible" style="width: 100%;" tabindex="-1" aria-hidden="true" name="pre_comm_mode" id="pre_comm_mode">
				<option  id="Preferred_response" selected="selected" value="<?php echo $rows["Preferred_Com_Mode"]; ?>"><?php echo $rows["Preferred_Com_Mode"]; ?></option>
                   <option value="" disabled hidden>Select  </option>
                  <option>Phone  </option>
                  <option>Email </option>
                  
                  
                </select>
				
              </div> 
			  </div>
			   
			   
			   </div>
			   <div class="col-md-4">
			   <div class="  padding_zero">
            <div class="form-group">
                <label>Remarks</label>
                <textarea name="remarks" id="remarks" class="form-control" value=""><?php  echo $rows["Remarks"];?></textarea>
				
              </div> </div>
			   
			   
			   </div>
			   <div class="col-md-4">
			   <div class="  padding_zero">
            <div class="form-group">
                <label>Special Notes</label>
                <textarea name="special_notes" id="special_notes" class="form-control"><?php  echo $rows["special_notes"];?></textarea>
				
              </div> </div>
			   
			   
			   </div>
			   </div>
			 <?php
}
				 ?>
				 
	