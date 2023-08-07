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
<h3>Add New Coop-Advisor</h3>
<form id="CoopAdvisorForm">
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

    <input type="button" value="Create" onclick="insertCoopAdvisor()" />
</form>

<h3>Add Student</h3>
<form id="StudentForm">
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

<h3> Add Student Document</h3>
<form id="StudentDocumentForm">
    <label for="StudentDocumentDocumentID">Document ID:</label>
    <input
            type="number"
            id="StudentDocumentDocumentID"
            name="StudentDocumentDocumentID"
    /><br />

    <label for="StudentDocumentDocumentName">Document Name:</label>
    <input
            type="text"
            id="StudentDocumentDocumentName"
            name="StudentDocumentDocumentName"
    /><br />

    <label for="StudentDocumentUploadDate">Upload Date:</label>
    <input
            type="date"
            id="StudentDocumentUploadDate"
            name="StudentDocumentUploadDate"
    /><br />

    <label for="StudentDocumentUploadTime">Upload Time:</label>
    <input
            type="time"
            id="StudentDocumentUploadTime"
            name="StudentDocumentUploadTime"
    /><br />

    <label for="StudentDocumentStudentID">Student ID:</label>
    <input
            type="text"
            id="StudentDocumentStudentID"
            name="StudentDocumentStudentID"
    /><br />

    <label for="StudentDocumentType">Document Type:</label>

    <select id="StudentDocumentType" name="StudentDocumentType" onchange="toggleJobContractForm()">
        <option value="" selected disabled>Select Document Type</option>
        <option value="Resume">Resume</option>
        <option value="CoverLetter">Cover Letter</option>
        <option value="JobContract">Job Contract</option>
    </select><br />

    <input type="button" value="Create" onclick="insertStudentDocument()" />
</form>


<div id="JobContractFormContainer" style="display: none;">
    <h3>Add Job Contract</h3>
    <form id="JobContractForm">

        <label for="JobContractDocumentID">Document ID:</label>
        <input
                type="number"
                id="JobContractDocumentID"
                name="JobContractDocumentID"
        /><br />

        <label for="JobContractStudentID">Student ID:</label>
        <input
                type="text"
                id="JobContractStudentID"
                name="JobContractStudentID"
        /><br />

        <label for="JobContractDatePosted">Date Posted:</label>
        <input
                type="date"
                id="JobContractDatePosted"
                name="JobContractDatePosted"
        /><br />

        <label for="JobContractTimePosted">Time Posted:</label>
        <input
                type="time"
                id="JobContractTimePosted"
                name="JobContractTimePosted"
        /><br />

        <label for="JobContractSalaryOffered">Salary Offered:</label>
        <input
                type="number"
                id="JobContractSalaryOffered"
                name="JobContractSalaryOffered"
        /><br />

        <label for="JobContractPositionOffered">Position Offered:</label>
        <input
                type="text"
                id="JobContractPositionOffered"
                name="JobContractPositionOffered"
        /><br />

        <label for="JobContractEmployerID">Employer ID:</label>
        <input
                type="text"
                id="JobContractEmployerID"
                name="JobContractEmployerID"
        /><br />
    </form>
</div>

<h3>Add Job Application</h3>
<form id="JobApplicationForm">
    <label for="JobApplicationApplicationID">Application ID:</label>
    <input
            type="number"
            id="JobApplicationApplicationID"
            name="JobApplicationApplicationID"
    /><br />

    <label for="JobApplicationApplicationName">Application Name:</label>
    <input
            type="text"
            id="JobApplicationApplicationName"
            name="JobApplicationApplicationName"
    /><br />

    <label for="JobApplicationStudentID">Student ID:</label>
    <input
            type="text"
            id="JobApplicationStudentID"
            name="JobApplicationStudentID"
    /><br />
    <label for="JobApplicationResumeDocumentID">Resume Document ID:</label>
    <input
            type="text"
            id="JobApplicationResumeDocumentID"
            name="JobApplicationResumeDocumentID"
    /><br />

    <label for="JobApplicationJobID">Job ID:</label>
    <input
            type="text"
            id="JobApplicationJobID"
            name="JobApplicationJobID"
    /><br />

    <label for="JobApplicationApplicationDate">Application Date:</label>
    <input
            type="date"
            id="JobApplicationApplicationDate"
            name="JobApplicationApplicationDate"
    /><br />

    <label for="JobApplicationStatus">Job Application Status:</label>
    <input
            type="text"
            id="JobApplicationStatus"
            name="JobApplicationStatus"
            value="Pending"
    /><br />

    <input type="button" value="Create" onclick="insertJobApplication()" />
</form>

