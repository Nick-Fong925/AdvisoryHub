drop table StudentInterviewJobwCompanyContact;
drop table StudentGetsJob;
drop table AppContainsCoverLetter;
drop table CompanyContact;
drop table JobApplication;
drop table Job;
drop table JobContract;
drop table Employer;
drop table CoverLetter;
drop table Resumé;
drop table StudentDocument;
drop table Student;
drop table CoopAdvisor;

CREATE TABLE CoopAdvisor(
    CoopAdvisorAdvisorID INTEGER,
    CoopAdvisorFirstName CHAR(40),
    CoopAdvisorLastName CHAR(40),
    CoopAdvisorEmailAddress CHAR(40),
    CoopAdvisorPhoneNumber CHAR(30),
    PRIMARY KEY (CoopAdvisorAdvisorID)
);

CREATE TABLE Student (
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
    FOREIGN KEY (AdvisorID) REFERENCES CoopAdvisor,
);


CREATE TABLE StudentDocument (
    DocumentID INTEGER,
    DocumentName Char(30),
    UploadDate Date,
    UploadTime Time,
    StudentID Char(20) NOT NULL,
    PRIMARY KEY(DocumentID),
    FOREIGN KEY (StudentID) REFERENCES Student,
);

CREATE TABLE Resumé (
    DocumentID INTEGER,
    PRIMARY KEY(DocumentID),
    FOREIGN KEY (DocumentID) REFERENCES StudentDocument,
);

CREATE TABLE CoverLetter (
    DocumentID INTEGER,
    PRIMARY KEY(DocumentID),
    FOREIGN KEY (DocumentID) REFERENCES StudentDocument,
);

CREATE TABLE Employer (
    EmployerID INTEGER,
    EmployerName CHAR(50),
    Website Char(50),
    HeadQuarterLocation Char(20),
    PRIMARY KEY (EmployerID)
);

CREATE TABLE JobContract (
    DocumentID INTEGER,
    StudentID CHAR(20),
    DatePosted Date,
    TimePosted Time,
    SalaryOffered INTEGER,
    PositionOffered Char(20),
    EmployerID CHAR(20) NOT NULL,
    PRIMARY KEY(DocumentID),
    FOREIGN KEY (EmployerID) REFERENCES Employer,
);

CREATE TABLE Job (
    JobID INTEGER,
    EmployerID INTEGER NOT NULL,
    StartDate Date,
    Title CHAR(50),
    JobDescription CHAR(400),
    PositionLength CHAR(50),
    DesiredProgram CHAR(50),
    Salary CHAR(50),
    PRIMARY KEY (JobID),
    FOREIGN KEY (EmployerID) REFERENCES Employer,
);


CREATE TABLE JobApplication (
    ApplicationID INTEGER,
    ApplicationName Char(20),
    StudentID Char(20) NOT NULL,
    ResuméDocumentID Char(20) NOT NULL,
    JobID Char(20) NOT NULL,
    ApplicationDate Date,
    JobApplicationStatus CHAR(20) SET DEFAULT('Pending'),
    PRIMARY KEY (ApplicationID),
    FOREIGN KEY (StudentID) REFERENCES Student,
    FOREIGN KEY (ResuméDocumentID) REFERENCES Resumé(DocumentID),
    FOREIGN KEY (JobID) REFERENCES Job, 
); 


CREATE TABLE CompanyContact (
    FirstName CHAR(40),
    LastName CHAR(40),
    PhoneNumber CHAR(40),
    EmailAddress CHAR(40),
    EmployerID INTEGER,

    PRIMARY KEY(CompanyContactName,EmployerID),
    FOREIGN KEY(EmployerID) REFERENCES Employer ON DELETE CASCADE,
);

CREATE TABLE AppContainsCoverLetter (
    ApplicationID INTEGER,
    DocumentID INTEGER,

    PRIMARY KEY (ApplicationID, DocumentID),
    FOREIGN KEY (ApplicationID) REFERENCES JobApplication,
    FOREIGN KEY (DocumentID) REFERENCES CoverLetter,

);


