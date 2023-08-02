function toggleJobContractForm() {
  const selectedOption = document.getElementById("StudentDocumentType").value;
  const jobContractFormContainer = document.getElementById(
    "JobContractFormContainer"
  );

  if (selectedOption === "JobContract") {
    jobContractFormContainer.style.display = "block";
  } else {
    jobContractFormContainer.style.display = "none";
  }
}

function insertCoopAdvisor() {
    const advisorID = document.getElementById("CoopAdvisorAdvisorID").value;
    const firstName = document.getElementById("CoopAdvisorFirstName").value;
    const lastName = document.getElementById("CoopAdvisorLastName").value;
    const emailAddress = document.getElementById("CoopAdvisorEmailAddress").value;
    const phoneNumber = document.getElementById("CoopAdvisorPhoneNumber").value;

    console.log("Coop advisor successfully added");

    document.getElementById("CoopAdvisorForm").reset();
}

function insertStudent() {
    const studentID = document.getElementById("StudentStudentID").value;
    const advisorID = document.getElementById("StudentAdvisorID").value;
    const firstName = document.getElementById("StudentFirstName").value;
    const lastName = document.getElementById("StudentLastName").value;
    const email = document.getElementById("StudentEmail").value;

    console.log('Student successfully added');

    document.getElementById("StudentForm").reset();
}

function insertStudentDocument() {
    const documentID = document.getElementById("StudentDocumentDocumentID").value;
    const documentName = document.getElementById("StudentDocumentDocumentName").value;
    const uploadDate = document.getElementById("StudentDocumentUploadDate").value;
    const uploadTime = document.getElementById("StudentDocumentUploadTime").value;
    const studentID = document.getElementById("StudentDocumentStudentID").value;
    const documentType = document.getElementById("StudentDocumentType").value;

    console.log('Document successfully added:', documentType);

    if (documentType === "JobContract") {
        const jobContractForm = document.getElementById("JobContractForm");
        const jobContractDocumentID = document.getElementById("JobContractDocumentID").value;
        const jobContractStudentID = document.getElementById("JobContractStudentID").value;
        const jobContractDatePosted = document.getElementById("JobContractDatePosted").value;
        const jobContractTimePosted = document.getElementById("JobContractTimePosted").value;
        const jobContractSalaryOffered = document.getElementById("JobContractSalaryOffered").value;
        const jobContractPositionOffered = document.getElementById("JobContractPositionOffered").value;
        const jobContractEmployerID = document.getElementById("JobContractEmployerID").value;

        console.log('Job Contract details:', {
            documentID: jobContractDocumentID,
            studentID: jobContractStudentID,
            datePosted: jobContractDatePosted,
            timePosted: jobContractTimePosted,
            salaryOffered: jobContractSalaryOffered,
            positionOffered: jobContractPositionOffered,
            employerID: jobContractEmployerID
        });

        jobContractForm.reset();
    }

    document.getElementById("StudentDocumentForm").reset();
}


function insertJobApplication() {
    const applicationID = document.getElementById("JobApplicationApplicationID").value;
    const applicationName = document.getElementById("JobApplicationApplicationName").value;
    const studentID = document.getElementById("JobApplicationStudentID").value;
    const resumeDocumentID = document.getElementById("JobApplicationResumeDocumentID").value;
    const jobID = document.getElementById("JobApplicationJobID").value;
    const applicationDate = document.getElementById("JobApplicationApplicationDate").value;
    const status = document.getElementById("JobApplicationStatus").value;

        console.log('Job Application successfully added');

    document.getElementById("JobApplicationForm").reset();
}


function insertJob() {
    const jobID = document.getElementById("JobJobID").value;
    const employerID = document.getElementById("JobEmployerID").value;
    const startDate = document.getElementById("JobStartDate").value;
    const title = document.getElementById("JobTitle").value;
    const description = document.getElementById("JobDescription").value;
    const positionLength = document.getElementById("JobPositionLength").value;
    const desiredProgram = document.getElementById("JobDesiredProgram").value;
    const salary = document.getElementById("JobSalary").value;

        console.log('Job Successfully Added');

    document.getElementById("JobForm").reset();
}



function insertEmployer() {
    const employerID = document.getElementById("EmployerEmployerID").value;
    const employerName = document.getElementById("EmployerEmployerName").value;
    const website = document.getElementById("EmployerWebsite").value;
    const headQuarterLocation = document.getElementById("EmployerHeadQuarterLocation").value;

        console.log('Employer Successfully Added')

    document.getElementById("EmployerForm").reset();
}


function insertCompanyContact() {
    const firstName = document.getElementById("CompanyContactFirstName").value;
    const lastName = document.getElementById("CompanyContactLastName").value;
    const phoneNumber = document.getElementById("CompanyContactPhoneNumber").value;
    const emailAddress = document.getElementById("CompanyContactEmailAddress").value;
    const employerID = document.getElementById("CompanyContactEmployerID").value;

    console.log("Company Contact Successfully added");

    document.getElementById("CompanyContactForm").reset();
}

function insertAppContainsCoverLetter() {
    const applicationID = document.getElementById("AppContainsCoverLetterApplicationID").value;
    const documentID = document.getElementById("AppContainsCoverLetterDocumentID").value;

    console.log('App Contains Cover Letter successfully added');

    document.getElementById("AppContainsCoverLetterForm").reset();
}

function insertStudentGetsJob() {
    const studentID = document.getElementById("StudentGetsJobStudentID").value;
    const jobID = document.getElementById("StudentGetsJobJobID").value;
    const acceptanceDate = document.getElementById("StudentGetsJobAcceptanceDate").value;
    const acceptanceTime = document.getElementById("StudentGetsJobAcceptanceTime").value;

    console.log('Student Gets Job successfully added');

    document.getElementById("StudentGetsJobForm").reset();
}

function insertStudentInterviewJobwCompanyContact() {
    const studentID = document.getElementById("StudentInterviewJobwCompanyContactStudentID").value;
    const jobID = document.getElementById("StudentInterviewJobwCompanyContactJobID").value;
    const companyContactFirstName = document.getElementById("StudentInterviewJobwCompanyContactCompanyContactFirstName").value;
    const companyContactLastName = document.getElementById("StudentInterviewJobwCompanyContactCompanyContactLastName").value;
    const employerID = document.getElementById("StudentInterviewJobwCompanyContactEmployerID").value;
    const interviewDate = document.getElementById("StudentInterviewJobwCompanyContactInterviewDate").value;
    const interviewTime = document.getElementById("StudentInterviewJobwCompanyContactInterviewTime").value;
    const interviewLocation = document.getElementById("StudentInterviewJobwCompanyContactInterviewLocation").value;

    console.log('Student Interview Job with Company Contact successfully added');

    document.getElementById("StudentInterviewJobwCompanyContactForm").reset();
}