<h3>Add Job</h3>
<form id="JobForm">
    <label for="JobJobID">Job ID:</label>
    <input type="number" id="JobJobID" name="JobJobID" /><br />

    <label for="JobEmployerID">Employer ID:</label>
    <input type="number" id="JobEmployerID" name="JobEmployerID" /><br />

    <label for="JobStartDate">Start Date:</label>
    <input type="date" id="JobStartDate" name="JobStartDate" /><br />

    <label for="JobTitle">Title:</label>
    <input type="text" id="JobTitle" name="JobTitle" /><br />

    <label for="JobDescription">Job Description:</label>
    <input type="text" id="JobDescription" name="JobDescription" /><br />

    <label for="JobPositionLength">Position Length:</label>
    <input
            type="text"
            id="JobPositionLength"
            name="JobPositionLength"
    /><br />

    <label for="JobDesiredProgram">Desired Program:</label>
    <input
            type="text"
            id="JobDesiredProgram"
            name="JobDesiredProgram"
    /><br />

    <label for="JobSalary">Salary:</label>
    <input type="text" id="JobSalary" name="JobSalary" /><br />

    <input type="button" value="Create" onclick="insertJob()" />
</form>

<h3>Add Employer</h3>
<form id="EmployerForm">
    <label for="EmployerEmployerID">Employer ID:</label>
    <input
            type="number"
            id="EmployerEmployerID"
            name="EmployerEmployerID"
    /><br />

    <label for="EmployerEmployerName">Employer Name:</label>
    <input
            type="text"
            id="EmployerEmployerName"
            name="EmployerEmployerName"
    /><br />

    <label for="EmployerWebsite">Website:</label>
    <input type="url" id="EmployerWebsite" name="EmployerWebsite" /><br />

    <label for="EmployerHeadQuarterLocation">Head Quarter Location:</label>
    <input
            type="text"
            id="EmployerHeadQuarterLocation"
            name="EmployerHeadQuarterLocation"
    /><br />

    <input type="button" value="Create" onclick="insertEmployer()" />
</form>

<h3>Add CompanyContact</h3>
<form id="CompanyContactForm">
    <label for="CompanyContactFirstName">First Name:</label>
    <input
            type="text"
            id="CompanyContactFirstName"
            name="CompanyContactFirstName"
    /><br />

    <label for="CompanyContactLastName">Last Name:</label>
    <input
            type="text"
            id="CompanyContactLastName"
            name="CompanyContactLastName"
    /><br />

    <label for="CompanyContactPhoneNumber">Phone Number:</label>
    <input
            type="tel"
            id="CompanyContactPhoneNumber"
            name="CompanyContactPhoneNumber"
    /><br />

    <label for="CompanyContactEmailAddress">Email Address:</label>
    <input
            type="email"
            id="CompanyContactEmailAddress"
            name="CompanyContactEmailAddress"
    /><br />

    <label for="CompanyContactEmployerID">Employer ID:</label>
    <input
            type="number"
            id="CompanyContactEmployerID"
            name="CompanyContactEmployerID"
    /><br />

    <input type="button" value="Create" onclick="insertCompanyContact()" />
</form>

<h3>Add Cover Letter to Application</h3>
<form id="AppContainsCoverLetterForm">
    <label for="AppContainsCoverLetterApplicationID">Application ID:</label>
    <input
            type="number"
            id="AppContainsCoverLetterApplicationID"
            name="AppContainsCoverLetterApplicationID"
    /><br />

    <label for="AppContainsCoverLetterDocumentID">Document ID:</label>
    <input
            type="number"
            id="AppContainsCoverLetterDocumentID"
            name="AppContainsCoverLetterDocumentID"
    /><br />

    <input
            type="button"
            value="Create"
            onclick="insertAppContainsCoverLetter()"
    />
</form>

<h3>Add Student-Job Assignment</h3>
<form id="StudentGetsJobForm">
    <label for="StudentGetsJobStudentID">Student ID:</label>
    <input
            type="number"
            id="StudentGetsJobStudentID"
            name="StudentGetsJobStudentID"
    /><br />

    <label for="StudentGetsJobJobID">Job ID:</label>
    <input
            type="number"
            id="StudentGetsJobJobID"
            name="StudentGetsJobJobID"
    /><br />

    <label for="StudentGetsJobAcceptanceDate">Acceptance Date:</label>
    <input
            type="date"
            id="StudentGetsJobAcceptanceDate"
            name="StudentGetsJobAcceptanceDate"
    /><br />

    <label for="StudentGetsJobAcceptanceTime">Acceptance Time:</label>
    <input
            type="time"
            id="StudentGetsJobAcceptanceTime"
            name="StudentGetsJobAcceptanceTime"
    /><br />

    <input type="button" value="Create" onclick="insertStudentGetsJob()" />
</form>

