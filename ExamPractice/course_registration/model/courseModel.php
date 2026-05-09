<?php
require_once "db.php";

function getAllRegistrations()
{
    // $GLOBALS['con']
    global $con;
    $sql = "SELECT * FROM registrations";
    $result = mysqli_query($con, $sql);
    $registrations = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $registrations[] = $row;
    }
    return $registrations;
}

function addRegistration($student_name, $student_id, $course_name, $semester)
{
    global $con;
    $sql = "INSERT INTO registrations (student_name, student_id, course_name, semester) VALUES ('$student_name', '$student_id', '$course_name', '$semester')";
    return mysqli_query($con, $sql);
}

function deleteRegistration($id)
{
    global $con;
    $sql = "DELETE FROM registrations WHERE id = $id";
    return mysqli_query($con, $sql);
}
?>
