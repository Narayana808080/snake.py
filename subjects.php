<?php
include 'index.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Subject Selection</title>
</head>
<style>
    /* Reset some default styles */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: Arial, sans-serif;
    background-color: #f0f0f0;
}

header {
    background-color: #333;
    color: white;
    text-align: center;
    padding: 20px;
}

main {
    max-width: 800px;
    margin: 20px auto;
    padding: 20px;
    background-color: #fff;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    text-align: center;
}

form {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    align-items: center;
}

label, select, button {
    margin: 10px;
}

table {
    max-width: 100%;
    margin-top: 20px;
    border-collapse: collapse;
}

table, th, td {
    border: 1px solid #ccc;
}

th, td {
    padding: 10px;
    text-align: center;
}

footer {
    background-color: #333;
    color: white;
    text-align: center;
    padding: 10px;
    clear: both;
}

</style>
<body>
    <header>
        <h1>Subject Selection</h1>
    </header>

    <main>
        <form id="subject-form">
            <label for="course">Select Course:</label>
            <select id="course" name="course">
                <option value="">Select Course</option>
                <option value="btech">B.Tech</option>
                <option value="mtech">M.Tech</option>
            </select>

            <label for="branch">Select Branch:</label>
            <select id="branch" name="branch">
                <option value="">Select Branch</option>
            </select>

            <label for="year">Select Year:</label>
            <select id="year" name="year">
                <option value="">Select Year</option>
            </select>

            <label for="regulation">Select Regulation:</label>
            <select id="regulation" name="regulation">
                <option value="">Select Regulation</option>
            </select>

            <label for="subject">Select Subject:</label>
            <select id="subject" name="subject">
                <option value="">Select Subject</option>
            </select>

            <button type="submit">Add Subjects</button>
        </form>

        <table id="subject-table">
            <!-- Selected subjects will be displayed here -->
        </table>
    </main>

    <footer>
        &copy; 2023 Your College
    </footer>

    <script>
  const courseDropdown = document.getElementById('course');
const branchDropdown = document.getElementById('branch');
const yearDropdown = document.getElementById('year');
const semDropdown = document.getElementById('regulation');
const regulationDropdown = document.getElementById('subjects');
const subjectTable = document.getElementById('subject-table');

const subjects = {
    btech: {
        cse: {
            'I-I': ['Physics', 'Mathematics-I', 'PPS', 'English'],
            'I-II': ['Mathematics-II', 'Python'],
            'II-I': ['C++', 'Mathematics-III'],
            'II-II': ['Mathematics-IV', 'Java'],
            'III-I': ['DBMS'],
            'III-II': ['DSTC'],
            'IV-I': ['Project'],
            'IV-II': ['Project 2'],
        },
        ece: {
            // Define subjects for ECE branch
            'I-I': ['Physics', 'Mathematics-I', 'PPS', 'English'],
            'I-II': ['Mathematics-II', 'Python'],
            'II-I': ['C++', 'Mathematics-III'],
            'II-II': ['Mathematics-IV', 'Java'],
            'III-I': ['DBMS'],
            'III-II': ['DSTC'],
            'IV-I': ['Project'],
            'IV-II': ['Project 2'],
        },
        mech: {
            // Define subjects for Mech branch
            'I-I': ['Physics', 'Mathematics-I', 'PPS', 'English'],
            'I-II': ['Mathematics-II', 'Python'],
            'II-I': ['C++', 'Mathematics-III'],
            'II-II': ['Mathematics-IV', 'Java'],
            'III-I': ['DBMS'],
            'III-II': ['DSTC'],
            'IV-I': ['Project'],
            'IV-II': ['Project 2'],
        },
    },
    mtech: {
        mca: {
            'I-I': ['Subject-1', 'Subject-2'],
            'I-II': ['Subject-3', 'Subject-4'],
            'II-I': ['Subject-5', 'Subject-6'],
            'II-II': ['Subject-7', 'Subject-8'],
        },
        bba: {
            // Define subjects for BBA branch
            'I-I': ['Subject-9', 'Subject-10'],
            'I-II': ['Subject-11', 'Subject-12'],
            'II-I': ['Subject-13', 'Subject-14'],
            'II-II': ['Subject-15', 'Subject-16'],
        },
    },
};

