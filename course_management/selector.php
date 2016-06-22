<?php
	//mysql_select_db("cm_db",$link);
	
	$resultprogram = mysql_query("SELECT programid,programname FROM program ORDER BY programname");
	$resultsession = mysql_query("SELECT sessionid,sessionname FROM session ORDER BY sessionname");
	$resultsemester = mysql_query("SELECT semesterid,semestername FROM semester ORDER BY semestername");
	
	?>
<form method="post">
    <table border="0" cellpadding="0" cellspacing="0"  id="id-form-selector">
        <tr>
        <th>PROGRAM :</th>
            <td><select name="program" id="program" class="input-select">
                <?php
                    while($row = mysql_fetch_array($resultprogram))
                        {
                            echo'<option value='. $row['programid'] .'>'.$row['programname'].'</option>';
                        } 
                      ?>
            </select>
            </td>
         <th>SEMESTER :</th>
             <td><select name="semester" id="semester" class="input-select">
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
        <th>EXAM :</th> 
             <td><select name="examyear" id="examyear" class="input-select">
               <?php
                    $i;
                    for($i=2007; $i<=2050; $i++)
                        echo '<option value="'.$i.'">'.$i.'</option>';
                ?>
                </select>
            </td>
            <td><input type="submit" name="submit" value="Submit" class="button1"></td>
            </tr>
    </table>
</form>

