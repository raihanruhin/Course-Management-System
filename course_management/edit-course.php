  <?php include_once 'dbconnect.php';
  		
		$courseid;
  		$coursename;
		$credit;
		$hourweek;
		$mark;
		$programid;
		$programname;
		$semesterid;
		$semestername;
		$sessionid;
		$sessionname;
		$coursetypeid;
		
		
		//mysql_select_db("cm_db",$link);
		$course = mysql_query("SELECT course.courseid,course.coursecode,course.coursename,course.credit,course.hourweek,
							course.mark,course.programid,course.semester,
							program.programname  
							FROM course INNER JOIN program 
							ON course.programid = program.programid 
							WHERE course.coursecode='$code'");
							
		$detail = mysql_query("SELECT detail FROM detail WHERE coursecode = '$code'");
					
		$resultprogram = mysql_query("SELECT programid,programname FROM program ORDER BY programname");
		

		while($row = mysql_fetch_array($course))
                                {
									$courseid = $row['courseid'];
									$coursename = $row['coursename'];
									$coursecode = $row['coursecode'];
                                    $credit = $row['credit'];
									$hourweek = $row['hourweek'];
									$mark = $row['mark'];
									$programname = $row['programname'];
									$programid = $row['programid'];
									$semester = $row['semester'];
								
                                }

      
		echo '<form method="post">
				<input type="hidden" name ="courseid" value="'.$courseid.'"/>
				<input type="hidden" name ="coursecodeprevious" value="'.$coursecode.'"/>
				
					<table border="0">
                    	<tr>
                        	<td>
                                 <table border="0" cellpadding="0" cellspacing="0"  id="id-form"> <!--start input table-->
                                    <tr>
                                        <th valign="top">Course Name:</th>
                                        <td><input type="text" name="coursename" class="inp-form-big" value="'.$coursename.'"/></td>
                                    </tr>
                                    <tr>
                                        <th valign="top">Credit:</th>
                                        <td><input type="text" name= "credit" class="inp-form" value="'.$credit.'"/></td>
                                    </tr>
                                    <tr>
                                        <th valign="top">Hrs/Week:</th>
                                        <td><input type="text" name= "hourweek" class="inp-form" value="'.$hourweek.'"/></td>
                                    </tr>
                                    <tr>
                                        <th valign="top">Marks:</th>
                                        <td><input type="text" name= "mark" class="inp-form" value="'.$mark.'"/></td>
                                    </tr>
									<tr>
										<th valign="top">Details:</th>
                                        <td><textarea id="elm1" name="detail" class="">';
										while($row = mysql_fetch_array($detail))
                                			{
												echo $row['detail'];
											}
										echo '</textarea></td>	
									</tr>
                                    <tr>
                                    <th valign="top">Program:</th>
                                    <td>	
                                    <select  name = "program" class="input-select">
                                        <option value="'.$programid.'" selected> '.$programname.'</option>';
						
                            while($row = mysql_fetch_array($resultprogram))
                                {
									if($row['programname'] != $programname)
                                    echo'<option value='. $row['programid'] .'>'.$row['programname'].'</option>';
                                } 
												
                                    echo '</select>
                                    </td>
                                    </tr>
                                    <tr>
                                    <th valign="top">Semester:</th>
                                    <td>	
                                    <select  name ="semester" class="input-select">
                                        
                                                 <option value="'.$semester.'" selected> '.$semester.'</option>';
													while($row = mysql_fetch_array($resultsemester))
														{
															if($row['semester'] != $semester)
															echo'<option value='. $row['semester'] .'>'.$row['semester'].'</option>';
														} 
                                                                    
                                    echo '</select>
                                    </td>
                                    </tr>
                                    
								<tr>
                                 	<td><input type="submit" name = "update" value="Save" class="button1"></td>
                                </tr>
                                </table>
								
                            </td> <!--end main table-->

                        </tr>
                    </table><!--end main table-->
	
    		</form>';
            
  ?>