CREATE TABLE StudentGetsJob (
    StudentID INTEGER,
    JobID INTEGER,
    AcceptanceDate Date,
    AcceptanceTime Time,

    PRIMARY KEY (StudentID, JobID),
    FOREIGN KEY (StudentID) REFERENCES Student,
    FOREIGN KEY (JobID) REFERENCES Job,
);

CREATE TABLE StudentInterviewJobwCompanyContact (
    StudentID INTEGER,
    JobID INTEGER,
    CompanyContactFirstName Char(40),
    CompanyContactLastName Char(40)
    EmployerID INTEGER,
    InterviewTime Time,
    InterviewDate Date,
    InterviewLocation CHAR(50),

    PRIMARY KEY (StudentID, JobID, CompanyContactFirstName, CompanyContactLastName, EmployerID),
    FOREIGN KEY (JobID) REFERENCES Job,
    FOREIGN KEY (StudentID) REFERENCES Student,
    FOREIGN KEY (CompanyContactFirstName, CompanyContactLastName, EmployerID) REFERENCES CompanyContact(FirstName, LastName, EmployerID),
);

INSERT INTO CoopAdvisor VALUES (1, 'Chris', 'McKinnon', 'chris.mckinnon@gmail.com', '604-111-1111');
INSERT INTO CoopAdvisor VALUES (2, 'Emily', 'Anderson', 'emily.anderson@yahoo.com', '778-222-3333');
INSERT INTO CoopAdvisor VALUES (3, 'Michael', 'Smith', 'michael.smith@hotmail.com', '236-555-6666');
INSERT INTO CoopAdvisor VALUES (4, 'Sophia', 'Johnson', 'sophia.johnson@gmail.com', '604-888-9999');
INSERT INTO CoopAdvisor VALUES (5, 'Daniel', 'Lee', 'daniel.lee@yahoo.com', '778-111-2222');

INSERT INTO Student VALUES (1, 1, 'Nicholas', 'Fong', 'nicholas.fong@gmail.com', '604-222-4444', 3, 5, 'Software Engineering');
INSERT INTO Student VALUES (2, 2, 'Cole', 'Rowell', 'cole.rowell@gmail.com', '236-777-6666', 2, 3, 'Data Science');
INSERT INTO Student VALUES (3, 3, 'Anikait', 'Kapur', 'anikait.kapur@hotmail.com', '778-101-9999', 4, 1, 'Product Management');
INSERT INTO Student VALUES (4, 4, 'John', 'Doe', 'john.doe@gmail.com', '236-202-1111', 1, 1, 'Business Analysis');
INSERT INTO Student VALUES (5, 2, 'Jane', 'Smith', 'jane.smith@gmail.com', '778-212-2222', 2, 3, 'Web Development');
INSERT INTO Student VALUES (6, 1, 'Nate', 'Diaz', 'nate.diaz@yahoo.com', '604-333-3333', 4, 0, 'Chemical Engineering');
INSERT INTO Student VALUES (7, 2, 'Nick', 'Diaz', 'nick.diaz@gmail.com', '604-333-6666', 2, 1, 'Mechanical Engineering');
INSERT INTO Student VALUES (8, 2, 'Jake', 'Paul', 'jake.paul@gmail.com', '604-111-1111', 3, 3, 'Machine Learning');
INSERT INTO Student VALUES (9, 3, 'Robert', 'Johnson', 'robert.johnson@yahoo.com', '778-987-6543', 2, 4, 'Finance');
INSERT INTO Student VALUES (10, 4, 'Sarah', 'Williams', 'sarah.williams@gmail.com', '778-888-8888', 1, 2, 'Marketing');
INSERT INTO Student VALUES (11, 1, 'Michael', 'Brown', 'michael.brown@gmail.com', '236-555-5555', 2, 3, 'Accounting');
INSERT INTO Student VALUES (12, 3, 'Sophia', 'Taylor', 'sophia.taylor@yahoo.com', '604-666-2222', 4, 2, 'Electrical Engineering');
INSERT INTO Student VALUES (13, 4, 'James', 'Wilson', 'james.wilson@gmail.com', '236-777-4444', 2, 1, 'Renewable Energy');
INSERT INTO Student VALUES (14, 2, 'Olivia', 'Martin', 'olivia.martin@hotmail.com', '778-222-1111', 3, 4, 'Human Resources');
INSERT INTO Student VALUES (15, 2, 'Ethan', 'Chen', 'ethan.chen@gmail.com', '236-666-7777', 4, 2, 'Web Development');
INSERT INTO Student VALUES (16, 3, 'Liam', 'Lee', 'liam.lee@yahoo.com', '778-123-4567', 3, 0, 'Data Analysis');
INSERT INTO Student VALUES (17, 2, 'Emma', 'Dean', 'emma.dean@gmail.com', '604-623-6478', 2, 1, 'Sales'); 
INSERT INTO Student VALUES (18, 1, 'Norah', 'Wong', 'norah.wong@yahoo.com', '604-518-5235', 1, 2, 'Accounting');
INSERT INTO Student VALUES (19, 4, 'Ethan', 'Thompson', 'ethan.thompson@hotmail.com', '778-314-5912', 2, 0, 'Data Science');
INSERT INTO Student VALUES (20, 3, 'Bruce', 'Klein', 'bruce.klein@email.com', '604-475-9091', 3, 1, 'UX/UI Design');

