<!DOCTYPE html>
<html>

    <head>
        <title>Course Registration</title>

        <script src="../controller/ajax.js"></script>
    </head>

    <body>
        <h1>Course Registration</h1>
        <form id = "courseForm" onsubmit="event.preventDefault(); addRegistration()">
            <input type="text" id="student_name" name="student_name" placeholder="Student Name" required>
            <input type="text" id="student_id" name="student_id" placeholder="Student ID" required>
            <input type="text" id="course_name" name="course_name" placeholder="Course Name" required>
            <select id="semester" name="semester">
                <option value="" disabled selected>Select Semester</option>
                <option value="Spring">Spring</option>
                <option value="Summer">Summer</option>
                <option value="Fall">Fall</option>
                <option value="Winter">Winter</option>
            </select>
            <button type="submit">Register</button>
        </form>

        <table>
            <thead>
                <tr>
                    <th>Student Name</th>
                    <th>Student ID</th>
                    <th>Course Name</th>
                    <th>Semester</th>
                </tr>
            </thead>
            <tbody id="tableBody">

            </tbody>
        </table>
    </body>

</html>
