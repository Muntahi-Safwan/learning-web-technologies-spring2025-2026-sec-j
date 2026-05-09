<?php
require_once "../model/courseModel.php";

$action = $_POST["action"] ?? ($_GET["action"] ?? "");

if ($action == "add") {
    $student_name = $_POST["student_name"] ?? "";
    $student_id = $_POST["student_id"] ?? "";
    $course_name = $_POST["course_name"] ?? "";
    $semester = $_POST["semester"] ?? "";

    $result = addRegistration(
        $student_name,
        $student_id,
        $course_name,
        $semester,
    );
    if ($result) {
        $data = getAllRegistrations();
        echo json_encode([
            "status" => "success",
            "message" => "Registration added successfully",
            "data" => $data,
        ]);
    } else {
        echo json_encode([
            "status" => "error",
            "message" => "Failed to add registration",
        ]);
    }
} elseif ($action == "get") {
    $registrations = getAllRegistrations();
    echo json_encode([
        "status" => "success",
        "data" => $registrations,
    ]);
} elseif ($action == "delete") {
    $id = $_POST["id"] ?? "";
    $result = deleteRegistration($id);
    if ($result) {
        $data = getAllRegistrations();
        echo json_encode([
            "status" => "success",
            "message" => "Registration deleted successfully",
            "data" => $data,
        ]);
    } else {
        echo json_encode([
            "status" => "error",
            "message" => "Failed to delete registration",
        ]);
    }
}
?>
