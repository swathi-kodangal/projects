<?php
include 'connection.php';
$course_no=$_GET["q"];
$rowid=$_GET["i"];
$sqlCourseid = mysqli_query($connect,"SELECT * FROM course WHERE Course_no='$course_no'");
while($rows=mysqli_fetch_array($sqlCourseid)){

?>
<td>
              <div id="example1_filter" class="dataTables_filter">
			<label>
            <input type="search" class="form-control input-sm" placeholder="Search" aria-controls="example1" style="height:34px;" id="serachcourse<?php echo $rowid?>" name="searchcourse[]" onkeyup="getproposalcoursedetails(this.value,<?php echo $rowid?>)" value="<?php echo $course_no;?>"> 
              <i class="fa fa-search" style="    float: right;padding-right: 10px;margin-top: -22px;"></i>
            </label>		
			</div>
            </td>
 <td>

                  <input type="text" class="form-control" id="Name<?php echo $rowid?>" name="coursename" placeholder=" " value="<?php echo $rows["Course_name"];?>">
        </td>    
<td>		
                  <input type="text" class="form-control" id="duration<?php echo $rowid?>" name="duration"  placeholder=" " value="<?php echo $rows["Duration"];?>"></td>
				  
				  </td>
				  <td> <div class="form-group">
                  <input type="text" class="form-control" id="coursecost<?php echo $rowid?>" name="coursecost" value="<?php echo $rows["Cost"];?>" placeholder=" ">
                </div>
			</td>
                 <td > <div class="form-group">
                  <input type="text" class="form-control" id="noofstudents<?php echo $rowid?>" name="noofstudents"  value="<?php echo $rows["No_of_students"];?>" placeholder=" ">
                </div>
			</td>
              <td>             <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" class="form-control pull-right" id="datepicker<?php echo $rowid?>" name="coursestartdate" placeholder="" value="<?php echo $rows["Course_start_date"];?>">
                </div>
              </td>
			  <td>
             <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" class="form-control pull-right" id="datepicker1<?php echo $rowid?>" name="courseenddate" placeholder="" value="<?php echo $rows["Course_end_date"];?>">
                </div>
              </td>
			  <td><button type="submit" class="btn search-btn btn_remove" name="remove" id="<?php echo $rowid?>">
                            <i class="fa fa-trash"></i>
                        
                        </button>
				  </td>
				  <?php
				  
}
?>