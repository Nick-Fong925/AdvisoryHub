<!DOCTYPE html>
<html lang="en">
<head>
    <title></title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="index.css">
    <script src="index.js"></script>
</head>
<body>
<h3>Reset</h3>
 <p>If you wish to reset the table press on the reset button. If this is the first time you're running this page, you MUST use reset.</p>

<form method="POST" action="index.php">
        <!-- if you want another page to load after the button is clicked, you have to specify that page in the action parameter -->
        <input type="hidden" id="resetTablesRequest" name="resetTablesRequest">
        <p><input type="submit" value="Reset" name="reset"></p>
</form>
<h3>Add New Coop-Advisor</h3>
<form method ="POST" action="index.php">
<input type="hidden" id ="insertCoopAdvisorRequest" name = "insertCoopAdvisorRequest">
    <label for="CoopAdvisorAdvisorID">Advisor ID:</label>
    <input
            type="number"
            id="CoopAdvisorAdvisorID"
            name="CoopAdvisorAdvisorID"
    /><br />

    <label for="CoopAdvisorFirstName">First Name:</label>
    <input
            type="text"
            id="CoopAdvisorFirstName"
            name="CoopAdvisorFirstName"
    /><br />

    <label for="CoopAdvisorLastName">Last Name:</label>
    <input
            type="text"
            id="CoopAdvisorLastName"
            name="CoopAdvisorLastName"
    /><br />

    <label for="CoopAdvisorEmailAddress">Email Address:</label>
    <input
            type="email"
            id="CoopAdvisorEmailAddress"
            name="CoopAdvisorEmailAddress"
    /><br />

    <label for="CoopAdvisorPhoneNumber">Phone Number:</label>
    <input
            type="tel"
            id="CoopAdvisorPhoneNumber"
            name="CoopAdvisorPhoneNumber"
    /><br />

    <input type="submit" value="Create" name="insertCoopAdvisor"></p>
</form>

<h3>Update New Coop-Advisor</h3>
<form method ="POST" action="index.php">
<input type="hidden" id ="updateCoopAdvisorRequest" name = "updateCoopAdvisorRequest">
    <label for="OldCoopAdvisorAdvisorID">Old Advisor ID:</label>
    <input
            type="number"
            id="CoopAdvisorAdvisorID"
            name="OldCoopAdvisorAdvisorID"
    /><br />
    
    <label for="CoopAdvisorAdvisorID">Advisor ID:</label>
    <input
            type="number"
            id="CoopAdvisorAdvisorID"
            name="CoopAdvisorAdvisorID"
    /><br />

    <label for="OldCoopAdvisorFirstName">Old First Name:</label>
    <input
            type="text"
            id="CoopAdvisorFirstName"
            name="OldCoopAdvisorFirstName"
    /><br />
    
    <label for="CoopAdvisorFirstName">First Name:</label>
    <input
            type="text"
            id="CoopAdvisorFirstName"
            name="CoopAdvisorFirstName"
    /><br />

    <label for="OldCoopAdvisorLastName">Old Last Name:</label>
    <input
            type="text"
            id="CoopAdvisorLastName"
            name="OldCoopAdvisorLastName"
    /><br />
    
    <label for="CoopAdvisorLastName">Last Name:</label>
    <input
            type="text"
            id="CoopAdvisorLastName"
            name="CoopAdvisorLastName"
    /><br />

    <label for="OldCoopAdvisorEmailAddress">Old Email Address:</label>
    <input
            type="email"
            id="CoopAdvisorEmailAddress"
            name="OldCoopAdvisorEmailAddress"
    /><br />

    <label for="CoopAdvisorEmailAddress">Email Address:</label>
    <input
            type="email"
            id="CoopAdvisorEmailAddress"
            name="CoopAdvisorEmailAddress"
    /><br />

    <label for="OldCoopAdvisorPhoneNumber">Old Phone Number:</label>
    <input
            type="tel"
            id="CoopAdvisorPhoneNumber"
            name="CoopAdvisorPhoneNumber"
    /><br />

    <label for="CoopAdvisorPhoneNumber">Phone Number:</label>
    <input
            type="tel"
            id="CoopAdvisorPhoneNumber"
            name="CoopAdvisorPhoneNumber"
    /><br />


    <input type="submit" value="Create" name="updateCoopAdvisor"></p>
