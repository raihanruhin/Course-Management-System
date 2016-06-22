  <?php
   include_once 'dbconnect.php';
	include_once 'script.php';

		
		$resultprogram = mysql_query("SELECT programid,programname FROM program ORDER BY programname");
		$resultsession = mysql_query("SELECT sessionid,sessionname FROM session ORDER BY sessionname");
		$resultsemester = mysql_query("SELECT semesterid,semestername FROM semester ORDER BY semestername");
		$resultcoursetype = mysql_query("SELECT coursetypeid,typename FROM coursetype ORDER BY typename");
	?>	
    		<!--<div  id="page-heading">
			<h1>Add New Courses</h1> 
			</div>-->
    <form method="post">
    					<table border="0"> <!--start main table-->
                        	<tr>
                            	<td>
                                     <table border="0" cellpadding="0" cellspacing="0"  id="id-form"> <!--start input table-->
                                        <tr>
                                        <th valign="top">Program:</th>
                                        <td>    
                                            <select  name = "program" class="input-select">
                                                <?php
                                                    while($row = mysql_fetch_array($resultprogram))
                                                        {
                                                            echo'<option value='. $row['programid'] .'>'.$row['programname'].'</option>';
                                                        } 
                                                    ?>
                                            </select>
                                        </td>
                                        </tr>
                                        <tr>
                                            <th>Semester :</th>
                                            <td>
                                                <select name="semester" id="semester" class="input-select">
                                                    <option value="1">First year first semester</option>
                                                    <option value="2">First year second semester</option>
                                                    <option value="3">Second year first semester</option>
                                                    <option value="4">Second year second semester</option>
                                                    <option value="5">Third year first semester</option>
                                                    <option value="6">Third year second semester</option>
                                                    <option value="7">Fourth year first semester</option>
                                                    <option value="8">Fourth year second semester</option>
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            </td>
                                            <th>Session Start :</th> 
                                            <td>
                                                <select name="examyearstart" id="examyear" class="input-select">
                                                    <?php
                                                        $i;
                                                        for($i=2007; $i<=2050; $i++)
                                                            echo '<option value="'.$i.'">'.$i.'</option>';
                                                    ?>
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            </td>
                                            <th>Session End :</th> 
                                            <td>
                                                <select name="examyearend" id="examyear" class="input-select">
                                                    <?php
                                                        $i;
                                                        for($i=2007; $i<=2050; $i++)
                                                            echo '<option value="'.$i.'">'.$i.'</option>';
                                                    ?>
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th valign="top">Course Code:</th>
                                            <td><input type="text" name ="coursecode" class="inp-form" /></td>
                                        </tr>
                                        <tr>
                                            <th valign="top">Course Name:</th>
                                            <td><input type="text" name="coursename" class="inp-form-big" /></td>
                                        </tr>
                                        <tr>
                                            <th valign="top">Credit:</th>
                                            <td><input type="text" name= "credit" class="inp-form" /></td>
                                        </tr>
                                        <tr>
                                            <th valign="top">Hrs/Week:</th>
                                            <td><input type="text" name= "hourweek" class="inp-form" /></td>
                                        </tr>
                                        <tr>
                                            <th valign="top">Marks:</th>
                                            <td><input type="text" name= "mark" class="inp-form" /></td>
                                        </tr>
                                        <tr>
                                        	<th valign="top">Details:</th>
                                            <td><textarea id="elm1" name="detail" class=""></textarea></td>
                                        </tr>
                                        <tr>
                                            <td><input type="submit" name = "save" value="Save" class="button1"></td>
                                        </tr>
                                    </table>
                                </td> <!--end main table-->
                                
                            </tr>
                        </table><!--end main table-->
    </form>
    	 
