
<!--John and Mike worked together on the project
// Collaborated directly on all parts of the document
// Both gave equal input and worked through the entire project over Skype
-->
<?php require "sql.php";?>
<html>
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
                <option value="Foy">Foy Townhouses<?php checkAv("foy");?></option>
                <option value="Gartland">Gartland Commons<?php checkAv("gartland");?></option>
                <option value="NewTownhouses">New TownHouses<?php checkAv("new");?></option>
                <option value="LowerWest">Lower West<?php checkAv("lower_west");?></option>
                <option value="UpperWest">Upper West<?php checkAv("upper_west");?></option>
                <option value="FultonStreet">Fulton Street<?php checkAv("fulton_street");?></option>
                <option value="NewFulton">New Fulton<?php checkAv("new_fulton");?></option>
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