</form>






<h3>Add Student</h3>
<form method ="POST" action="index.php">
<input type="hidden" id ="insertStudentRequest" name = "insertStudentRequest">
    <label for="StudentStudentID">Student ID:</label>
    <input
            type="number"
            id="StudentStudentID"
            name="StudentStudentID"
    /><br />

    <label for="StudentAdvisorID">Advisor ID:</label>
    <input
            type="number"
            id="StudentAdvisorID"
            name="StudentAdvisorID"
    /><br />

    <label for="StudentFirstName">First Name:</label>
    <input type="text" id="StudentFirstName" name="StudentFirstName" /><br />

    <label for="StudentLastName">Last Name:</label>
    <input type="text" id="StudentLastName" name="StudentLastName" /><br />

    <label for="StudentEmail">Email:</label>
    <input type="email" id="StudentEmail" name="StudentEmail" /><br />

    <label for="StudentPhoneNumber">Phone Number:</label>
    <input
            type="tel"
            id="StudentPhoneNumber"
            name="StudentPhoneNumber"
    /><br />

    <label for="StudentCurrentYear">Current Year:</label>
    <input
            type="number"
            id="StudentCurrentYear"
            name="StudentCurrentYear"
    /><br />

    <label for="StudentNumberofCompletedTerms">Number of Completed Terms:</label>
    <input
            type="number"
            id="StudentNumberofCompletedTerms"
            name="StudentNumberofCompletedTerms"
    /><br />

    <label for="StudentJobPreferences">Job Preferences:</label>
    <input
            type="text"
            id="StudentJobPreferences"
            name="StudentJobPreferences"
    /><br />

    <input type="button" value="Create" onclick="insertStudent()" />
</form>




<h3>Count the Tuples in CoopAdvisor</h3>
<form method="GET" action="index.php">
    <input type="hidden" id="countTupleRequest" name="countTupleRequest">
    <p><input type="submit" value="Count Tuples" name="countTuples"></p>
</form>

<h3> Display CoopAdvisorTable</h3>
<form method="Get" action="index.php">
    <input type="hidden" id="displayTableRequest" name="displayTableRequest">
    <p><input type="submit" value="Display Table" name="DisplayTable"></p>
</form>



