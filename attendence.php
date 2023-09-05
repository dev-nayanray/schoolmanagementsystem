<?php include 'header.php';?>
<main class="acontainer">
        <section class="attendance-form">
            <h2>Record Attendance</h2>
            <form id="attendanceForm">
                <label for="classSelect">Select Class:</label>
                <select id="classSelect" name="classSelect">
                    <!-- Populate class options dynamically with AJAX -->
                </select>

                <label for="attendanceDate">Select Date:</label>
                <input type="date" id="attendanceDate" name="attendanceDate">

                <h3>Student Attendance:</h3>
                <div id="studentList">
                    <!-- Populate student list dynamically with AJAX -->
                </div>

                <input type="submit" value="Submit">
            </form>
        </section>

        <section class="attendance-summary">
            <h2>Attendance Summary</h2>
            <div id="summaryData">
                <!-- Attendance statistics will be displayed here -->
            </div>
        </section>
    </main>
 
    <?php include 'footer.php';?> 