// Function to populate dropdown options
function populateDropdown(selectElement, options) {
    selectElement.innerHTML = '';
    for (const option of options) {
        const optionElement = document.createElement('option');
        optionElement.value = option;
        optionElement.textContent = option;
        selectElement.appendChild(optionElement);
    }
}

// Event listener for form submission
document.getElementById('subject-form').addEventListener('submit', function (e) {
    e.preventDefault();

    const selectedCourse = courseDropdown.value;
    const selectedBranch = branchDropdown.value;
    const selectedYear = yearDropdown.value;
    const selectedSem = semDropdown.value;
    const selectedRegulation = regulationDropdown.value;

    if (selectedCourse && selectedBranch && selectedYear && selectedSem && selectedRegulation) {
        const selectedSubjects = subjects[selectedCourse][selectedBranch][selectedYear + '-' + selectedSem];

        // Populate the subject table
        let tableHTML = '<tr><th>Subject</th></tr>';
        for (const subject of selectedSubjects) {
            tableHTML += `<tr><td>${subject}</td></tr>`;
        }
        subjectTable.innerHTML = tableHTML;
    }
});

// Event listener for course selection to populate branch options
courseDropdown.addEventListener('change', function () {
    const selectedCourse = courseDropdown.value;
    if (selectedCourse) {
        const branchOptions = Object.keys(subjects[selectedCourse]);
        populateDropdown(branchDropdown, branchOptions);
        yearDropdown.innerHTML = '<option value="">Select Year</option>';
        semDropdown.innerHTML = '<option value="">Select Semester</option>';
        regulationDropdown.innerHTML = '<option value="">Select Regulation</option>';
    }
});

// Event listener for branch selection to populate year options
branchDropdown.addEventListener('change', function () {
    const selectedCourse = courseDropdown.value;
    const selectedBranch = branchDropdown.value;
    if (selectedCourse && selectedBranch) {
        const yearSemOptions = Object.keys(subjects[selectedCourse][selectedBranch]);
        populateDropdown(yearDropdown, yearSemOptions);
        semDropdown.innerHTML = '<option value="">Select Semester</option>';
        regulationDropdown.innerHTML = '<option value="">Select Regulation</option>';
    }
});

// Event listener for year selection to populate semester options
yearDropdown.addEventListener('change', function () {
    const selectedCourse = courseDropdown.value;
    const selectedBranch = branchDropdown.value;
    const selectedYear = yearDropdown.value;

    if (selectedCourse && selectedBranch && selectedYear) {
        const semOptions = Object.keys(subjects[selectedCourse][selectedBranch][selectedYear]);
        populateDropdown(semDropdown, semOptions);
        regulationDropdown.innerHTML = '<option value="">Select Regulation</option>';
    }
});

// Event listener for semester selection to populate regulation options
semDropdown.addEventListener('change', function () {
    const selectedCourse = courseDropdown.value;
    const selectedBranch = branchDropdown.value;
    const selectedYear = yearDropdown.value;
    const selectedSem = semDropdown.value;

    if (selectedCourse && selectedBranch && selectedYear && selectedSem) {
        // Assuming that regulation options depend on the selected course
        const regulationOptions = selectedCourse === 'btech' ? ['R20', 'R19'] : ['R16', 'R15'];
        populateDropdown(regulationDropdown, regulationOptions);
    }
});

// Event listener for regulation selection to update subjects
regulationDropdown.addEventListener('change', function () {
    const selectedCourse = courseDropdown.value;
    const selectedBranch = branchDropdown.value;
    const selectedYear = yearDropdown.value;
    const selectedSem = semDropdown.value;
    const selectedRegulation = regulationDropdown.value;

    if (selectedCourse && selectedBranch && selectedYear && selectedSem && selectedRegulation) {
        const selectedSubjects = subjects[selectedCourse][selectedBranch][selectedYear + '-' + selectedSem];

        // Populate the subject table
        let tableHTML = '<tr><th>Subject</th></tr>';
        for (const subject of selectedSubjects) {
            tableHTML += `<tr><td>${subject}</td></tr>`;
        }
        subjectTable.innerHTML = tableHTML;
    }
});

    </script>
</body>
</html>