INSERT INTO StudentDocument VALUES (1, 'Resume_Nicholas_Fong', '2023-07-27', '09:30:00', 1);
INSERT INTO StudentDocument VALUES (2, 'Resume_Cole_Rowell', '2023-02-10', '10:15:00', 2);
INSERT INTO StudentDocument VALUES (3, 'Resume_Anikait_Kapur', '2023-05-12', '18:00:00', 3);
INSERT INTO StudentDocument VALUES (4, 'Resume_John_Doe', '2022-12-03', '23:00:00', 4);
INSERT INTO StudentDocument VALUES (5, 'Resume_Jane_Smith', '2023-08-07', '01:00:00', 5);
INSERT INTO StudentDocument VALUES (6, 'CoverLetter_Nicholas_Fong', '2023-03-10', '09:45:00', 1);
INSERT INTO StudentDocument VALUES (7, 'CoverLetter_Cole_Rowell', '2023-05-16', '10:30:00', 2);
INSERT INTO StudentDocument VALUES (8, 'CoverLetter_Anikait_Kapur', '2023-06-22', '17:00:00', 3);
INSERT INTO StudentDocument VALUES (9, 'CoverLetter_John_Doe', '2023-08-01', '03:15:00', 4);
INSERT INTO StudentDocument VALUES (10, 'CoverLetter_Jane_Smith', '2023-02-02', '12:30:00', 5);
INSERT INTO StudentDocument VALUES (11, 'CoverLetter_Nicholas_Fong2', '2023-01-01', '09:45:00', 1);
INSERT INTO StudentDocument VALUES (12, 'CoverLetter_Nate_Diaz', '2023-03-25', '10:30:00', 6);
INSERT INTO StudentDocument VALUES (13, 'Resume_Jake_Paul', '2022-05-01', '17:00:00', 8);
INSERT INTO StudentDocument VALUES (14, 'Resume_Robert_Johnson', '2022-09-12', '15:15:00', 9);
INSERT INTO StudentDocument VALUES (15, 'CoverLetter_Anikait_Kapur2', '2022-08-24', '06:30:00', 3);


INSERT INTO Resumé VALUES (1);
INSERT INTO Resumé VALUES (2);
INSERT INTO Resumé VALUES (3);
INSERT INTO Resumé VALUES (4);
INSERT INTO Resumé VALUES (5);
INSERT INTO Resumé VALUES (13);
INSERT INTO Resumé VALUES (14);


INSERT INTO CoverLetter VALUES (6);
INSERT INTO CoverLetter VALUES (7);
INSERT INTO CoverLetter VALUES (8);
INSERT INTO CoverLetter VALUES (9);
INSERT INTO CoverLetter VALUES (10);
INSERT INTO CoverLetter VALUES (11);
INSERT INTO CoverLetter VALUES (12);
INSERT INTO CoverLetter VALUES (15);


INSERT INTO Employer VALUES (1, 'ABC Tech', 'www.abctech.com', 'New York');
INSERT INTO Employer VALUES (2, 'XYZ Inc', 'www.xyzinc.com', 'San Francisco');
INSERT INTO Employer VALUES (3, 'TechCorp', 'www.techcorp.com', 'Seattle');
INSERT INTO Employer VALUES (4, 'Data Solutions', 'www.datasolutions.com', 'Chicago');
INSERT INTO Employer VALUES (5, 'WebDev Pro', 'www.webdevpro.com', 'Austin');