<h3>Add Student Interview</h3>
<form id="StudentInterviewJobwCompanyContactForm">
    <label for="StudentInterviewJobwCompanyContactStudentID">Student ID:</label>
    <input type="number" id="StudentInterviewJobwCompanyContactStudentID" name="StudentInterviewJobwCompanyContactStudentID"><br>

    <label for="StudentInterviewJobwCompanyContactJobID">Job ID:</label>
    <input type="number" id="StudentInterviewJobwCompanyContactJobID" name="StudentInterviewJobwCompanyContactJobID"><br>

    <label for="StudentInterviewJobwCompanyContactCompanyContactFirstName">Company Contact First Name:</label>
    <input type="text" id="StudentInterviewJobwCompanyContactCompanyContactFirstName" name="StudentInterviewJobwCompanyContactCompanyContactFirstName"><br>
    <label for="StudentInterviewJobwCompanyContactCompanyContactLastName">Company Contact Last Name:</label>
    <input type="text" id="StudentInterviewJobwCompanyContactCompanyContactLastName" name="StudentInterviewJobwCompanyContactCompanyContactLastName"><br>

    <label for="StudentInterviewJobwCompanyContactEmployerID">Employe ID:</label>
    <input type="number" id="StudentInterviewJobwCompanyContactEmployerID" name="StudentInterviewJobwCompanyContactEmployerID"><br>

    <label for="StudentInterviewJobwCompanyContactInterviewDate">Interview Date:</label>
    <input type="date" id="StudentInterviewJobwCompanyContactInterviewDate" name="StudentInterviewJobwCompanyContactInterviewDate"><br>

    <label for="StudentInterviewJobwCompanyContactInterviewTime">Interview Time:</label>
    <input type="time" id="StudentInterviewJobwCompanyContactInterviewTime" name="StudentInterviewJobwCompanyContactInterviewTime"><br>

    <label for="StudentInterviewJobwCompanyContactInterviewLocation">Interview Location:</label>
    <input type="text" id="StudentInterviewJobwCompanyContactInterviewLocation" name="StudentInterviewJobwCompanyContactInterviewLocation"><br>

    <input type="button" value="Create" onclick="insertStudentInterviewJobwCompanyContact()">
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
                echo "<tr><td>" . $row["ID"] . "</td><td>" . $row["NAME"] . "</td></tr>"; //or just use "echo $row[0]"
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
            $db_conn = OCILogon("ora_chr2002", "a52077435", "dbhost.students.cs.ubc.ca:1522/stu");

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

            // Create new table
            echo "<br> creating new table <br>";
            executePlainSQL("CREATE TABLE CoopAdvisor(
                AdvisorID INTEGER,
                FirstName CHAR(40),
                LastName CHAR(40),
                EmailAddress CHAR(40),
                PhoneNumber CHAR(30),
                PRIMARY KEY (AdvisorID) )");
            OCICommit($db_conn);
        }

        function handleInsertRequestCoopAdvisor() {
            global $db_conn;

            //Getting the values from user and insert data into the table
            $tuple = array (
                ":bind1" => $_POST['AdvisorID'],
                ":bind2" => $_POST['FirstName'],
                ":bind3" => $_POST['LastName'],
                ":bind4" => $_POST['EmailAddress'],
                ":bind5" => $_POST['PhoneNumber']
            );

            $alltuples = array (
                $tuple
            );

            executeBoundSQL("insert into CoopAdvisor values (:bind1, :bind2, :bind3, :bind4, :bind5)", $alltuples);
            OCICommit($db_conn);
        }


        function handleUpdateRequest() {
                global $db_conn;
    
                $old_name = $_POST[''];
                $new_name = $_POST['newName'];
    
                // you need the wrap the old name and new name values with single quotations
                executePlainSQL("UPDATE demoTable SET name='" . $new_name . "' WHERE name='" . $old_name . "'");
                OCICommit($db_conn);
        }

        function handleCountRequest() {
                global $db_conn;
    
                $result = executePlainSQL("SELECT Count(*) FROM CoopAdvisor");
    
                if (($row = oci_fetch_row($result)) != false) {
                    echo "<br> The number of tuples in CoopAdvisor: " . $row[0] . "<br>";
                }
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


                // HANDLE ALL GET ROUTES
	// A better coding practice is to have one method that reroutes your requests accordingly. It will make it easier to add/remove functionality.
        function handleGETRequest() {
            if (connectToDB()) {
                if (array_key_exists('countTuples', $_GET)) {
                    handleCountRequest();
                }

                disconnectFromDB();
            }
        }

		if (isset($_POST['reset']) || isset($_POST['updateCoopAdvisor']) || isset($_POST['insertCoopAdvisor'])) {
            handlePOSTRequest();
        } else if (isset($_GET['countTupleRequest'])) {
            handleGETRequest();
        }

?>

        

</html>
