<?php
include'header.php';
?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
   

    <!-- Main content -->
    
    <!-- /.content -->
 
<section class="content">

      <!-- SELECT2 EXAMPLE -->
     
      <!-- /.box -->
<span class="pull-right" style="padding-bottom:15px;">
            <a href="createenquiryform.php"> <button type="submit" class="btn btn-primary add_btn">Add Enquiry Form</button></a>
            </span>
			<div class="row">
        <div class="col-xs-12">
	  <div class="box">
	  <div class="row">
        <div class="col-xs-12">
            <div class="box-header">
			 <div class="col-xs-6">
              <h3 class="box-title">List of Enquiry </h3>
			  </div>
			   <div class="col-xs-6">
			  	<div id="example1_filter" class="dataTables_filter">
			
			<label>  <select class="form-control input-sm" style="width: 100%;" tabindex="-1" aria-hidden="true">
                    <option selected="selected">Select</option>
                     <option>Business Proposal</option>
                  <option>Business Contract  </option>
                  <option>Batch Mapping </option>
                  <option>Payment </option>
                  <option>Reject Application</option>
                </select> </label>
			
			<label><input type="search" class="form-control input-sm" placeholder="Search" aria-controls="example1"> <i class="fa fa-search" style="position: absolute;    margin-left: -20px;    margin-top: 8px;"></i></label>
			</div>
			</div>		  
            </div>
			</div>		  
            </div>
              <!-- /.box-header -->
            <div class="box-body">
			
              <table id="example1" class="table table-bordered table-striped">
			  
                <thead style=" background: #07294d;color: white;">
                <tr>
				 <th>Enquiry ID </th>
                  <th>Enquiry Date</th>
                  <th>Customer Type</th>
                  <th>Name</th>
                  <th>Contact</th>
				  <th>Course Details </th>
				  <th>Enquiry type</th>
				  <th>Status </th>
				 
				  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                
            <tr>       
 <?php
 include 'connection.php';
 $sql=mysqli_query($connect,"select * from enquiry");
 $rows=mysqli_fetch_array($sql);
 $trows=mysqli_num_rows($sql);
 if($trows>0){
	 ?>
				<?php do{ ?>
				<td><?php echo $rows["Enquiry_no"];?></td>
				<td><?php echo $rows["Enquiry_date"];?></td>
				<td><?php echo $rows["Candidate_type"];?></td>
				<td><?php echo $rows["Name"];?></td>
				<td><?php echo $rows["Mobile_No"];?></td>
				<td><?php echo $rows["RequiredCourse"];?></td>
				
				<td><?php echo $rows["Enquiry_type"];?></td>
				<td><?php echo $rows["Status"];?></td>
 
 <td><button id="search-btn" class="btn search-btn" type="submit" name="search">
                            <i class="fa fa-pencil"></i>
                        </button><button id="search-btn" class="btn search-btn" type="submit" name="search">
                            <i class="fa fa-trash"></i>
                        
                        </button>
				  </td>
				  </tr> 
 <?php }while ($rows=mysqli_fetch_array($sql));?>
                                    <?php }else{ ?>
                                        <tr>
                                        	<td colspan="5">No Records</td>
                                        </tr>
                                    <?php } ?>
 
 

                
               
              
               
             
               
                </tbody>
               
              </table>
			  <div class="row"><div class="col-sm-5"><div class="dataTables_info" id="example1_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries</div></div><div class="col-sm-7"><div class="dataTables_paginate paging_simple_numbers" id="example1_paginate"><ul class="pagination"><li class="paginate_button previous disabled" id="example1_previous"><a href="#" aria-controls="example1" data-dt-idx="0" tabindex="0">Previous</a></li><li class="paginate_button active"><a href="#" aria-controls="example1" data-dt-idx="1" tabindex="0">1</a></li><li class="paginate_button "><a href="#" aria-controls="example1" data-dt-idx="2" tabindex="0">2</a></li><li class="paginate_button "><a href="#" aria-controls="example1" data-dt-idx="3" tabindex="0">3</a></li><li class="paginate_button "><a href="#" aria-controls="example1" data-dt-idx="4" tabindex="0">4</a></li><li class="paginate_button "><a href="#" aria-controls="example1" data-dt-idx="5" tabindex="0">5</a></li><li class="paginate_button "><a href="#" aria-controls="example1" data-dt-idx="6" tabindex="0">6</a></li><li class="paginate_button next" id="example1_next"><a href="#" aria-controls="example1" data-dt-idx="7" tabindex="0">Next</a></li></ul></div></div></div>
            </div>
            <!-- /.box-body -->
          </div>
      </div>
	  </div>
      
       
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