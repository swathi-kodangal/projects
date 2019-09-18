<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>ITDS-Create Enquiry Form </title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- bootstrap datepicker -->
  <link rel="stylesheet" href="plugins/datepicker/datepicker3.css">
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="plugins/iCheck/all.css">
  <!-- Bootstrap Color Picker -->
  <link rel="stylesheet" href="plugins/colorpicker/bootstrap-colorpicker.min.css">
  <!-- Bootstrap time Picker -->
  <link rel="stylesheet" href="plugins/timepicker/bootstrap-timepicker.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="plugins/select2/select2.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">

</head>
<body class="hold-transition skin-blue sidebar-mini" onload="bodyfunction()">
<div class="wrapper">

 
  <header class="main-header">
    <!-- Logo -->
   <a href="Dashboard.html" class="logo">
     <img src="images/ITDS_Logo.png" alt="Logo">
     
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          <li class="dropdown messages-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-envelope-o"></i>
              <span class="label label-success">2</span>            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 4 messages</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                 
                  
                
                  <li>
                    <a href="#">
                      <div class="pull-left">
                        <img src="dist/img/user3-128x128.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Activities
                        <small><i class="fa fa-clock-o"></i> Yesterday</small>
                      </h4>
                      <p></p>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="pull-left">
                        <img src="dist/img/user4-128x128.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Admin
                        <small><i class="fa fa-clock-o"></i> 2 days</small>
                      </h4>
                      <p></p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="footer"><a href="#">See All Messages</a></li>
            </ul>
          </li>
          <!-- Notifications: style can be found in dropdown.less -->
          <li class="dropdown notifications-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-bell-o"></i>
              <span class="label label-warning">10</span>            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 10 notifications</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                 
                
                </ul>
              </li>
              <li class="footer"><a href="#">View all</a></li>
            </ul>
          </li>
          <!-- Tasks: style can be found in dropdown.less -->
          <li class="dropdown tasks-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-flag-o"></i>
              <span class="label label-danger">9</span>            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 9 tasks</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
         
                  
                  <!-- end task item -->
                
                  <!-- end task item -->
               
                  <!-- end task item -->
                </ul>
              </li>
              <li class="footer">
                <a href="#">View all tasks</a>
              </li>
            </ul>
          </li>
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
              <span class="hidden-xs">SiteAdmin</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                <p>
                  SiteAdmin
                  <small></small>
                </p>
              </li>
              <!-- Menu Body -->
             
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="#" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="#" data-toggle=""><i class=""></i></a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
      
     
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
        <li class=" treeview">
          <a href="Dashboard.html">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          
          </a>
        
        </li>
       
		    <li class=" treeview">
          <a href="listofenquiry.php">
             <i class="fa fa-calendar"></i>
            <span>Enquiries</span>
            <span class="pull-right-container">
             
            </span>
          </a>
		 </li>
		   <li class=" treeview">
          <a href="createbusinessproposal.php">
             <i class="fa fa-envelope"></i>
            <span> Business Proposal</span>
            <span class="pull-right-container">
            
            </span>
          </a>
       
        </li>
		    <li class=" treeview">
         <a href="businesscontract.php">
            <i class="fa fa-share"></i> <span> Business Contract </span>
			 <span class="pull-right-container">
            
            </span>
          </a>
        </li>
		     <li class=" treeview">
          <a href="registration.html">
             <i class="fa fa-calendar"></i>
            <span>Registration</span>
            <span class="pull-right-container">
             
            </span>
          </a>
		 </li>
		<li class="treeview">
          <a href="payment.html">
             <i class="fa fa-calendar"></i>
            <span>Payment</span>
            <span class="pull-right-container">
             
            </span>
          </a>
		 </li>
		<li class="treeview">
          <a href="listofbatches.html">
            <i class="fa fa-th"></i></i> <span>List Of Batches </span>
          </a>
        </li>
		     <li class=" treeview">
             <a href="attendance.html">
             <i class="fa fa-envelope"></i>
            <span>Attendance</span>
            <span class="pull-right-container">
            
            </span>
          </a>
        </li>
		
		    <li class=" treeview">
          <a href="timetable.html">
             <i class="fa fa-envelope"></i>
            <span>Time Table</span>
            <span class="pull-right-container">
            </span>
          </a>
        </li>
		 <li class="header">MASTER</li>
          <li class="">
          <a href="listofcourse.php">
            <i class="fa fa-th"></i> <span>Courses</span>
            <span class="pull-right-container">

            </span>
          </a>
        </li>
		    <li class=" treeview">
            <a href="listofcustomer.html">
             <i class="fa fa-calendar"></i>
            <span>Customers</span>
            <span class="pull-right-container">
             
            </span>
          </a>
		 </li>
		  <li class=" treeview">
        <a href="listoffaculties.html">
             <i class="fa fa-envelope"></i>
            <span>Faculties</span>
            <span class="pull-right-container">
            
            </span>
          </a>
       
        </li>
		    <li class=" treeview">
            <a href="listofclassroom.html">
             <i class="fa fa-envelope"></i>
            <span>Class Rooms</span>
            <span class="pull-right-container">
            
            </span>
          </a>
        </li>
		    <li class=" treeview">
            <a href="listofstudents.html">
             <i class="fa fa-envelope"></i>
            <span>Students</span>
            <span class="pull-right-container">
            
            </span>
          </a>
        </li>
		
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>


  <!-- Content Wrapper. Contains page content -->
  


  <!-- /.content-wrapper -->
  

  <!-- Control Sidebar -->
  
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  

