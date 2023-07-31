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
