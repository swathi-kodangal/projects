<?php
include'header.php';
?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
   

    <!-- Main content -->
    
    <!-- /.content -->
 
<section class="content">

      <!-- SELECT2 EXAMPLE -->
      <div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title">Create Enquiry Form</h3>

        
        </div>
		<form id="enquiry_form" action="add-enquiry.php" method="post" enctype="multipart/form-data">
        <!-- /.box-header -->
        <div class="box-body ">
          <div class="">
            <div class=" ">
          <!-- Custom Tabs -->
          <div class="nav-tabs-custom">
           
            <div class="">
              <div class="tab-pane active" id="Post_Activities">
                <div class="col-md-12 pa-30 ">
				  
                  <div class="form-group">
                  <label for="exampleInputEmail1">Select Private / Company </label>
                   <div class="form-group">
				<label>
                
				 <input type="radio"  name="candidate_type" id="" checked="checked" value="Private"> <label style="padding:0 18px">  Private</label>
                </label>
                <label>
				  <input type="radio"  name="candidate_type" id="" > <label style="padding:0 18px" value="Company">  Company </label>
                 
                </label>
				  
			       </div>
                </div>
				</div>
                <div class="col-md-12 ">
			<div class="col-md-4 ">
			
			<div class=" padding_zero">
            <div class="form-group " >
			  <div class="">
			  <label for="exampleInputEmail1">New Enquiry </label>
                   <div class="form-group">
			  <label>
                
				 <input type="radio" class="Enquiry" name="Enquiry" id="Enquiry" value="yes" onclick="func()"> <label style="padding:0 18px">Yes</label>
                </label>
                <label>
				  <input type="radio" class="Enquiry" name="Enquiry" id="Enquiry1" value="no" onclick="func()"> <label style="padding:0 18px"> No </label>
                 
                </label>
			  
                 
				  </div>

             </div>
             </div>
             </div>
             </div>
			 <div class="col-md-4" id="searchenquiry">
			 <div class=" padding_zero">
            <div class="form-group" >
			  <div class=""> <label for="exampleInputEmail1">Search Enquiry No:</label></div>
                 <div class="">
				  <input type="text" name="search_enquiryid" id="search_enquiryid" class="form-control" id="" placeholder="Search" onkeyup="getNo(this.value)"></div>
				  </div>
				  </div>
			 
			 
			 </div>
			 <div id="txtHint">
			 <div  id="enquiryiddiv">
			<div class="col-md-4">
			
			<div class=" padding_zero">
            <div class="form-group " >
			  <div class=""> <label for="exampleInputEmail1">Enquiry ID</label></div>
                 <div class="">
				  <input type="text" class="form-control" name="enquiry_id" id="enquiry_id" placeholder="Enquiry Id"></div>
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
                  <input type="text" class="form-control pull-right" id="datepicker" name="enquiry_date">
                </div>
                <!-- /.input group -->
             
		     </div>
			 </div>	
                </div>	
              <div class="col-md-4  ">
                 <div class="  padding_zero">
             <div class="form-group">
                  <label for="exampleInputEmail1">Customer Code</label>
                  <input type="text" class="form-control" id="customer_code" name="customer_code" placeholder=" ">
                </div>
				</div>
			  </div>
			 <div class="col-md-4  ">
			 <div class=" padding_zero" >
			   <div class="form-group">
                <label>Enquiry Type</label>
                <select class="form-control select2 select2-hidden-accessible" style="width: 100%;" tabindex="-1" aria-hidden="true" name="enquiry_type" id="enquiry_type" >
                 <option value="" disabled selected hidden>Select  </option>
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
				  <input type="text" class="form-control" id="candidate_name" name="candidate_name" placeholder="Enter your Name "></div>
				  </div>
				  </div>

             </div>
				  
			<div class="col-md-4  ">
<div class="  padding_zero">
             <div class="form-group">
                  <label for="exampleInputEmail1">Mobile No</label>
                  <input type="text"  class="form-control" id="mob_no" name="mob_no" placeholder="Enter your Mobile No ">
                </div>
				</div></div>
               
			  <div class="col-md-4">
<div class="  padding_zero">
             <div class="form-group">
                  <label for="exampleInputEmail1">E-mail ID</label>
                  <input type="text" class="form-control" id="email_id" name="email_id" placeholder="Enter your mail id ">
                </div>
				</div>
			  </div>

			  <div class="col-md-4  ">
<div class="  padding_zero">
             <div class="form-group">
                  <label for="exampleInputEmail1">Civil ID</label>
                  <input type="text" class="form-control" id="civil_id" name="civil_id" placeholder=" ">
                </div>
				</div>
			  </div>
               <div class="col-md-4  ">
