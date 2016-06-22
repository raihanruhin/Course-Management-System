<form method="post">
    <table border="0" cellpadding="0" cellspacing="0"  id="id-form-selector">
        <tr>
        <th>PROGRAM :</th>
            <td><select name="program" id="program" class="input-select">
                <option value=<?php echo ModelBag::programid('B.Sc')?>>B.Sc</option>
                <option value=<?php echo ModelBag::programid('MS')?>>MS</option>
            </select>
            </td>
         <th>SEMESTER :</th>
             <td><select name="exam" id="exam" class="input-select">
                <option value="">First year first semester</option>
                <option value="">First year second semester</option>
                <option value="">Second year first semester</option>
                <option value="">Second year second semester</option>
                <option value="">Third year first semester</option>
                <option value="">Third year second semester</option>
                <option value="">Fourth year first semester</option>
                <option value="">Fourth year second semester</option>
            </select>
            </td>
        <th>EXAM :</th> 
             <td><select name="semester" id="semester" class="input-select">
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

