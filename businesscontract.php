<?php
include'header.php';
?>
<div class="content-wrapper">
   <section class="content">  
	    <div class="box box-default"> 
	        <div class="box-header with-border">
             <h3 class="box-title">Create Business Contract</h3>

         
            </div>
	 
	        <div class="row"> 
                <div class="col-md-12 ">
                    <div id="steps">
                        <ul>
                        <li><div class="step" data-desc="Enquiry Completed  ">1</div></li>
                        <li><div class="step" data-desc="Business Proposal ">2</div></li>
                        <li><div class="step active" data-desc="Business Contract">3</div></li>
                        <li><div class="step" data-desc="Batch and Course Mapping">4</div></li>
                        <li><div class="step" data-desc="Payment">5</div></li>
       
                       <!--         <li><div class="step" data-desc="Other">7</div></li> -->
                        </ul>
                    </div>
                </div>
            </div>
	        <form action="addbusinesscontract.php" method="post">
	            <div class="col-md-12">
	                <div class="col-md-4">
                        <div class="padding_zero">
                            <div class="form-group">
                             <label for="exampleInputEmail1">Contract Type</label>
                                <div class="form-group">
				                 <label>
                
				                 <input type="radio" name="c_type" id="Contract" onclick="handleClick(this)" value="new"> <label style="padding:0 18px">New</label>
                                 </label>
                                 <label>
				                 <input type="radio" name="c_type" id="Contract1" onclick="handleClick(this)" value="enquiry"> <label style="padding:0 18px">From Enquiry</label>
                                </label>
				                 <label>
				                <input type="radio" name="c_type" id="Contract2" onclick="handleClick(this)" value="proposal"> <label style="padding:0 18px">From Proposal</label>
                 
                                </label>
				  
			                  </div>
                          </div>
				        </div>
			        </div>
	            </div>
				<div class="box-body" id="newcontract">
	                <div class="row">
	                    <div class="col-md-12 pa-30 ">
		                     <div class="col-md-4"> 
	                             <label>New Contract Type</label>
	                         </div>
	                    </div>
	                </div>
                    <div class="col-md-12 pa-30 ">
		                <div class="col-md-4"> 
                            <div class="padding_zero">
                                <div class="form-group">
                                  <label for="exampleInputEmail1">Name</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder=" ">
                                </div>
				            </div>
						</div>
				        <div class="col-md-4"> 
                            <div class="padding_zero">
                                <div class="form-group">
                                 <label for="exampleInputEmail1">Contract Number</label>
                                   <input type="text" class="form-control" id="exampleInputEmail1" placeholder=" ">
                                </div>
				            </div>
                        </div>
				        <div class="col-md-4"> 
                            <div class="padding_zero">
                                <div class="form-group">
                                 <label>Contract Date</label>
                                    <div class="input-group date">
                                        <div class="input-group-addon">
                                         <i class="fa fa-calendar"></i>
                                        </div>
                                         <input type="text" class="form-control pull-right" id="datepicker" >
                                    </div>
                                    <!-- /.input group -->
                                </div>
				            </div>
                        </div>
				        <div class="col-md-4  ">
			                <div class=" padding_zero" >
			                    <div class="form-group">
                                  <label>Company/Private</label>
                                   <select class="form-control select2 select2-hidden-accessible" style="width: 100%;" tabindex="-1" aria-hidden="true">
                                    <option>Private</option>
                                    <option>Company</option>
				                   </select>
				                </div>
						    </div>	
						</div>
			            <div class="col-md-4"> 
                            <div class="padding_zero">
                                <div id="example1_filter" class="dataTables_filter">
			                       <label for="exampleInputEmail1">Customer No</label>
			                        <input type="search" class="form-control input-sm" placeholder="Search" aria-controls="example1" style="height:34px;"> 
                                  <i class="fa fa-search" style="    float: right;padding-right: 10px;margin-top: -22px;"></i>
            
			                    </div>
				            </div>
                        </div>
				        <div class="col-md-4"> 
                            <div class="padding_zero">
                                <div class="form-group">
                                   <label for="exampleInputEmail1">Prefered By</label>
                                   <input type="text" class="form-control" id="exampleInputEmail1" placeholder=" ">
                                </div>
				            </div>
                        </div>
		            </div>
		        </div>
	            <div class="box-body ">
                    <div id="fromenquiry">
                        <div class="col-md-12  ">
                            <div class="box-header with-border">
                             <h3 class="box-title">Enquiry Details </h3>
                            </div>
                        </div>
		                <div class="col-md-12  ">
                            <div class="col-md-4  ">
			                    <div class=" padding_zero" >
			                        <div class="form-group">
                                     <label>Enquiry ID</label>
                                      <select class="form-control select2 select2-hidden-accessible" style="width: 100%;" tabindex="-1" aria-hidden="true" onchange="getEnquiryNo(this.value)">
									  <option disabled selected hidden>Select</option>
									  <?php 
									  include 'connection.php';
									  $sqlenquiryno=mysqli_query($connect,"select Enquiry_no from enquiry where Contract_Request='Yes'");
									  echo "select Enquiry_no from enquiry where Contract_Request='Yes'";
									  while($rowsenquiryno=mysqli_fetch_array( $sqlenquiryno)){
									  
									  
									  ?>
                                       <option value="<?php echo $rowsenquiryno["Enquiry_no"] ?>"><?php echo $rowsenquiryno["Enquiry_no"] ?></option>
									  <?php } ?>
                                      </select>
				                    </div>
			                    </div>	
							</div>
				        </div>
		                <div class="col-md-12">
						    <div class="fromenquiry" id="fromenquiry1">
                            </div>
		                </div>
		                
		       
               
                        
		       
                 
                        <div class="enquiryproposal" id="enquiryproposal">
                        </div>
                        
                        
				    </div>
				</div>
	            <div class="box-body" id="fromproposal">
                    <div class="col-md-12  ">
                         <div class="box-header with-border">
                            <h3 class="box-title">Proposal Details </h3>
                         </div>
						 <div class="col-md-12  ">
                            <div class="col-md-4  ">
			                    <div class=" padding_zero" >
			                        <div class="form-group">
                                     <label>Proposal No</label>
                                      <select class="form-control select2 select2-hidden-accessible" style="width: 100%;" tabindex="-1" aria-hidden="true" onchange="getProposalNo(this.value)">
									  <option disabled selected hidden>Select</option>
									  <?php 
									  include 'connection.php';
									  $sqlenquiryno=mysqli_query($connect,"select Proposal_no from business_proposal");
									  echo "select Proposal_no from business_proposal";
									  while($rowsProposal_no=mysqli_fetch_array( $sqlenquiryno)){
									  
									  
									  ?>
                                       <option value="<?php echo $rowsProposal_no["Proposal_no"] ?>"><?php echo $rowsProposal_no["Proposal_no"] ?></option>
									  <?php } ?>
                                      </select>
				                    </div>
			                    </div>	
							</div>
				        </div>
						<div id="proposaldetails">
		                
		                </div>
                    </div>  
                </div> 
	        <div class="box-body ">
	            <div class="col-md-12 pa-30 ">
                <!-- /.box-header -->
                    <div class="s">
                        <div class=" ">
                            <div class="">
                              <!-- Custom Tabs -->
							    <div class="nav-tabs-custom" id="contract_tab">
                                    <ul class="nav nav-tabs ">
                                      <li class="active"><a href="#Course_details" data-toggle="tab">Course Details</a></li>
                                      <li><a href="#Proposal_Validate_Details" data-toggle="tab">Proposal Validate Details </a></li>
                                      <li><a href="#TermsandConditions" data-toggle="tab">Terms and Conditions </a></li>
                                    </ul>
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="contract_Course_details">
                                             <table id="example1" class="table table-bordered table-striped">
		                                       <thead style=" background: #07294d;color: white;">
                                                  <tr>
				                                   <th>Course ID </th>
                                                   <th>Course Name</th>
                                                   <th>Duration</th>
				                                   <th>Course Cost</th>
				                                   <th>Max Student</th>
				                                   <th>Course Start Date </th>
				                                   <th>Course End Date </th>
				                                   <th>Total Course Amount</th>
				                                   <th>Total other cost Amount</th>
				                                   <th>Total Amount</th>
                                                  </tr>
                                               </thead>
				                               <tbody id="contractcourse_details">
                                                   
				                                    
				                                </tbody>
		                                    </table>
			
				                        </div>
                                        <div class="tab-pane" id="Proposal_Validate_Details">
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
                                        <div class="tab-pane" id="TermsandConditions">
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
				                                  <td>Risk assessment </td>
				                                  <td>20Days</td>
				                                  <td>10000 </td>
                                                  <td>45  </td>
				                                  <td>  22/MAR/2019</td>
			                                     </tr>
				                                 <tr>
				
                                                  <td><a href="Donor_Deceased_Memorial_View.html">FRI0011</a></td>
				                                  <td>Risk assessment </td>
				                                  <td>20Days</td>
				                                  <td>10000 </td>
                                                  <td>45  </td>
				                                  <td>  22/MAR/2019</td>
	                                             </tr>
				                                </tbody>
		                                    </table>
                                        </div>
			                        </div>
                                     <!-- /.tab-content -->
                                 </div>
                                <div class="nav-tabs-custom" id="enquiry_tab">
                                    <ul class="nav nav-tabs ">
                                      <li class="active"><a href="#Course_details" data-toggle="tab">Course Details</a></li>
                                      <li><a href="#enquiryProposal_Validate_Details" data-toggle="tab">Proposal Validate Details </a></li>
                                      <li><a href="#enquiryTermsandConditions" data-toggle="tab">Terms and Conditions </a></li>
                                    </ul>
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="Course_details">
                                             <table id="example1" class="table table-bordered table-striped">
		                                       <thead style=" background: #07294d;color: white;">
                                                  <tr>
				                                   <th>Course ID </th>
                                                   <th>Course Name</th>
                                                   <th>Duration</th>
				                                   <th>Course Cost</th>
				                                   <th>Max Student</th>
				                                   <th>Course Start Date </th>
				                                   <th>Course End Date </th>
				                                   <th>Total Course Amount</th>
				                                   <th>Total other cost Amount</th>
				                                   <th>Total Amount</th>
                                                  </tr>
                                               </thead>
				                               <tbody id="course_details">
                                                   
				                                    
				                                </tbody>
		                                    </table>
			
				                        </div>
                                        <div class="tab-pane" id="enquiryProposal_Validate_Details">
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
                                        <div class="tab-pane" id="enquiryTermsandConditions">
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
				                                  <td>Risk assessment </td>
				                                  <td>20Days</td>
				                                  <td>10000 </td>
                                                  <td>45  </td>
				                                  <td>  22/MAR/2019</td>
			                                     </tr>
				                                 <tr>
				
                                                  <td><a href="Donor_Deceased_Memorial_View.html">FRI0011</a></td>
				                                  <td>Risk assessment </td>
				                                  <td>20Days</td>
				                                  <td>10000 </td>
                                                  <td>45  </td>
				                                  <td>  22/MAR/2019</td>
	                                             </tr>
				                                </tbody>
		                                    </table>
                                        </div>
			                        </div>
                                     <!-- /.tab-content -->
                                 </div>
                                   <!-- nav-tabs-custom -->
								 <div class="nav-tabs-custom" id="proposal_tab">
                                    <ul class="nav nav-tabs ">
                                      <li class="active"><a href="#Course_details" data-toggle="tab">Course Details</a></li>
                                      <li><a href="#Proposal_Validate_Details" data-toggle="tab">Proposal Validate Details </a></li>
                                      <li><a href="#TermsandConditions" data-toggle="tab">Terms and Conditions </a></li>
                                    </ul>
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="Course_details">
                                             <table id="example1" class="table table-bordered table-striped">
		                                       <thead style=" background: #07294d;color: white;">
                                                  <tr>
				                                   <th>Course ID </th>
                                                   <th>Course Name</th>
                                                   <th>Duration</th>
				                                   <th>Course Cost</th>
				                                   <th>Max Student</th>
				                                   <th>Course Start Date </th>
				                                   <th>Course End Date </th>
				                                   <th>Total Course Amount</th>
				                                   <th>Total other cost Amount</th>
				                                   <th>Total Amount</th>
                                                  </tr>
                                               </thead>
				                               <tbody id="proposalcourse_details">
                                                   
				                                    
				                                </tbody>
		                                    </table>
			
				                        </div>
                                        <div class="tab-pane" id="Proposal_Validate_Details">
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
                                        <div class="tab-pane" id="TermsandConditions">
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
				                                  <td>Risk assessment </td>
				                                  <td>20Days</td>
				                                  <td>10000 </td>
                                                  <td>45  </td>
				                                  <td>  22/MAR/2019</td>
			                                     </tr>
				                                 <tr>
				
                                                  <td><a href="Donor_Deceased_Memorial_View.html">FRI0011</a></td>
				                                  <td>Risk assessment </td>
				                                  <td>20Days</td>
				                                  <td>10000 </td>
                                                  <td>45  </td>
				                                  <td>  22/MAR/2019</td>
	                                             </tr>
				                                </tbody>
		                                    </table>
                                        </div>
			                        </div>
                                     <!-- /.tab-content -->
                                 </div>
                            </div>
		                </div>
		            </div>
		        </div>
	            
	            
	            
	            
				
				
	            <div class="col-md-12 pa-30">
				    <div class="mt-15 ">
                      <button type="submit" class="btn btn-primary add_btn" style="margin-right: 20px;">Submit</button>
		               <button type="submit" class="btn btn-default add_btn" style="margin-right: 20px;">Cancel</button>
		        
                       <a href="" i class="fa fa-envelope-o" aria-hidden="true" style="margin-right: 20px;"></i>Mail</a>
		            </div>
                </div>
	 
	 
	 
	 
	 
	 </form>
	 
	        </div>
	    </div>
		<div id="ifNo" style="visibility:hidden;  position: absolute;  top: 100px; background-color:#fff; padding-bottom:10px">
            <div class="tab-content">
		        <div class="col-md-12 wrap_1	">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Activity Title *</label>
                            <input type="Title" class="form-control" id="exampleInputEmail1" placeholder="Enter Activity Title   ">
                    </div>
				</div>
				<div class="col-md-6">
                    <div class="form-group">
                        <label>City *</label>
                            <select class="form-control select2 select2-hidden-accessible" style="width: 100%;" tabindex="-1" aria-hidden="true">
                                <option selected="selected">Chennai</option>
                                <option>Bangalore </option>
                                <option>Delhi</option>
                                <option>Mumbai</option>
                                <option>Kolkata</option>
                                <option>Ahmedabad</option>
                               <option>Pune</option>
                            </select>
				
                    </div>
				</div>
			    <div class="col-md-6">
                    <div class="form-group">
                         <label>Category *</label>
                              <select class="form-control select2 select2-hidden-accessible" style="width: 100%;" tabindex="-1" aria-hidden="true">
                                 <option selected="selected">Select Category</option>
                                 <option>CME </option>
                                 <option>Organ Donation Awareness</option>
                                 <option>Training program</option>
                                 <option>Meeting</option>
                                 <option>Award</option>
                                 <option>Scroll Text</option>
                             </select>
				
                    </div> 
				</div>
			    <div class="col-md-6">
                    <div class="form-group">
                        <label>Date range *</label>
                           <div class="input-group">
                              <div class="input-group-addon">
                                <i class="fa fa-calendar"></i>
                              </div>
                                <input type="text" class="form-control pull-right" id="reservation">
                           </div>
                        <!-- /.input group -->
                    </div>
		  
		        </div>
			    <div class="col-md-6">
			        <div class="col-md-6 " style="padding:0px">
			            <div class="form-group">
                            <label>Start Time</label>
                                 <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Time">
			            </div>
			        </div>
			    <div class="col-md-6 " style="padding:0px">
			        <div class="form-group">
                         <label>End Time</label>
                             <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Time">
			        </div>
			    </div>
			
			  
                </div>
			  
			    <div class="col-md-6">
                    <div class="form-group">
                         <label>Links *</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter the Link">
                    </div> 
				</div>
		
	            <div class="col-md-6">
		             <label>Status *</label>
		                 <div class="onoffswitch">
		
                            <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="myonoffswitch2" checked>
   			                 <label class="onoffswitch-label" for="myonoffswitch">
      		                 <span class="onoffswitch-inner"></span>
        	                <span class="onoffswitch-switch"></span>
   			                </label>
			             </div>
			    </div>
		
		
	            <div class="col-md-12">
                    <div>
                        <input type="checkbox" id="trigger" name="question"> <label> Show Contact Details</label>
                    </div>
                    <div id="hidden_fields">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Contact Person Name</label>
                                     <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter  ">
                            </div> 
						</div>
			            <div class="col-md-6">
                             <div class="form-group">
                                <label>Contact Number</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter  ">
                             </div>
						</div>
			            <div class="col-md-6">
                            <div class="form-group">
                                  <label>Email_ID</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter ">
                            </div> 
						</div>
			            <div class="col-md-6">
                             <div class="form-group">
                                <label>Venue</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter  ">
                            </div> 
						</div>
		
                    </div>
   
                   <div class="col-md-12 wrap_1">
				        <div class="pull-right">
		   
		                    <button type="submit" class="btn btn-default add_btn">Back</button>
		                    <button type="submit" class="btn btn-primary add_btn">Preview</button>
                        </div>
   
                    </div>
		
		
                </div>
            
            </div>
            <!-- /.col -->
           
            <!-- /.col -->
        </div>
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
function yesnoCheck() {
    if (document.getElementById('yesCheck').checked) {
        document.getElementById('ifYes').style.visibility = 'visible';
      document.getElementById('ifNo').style.visibility = 'Hidden';
    }
    else 
    {
      document.getElementById('ifNo').style.visibility = 'visible';
      document.getElementById('ifYes').style.visibility = 'Hidden';
    }
}
function bodyfunction(){
document.getElementById("fromenquiry").style.display="none";
document.getElementById("fromproposal").style.display="none";
document.getElementById("enquiry_tab").style.display="none";
document.getElementById("proposal_tab").style.display="none";
document.getElementById("contract_tab").style.display="block";
Contract();
}
function handleClick(myradio){
	var c_type=document.getElementsByName("c_type");
	if(c_type[0].checked){
 
var n_ctype=document.getElementById("Contract").value;
	alert(n_ctype);
 document.getElementById("fromenquiry").style.display="none";
document.getElementById("fromproposal").style.display="none";
document.getElementById("enquiry_tab").style.display="none";
document.getElementById("proposal_tab").style.display="none";
 document.getElementById("newcontract").style.display="block";
 document.getElementById("contract_tab").style.display="block";
 
 
 
 }
 else if(c_type[1].checked){
 
var n_ctype=document.getElementById("Contract1").value;
	alert(n_ctype);

 document.getElementById("fromproposal").style.display="none";
    document.getElementById("contract_tab").style.display="none";
	document.getElementById("proposal_tab").style.display="none";
  document.getElementById("fromenquiry").style.display="block";
   document.getElementById("newcontract").style.display="block";
   document.getElementById("enquiry_tab").style.display="block";

 }
 else if(c_type[2].checked){
	var n_ctype=document.getElementById("Contract2").value;
	alert(n_ctype); 
	document.getElementById("fromenquiry").style.display="none";
	document.getElementById("enquiry_tab").style.display="none";
	document.getElementById("contract_tab").style.display="none";
 document.getElementById("fromproposal").style.display="block";
 document.getElementById("proposal_tab").style.display="block";
 }
}
function getEnquiryNo(str){	
 alert("hi");
	var xhttp;
	
  if (str.length == 0) { 
    document.getElementById("fromenquiry1").innerHTML = '';
    return;
  }

      

 xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
		
			document.getElementById("fromenquiry1").innerHTML = this.responseText;
		getCoursefulldetails(str);
		getEnquiryproposaldetails(str);	
			
			
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
		getCoursefulldetails(str);
			//getEnquiryNo();
			
			
			}
			
           

	
		
			
			
}

  xhttp1.open("GET", "getCoursefulldetails.php?q1="+str1, true);
  xhttp1.send(); 
		
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
		
			
			
			
			}
			
           

	
		
			
			
}

  xhttp1.open("GET", "getenquirycCoursefulldetails.php?q1="+str1, true);
  xhttp1.send(); 
		
    }	
	function getEnquiryproposaldetails(str){	
 alert("hi");
	var xhttp;
	
  if (str.length == 0) { 
    document.getElementById("enquiryproposal").innerHTML = '';
    return;
  }

      

 xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
		
			document.getElementById("enquiryproposal").innerHTML = this.responseText;
		
			
			
			}
			
           

	
		
			
			
}
  xhttp.open("GET", "getenquiryproposal.php?q="+str, true);
  xhttp.send(); 
		
    }
	function getProposalNo(str){
		alert("hi");
	var xhttp;
	
  if (str.length == 0) { 
    document.getElementById("proposaldetails").innerHTML = '';
    return;
  }

      

 xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
		
			document.getElementById("proposaldetails").innerHTML = this.responseText;
		getbusinesspcoursedetails(str);
			
			
			}
			
           

	
		
			
			
}
  xhttp.open("GET", "getbusinessproposaldetails.php?q="+str, true);
  xhttp.send(); 
		
		
		
	}
	function getbusinesspcoursedetails(str){
		alert("hi");
	var xhttp;
	
  if (str.length == 0) { 
    document.getElementById("proposalcourse_details").innerHTML = '';
    return;
  }

      

 xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
		
			document.getElementById("proposalcourse_details").innerHTML = this.responseText;
		
			
			
			}
			
           

	
		
			
			
}
  xhttp.open("GET", "getbusinesspcoursedetails.php?q="+str, true);
  xhttp.send(); 
		
		
		
	}
	
</script>
<script>
$('.step').each(function(index, el) {
  $(el).not('.active').addClass('done');
  $('.done').html('<i class="icon-valid"></i>');
  if($(this).is('.active')) {
    $(this).parent().addClass('pulse')
    return false;
  }
});
</script>