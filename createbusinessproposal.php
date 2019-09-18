<?php
include'header.php';
?>
  <div class="content-wrapper">
    
	 <!-- Main content -->
   <section class="content">

      <!-- SELECT2 EXAMPLE -->
    <div class="box box-default">
	    <div class="box-header with-border">
          <h3 class="box-title">Create Business Proposal</h3>

        </div>
	    <div class="row"> 
          <div class="col-md-12 ">
            <div id="steps">
             <ul>
               <li><div class="step" data-desc="Enquiry Completed 25/Feb/2019">1</div></li>
               <li><div class="step" data-desc="Business Proposal 27/Feb/2019">2</div></li>
               <li><div class="step active" data-desc="Business Contract">3</div></li>
               <li><div class="step" data-desc="Batch and Course Mapping">4</div></li>
               <li><div class="step" data-desc="Payment">5</div></li>
       
<!--         <li><div class="step" data-desc="Other">7</div></li> -->
             </ul>
           </div>
         </div>
        </div>
		
	<form action="addbusinessproposal.php" method="post">
	  <div class="box-body ">
	  
	     <div class="col-md-12  ">
              <div class="box-header with-border">
          <h3 class="box-title">Create Business Proposal </h3>

          </div>
         </div>
		<div class="col-md-12 ">
	     <div class="col-md-4 ">
			
			<div class=" padding_zero">
            <div class="form-group " >
			  <div class="">
			  <label for="exampleInputEmail1">Business Proposal </label>
                   <div class="form-group">
			  <label>
                
				 <input type="radio" name="proposals" id="proposals" value="enquiry"  onclick="proposal()" > <label style="padding:0 18px">From Enquiry</label>
                </label>
                <label>
				  <input type="radio"  name="proposals" id="proposals1" onclick="proposal()" value="proposal"> <label style="padding:0 18px"> New Proposal </label>
                 
                </label>
			  
                 
				  </div>

             </div>
             </div>
             </div>
             </div>
        </div>
		<div class="col-md-12" id="searchid">
            <div class="col-md-4  ">
			  <div class=" padding_zero" >
			    <div class="form-group">
                 <label>Enquiry ID</label>
                   <!--<input type="text" name="search_enquiryid" id="search_enquiryid" class="form-control" id="" placeholder="Search" onkeyup="getEnquiryNo(this.value)"> <i class="fa fa-search" style="position: absolute;    margin-left: 290px;    margin-top: -24px;"></i>-->
				 <select class="form-control select2 select2-hidden-accessible" style="width: 100%;" tabindex="-1" aria-hidden="true" name="enquiry_type" id="enquiry_type" onchange="getEnquiryNo(this.value)" value="" data-placeholder="Select">
				<!-- <option disabled selected hidden>Select  </option>-->
				 <?php 
				  include 'connection.php';
                  $sql=mysqli_query($connect,"select Enquiry_no from enquiry where Proposal_Request='Yes'");
				  while($rows=mysqli_fetch_array($sql)){
                  
				 ?>
                
                  <option value="<?php echo $rows["Enquiry_no"];?>"><?php echo $rows["Enquiry_no"];?></option>
				  <?php } ?>
                </select>
                </div>
			 </div>	
			</div>
	    </div>
	    <div class="fromenquiry" id="fromenquiry">
             
		</div>
		<div class="col-md-12">
            <div class="box-header with-border">
               <h3 class="box-title">Business Proposal Details  </h3>
			</div>
        </div>
		&nbsp;
	    &nbsp;
	    <div class="col-md-12" id="proposalenquiry">
	           <div id="proposalno">
                <div class="col-md-4"> 
                 <div class="padding_zero">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Proposal Number</label>
                    <input type="text" class="form-control" name="enquiry_proposalno" id="ProposalNo" placeholder=" ">
                  </div>
				 </div>
                 
                </div>
               </div>
				
                <div class="col-md-4"> 
                 <div class=" padding_zero ">
			       <div class="form-group">
                    <label>Proposal Date</label>

                     <div class="input-group date">
                       <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                       </div>
                       <input type="text" class="form-control pull-right" id="datepicker" name="enquiry_pdate" >
                    </div>
                <!-- /.input group -->
             
		          </div>
			    </div>	
               </div>
			    <div class="col-md-4"> 
                  <div class=" padding_zero" >
			        <div class="form-group">
                     <label>Language</label>
                       <select class="form-control select2 select2-hidden-accessible" style="width: 100%;" tabindex="-1" aria-hidden="true" name="enquiry_lang" data-placeholder="Select">
                 
                        <option>English</option>
				        <option>Hindi</option>
                        <option>Arabic</option>
                        <option>Bengali</option>
                       </select>
				
                    </div>
			     </div>
               </div>
                 
        </div>
        <div class="newproposal" id="newproposal">
	   
		   <div class="col-md-12">
		    <div id="businessproposal">
			  <div class="col-md-4"> 
                <div class="padding_zero">
                   <div class="form-group">
                     <label for="exampleInputEmail1">Proposal No:</label>
                      <input type="text" class="form-control" name="business_proposalno" id="ProposalNo1" placeholder=" ">
                   </div>
				</div>
                 
              </div>
            </div>
               
              <div class="col-md-4"> 
                <div class="padding_zero">
                   <div class="form-group">
                     <label for="exampleInputEmail1">Proposal Date:</label>
                      <div class="input-group date">
                        <div class="input-group-addon">
                          <i class="fa fa-calendar"></i>
                        </div>
                          <input type="text" class="form-control pull-right" id="datepicker1" name="business_pdate" >
                      </div>
                    </div>
				</div>
              </div>
              <div class="col-md-4"> 
                 <div class="padding_zero">
                   <div class="form-group">
                     <label for="exampleInputEmail1">Private/Company</label>
				       <select class="form-control select2 select2-hidden-accessible" style="width: 100%;" tabindex="-1" aria-hidden="true" data-placeholder="Select" name="proposalcandidate_type">
                         <option selected="selected">Private</option>
                         <option>Company</option>
                  
				  
                       </select>
                    </div>
				  </div>
               </div>
			   <div class="col-md-4"> 
                  <div class="padding_zero">
                    <div id="example1_filter" class="dataTables_filter">
			        <label for="exampleInputEmail1">Customer Code</label>
			
                      <input type="text" class="form-control input-sm" placeholder="Search" aria-controls="example1" style="height:34px;" onkeyup="getCustomerdetails(this.value)" id="customer_code" name="p_customer_code"> 
                      <i class="fa fa-search" style="    float: right;padding-right: 10px;margin-top: -22px;"></i>
            
			        </div>
				  </div>
                </div>
			 <div id="CustomerDetails">
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
		     </div>
				<div class="col-md-4"> 
                  <div class="padding_zero">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Prefered by</label>
                       <input type="text" class="form-control" id="preferred_by" placeholder=" " name="preferred_by">
                    </div>
				  </div>
                </div>
           </div>
			  
	    </div>
        <div class="box-body" id="enquiry_tab">
          <div class="col-md-12 pa-30 ">
           <!-- /.box-header -->
       
          
          <!-- Custom Tabs -->
            <div class="nav-tabs-custom">
              <ul class="nav nav-tabs ">
                <li class="active"><a href="#course" data-toggle="tab">Course Details</a></li>
                <li><a href="#Proposal_validate" data-toggle="tab">Proposal Validate Details</a></li>
              
                <li><a href="#terms" data-toggle="tab">Terms and Conditions </a></li>
             </ul> 
            <div class="tab-content">
                <div class="tab-pane active" id="course">     
				 <table id="example1" class="table table-bordered table-striped">
		           <thead style=" background: #07294d;color: white;">
                     <tr>
				       <th>Course ID </th>
                       <th>Course Name</th>
                       <th>Duration in Day's</th>
				       <th>Course Cost </th>
				       <th>No of Student</th>
				       <th>Course Start Date </th>
				       <th>Course End Date </th>
                    </tr>
                  </thead>
				  <tbody id="course_details">
                
				 
				   </tbody>
		       </table>
			  </div> 
               <div class="tab-pane" id="Proposal_validate">
			     <table id="example1" class="table table-bordered table-striped">
		          <thead style=" background: #07294d;color: white;">
                    <tr>
				     <th>Description</th>
                  
                    </tr>
                  </thead>
				  <tbody>
                    <tr>
				
                    <td>
				     <div class="col-md-4">
					   <select class="form-control select2 select2-hidden-accessible " data-placeholder="Add tools" style="width: 100%;" tabindex="-1" aria-hidden="true">
                          <option>10 days</option>
                           <option>20 days</option>
                  
				  
                       </select>
					 </div>
					</td>
				  
			
				
				  
                   </tr>
				 
				 </tbody>
		       </table>
              </div>
              
               <div class="tab-pane" id="terms">
			    <table id="example1" class="table table-bordered table-striped">
		          <thead style=" background: #07294d;color: white;">
                    <tr>
				     <th>Course ID </th>
                     <th>Course Name</th>
                     <th>Duration in Day's</th>
				     <th>Course Cost </th>
				     <th>Max Student</th>
				     <th>Course Start Date </th>
                    </tr>
                  </thead>
				<tbody>
                  <tr>
				
                    <td><a href="Donor_Deceased_Memorial_View.html">FRI0011</a></td>
				    <td>Work at height </td>
				    <td>20Days</td>
				    <td>10000 </td>
                    <td>45  </td>
				    <td>  22/MAR/2019</td>
			
				
				  
                 </tr>
				 <tr>
				
                   <td><a href="Donor_Deceased_Memorial_View.html">FRI0011</a></td>
				   <td>Work at height </td>
				   <td>20Days</td>
				   <td>10000 </td>
                   <td>45  </td>
				   <td>  22/MAR/2019</td>
			
				
				 
                </tr>
				</tbody>
		       </table>
              </div>
            </div>
            </div>
           </div>
        </div>
        <div class="box-body" id="proposaltab">
          <div class="col-md-12 pa-30 ">
        <!-- /.box-header -->
       
          
          <!-- Custom Tabs -->
            <div class="nav-tabs-custom">
                <ul class="nav nav-tabs ">
                  <li class="active"><a href="#course1" data-toggle="tab">Course Details</a></li>
                  <li><a href="#Proposal_validate1" data-toggle="tab">Proposal Validate Details</a></li>
              
                  <li><a href="#terms1" data-toggle="tab">Terms and Conditions </a></li>
                </ul> 
                <div class="tab-content">
                    <div class="tab-pane active" id="course1">     
				        <table id="proposalcoursetable" class="table table-bordered   table-striped">
		                    <thead style=" background: #07294d;color: white;">
                                <tr>
				                    <th>Course ID </th>
                                    <th>Course Name</th>
                                    <th>Duration in Day's</th>
				                    <th>Course Cost </th>
				                    <th>No of Student</th>
				                    <th>Course Start Date </th>
				                    <th>Course End Date </th>
				                    <th> </th> 
				                     <th> </th>
                                </tr>
                            </thead>
				            <tbody id="proposalresponse" >
      
				
				            </tbody>
				
		                </table>
					    <button type="button" name="addcourse" id="addcourse" class="btn btn-success">Add More</button>
				    </div> 
               <div class="tab-pane" id="Proposal_validate1">
			            <table id="example1" class="table table-bordered table-striped">
		                    <thead style=" background: #07294d;color: white;">
                                <tr>
				                   <th>Description</th>
                  
                                </tr>
                            </thead>
				            <tbody>
                                <tr>
				
                                   <td>
				                      <div class="col-md-4">
									  <select class="form-control select2 select2-hidden-accessible " data-placeholder="Add tools" style="width: 100%;" tabindex="-1" aria-hidden="true">
                                    <option>10 days</option>
                                     <option>20 days</option>
                  
				  
                                     </select>
									 </div>
									</td>
				  
			
				
				  
                                </tr>
				 
				            </tbody>
		                </table>
              </div>
              
               <div class="tab-pane" id="terms1">
			            <table id="example1" class="table table-bordered table-striped">
		                     <thead style=" background: #07294d;color: white;">
                              <tr>
				                 <th>Course ID </th>
                                 <th>Course Name</th>
                                 <th>Duration in Day's</th>
				                 <th>Course Cost </th>
				                 <th>Max Student</th>
				                 <th>Course Start Date </th>
                               </tr>
                             </thead>
				              <tbody>
                                <tr>
				
                                <td><a href="Donor_Deceased_Memorial_View.html">FRI0011</a></td>
				                 <td>Work at height </td>
				                 <td>20Days</td>
				                  <td>10000 </td>
                                  <td>45  </td>
				                  <td>  22/MAR/2019</td>
			
				
				  
                                </tr>
				                <tr>
				
                                  <td><a href="Donor_Deceased_Memorial_View.html">FRI0011</a></td>
				                  <td>Work at height </td>
				                  <td>20Days</td>
				                  <td>10000 </td>
                                  <td>45  </td>
				                  <td>  22/MAR/2019</td>
			
				
				  
                                </tr>
				               </tbody>
		                  </table>
              </div>
             </div>
           </div>
         </div>
      </div>











     <div class="col-md-12 pa-30">
			 <div class="mt-15 ">
                 <button type="submit" class="btn btn-primary add_btn" style="margin-right: 20px;" onclick="submit()">Submit</button>
		         <button type="submit" class="btn btn-default add_btn" style="margin-right: 20px;">Cancel</button>
		        
              <!--  <a href="" i class="fa fa-envelope-o" aria-hidden="true" style="margin-right: 20px;"></i>Mail</a>-->
		      </div>
           </div>
      </div>
      
	  
	  
	  
	       
	</div>


  </form>
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
        
      </div>
      <!-- /.tab-pane -->
    </div>
  </aside>
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->
<script>
$('.step').each(function(index, el) {
  $(el).not('.active').addClass('done');
  $('.done').html('<i class="icon-valid"></i>');
  if($(this).is('.active')) {
    $(this).parent().addClass('pulse')
    return false;
  }
});
function bodyfunction(){

document.getElementById("newproposal").style.display="none";
document.getElementById("proposaltab").style.display="none";
document.getElementById("proposaladdcourse").style.display="none";
}
function proposal(){
	var type=document.getElementsByName("proposals");
	
 if(type[0].checked){
	//alert("hi");
	 document.getElementById("enquiry_type").value = "";
	 $('#enquiry_type').change();
	 var enq=document.getElementById("proposals").value;
	 //alert(enq);
	  autogenerate_proposal_no(enq); 
	  document.getElementById("course_details").innerHTML="";
	  
	  document.getElementById("fromenquiry").style.display="block";
      document.getElementById("searchid").style.display="block";
      document.getElementById("enquiry_tab").style.display="block";
      document.getElementById("proposalenquiry").style.display="block";
      document.getElementById("newproposal").style.display="none";
      document.getElementById("proposaltab").style.display="none";
      document.getElementById("proposaladdcourse").style.display="none"; 
 
 }
 else if(type[1].checked){
	// alert("hiiii");
	// alert("hiiii");
	 var proposall=document.getElementById("proposals1").value;
	autogenerate_proposal_no1(proposall);
	 document.getElementById("customer_code").value="";
	 document.getElementById("Name").value="";
	 document.getElementById("cont_no").value="";
	 document.getElementById("civil_no").value="";
	 document.getElementById("Name").readOnly=false;
	 document.getElementById("cont_no").readOnly=false;
	 document.getElementById("civil_no").readOnly=false;
	 document.getElementById("proposalresponse").innerHTML="";
	 document.getElementById("fromenquiry").innerHTML="";
	 document.getElementById("searchid").style.display="none";
	 document.getElementById("fromenquiry").style.display="none";
	 document.getElementById("proposalenquiry").style.display="none"; 
	 document.getElementById("enquiry_tab").style.display="none";
	 document.getElementById("newproposal").style.display="block"; 
     document.getElementById("proposaltab").style.display="block";
     document.getElementById("proposaladdcourse").style.display="block";
	
	 
	 
 }
	
}
function getEnquiryNo(str){	
 
	var xhttp;
	
  if (str.length == 0) { 
    document.getElementById("fromenquiry").innerHTML = '';
    return;
  }

      

 xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
		
			document.getElementById("fromenquiry").innerHTML = this.responseText;
		getCoursefulldetails(str);
			
			
			
			}
			
           

	
		
			
			
}
  xhttp.open("GET", "getFullenquirydetails.php?q="+str, true);
  xhttp.send(); 
		
    }
	function getCoursefulldetails(str1){	
	//alert(str1);
	var xhttp1;
	//var rate= document.querySelector('input[name="Enquiry"]:checked').value;
 //alert(rate);
  if (str1.length == "") { 
    document.getElementById("getCourseidresponse").innerHTML = '';
    return;
  }

      

 xhttp1 = new XMLHttpRequest();
  xhttp1.onreadystatechange = function() {
	  
    if (this.readyState == 4 && this.status == 200) {
		
			document.getElementById("course_details").innerHTML = this.responseText;
		
			//getEnquiryNo();
			
			
			}
			
           

	
		
			
			
}

  xhttp1.open("GET", "getCoursefulldetails.php?q1="+str1, true);
  xhttp1.send(); 
		
    }
	function autogenerate_proposal_no(str){
		//alert(str);
		var xhttp1;
	
  if (str.length == 0) { 
    document.getElementById("proposalno").innerHTML = "";
    return;
  }

      

 xhttp1 = new XMLHttpRequest();
  xhttp1.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
		
			document.getElementById("proposalno").innerHTML = this.responseText;
		
			
			
			
			}
			
           

	
		
			
			
}
  xhttp1.open("GET","getproposalno.php?q1="+str, true);
  xhttp1.send(); 
		
	}
	function autogenerate_proposal_no1(str){
		//alert(str);
		var xhttp1;
	
  if (str.length == 0) { 
    document.getElementById("businessproposal").innerHTML = "";
    return;
  }

      

 xhttp1 = new XMLHttpRequest();
  xhttp1.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
		
			document.getElementById("businessproposal").innerHTML = this.responseText;
		
			
			
			
			}
			
           

	
		
			
			
}
  xhttp1.open("GET","getbusinessproposalno.php?q1="+str, true);
  xhttp1.send(); 
		
	}
