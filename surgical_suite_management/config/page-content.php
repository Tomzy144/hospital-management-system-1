

<div id="landing_section-container">
              <!----APPOITMENT SECTION-->
            <div class="list_div">
            <div class="search_bar_container">
                <h3>Appoitment details</h3>
                    <input type="text" placeholder="Search here">
                </div>
                    <table>
                        <?php
                                    $sql = "SELECT * FROM nurse_appointment_tab";
                                    $result = $conn->query($sql);

                                    if ($result->num_rows > 0) {
                                        // Fetch patient passport outside of the loop
                                        $psql = "SELECT patient_id, patient_passport FROM patient_tab";
                                        $presult = $conn->query($psql);
                                        $patient_passports = [];
                                        while ($prow = $presult->fetch_assoc()) {
                                            $patient_passports[$prow['patient_id']] = $prow['patient_passport'];
                                        }
                                        
                                        ?>
                                        <table>
                                            <thead>
                                                <tr>
                                                    <td>S/N</td>
                                                    <td>PASSPORT</td>
                                                    <td>Patient Name</td>
                                                    <td>Patient ID</td>
                                                    <td>Date</td>
                                                    <td>Time</td>
                                                    <td>Accept</td>
                                                    <td>Reject</td>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $appointmentCount = 0; // Initialize appointment count
                                                while ($row = $result->fetch_assoc()) {
                                                    $appointmentCount++; // Increment appointment count for each row
                                                    echo "<tr>";
                                                    echo "<td id=\"appointment_count\">" . $appointmentCount . "</td>"; // Display appointment count
                                                    echo "<td><img src='" . $website_url . "/uploaded_files/profile_pix/patient/" . $patient_passports[$row['patient_id']] . "' alt='Profile Picture'/></td>";
                                                    echo "<td>" . $row["patient_name"] . "</td>";
                                                    echo "<td>" . $row["patient_id"] . "</td>";
                                                    echo "<td>" . $row["nurse_appointment_date"] . "</td>";
                                                    echo "<td>" . $row["time"] . "</td>";
                                                    echo "<td>";
                                                    ?>
                                                    <button class="bg-white" type="button" onClick="accept('<?php echo $row["patient_id"]; ?>'),getWards();">Accept</button>
                                                    <?php
                                                    echo "</td>";
                                                    echo "<td>";
                                                    ?>
                                                    <button class="bg-white" onClick="reject('<?php echo $row["patient_id"]; ?>')">Reject</button>
                                                    <?php
                                                    echo "</td>";
                                                    echo "</tr>";
                                                }
                                                ?>
                                            </tbody>
                                        </table>
                                        <?php
                                    } else {
                                        // No nurse appointments found
                                        echo "<p>No appointments found.</p>";
                                    }
                                    ?>

                                </tbody>
                        </table>
                    </div>
                </div>
            </div>
            </div>
        </div>
    <!-- //////////////////////////// -->

    <div class="booked-patient-container hide">

    </div>

    <div class="available-patient-list hide">
    <div class="list_div">
            <div class="search_bar_container">
                <h3>Available patients</h3>
                    <input type="text" placeholder="Search here">
                </div>


                
                <?php
// Database connection
// $conn = new mysqli("hostname", "username", "password", "database");

// Fetch accepted appointments for a specific nurse
$sql = "SELECT * FROM nurse_accepted_appointment_tab WHERE approved_nurse_id ='$s_nurse_id'";
$result = mysqli_query($conn, $sql);

// Initialize a variable to store table rows
$tableRows = '';

// Fetch all patient passports
$psql = "SELECT patient_id, patient_passport FROM patient_tab";
$presult = $conn->query($psql);
$patient_passports = [];
while ($prow = $presult->fetch_assoc()) {
    $patient_passports[$prow['patient_id']] = $prow['patient_passport'];
}

// Check if any rows are returned
if (mysqli_num_rows($result) > 0) {
    // Counter for serial number
    $serial_number = 1;

    // Loop through each row
    while ($row = mysqli_fetch_assoc($result)) {
        $patient_id = $row['patient_id'] ?? 'N/A';
        $passport = $patient_passports[$patient_id] ?? 'PASSPORT_PLACEHOLDER_IMAGE_PATH'; // Fallback to placeholder
        $patient_name = $row['patient_name'] ?? 'N/A';
        
        // Generate the HTML for this row
        $tableRows .= "<tr>
            <td>{$serial_number}</td>
            <td><img src='{$website_url}/uploaded_files/profile_pix/patient/{$passport}' alt='Passport' ></td>
            <td>{$patient_name}</td>
            <td>{$patient_id}</td>
        </tr>";

        // Increment the serial number
        $serial_number++;
    }
} else {
    // No records found
    $tableRows .= "<tr><td colspan='4'>No records found</td></tr>";
}

// Close the database connection
mysqli_close($conn);
?>

<table id="available__patients">
    <thead>
        <tr>
            <td>S/N</td>
            <td>PASSPORT</td>
            <td>PATIENT NAME</td>
            <td>PATIENT ID</td>
        </tr>
    </thead>
    <tbody>
        <?php echo $tableRows; // Output table rows ?>
    </tbody>
</table>


                </div>
    </div>