<div class="  padding_zero">
             <div class="form-group">
                  <label for="exampleInputEmail1">Proposal Request</label>
                 <div class="form-group">
				<label>
                
				 <input type="radio"  name="proposal_rqst" id="proposal_rqst" checked="checked" value="Yes"> <label style="padding:0 18px">  Yes</label>
                </label>
                <label>
				  <input type="radio"  name="proposal_rqst" id="proposal_rqst"  Value="No" > <label style="padding:0 18px"> No</label>
                 
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
                
				 <input type="radio"  name="contract_rqst" id="contract_rqst" checked="checked"  value="Yes"> <label style="padding:0 18px">  Yes</label>
                </label>
                <label>
				  <input type="radio"  name="contract_rqst" id="contract_rqst"  value="No"> <label style="padding:0 18px"> No</label>
                 
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
                
				 <input type="radio"  name="direct_rqst" id="direct_rqst" checked="checked"  value="Yes"> <label style="padding:0 18px">  Yes</label>
                </label>
                <label>
				  <input type="radio"  name="direct_rqst" id="direct_rqst" value="No"> <label style="padding:0 18px"> No</label>
                 
                </label>
				  
			       </div>
                </div>
				</div>
			  </div>
			  <div class="col-md-4">
                 <div class="  padding_zero">
             <div class="form-group">
                  <label for="exampleInputEmail1">Next Action Date</label>
                 <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" class="form-control pull-right" id="datepicker1" name="next_actiondate">
                </div>
                </div>
				</div>
			  </div>
			  <div class="col-md-4">
                 <div class="  padding_zero">
             <div class="form-group">
                  <label for="exampleInputEmail1">Time</label>
                 <select name="time[]" id="time" class="form-control select2 select2-hidden-accessible " multiple data-placeholder="Add Time" style="width: 100%;" tabindex="-1" aria-hidden="true">
                
                  <option selected="selected" value="6:00">6:00</option>
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
                <select class="form-control select2 select2-hidden-accessible " multiple data-placeholder="Add Required Course" style="width: 100%;" tabindex="-1" aria-hidden="true" name="required_course[]" id="required_course">
                  <option selected="selected">HSE INDUCTION</option>
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
                  <option selected="selected" value="" disabled hidden>Select</option>
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
                  <option selected="selected" value="" disabled hidden>Select  </option>
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
                  <option selected="selected" value="" disabled hidden>Select  </option>
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
                <textarea name="remarks" id="remarks" class="form-control"></textarea>
				
              </div> </div>
			   
			   
			   </div>
			   <div class="col-md-4">
			   <div class="  padding_zero">
            <div class="form-group">
                <label>Special Notes</label>
                <textarea name="special_notes"id="special_notes" class="form-control"></textarea>
				
              </div> </div>
			   
			   
			   </div>
			   </div>
			   </div>
		  <div class="col-md-12 pa-30">
		  <div>
      		<input type="checkbox" id="trigger" name="question"> <label>   Send SMS</label>
             <input type="checkbox" id="trigger" name="question"> <label>   Send Mail</label>
    		</div>
			  </div>
              <div class="col-md-12 pa-30">
				 <div class=" pt-10">
             <a href="listofenquiey.html"> <button type="submit" class="btn btn-primary add_btn">Submit</button></a>
		      <button type="submit" class="btn btn-default add_btn">Cancel</button>
		  
		 
            </div>
				</div> 
			  
			  
			  
			   
				
			 
				 
				</div>
            
            </div>
          </div>
          <!-- /.row -->
        </div>
        <!-- /.box-body -->
       
      </div>
      </div>
	  </form>
      <!-- /.box -->

      
       
      <!-- /.row -->

    </section>
	 </div>
	 
	 
	 
	 
	 <footer class="main-footer">
    
    <strong>Copyright &copy; 2019 ITDS.</strong> All rights
    reserved.
  </footer>
	 <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
      <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane" id="control-sidebar-home-tab">
        <h3 class="control-sidebar-heading">Recent Activity</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-birthday-cake bg-red"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                <p>Will be 23 on April 24th</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-user bg-yellow"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>

                <p>New phone +1(800)555-1234</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>

                <p>nora@example.com</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-file-code-o bg-green"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>

                <p>Execution time 5 seconds</p>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

        <h3 class="control-sidebar-heading">Tasks Progress</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Custom Template Design
                <span class="label label-danger pull-right">70%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Update Resume
                <span class="label label-success pull-right">95%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-success" style="width: 95%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Laravel Integration
                <span class="label label-warning pull-right">50%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Back End Framework
                <span class="label label-primary pull-right">68%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

      </div>
      <!-- /.tab-pane -->
      <!-- Stats tab content -->
      <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
      <!-- /.tab-pane -->
      <!-- Settings tab content -->
      <div class="tab-pane" id="control-sidebar-settings-tab">
        <form method="post">
          <h3 class="control-sidebar-heading">General Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Report panel usage
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Some information about this general settings option
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Allow mail redirect
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Other sets of options are available
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Expose author name in posts
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Allow the user to show his name in blog posts
            </p>
          </div>
          <!-- /.form-group -->

          <h3 class="control-sidebar-heading">Chat Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Show me as online
              <input type="checkbox" class="pull-right" checked>
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Turn off notifications
              <input type="checkbox" class="pull-right">
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Delete chat history
              <a href="javascript:void(0)" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
            </label>
          </div>
          <!-- /.form-group -->
        </form>
      </div>
      <!-- /.tab-pane -->
    </div>
  </aside>
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->
<script>
  $(function () {
    //Initialize Select2 Elements
    
	

    //iCheck for checkbox and radio inputs
    
  });
