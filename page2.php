<?php
session_start();
//Starts a session so we can record their choices and their information accross pages.
require "sql.php";
//In order to use the checkAv functions to see the availabiltiy we need access to that function.
	// allows the input of name, CWID 
     $_SESSION['fullName'] = $_POST['fullName'];
     $_SESSION['CWID'] = $_POST['CWID'];
     $_SESSION['Residency'] = $_POST['Residency'];
			// if no selection for housing was chosen iterate down to the next form to move on
           if ($_POST["Residency"]=="noSelection"){
                echo ("Availability:");
                echo ('<br>Leo Hall'); checkAv("leo");
                echo ('<br>Champagnat Hall'); checkAv("champ");
                echo ('<br>Marian Hall'); checkAv("marian");
                echo ('<br>Sheahan Hall'); checkAv("sheahan");
                echo ('<br>Midrise Hall'); checkAv("midrise");
                echo ('<br>Foy Townhouses'); checkAv("foy");
                echo ('<br>Gartland Commons'); checkAv("gartland");
                echo ('<br>New TownHouses'); checkAv("new");
                echo ('<br>Lower West'); checkAv("lower_west");
                echo ('<br>Upper West'); checkAv("upper_west");
                echo ('<br>Fulton Street'); checkAv("fulton_street");
                echo ('<br>New Fulton'); checkAv("new_fulton");
                echo ('<br>Talmadge<br>'); checkAv("talmadge");
				// freshman can not choose a townhouse or kitchen so offer them these options
               if (($_POST["Year"]=="Frosh")&&((isset($_POST["Townhouse"]))||(isset($_POST["Kitchen"])))){
               echo ("There is no configuration that exists for these choices.<br>");
                   echo (' Here are some options for freshman:<br> 
                   <Form Name ="toConfirmPage" Method ="POST" ACTION = "page3.php">
                   <select name="Residency">
                   <option value="Leo">Leo Hall</option>
                   <option value="Champ">Champagnat Hall</option>
                   <option value="Marian">Marian Hall</option>
                   <option value="Sheahan">Sheahan Hall</option>
                   </select><br><br>
                   <INPUT TYPE = "Submit" Name = "Submit2" VALUE = "Submit">
                   </Form>');
				// if they are a freshman offer then these options
               }else if ($_POST["Year"]=="Frosh"){
                   echo (' Here are some options for freshman:<br> 
                   <Form Name ="toConfirmPage" Method ="POST" ACTION = "page3.php">
                   <select name="Residency">
                   <option value="Leo">Leo Hall</option>
                   <option value="Champ">Champagnat Hall</option>
                   <option value="Marian">Marian Hall</option>
                   <option value="Sheahan">Sheahan Hall</option>
                   </select><br><br>
                   <INPUT TYPE = "Submit" Name = "Submit2" VALUE = "Submit">
                   </Form>');
				// if they are a sophomore and don't want a kitchen or town here are their options
               }else if ($_POST["Year"]=="Soph"&& ((!isset($_POST["Kitchen"]))&&(!isset($_POST["Townhouse"])))){
                   echo ('Here are some options for sophomores:<br> 
                    <Form Name ="toConfirmPage" Method ="POST" ACTION = "page3.php">
                    <select name="Residency">
                    <option value="Midrise">Midrise Hall</option>
                    <option value="Foy">Foy Townhouses</option>
                    <option value="Gartland">Gartland Commons</option>
                    <option value="New">New TownHouses</option>
                    </select><br><br>
                    <INPUT TYPE = "Submit" Name = "Submit2" VALUE = "Submit">
                    </Form>');
				// if they are a sophomore and want a kitchen or townhouse these are the options
               }else if (($_POST["Year"]=="Soph") &&((isset($_POST["Kitchen"]))||(isset($_POST["Townhouse"])))){
                   echo ('Here are some options for sophomores, with a kitchen and or a townhouse:<br> 
                    <Form Name ="toConfirmPage" Method ="POST" ACTION = "page3.php">
                    <select name="Residency">
                    <option value="Foy">Foy Townhouses</option>
                    <option value="Gartland">Gartland Commons</option>
                    <option value="new">New TownHouses</option>
                    </select><br><br>
                    <INPUT TYPE = "Submit" Name = "Submit2" VALUE = "Submit">
                    </Form>');
               }else{
				// if they are a senior or junior these are the options
                   echo('Here are some options for juniors and seniors:<br>
                    <Form Name ="toConfirmPage" Method ="POST" ACTION = "page3.php">
                    <select name="Residency">
                    <option value="Lower_West">Lower West</option>
                    <option value="Upper_West">Upper West</option>
                    <option value="Fulton_Street">Fulton Street</option>
                    <option value="New_Fulton">New Fulton</option>
                    <option value="Talmadge">Talmadge</option>
                    </select><br><br>
                    <INPUT TYPE = "Submit" Name = "Submit2" VALUE = "Submit">
                    </Form>');
               }
           }                
    else
    {
		// the if statement that only allows freshman to choose only Leo, Champ, Marian, or Sheahan
        $correct = TRUE;
        if ((($_POST["Residency"]=="Leo")|| 
             ($_POST["Residency"]=="Champ")|| 
             ($_POST["Residency"]=="Marian")||
             ($_POST["Residency"]=="Sheahan")) && ($_POST["Year"]!=="Frosh")){
            echo ("Choose a different location, your housing doesn't match your year.<br>");
            $correct = FALSE;
        }
		// the if statement that only allows sophomores to choose only Midrise, Foy, Gartland, or New Townhouses
        if ((($_POST["Residency"]=="Midrise")|| 
             ($_POST["Residency"]=="Foy")|| 
             ($_POST["Residency"]=="Gartland")||
             ($_POST["Residency"]=="new")) && ($_POST["Year"]!=="Soph")){
            echo ("Choose a different location, your housing doesn't match your year.<br>");
            $correct = FALSE;
        }
		// the if statement that allows juniors and seniors to choose only Lower West, Upper West, Fulton, New Fulton, or Talmadge
        if ((($_POST["Residency"]=="Lower_West")|| 
             ($_POST["Residency"]=="Upper_West")|| 
             ($_POST["Residency"]=="Fulton_Street")||
             ($_POST["Residency"]=="New_Fulton")||
             ($_POST["Residency"]=="Talmadge")) && (($_POST["Year"]!=="Junior")&&($_POST["Year"]!=="Senior"))){
            echo ("Choose a different location, your housing doesn't match your year.<br>");
            $correct = FALSE;
        }
		// the if statement that allows the option of townhouse to be checked and print if this is not what housing was picked
        if ((($_POST["Residency"]=="Leo")|| 
             ($_POST["Residency"]=="Champ")|| 
             ($_POST["Residency"]=="Marian")||
             ($_POST["Residency"]=="Sheahan")||
             ($_POST["Residency"]=="Midrise"))&& (isset($_POST["Townhouse"]))){
            echo ("You want a townhouse, but your selection is not a townhouse.<br>");
            $correct = FALSE;
        }
		// the if statement that allows the option of kitchen to be checked and print if this is not what housing was picked
        if ((($_POST["Residency"]=="Leo")|| 
             ($_POST["Residency"]=="Champ")|| 
             ($_POST["Residency"]=="Marian")||
             ($_POST["Residency"]=="Sheahan")||
             ($_POST["Residency"]=="Midrise"))&& (isset($_POST["Kitchen"]))){
            echo ("You want a kitchen, but your selection does not have a kitchen.<br>");
            $correct = FALSE;
        }
		// the button to go forward to the confirmation page if everything is correct
        if ($correct){
            echo (' Your selection fits the criteria, press the button to confirm your selection!
            <Form Name ="toConfirmPage" Method ="POST" ACTION = "page3.php">
            <INPUT TYPE = "Submit" Name = "Submit2" VALUE = "Submit">
            </Form>');
        }else{
		// the button to go back to the previous page
        echo ('<button onclick="window.history.back()">Go back!</button>');
        }
    }
?>