INSERT INTO Job VALUES (1, 1, '2023-08-15', 'Software Developer', 'Developing web applications', '6 months', 'Computer Science', '$60,000');
INSERT INTO Job VALUES (2, 2, '2023-09-01', 'Data Analyst', 'Analyzing data trends', '4 months', 'Data Science', '$55,000');
INSERT INTO Job VALUES (3, 3, '2023-08-20', 'Product Manager', 'Managing product development', '8 months', 'Business Administration', '$70,000');
INSERT INTO Job VALUES (4, 4, '2023-08-10', 'Business Analyst', 'Analyzing business processes', '6 months', 'Business Analysis', '$50,000');
INSERT INTO Job VALUES (5, 5, '2023-09-15', 'Web Developer', 'Creating responsive websites', '3 months', 'Web Development', '$45,000');


INSERT INTO CompanyContact VALUES ('Marcus', 'Lam', '111-222-3333', 'marcus.lam@abctech.com', 1);
INSERT INTO CompanyContact VALUES ('Emily', 'Smith', '444-555-6666', 'emily.smith@xyzinc.com', 2);
INSERT INTO CompanyContact VALUES ('Michael', 'Johnson', '777-888-9999', 'michael.johnson@techcorp.com', 3);
INSERT INTO CompanyContact VALUES ('David', 'Brown', '111-111-1111', 'david.brown@datasolutions.com', 4);
INSERT INTO CompanyContact VALUES ('Sarah', 'Wilson', '222-222-2222', 'sarah.wilson@webdevpro.com', 5);


INSERT INTO JobApplication VALUES (1, 'Nicholas_Fong_Application', 1, 1, 1, '2023-07-27');
INSERT INTO JobApplication VALUES (2, 'Cole_Rowell_Application', 2, 2, 2, '2023-07-27');
INSERT INTO JobApplication VALUES (3, 'Anikait_Kapur_Application', 3, 3, 3, '2023-07-27');
INSERT INTO JobApplication VALUES (4, 'John_Doe_Application', 4, 4, 4, '2023-07-27');
INSERT INTO JobApplication VALUES (5, 'Jane_Smith_Application', 5, 5, 5, '2023-07-27');


INSERT INTO AppContainsCoverLetter VALUES (1, 6);
INSERT INTO AppContainsCoverLetter VALUES (2, 7);
INSERT INTO AppContainsCoverLetter VALUES (3, 8);
INSERT INTO AppContainsCoverLetter VALUES (4, 9);
INSERT INTO AppContainsCoverLetter VALUES (5, 10);


INSERT INTO StudentGetsJob VALUES (1, 1, '2023-08-01', '12:00:00');
INSERT INTO StudentGetsJob VALUES (2, 2, '2023-08-02', '10:30:00');
INSERT INTO StudentGetsJob VALUES (3, 3, '2023-08-03', '11:45:00');
INSERT INTO StudentGetsJob VALUES (4, 4, '2023-08-04', '09:15:00');
INSERT INTO StudentGetsJob VALUES (5, 5, '2023-08-05', '15:00:00');


INSERT INTO StudentInterviewJobwCompanyContact VALUES (1, 1, 'Marcus', 'Lam', 1, '2023-07-30', '14:00:00', 'ABC Tech Office');
INSERT INTO StudentInterviewJobwCompanyContact VALUES (2, 2, 'Emily', 'Smith', 2, '2023-07-31', '11:30:00', 'XYZ Inc Office');
INSERT INTO StudentInterviewJobwCompanyContact VALUES (3, 3, 'Michael', 'Johnson', 3, '2023-08-01', '10:45:00', 'TechCorp Office');
INSERT INTO StudentInterviewJobwCompanyContact VALUES (4, 4, 'David', 'Brown', 4, '2023-08-02', '09:30:00', 'Data Solutions Office');
INSERT INTO StudentInterviewJobwCompanyContact VALUES (5, 5, 'Sarah', 'Wilson', 5, '2023-08-03', '13:15:00', 'WebDev Pro Office');