<?php
// Establish a database connection (modify these values accordingly)
$HOST_NAME = "localhost";
$SERVER_USERNAME = "root";
$SERVER_PASSWORD = "";
$DATABASE_NAME = "hms_db";

// Create a connection to the database
$conn = mysqli_connect($HOST_NAME, $SERVER_USERNAME, $SERVER_PASSWORD, $DATABASE_NAME) or die("Connection error");

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve the search term from the request
if (isset($_GET['search_term'])) {
    $searchTerm = $_GET['search_term'];

    // Perform a database query to search for data
    $query = "SELECT * FROM patient_tab WHERE fullname LIKE '%$searchTerm%'";
    $result = $conn->query($query);

    // Display the search results as an array of objects
    $patients = array();
    while ($row = $result->fetch_assoc()) {
        $patients[] = $row;
    }

    // Close the database connection
    $conn->close();

    // Encode the search results as JSON and send it back to JavaScript
    header('Content-Type: application/json');
    echo json_encode($patients);
}
?>