</script>
<script>  

      var i=0;  
	  
      $('#addcourse').click(function(){  
	 
           i++;  
 $('#proposalcoursetable').append('<tr id="row'+i+'"><td><input type="search" class="form-control input-sm" placeholder="Search" aria-controls="example1" style="height:34px;" id="serachcourse'+i+'" name="searchcourse[]" onkeyup="getproposalcoursedetails(this.value,i)"><i class="fa fa-search" style="float: right;padding-right: 10px;margin-top: -22px"></i></td><td><div class="form-group"><input type="text" class="form-control" id="Name'+i+'" name="coursename" class="Name" placeholder=""></div></td><td><div class="form-group"><input type="text" class="form-control" id="duration'+i+'" name="duration" class="duration" placeholder=" "></div></td><td> <div class="form-group"><input type="text" class="form-control" id="coursecost'+i+'" name="coursecost" placeholder=" "></div></td><td><div class="form-group"><input type="text" class="form-control" id="noofstudents'+i+'" name="noofstudents" placeholder=" "></div></td><td><div class="input-group date"><div class="input-group-addon"><i class="fa fa-calendar"></i></div><input type="text" class="form-control pull-right" id="datepicker'+i+'" name="coursestartdate" placeholder=""></div></td><td><div class="input-group date"><div class="input-group-addon"><i class="fa fa-calendar"></i></div><input type="text" class="form-control pull-right" id="datepicker'+i+'" name="courseenddate" placeholder=""></div></td><td><button type="submit" class="btn search-btn btn_remove" name="remove" id="'+i+'"><i class="fa fa-trash"></i></button></td></tr>');  

      });  
	$(document).on('click', '.btn_remove', function(){ 
	
           var button_id = $(this).attr("id");  
	   
           $('#row'+button_id+'').remove();  
      });  
	  /* $('#serachcourse').keyup(function(){  
	  alert(this.value);
	   });*/
	   function getproposalcoursedetails(str,i){
		   
		 
		  var xhttp;
if (str.length == 0) { 

    document.getElementById("serachcourse"+i).value="";
    document.getElementById("Name"+i).value="";
    document.getElementById("duration"+i).value="";
    document.getElementById("coursecost"+i).value="";
    document.getElementById("noofstudents"+i).value="";
    document.getElementById("datepicker"+i).value="";
    document.getElementById("datepicker1"+i).value="";
    return;
  }

      

 xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
	
			document.getElementById("row"+i).innerHTML = this.responseText;
		
		
		
			
			
			
			}
			
           

	
		
			
			
}

  xhttp.open("GET", "getproposalcoursedetails.php?q="+str+"&i="+i, true);
  xhttp.send(); 
		   
	   }
	  
function getCustomerdetails(str){
	//alert(str);
	 var xhttp;
	 
	 xhttp= new XMLHttpRequest();
		 xhttp.onreadystatechange=function(){
			 if(this.readyState==4 && this.status==200){
				 document.getElementById("CustomerDetails").innerHTML=this.responseText; 
				 
			 }
			 
		 }
		  xhttp.open("GET", "getCustomerdetails.php?q="+str, true);
  xhttp.send(); 
		
}


 </script>
 