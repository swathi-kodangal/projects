<?php
include 'connection.php';
$sql=mysqli_query($connect,"select * from course where Course_no='".$_GET["q1"]."'");
$rows=mysqli_fetch_array($sql);
$trows=mysqli_num_rows($sql);
if($trows>0){

	do
{
?>
<tr>
<td><a><?php echo $rows["Course_no"];?></a></td>
				  <td><?php echo $rows["Course_name"];?></td>
				  <td><?php echo $rows["Duration"];?></td>
				  <td><?php echo $rows["Cost"];?></td>
                  <td><?php echo $rows["No_of_students"];?></td>
				   <td>  <label class="switch">
			  <input type="checkbox" value="<?php $status=$rowslistcourse["status"];?>" <?php if ($status == 'on') echo "checked='checked'";   ?>>
			  <div class="slider round"></div>
			</label>
			</td>
			<td><button id="search-btn" class="btn search-btn" type="submit" name="search">
                            <i class="fa fa-pencil"></i>
                        </button><button id="search-btn" class="btn search-btn" type="submit" name="search">
                            <i class="fa fa-trash"></i>
                        
                        </button>
				  </td>
			</tr>
			<?php }while($rows=mysqli_fetch_array($sql));?>
                                    <?php }else{ ?>
                                        <tr>
                                        	<td colspan="5">No Records</td>
                                        </tr>
                                    <?php } ?>
			