</script>
<script>
  $(function () {
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    CKEDITOR.replace('editor1');
    //bootstrap WYSIHTML5 - text editor
    $(".textarea").wysihtml5();
  });
 
  
</script>
<script>
function bodyfunction(){

document.getElementById("searchenquiry").style.display="none";

}
function func(){
 
 var type=document.getElementsByName("Enquiry");
 if(type[0].checked){
	var enq=document.getElementById("Enquiry").value;
	
document.getElementById("searchenquiry").style.display = "none";
 document.getElementById("searchenquiry").value = "";
document.getElementById("enquiry_id").readOnly = false;
 document.getElementById("enquiry_id").value = "";
 
 document.getElementById("datepicker").value = "";
 document.getElementById("customer_code").value = "";
 var enquiry_type=document.getElementById("enquiry_type");
 var enquiry_typeresponse =document.getElementById("enquiry_typeresponse").index;
	
	alert(enquiry_typeresponse);
enquiry_type.remove(enquiry_type.enquiry_typeresponse);
$('#enquiry_type option:eq(0)').attr('selected','selected');
  document.getElementById("candidate_name").value = "";
  document.getElementById("mob_no").value = "";
  document.getElementById("email_id").value = "";
  document.getElementById("civil_id").value = "";
  $('input[name=proposal_rqst]').attr('checked',false);
  $('input[name=contract_rqst]').attr('checked',false);
  $('input[name=direct_rqst]').attr('checked',false);
  $('input[name=time]').attr('selected',false);
  document.getElementById("datepicker1").value = "";
  var time=document.getElementById("time");
  var timeresponse=document.getElementById("timeresponse").index;
  time.remove(time.timeresponse);
  var required_course=document.getElementById("required_course");
var requiredcourseresponse =document.getElementById("requiredcourseresponse").index;
required_course.remove(required_course.requiredcourseresponse);
var status=document.getElementById("status");
var statusresponse =document.getElementById("statusresponse").index;
status.remove(status.statusresponse);
var enquiry_formtype=document.getElementById("enquiry_formtype");
var enquiry_formtyperesponse =document.getElementById("enquiry_formtyperesponse").index;
enquiry_formtype.remove(enquiry_formtype.enquiry_formtyperesponse);
$('#enquiry_formtype option:eq(0)').attr('selected','selected');
var pre_comm_mode=document.getElementById("pre_comm_mode");
var Preferred_response =document.getElementById("Preferred_response").index;
pre_comm_mode.remove(pre_comm_mode.Preferred_response);
$('#pre_comm_mode option:eq(0)').attr('selected','selected');

 document.getElementById("remarks").value = "";
  document.getElementById("special_notes").value = "";
document.getElementById("enquiry_id").readOnly = false;
			document.getElementById("civil_id").readOnly = false;
			document.getElementById("mob_no").readOnly = false;
			
			
	autogenerate_no(enq); 
	
	 
			
 }
 else if(type[1].checked){
 document.getElementById("searchenquiry").style.display = "block";
 document.getElementById("enquiry_id").value = "";
  //document.getElementById("search_enquiryid").value = "";
 document.getElementById("enquiry_form1").reset();
 
 }}
function getNo(str){
	var xhttp;
	//var rate= document.querySelector('input[name="Enquiry"]:checked').value;
 //alert(rate);
  if (str.length == 0) { 
    document.getElementById("txtHint").innerHTML = "";
    return;
  }

      

 xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
		
			document.getElementById("txtHint").innerHTML = this.responseText;
			document.getElementById("enquiry_id").readOnly = true;
			document.getElementById("civil_id").readOnly = true;
			document.getElementById("mob_no").readOnly = true;
			
			
			
			}
			
           $('#datepicker').datepicker({
      autoclose: true
    });
$('#datepicker1').datepicker({
      autoclose: true
    });	
	 $(".select2").select2();
		
			
			/* $('input[type=radio][name=Enquiry]').change(function() {
		 if (this.value == 'yes') {
			 var enq=document.getElementById("Enquiry").value;
			// alert(enq);
			 //alert("ii");
        //autogenerate_no(enq); 
    }
    
			 });*/
}
  xhttp.open("GET", "getEnquiryDetails.php?q="+str, true);
  xhttp.send(); 
		
    }
	function autogenerate_no(str1){
		//alert(str1);
		
		
		
		
	var xhttp;
	//var rate= document.querySelector('input[name="Enquiry"]:checked').value;
 //alert(rate);
  if (str1.length == 0) { 
    document.getElementById("txtHint").innerHTML = "";
    return;
  }

      

 xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
		
			document.getElementById("enquiryiddiv").innerHTML = this.responseText;
		
			
			
			
			}
			
           

	
		
			
			
}
  xhttp.open("GET", "getautogenerateno.php?q1="+str1, true);
  xhttp.send(); 
		
    }



	
	
 
  



</script>