<!-- jQuery 2.2.3 -->
<script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="bootstrap/js/bootstrap.min.js"></script>
<!-- Select2 -->
<script src="plugins/select2/select2.full.min.js"></script>
<!-- InputMask -->
<script src="plugins/input-mask/jquery.inputmask.js"></script>
<script src="plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
<script src="plugins/input-mask/jquery.inputmask.extensions.js"></script>
<!-- date-range-picker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- bootstrap datepicker -->
<script src="plugins/datepicker/bootstrap-datepicker.js"></script>
<!-- bootstrap color picker -->
<script src="plugins/colorpicker/bootstrap-colorpicker.min.js"></script>
<!-- bootstrap time picker -->
<script src="plugins/timepicker/bootstrap-timepicker.min.js"></script>
<!-- SlimScroll 1.3.0 -->
<script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- iCheck 1.0.1 -->
<script src="plugins/iCheck/icheck.min.js"></script>
<!-- FastClick -->
<script src="plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- Page script -->
<script src="https://cdn.ckeditor.com/4.5.7/standard/ckeditor.js"></script>



<script>
  $(function () {
    //Initialize Select2 Elements
    $(".select2").select2();

    //Datemask dd/mm/yyyy
    $("#datemask").inputmask("dd/mm/yyyy", {"placeholder": "dd/mm/yyyy"});
    //Datemask2 mm/dd/yyyy
    $("#datemask2").inputmask("mm/dd/yyyy", {"placeholder": "mm/dd/yyyy"});
    //Money Euro
    $("[data-mask]").inputmask();

    //Date range picker
    $('#reservation').daterangepicker();
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({timePicker: true, timePickerIncrement: 30, format: 'MM/DD/YYYY h:mm A'});
    //Date range as a button
    $('#daterange-btn').daterangepicker(
        {
          ranges: {
            'Today': [moment(), moment()],
            'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
            'Last 7 Days': [moment().subtract(6, 'days'), moment()],
            'Last 30 Days': [moment().subtract(29, 'days'), moment()],
            'This Month': [moment().startOf('month'), moment().endOf('month')],
            'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
          },
          startDate: moment().subtract(29, 'days'),
          endDate: moment()
        },
        function (start, end) {
          $('#daterange-btn span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
        }
    );

    //Date picker
    $('#datepicker').datepicker({
      autoclose: true
    });

    //iCheck for checkbox and radio inputs
    $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
      checkboxClass: 'icheckbox_minimal-blue',
      radioClass: 'iradio_minimal-blue'
    });
    //Red color scheme for iCheck
    $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
      checkboxClass: 'icheckbox_minimal-red',
      radioClass: 'iradio_minimal-red'
    });
    //Flat red color scheme for iCheck
    $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
      checkboxClass: 'icheckbox_flat-green',
      radioClass: 'iradio_flat-green'
    });

    //Colorpicker
    $(".my-colorpicker1").colorpicker();
    //color picker with addon
    $(".my-colorpicker2").colorpicker();

    //Timepicker
    $(".timepicker").timepicker({
      showInputs: false
    });
	$('#datepicker1').datepicker({
      autoclose: true
    });
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



</body>
</html>
