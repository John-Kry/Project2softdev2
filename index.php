<?php
// John and Mike worked together on the project
// Collaborated directly on all parts of the document
// Both gave equal input and worked through the entire project over Skype


// Starts a new session in which to store variables
session_start();
    echo ('<html>
            <Form Name ="gatherDetails" Method ="POST" ACTION = "page2.php">
            Name:<input Type = "Text" name = "fullName"><br><br>
            CWID:<input Type = "Text" name = "CWID"><br><br>
            Residential Life Options
            <select name="Residency">
                <option value="noSelection"></option>
                <option value="Leo">Leo Hall</option>
                <option value="Champ">Champagnat Hall</option>
                <option value="Marian">Marian Hall</option>
                <option value="Sheahan">Sheahan Hall</option>
                <option value="Midrise">Midrise Hall</option>
                <option value="Foy">Foy Townhouses</option>
                <option value="Gartland">Gartland Commons</option>
                <option value="NewTownhouses">New TownHouses</option>
                <option value="LowerWest">Lower West</option>
                <option value="UpperWest">Upper West</option>
                <option value="FultonStreet">Fulton Street</option>
                <option value="NewFulton">New Fulton</option>
                <option value="Talmadge">Talmadge</option>
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
        </html>');
?>