<?php
		//this tells the system that it's no longer just parsing html; it's now parsing PHP

        $success = True; //keep track of errors so it redirects the page only if there are no errors
        $db_conn = NULL; // edit the login credentials in connectToDB()
        $show_debug_alert_messages = False; // set to True if you want alerts to show you which methods are being triggered (see how it is used in debugAlertMessage())

        function debugAlertMessage($message) {
            global $show_debug_alert_messages;

            if ($show_debug_alert_messages) {
                echo "<script type='text/javascript'>alert('" . $message . "');</script>";
            }
        }

        function executePlainSQL($cmdstr) { //takes a plain (no bound variables) SQL command and executes it
            //echo "<br>running ".$cmdstr."<br>";
            global $db_conn, $success;

            $statement = OCIParse($db_conn, $cmdstr);
            //There are a set of comments at the end of the file that describe some of the OCI specific functions and how they work

            if (!$statement) {
                echo "<br>Cannot parse the following command: " . $cmdstr . "<br>";
                $e = OCI_Error($db_conn); // For OCIParse errors pass the connection handle
                echo htmlentities($e['message']);
                $success = False;
            }

            $r = OCIExecute($statement, OCI_DEFAULT);
            if (!$r) {
                echo "<br>Cannot execute the following command: " . $cmdstr . "<br>";
                $e = oci_error($statement); // For OCIExecute errors pass the statementhandle
                echo htmlentities($e['message']);
                $success = False;
            }

			return $statement;
		}

        function executeBoundSQL($cmdstr, $list) {
            /* Sometimes the same statement will be executed several times with different values for the variables involved in the query.
		In this case you don't need to create the statement several times. Bound variables cause a statement to only be
		parsed once and you can reuse the statement. This is also very useful in protecting against SQL injection.
		See the sample code below for how this function is used */

			global $db_conn, $success;
			$statement = OCIParse($db_conn, $cmdstr);

            if (!$statement) {
                echo "<br>Cannot parse the following command: " . $cmdstr . "<br>";
                $e = OCI_Error($db_conn);
                echo htmlentities($e['message']);
                $success = False;
            }

            foreach ($list as $tuple) {
                foreach ($tuple as $bind => $val) {
                    //echo $val;
                    //echo "<br>".$bind."<br>";
                    OCIBindByName($statement, $bind, $val);
                    unset ($val); //make sure you do not remove this. Otherwise $val will remain in an array object wrapper which will not be recognized by Oracle as a proper datatype
				}

                debug_to_console($statement);
                $r = OCIExecute($statement, OCI_DEFAULT);
                if (!$r) {
                    echo "<br>Cannot execute the following command: " . $cmdstr . "<br>";
                    $e = OCI_Error($statement); // For OCIExecute errors, pass the statementhandle
                    echo htmlentities($e['message']);
                    echo "<br>";
                    $success = False;
                }
            }
        }

        function printResult($result) { //prints results from a select statement
            echo "<br>Retrieved data from table CoopAdvisor:<br>";
            echo "<table>";
            echo "<tr><th>ID</th><th>Name</th></tr>";

            while ($row = OCI_Fetch_Array($result, OCI_BOTH)) {
                //echo "<tr><td>" . $row["ID"] . "</td><td>" . $row["NAME"] . "</td></tr>"; //or just use "echo $row[0]"
                echo "<tr><td>" . $row["COOPADVISORADVISORID"] . "</td><td>" . $row["COOPADVISORFIRSTNAME"] . "</td><td>" . $row["COOPADVISORLASTNAME"] . "</td><td>" . $row["COOPADVISOREMAILADDRESS"] . "</td><td>" . $row["COOPADVISORPHONENUMBER"] . "</td></tr>";
            }

            echo "</table>";
        }

        function debug_to_console($data) {
                $output = $data;
                if (is_array($output))
                    $output = implode(',', $output);
            
                echo "<script>console.log('Debug Objects: " . $output . "' );</script>";
        }

        function connectToDB() {
            global $db_conn;

            // Your username is ora_(CWL_ID) and the password is a(student number). For example,
			// ora_platypus is the username and a12345678 is the password.
            $db_conn = OCILogon("ora_nfong01", "a78575271", "dbhost.students.cs.ubc.ca:1522/stu");

            if ($db_conn) {
                debugAlertMessage("Database is Connected");
                return true;
            } else {
                debugAlertMessage("Cannot connect to Database");
                $e = OCI_Error(); // For OCILogon errors pass no handle
                echo htmlentities($e['message']);
                return false;
            }
        }

        function disconnectFromDB() {
            global $db_conn;

            debugAlertMessage("Disconnect from Database");
            OCILogoff($db_conn);
        }

        function handleUpdateRequestCoopAdvisor() {
            global $db_conn;

            $old_name = $_POST['oldName'];
            $new_name = $_POST['newName'];

            // you need the wrap the old name and new name values with single quotations
            executePlainSQL("UPDATE CoopAdvisor SET name='" . $new_name . "' WHERE name='" . $old_name . "'");
            OCICommit($db_conn);
        }

        function handleResetRequest() {
            global $db_conn;
            // Drop old table
            executePlainSQL("DROP TABLE CoopAdvisor");
<<<<<<< HEAD
            executePlainSQL("DROP TABLE Student");
=======
 
>>>>>>> cb008d79f7693eb4601362ad3337a9a6c58b01c7

            // Create new table
            echo "<br> creating new table <br>";
            executePlainSQL("CREATE TABLE CoopAdvisor(
                CoopAdvisorAdvisorID INTEGER,
                CoopAdvisorFirstName CHAR(40),
                CoopAdvisorLastName CHAR(40),
                CoopAdvisorEmailAddress CHAR(40),
                CoopAdvisorPhoneNumber CHAR(30),
                PRIMARY KEY (CoopAdvisorAdvisorID) )");

            OCICommit($db_conn);
        }

        function handleInsertRequestCoopAdvisor() {
            global $db_conn;
        
            // Getting the values from the user and insert data into the table
            $tuple = array (
                ":bind1" => $_POST['CoopAdvisorAdvisorID'],
                ":bind2" => $_POST['CoopAdvisorFirstName'],
                ":bind3" => $_POST['CoopAdvisorLastName'],
                ":bind4" => $_POST['CoopAdvisorEmailAddress'],
                ":bind5" => $_POST['CoopAdvisorPhoneNumber']
            );
        
            $alltuples = array (
                $tuple
            );
        
            executeBoundSQL("insert into CoopAdvisor values (:bind1, :bind2, :bind3, :bind4, :bind5)", $alltuples);
            OCICommit($db_conn);
        
            // Display the updated Co-op advisor table
            displayCoopAdvisorTable();
        }



        function handleUpdateRequest() {
                global $db_conn;
    
                $oldID = $_POST['OldCoopAdvisorID'];
                $newID = $_POST['CoopAdvisorID'];
                $oldFirstName = $_POST["OldCoopAdvisorFirstName"];
                $newFirstName = $_POST["CoopAdvisorFirstName"];
                $oldLastName = $_POST["OldCoopAdvisorLastName"];
                $newLastName = $_POST["CoopAdvisorLastName"];
                $oldEmail = $_POST["OldCoopAdvisorEmail"];
                $newEmail = $_POST["CoopAdvisorEmail"];
                $oldPhone = $_POST["OldCoopAdvisorPhoneNumber"];
                $newPhone = $_POST["CoopAdvisorPhoneNumber"];

    
                // you need the wrap the old name and new name values with single quotations
                executePlainSQL("UPDATE CoopAdvisor SET CoopAdvisorID='" . $newID . "' WHERE CoopAdvisorId='" . $oldID . "'");
                OCICommit($db_conn);
        }

        function handleCountRequest() {
                global $db_conn;
    
                $result = executePlainSQL("SELECT Count(*) FROM CoopAdvisor");
    
                if (($row = oci_fetch_row($result)) != false) {
                    echo "<br> The number of tuples in CoopAdvisor: " . $row[0] . "<br>";
                }
        }

        function handleDisplayRequest(){
            global $db_conn;

            $result = executePlainSQL("SELECT * FROM CoopAdvisor");
            printResult($result);
        }

        // HANDLE ALL POST ROUTES
	// A better coding practice is to have one method that reroutes your requests accordingly. It will make it easier to add/remove functionality.
        function handlePOSTRequest() {
            if (connectToDB()) {
                if (array_key_exists('resetTablesRequest', $_POST)) {
                    handleResetRequest();
                } else if (array_key_exists('updateCoopAdvisorRequest', $_POST)) {
                    handleUpdateRequestCoopAdvisor();
                } else if (array_key_exists('insertCoopAdvisorRequest', $_POST)) {
                    handleInsertRequestCoopAdvisor();
                } 

                disconnectFromDB();
            }
        }

        function handleCountRequestCoopAdvisor() {
            global $db_conn;
        
            $result = executePlainSQL("SELECT COUNT(*) FROM CoopAdvisor");
        
            if (($row = oci_fetch_row($result)) !== false) {
                echo "<br> The number of tuples in CoopAdvisor: " . $row[0] . "<br>";
            }
        }
        
        


                // HANDLE ALL GET ROUTES
	// A better coding practice is to have one method that reroutes your requests accordingly. It will make it easier to add/remove functionality.
        function handleGETRequest() {
            if (connectToDB()) {
                if (array_key_exists('countTuples', $_GET)) {
                    handleCountRequest();
                } else if (array_key_exists("displayTableRequest", $_GET)){
                    handleDisplayRequest();
                }
                
                disconnectFromDB();
            }
        }

		if (isset($_POST['reset']) || isset($_POST['updateCoopAdvisor']) || isset($_POST['insertCoopAdvisor'])) {
            handlePOSTRequest();
        } else if (isset($_GET['countTupleRequest']) || isset($_GET["displayTableRequest"])) {
            handleGETRequest();
        }

?>

<<<<<<< HEAD


=======
>>>>>>> cb008d79f7693eb4601362ad3337a9a6c58b01c7
