function updateSubjects() {
    const semesterDropdown = document.getElementById("semester");
    const subjectDropdown = document.getElementById("subject");
    const selectedSemester = semesterDropdown.value;

    // Clear existing subject options
    subjectDropdown.innerHTML = "";
    // Add a default option
    const defaultOption = document.createElement("option");
    defaultOption.text = "Select Semester First";
    subjectDropdown.add(defaultOption);

    if (selectedSemester === "1st_Semester") {
        // Add subjects for 1st Semester
        addSubjects(["M1", "Chem", "Phy"]);
    } else if (selectedSemester === "2nd_Semester") {
        // Add subjects for 2nd Semester
        addSubjects(["M2", "Chem2", "Phy2"]);
    } else if (selectedSemester === "3rd_Semester") {
        // Add subjects for 3rd Semester
        addSubjects(["DSA", "COA", "M3"]);
    }else if(selectedSemester === "4th_Semester"){
        addSubjects(["DAA"]);
    }else if(selectedSemester === "5th_Semester"){
        addSubjects(["DBMS"]);
    }else if(selectedSemester === "6th_Semester"){
        addSubjects(["adadada"]);
    }else if(selectedSemester === "7th_Semester"){
        addSubjects(["DSASA"]);
    }else if(selectedSemester === "8th_Semester"){
        addSubjects(["SSASA"]);
    }    
}

function addSubjects(subjects) {
    const subjectDropdown = document.getElementById("subject");
    subjects.forEach(subject => {
        const option = document.createElement("option");
        option.text = subject;
        subjectDropdown.add(option);
    });
}
