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
            
            executePlainSQL("DROP TABLE StudentInterviewJobwCompanyContact");
            executePlainSQL("DROP TABLE StudentGetsJob");
            executePlainSQL("DROP TABLE AppContainsCoverLetter");
            executePlainSQL("DROP TABLE JobApplication");
            executePlainSQL("DROP TABLE JobContract");
            executePlainSQL("DROP TABLE CompanyContact");
            executePlainSQL("DROP TABLE Job");
            executePlainSQL("DROP TABLE Employer");
            executePlainSQL("DROP TABLE Resumé");
            executePlainSQL("DROP TABLE CoverLetter");
            executePlainSQL("DROP TABLE StudentDocument");


            executePlainSQL("DROP TABLE Student");
            executePlainSQL("DROP TABLE CoopAdvisor");

 
            echo "<br> creating new table <br>";
            executePlainSQL("CREATE TABLE CoopAdvisor(
                CoopAdvisorAdvisorID INTEGER,
                CoopAdvisorFirstName CHAR(40),
                CoopAdvisorLastName CHAR(40),
                CoopAdvisorEmailAddress CHAR(40),
                CoopAdvisorPhoneNumber CHAR(30),
                PRIMARY KEY (CoopAdvisorAdvisorID) )");   

            executePlainSQL("CREATE TABLE Student (
                StudentID INTEGER,
                AdvisorID INTEGER NOT NULL,
                FirstName CHAR(40),
                LastName CHAR(40),
                Email CHAR(40),
                PhoneNumber CHAR(20),
                CurrentYear INTEGER,
                NumberofCompletedTerms INTEGER,
                JobPreferences CHAR(100),
                PRIMARY KEY (StudentID), 
                FOREIGN KEY (AdvisorID) REFERENCES CoopAdvisor)");
                
            executePlainSQL("CREATE TABLE StudentDocument (
                DocumentID INTEGER,
                DocumentName CHAR(30),
                UploadDate DATE,
                UploadTime TIMESTAMP, -- Use TIMESTAMP data type instead of TIME
                StudentID INTEGER NOT NULL,
                PRIMARY KEY(DocumentID),
                FOREIGN KEY (StudentID) REFERENCES Student(StudentID)
            )");

            executePlainSQL("CREATE TABLE Resumé (
                DocumentID INTEGER,
                PRIMARY KEY(DocumentID),
                FOREIGN KEY (DocumentID) REFERENCES StudentDocument
            )");
  

            executePlainSQL("CREATE TABLE CoverLetter (
                DocumentID INTEGER,
                PRIMARY KEY (DocumentID),
                FOREIGN KEY (DocumentID) REFERENCES StudentDocument (DocumentID)
            )");


            executePlainSQL("CREATE TABLE Employer (
                EmployerID INTEGER,
                EmployerName CHAR(50),
                Website Char(50),
                HeadQuarterLocation Char(20),
                PRIMARY KEY (EmployerID)
            )");


            executePlainSQL("CREATE TABLE JobContract (
                DocumentID INTEGER,
                StudentID CHAR(20),
                DatePosted DATE,
                TimePosted TIMESTAMP,
                SalaryOffered INTEGER,
                PositionOffered CHAR(20),
                EmployerID INTEGER NOT NULL, 
                PRIMARY KEY (DocumentID),
                FOREIGN KEY (EmployerID) REFERENCES Employer (EmployerID))");
           

            executePlainSQL("CREATE TABLE Job (
                JobID INTEGER,
                EmployerID INTEGER NOT NULL,
                StartDate DATE,
                Title CHAR(50),
                JobDescription CHAR(400),
                PositionLength CHAR(50),
                DesiredProgram CHAR(50),
                Salary CHAR(50),
                PRIMARY KEY (JobID),
                FOREIGN KEY (EmployerID) REFERENCES Employer(EmployerID)
            )");
 

            executePlainSQL("CREATE TABLE JobApplication (
                ApplicationID INTEGER,
                ApplicationName CHAR(20),
                StudentID INTEGER NOT NULL,
                ResumeDocumentID INTEGER NOT NULL,
                JobID INTEGER NOT NULL,
                ApplicationDate DATE,
                JobApplicationStatus CHAR(20) DEFAULT 'Pending',
                PRIMARY KEY (ApplicationID),
                FOREIGN KEY (StudentID) REFERENCES Student (StudentID),
                FOREIGN KEY (ResumeDocumentID) REFERENCES Resumé (DocumentID), 
                FOREIGN KEY (JobID) REFERENCES Job (JobID)
            )");


            executePlainSQL("CREATE TABLE CompanyContact (
                FirstName CHAR(40),
                LastName CHAR(40),
                PhoneNumber CHAR(40),
                EmailAddress CHAR(40),
                EmployerID INTEGER,
                PRIMARY KEY (FirstName, EmployerID),
                FOREIGN KEY (EmployerID) REFERENCES Employer (EmployerID) ON DELETE CASCADE
            )");
           

            executePlainSQL("CREATE TABLE AppContainsCoverLetter (
                ApplicationID INTEGER,
                DocumentID INTEGER,
                PRIMARY KEY (ApplicationID, DocumentID),
                FOREIGN KEY (ApplicationID) REFERENCES JobApplication (ApplicationID),
                FOREIGN KEY (DocumentID) REFERENCES CoverLetter (DocumentID)
            )");


            executePlainSQL("CREATE TABLE StudentGetsJob (
                StudentID INTEGER,
                JobID INTEGER,
                AcceptanceDate DATE,
                AcceptanceTime TIMESTAMP, 
                PRIMARY KEY (StudentID, JobID),
                FOREIGN KEY (StudentID) REFERENCES Student(StudentID),
                FOREIGN KEY (JobID) REFERENCES Job(JobID)
            )");
    

                executePlainSQL("CREATE TABLE StudentInterviewJobwCompanyContact (
                    StudentID INTEGER,
                    JobID INTEGER,
                    CompanyContactFirstName CHAR(40),
                    CompanyContactLastName CHAR(40),
                    EmployerID INTEGER,
                    InterviewTime TIMESTAMP,
                    InterviewDate DATE,
                    InterviewLocation CHAR(50),
                    PRIMARY KEY (StudentID, JobID, CompanyContactFirstName, CompanyContactLastName, EmployerID),
                    FOREIGN KEY (JobID) REFERENCES Job (JobID),
                    FOREIGN KEY (StudentID) REFERENCES Student (StudentID),
                    FOREIGN KEY (CompanyContactFirstName, EmployerID) REFERENCES CompanyContact (FirstName, EmployerID)
                )");


            executePlainSQL("INSERT INTO CoopAdvisor VALUES (1, 'Chris', 'McKinnon', 'chris.mckinnon@gmail.com', '604-111-1111')");
            executePlainSQL("INSERT INTO CoopAdvisor VALUES (2, 'Emily', 'Anderson', 'emily.anderson@yahoo.com', '778-222-3333')");
            executePlainSQL("INSERT INTO CoopAdvisor VALUES (3, 'Michael', 'Smith', 'michael.smith@hotmail.com', '236-555-6666')");
            executePlainSQL("INSERT INTO CoopAdvisor VALUES (4, 'Sophia', 'Johnson', 'sophia.johnson@gmail.com', '604-888-9999')");
            executePlainSQL("INSERT INTO CoopAdvisor VALUES (5, 'Daniel', 'Lee', 'daniel.lee@yahoo.com', '778-111-2222')");     

            executePlainSQL("INSERT INTO Student VALUES (1, 1, 'Nicholas', 'Fong', 'nicholas.fong@gmail.com', '604-222-4444', 3, 5, 'Software Engineering')");
            executePlainSQL("INSERT INTO Student VALUES (2, 2, 'Cole', 'Rowell', 'cole.rowell@gmail.com', '236-777-6666', 2, 3, 'Data Science')");
            executePlainSQL("INSERT INTO Student VALUES (3, 3, 'Anikait', 'Kapur', 'anikait.kapur@hotmail.com', '778-101-9999', 4, 1, 'Product Management')");
            executePlainSQL("INSERT INTO Student VALUES (4, 4, 'John', 'Doe', 'john.doe@gmail.com', '236-202-1111', 1, 1, 'Business Analysis')");
            executePlainSQL("INSERT INTO Student VALUES (5, 2, 'Jane', 'Smith', 'jane.smith@gmail.com', '778-212-2222', 2, 3, 'Web Development')");
            executePlainSQL("INSERT INTO Student VALUES (6, 1, 'Nate', 'Diaz', 'nate.diaz@yahoo.com', '604-333-3333', 4, 0, 'Chemical Engineering')");
            executePlainSQL("INSERT INTO Student VALUES (7, 2, 'Nick', 'Diaz', 'nick.diaz@gmail.com', '604-333-6666', 2, 1, 'Mechanical Engineering')");
            executePlainSQL("INSERT INTO Student VALUES (8, 2, 'Jake', 'Paul', 'jake.paul@gmail.com', '604-111-1111', 3, 3, 'Machine Learning')");
            executePlainSQL("INSERT INTO Student VALUES (9, 3, 'Robert', 'Johnson', 'robert.johnson@yahoo.com', '778-987-6543', 2, 4, 'Finance')");
            executePlainSQL("INSERT INTO Student VALUES (10, 4, 'Sarah', 'Williams', 'sarah.williams@gmail.com', '778-888-8888', 1, 2, 'Marketing')");
            executePlainSQL("INSERT INTO Student VALUES (11, 1, 'Michael', 'Brown', 'michael.brown@gmail.com', '236-555-5555', 2, 3, 'Accounting')");
            executePlainSQL("INSERT INTO Student VALUES (12, 3, 'Sophia', 'Taylor', 'sophia.taylor@yahoo.com', '604-666-2222', 4, 2, 'Electrical Engineering')");
            executePlainSQL("INSERT INTO Student VALUES (13, 4, 'James', 'Wilson', 'james.wilson@gmail.com', '236-777-4444', 2, 1, 'Renewable Energy')");
            executePlainSQL("INSERT INTO Student VALUES (14, 2, 'Olivia', 'Martin', 'olivia.martin@hotmail.com', '778-222-1111', 3, 4, 'Human Resources')");
            executePlainSQL("INSERT INTO Student VALUES (15, 2, 'Ethan', 'Chen', 'ethan.chen@gmail.com', '236-666-7777', 4, 2, 'Web Development')");
            executePlainSQL("INSERT INTO Student VALUES (16, 3, 'Liam', 'Lee', 'liam.lee@yahoo.com', '778-123-4567', 3, 0, 'Data Analysis')");
            executePlainSQL("INSERT INTO Student VALUES (17, 2, 'Emma', 'Dean', 'emma.dean@gmail.com', '604-623-6478', 2, 1, 'Sales')");
            executePlainSQL("INSERT INTO Student VALUES (18, 1, 'Norah', 'Wong', 'norah.wong@yahoo.com', '604-518-5235', 1, 2, 'Accounting')");
            executePlainSQL("INSERT INTO Student VALUES (19, 4, 'Ethan', 'Thompson', 'ethan.thompson@hotmail.com', '778-314-5912', 2, 0, 'Data Science')");
            executePlainSQL("INSERT INTO Student VALUES (20, 3, 'Bruce', 'Klein', 'bruce.klein@email.com', '604-475-9091', 3, 1, 'UX/UI Design')");

            executePlainSQL("INSERT INTO StudentDocument VALUES (1, 'Resume_Nicholas_Fong', TO_DATE('2023-07-27', 'YYYY-MM-DD'), TO_TIMESTAMP('09:30:00', 'HH24:MI:SS'), 1)");
            executePlainSQL("INSERT INTO StudentDocument VALUES (2, 'Resume_Cole_Rowell', TO_DATE('2023-02-10', 'YYYY-MM-DD'), TO_TIMESTAMP('10:15:00', 'HH24:MI:SS'), 2)");
            executePlainSQL("INSERT INTO StudentDocument VALUES (3, 'Resume_Anikait_Kapur', TO_DATE('2023-05-12', 'YYYY-MM-DD'), TO_TIMESTAMP('18:00:00', 'HH24:MI:SS'), 3)");
            executePlainSQL("INSERT INTO StudentDocument VALUES (4, 'Resume_John_Doe', TO_DATE('2022-12-03', 'YYYY-MM-DD'), TO_TIMESTAMP('23:00:00', 'HH24:MI:SS'), 4)");
            executePlainSQL("INSERT INTO StudentDocument VALUES (5, 'Resume_Jane_Smith', TO_DATE('2023-08-07', 'YYYY-MM-DD'), TO_TIMESTAMP('01:00:00', 'HH24:MI:SS'), 5)");
            executePlainSQL("INSERT INTO StudentDocument VALUES (6, 'CoverLetter_Nicholas_Fong', TO_DATE('2023-03-10', 'YYYY-MM-DD'), TO_TIMESTAMP('09:45:00', 'HH24:MI:SS'), 1)");
            executePlainSQL("INSERT INTO StudentDocument VALUES (7, 'CoverLetter_Cole_Rowell', TO_DATE('2023-05-16', 'YYYY-MM-DD'), TO_TIMESTAMP('10:30:00', 'HH24:MI:SS'), 2)");
            executePlainSQL("INSERT INTO StudentDocument VALUES (8, 'CoverLetter_Anikait_Kapur', TO_DATE('2023-06-22', 'YYYY-MM-DD'), TO_TIMESTAMP('17:00:00', 'HH24:MI:SS'), 3)");
            executePlainSQL("INSERT INTO StudentDocument VALUES (9, 'CoverLetter_John_Doe', TO_DATE('2023-08-01', 'YYYY-MM-DD'), TO_TIMESTAMP('03:15:00', 'HH24:MI:SS'), 4)");
            executePlainSQL("INSERT INTO StudentDocument VALUES (10, 'CoverLetter_Jane_Smith', TO_DATE('2023-02-02', 'YYYY-MM-DD'), TO_TIMESTAMP('12:30:00', 'HH24:MI:SS'), 5)");
            executePlainSQL("INSERT INTO StudentDocument VALUES (11, 'CoverLetter_Nicholas_Fong2', TO_DATE('2023-01-01', 'YYYY-MM-DD'), TO_TIMESTAMP('09:45:00', 'HH24:MI:SS'), 1)");
            executePlainSQL("INSERT INTO StudentDocument VALUES (12, 'CoverLetter_Nate_Diaz', TO_DATE('2023-03-25', 'YYYY-MM-DD'), TO_TIMESTAMP('10:30:00', 'HH24:MI:SS'), 6)");
            executePlainSQL("INSERT INTO StudentDocument VALUES (13, 'Resume_Jake_Paul', TO_DATE('2022-05-01', 'YYYY-MM-DD'), TO_TIMESTAMP('17:00:00', 'HH24:MI:SS'), 8)");
            executePlainSQL("INSERT INTO StudentDocument VALUES (14, 'Resume_Robert_Johnson', TO_DATE('2022-09-12', 'YYYY-MM-DD'), TO_TIMESTAMP('15:15:00', 'HH24:MI:SS'), 9)");
            executePlainSQL("INSERT INTO StudentDocument VALUES (15, 'CoverLetter_Anikait_Kapur2', TO_DATE('2022-08-24', 'YYYY-MM-DD'), TO_TIMESTAMP('06:30:00', 'HH24:MI:SS'), 3)");

            executePlainSQL("INSERT INTO Resumé VALUES (1)");
            executePlainSQL("INSERT INTO Resumé VALUES (2)");
            executePlainSQL("INSERT INTO Resumé VALUES (3)");
            executePlainSQL("INSERT INTO Resumé VALUES (4)");
            executePlainSQL("INSERT INTO Resumé VALUES (5)");
            executePlainSQL("INSERT INTO Resumé VALUES (13)");
            executePlainSQL("INSERT INTO Resumé VALUES (14)");

            executePlainSQL("INSERT INTO CoverLetter VALUES (6)");
            executePlainSQL("INSERT INTO CoverLetter VALUES (7)");
            executePlainSQL("INSERT INTO CoverLetter VALUES (8)");
            executePlainSQL("INSERT INTO CoverLetter VALUES (9)");
            executePlainSQL("INSERT INTO CoverLetter VALUES (10)");
            executePlainSQL("INSERT INTO CoverLetter VALUES (11)");
            executePlainSQL("INSERT INTO CoverLetter VALUES (12)");
            executePlainSQL("INSERT INTO CoverLetter VALUES (15)");

            executePlainSQL("INSERT INTO Employer VALUES (1, 'ABC Tech', 'www.abctech.com', 'New York')");
            executePlainSQL("INSERT INTO Employer VALUES (2, 'XYZ Inc', 'www.xyzinc.com', 'San Francisco')");
            executePlainSQL("INSERT INTO Employer VALUES (3, 'TechCorp', 'www.techcorp.com', 'Seattle')");
            executePlainSQL("INSERT INTO Employer VALUES (4, 'Data Solutions', 'www.datasolutions.com', 'Chicago')");
            executePlainSQL("INSERT INTO Employer VALUES (5, 'WebDev Pro', 'www.webdevpro.com', 'Austin')");

            executePlainSQL("INSERT INTO Job (JobID, EmployerID, StartDate, Title, JobDescription, PositionLength, DesiredProgram, Salary)
            VALUES (1, 1, DATE '2023-08-15', 'Software Developer', 'Developing web applications', '6 months', 'Computer Science', '$60,000')");

            executePlainSQL("INSERT INTO Job (JobID, EmployerID, StartDate, Title, JobDescription, PositionLength, DesiredProgram, Salary)
                        VALUES (2, 2, DATE '2023-09-01', 'Data Analyst', 'Analyzing data trends', '4 months', 'Data Science', '$55,000')");

            executePlainSQL("INSERT INTO Job (JobID, EmployerID, StartDate, Title, JobDescription, PositionLength, DesiredProgram, Salary)
                        VALUES (3, 3, DATE '2023-08-20', 'Product Manager', 'Managing product development', '8 months', 'Business Administration', '$70,000')");

            executePlainSQL("INSERT INTO Job (JobID, EmployerID, StartDate, Title, JobDescription, PositionLength, DesiredProgram, Salary)
                        VALUES (4, 4, DATE '2023-08-10', 'Business Analyst', 'Analyzing business processes', '6 months', 'Business Analysis', '$50,000')");

            executePlainSQL("INSERT INTO Job (JobID, EmployerID, StartDate, Title, JobDescription, PositionLength, DesiredProgram, Salary)
                        VALUES (5, 5, DATE '2023-09-15', 'Web Developer', 'Creating responsive websites', '3 months', 'Web Development', '$45,000')");

            executePlainSQL("INSERT INTO CompanyContact VALUES ('Marcus', 'Lam', '111-222-3333', 'marcus.lam@abctech.com', 1)");
            executePlainSQL("INSERT INTO CompanyContact VALUES ('Emily', 'Smith', '444-555-6666', 'emily.smith@xyzinc.com', 2)");
            executePlainSQL("INSERT INTO CompanyContact VALUES ('Michael', 'Johnson', '777-888-9999', 'michael.johnson@techcorp.com', 3)");
            executePlainSQL("INSERT INTO CompanyContact VALUES ('David', 'Brown', '111-111-1111', 'david.brown@datasolutions.com', 4)");
            executePlainSQL("INSERT INTO CompanyContact VALUES ('Sarah', 'Wilson', '222-222-2222', 'sarah.wilson@webdevpro.com', 5)");
            executePlainSQL("INSERT INTO JobApplication (ApplicationID, ApplicationName, StudentID, ResumeDocumentID, JobID, ApplicationDate)
            VALUES (1, 'Nicholas_Fong_App', 1, 1, 1, DATE '2023-07-27')");

            executePlainSQL("INSERT INTO JobApplication (ApplicationID, ApplicationName, StudentID, ResumeDocumentID, JobID, ApplicationDate)
                        VALUES (2, 'Cole_Rowell_App', 2, 2, 2, DATE '2023-07-27')");

            executePlainSQL("INSERT INTO JobApplication (ApplicationID, ApplicationName, StudentID, ResumeDocumentID, JobID, ApplicationDate)
                        VALUES (3, 'Anikait_Kapur_App', 3, 3, 3, DATE '2023-07-27')");

            executePlainSQL("INSERT INTO JobApplication (ApplicationID, ApplicationName, StudentID, ResumeDocumentID, JobID, ApplicationDate)
                        VALUES (4, 'John_Doe_App', 4, 4, 4, DATE '2023-07-27')");

            executePlainSQL("INSERT INTO JobApplication (ApplicationID, ApplicationName, StudentID, ResumeDocumentID, JobID, ApplicationDate)
                        VALUES (5, 'Jane_Smith_App', 5, 5, 5, DATE '2023-07-27')");

            executePlainSQL("INSERT INTO AppContainsCoverLetter VALUES (1, 6)");
            executePlainSQL("INSERT INTO AppContainsCoverLetter VALUES (2, 7)");
            executePlainSQL("INSERT INTO AppContainsCoverLetter VALUES (3, 8)");
            executePlainSQL("INSERT INTO AppContainsCoverLetter VALUES (4, 9)");
            executePlainSQL("INSERT INTO AppContainsCoverLetter VALUES (5, 10)");

            executePlainSQL("INSERT INTO StudentGetsJob (StudentID, JobID, AcceptanceDate, AcceptanceTime)
            VALUES (1, 1, DATE '2023-08-01', TIMESTAMP '2023-08-01 12:00:00')");

            executePlainSQL("INSERT INTO StudentGetsJob (StudentID, JobID, AcceptanceDate, AcceptanceTime)
                        VALUES (2, 2, DATE '2023-08-02', TIMESTAMP '2023-08-02 10:30:00')");

            executePlainSQL("INSERT INTO StudentGetsJob (StudentID, JobID, AcceptanceDate, AcceptanceTime)
                        VALUES (3, 3, DATE '2023-08-03', TIMESTAMP '2023-08-03 11:45:00')");

            executePlainSQL("INSERT INTO StudentGetsJob (StudentID, JobID, AcceptanceDate, AcceptanceTime)
                        VALUES (4, 4, DATE '2023-08-04', TIMESTAMP '2023-08-04 09:15:00')");

            executePlainSQL("INSERT INTO StudentGetsJob (StudentID, JobID, AcceptanceDate, AcceptanceTime)
                        VALUES (5, 5, DATE '2023-08-05', TIMESTAMP '2023-08-05 15:00:00')");
            executePlainSQL("INSERT INTO StudentInterviewJobwCompanyContact VALUES (1, 1, 'Marcus', 'Lam', 1, TO_TIMESTAMP('2023-07-30 14:00:00', 'YYYY-MM-DD HH24:MI:SS'), TO_DATE('2023-07-30', 'YYYY-MM-DD'), 'ABC Tech Office')");
            executePlainSQL("INSERT INTO StudentInterviewJobwCompanyContact VALUES (2, 2, 'Emily', 'Smith', 2, TO_TIMESTAMP('2023-07-31 11:30:00', 'YYYY-MM-DD HH24:MI:SS'), TO_DATE('2023-07-31', 'YYYY-MM-DD'), 'XYZ Inc Office')");
            executePlainSQL("INSERT INTO StudentInterviewJobwCompanyContact VALUES (3, 3, 'Michael', 'Johnson', 3, TO_TIMESTAMP('2023-08-01 10:45:00', 'YYYY-MM-DD HH24:MI:SS'), TO_DATE('2023-08-01', 'YYYY-MM-DD'), 'TechCorp Office')");
            executePlainSQL("INSERT INTO StudentInterviewJobwCompanyContact VALUES (4, 4, 'David', 'Brown', 4, TO_TIMESTAMP('2023-08-02 09:30:00', 'YYYY-MM-DD HH24:MI:SS'), TO_DATE('2023-08-02', 'YYYY-MM-DD'), 'Data Solutions Office')");
            executePlainSQL("INSERT INTO StudentInterviewJobwCompanyContact VALUES (5, 5, 'Sarah', 'Wilson', 5, TO_TIMESTAMP('2023-08-03 13:15:00', 'YYYY-MM-DD HH24:MI:SS'), TO_DATE('2023-08-03', 'YYYY-MM-DD'), 'WebDev Pro Office')");
            
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



