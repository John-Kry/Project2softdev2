
<!--John and Mike worked together on the project
// Collaborated directly on all parts of the document (again)
// Both gave equal input and worked through the entire project in the library
-->
<?php require "sql.php";
//In order to use the checkAv functions to see the availabiltiy we need access to that function.
?>

<html>
    <!--Form for the first page to gather details about who the subject is and what their choices are
-->
            <Form Name ="gatherDetails" Method ="POST" ACTION = "page2.php">
            Name:<input Type = "Text" name = "fullName"><br><br>
            CWID:<input Type = "Text" name = "CWID"><br><br>
            Residential Life Options
            <select name="Residency">
                <option value="noSelection"></option>
                <option value="Leo">Leo Hall<?php checkAv("leo");?></option>
                <option value="Champ">Champagnat Hall<?php checkAv("champ");?></option>
                <option value="Marian">Marian Hall<?php checkAv("marian");?></option>
                <option value="Sheahan">Sheahan Hall<?php checkAv("sheahan");?></option>
                <option value="Midrise">Midrise Hall<?php checkAv("midrise");?></option>
                <option value="foy">Foy Townhouses<?php checkAv("foy");?></option>
                <option value="Gartland">Gartland Commons<?php checkAv("gartland");?></option>
                <option value="New">New TownHouses<?php checkAv("new");?></option>
                <option value="Lower_West">Lower West<?php checkAv("lower_west");?></option>
                <option value="Upper_West">Upper West<?php checkAv("upper_west");?></option>
                <option value="Fulton_Street">Fulton Street<?php checkAv("fulton_street");?></option>
                <option value="New_Fulton">New Fulton<?php checkAv("new_fulton");?></option>
                <option value="Talmadge">Talmadge<?php checkAv("talmadge");?></option>
            </select><br><br>
            Class:
            <select name="Year">
                <option value = "Frosh">Freshman</option>
                <option value = "Soph">Sophmore</option>
                <option value = "Junior">Junior</option>
                <option value = "Senior">Senior</option>
            </select><br>
            <input type="radio" name="Sex" value="Male">Male<br>
            <input type="radio" name="Sex" value="Female">Female
            <br>
            <input type="checkbox" name="Laundry" value="Yes">Laundry on Premise<br>
            <input type="checkbox" name="Townhouse" value="Yes">Townhouse<br>
            <input type="checkbox" name="Kitchen" value="Yes">Kitchen<br>
            <INPUT TYPE = "Submit" Name = "Submit" VALUE = "Submit">
        </Form>
</html>