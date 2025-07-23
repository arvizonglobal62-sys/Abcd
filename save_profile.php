<?php
// Database connection parameters
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "crm_followup";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
$client_name = $_POST['client_name'] ?? '';
$client_id = $_POST['client_id'] ?? '';
$first_contact_date = $_POST['first_contact_date'] ?? '';
$service_interested = $_POST['service_interested'] ?? '';
$last_followup_date = $_POST['last_followup_date'] ?? '';
$mode_followup = $_POST['mode_followup'] ?? '';
$spoken_to = $_POST['spoken_to'] ?? '';
$client_response = $_POST['client_response'] ?? '';
$conversation_notes = $_POST['conversation_notes'] ?? '';
$next_followup_date = $_POST['next_followup_date'] ?? '';
$next_action = $_POST['next_action'] ?? '';
$assigned_staff = $_POST['assigned_staff'] ?? '';
$current_status = $_POST['current_status'] ?? '';
$remarks = $_POST['remarks'] ?? '';

// Prepare SQL statement
$sql = "INSERT INTO followups (client_name, client_id, first_contact_date, service_interested, 
        last_followup_date, mode_followup, spoken_to, client_response, conversation_notes, 
        next_followup_date, next_action, assigned_staff, current_status, remarks) 
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

$stmt = $conn->prepare($sql);
$stmt->bind_param("ssssssssssssss", 
    $client_name, $client_id, $first_contact_date, $service_interested,
    $last_followup_date, $mode_followup, $spoken_to, $client_response, $conversation_notes,
    $next_followup_date, $next_action, $assigned_staff, $current_status, $remarks
);

// Execute the statement
if ($stmt->execute()) {
    echo json_encode(['status' => 'success', 'message' => 'Follow-up record saved successfully']);
} else {
    echo json_encode(['status' => 'error', 'message' => 'Error saving follow-up record: ' . $stmt->error]);
}

// Close statement and connection
$stmt->close();
$conn->close();
?>