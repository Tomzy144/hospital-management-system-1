
<?php include '../../backend/config/connection.php';?>


<?php
// <!-- for checking action and page  -->
  	$action=$_POST['action'];
	  switch ($action){
	  
	case 'get_page':
	$page=$_POST['page'];
	include 'index.php';
	break;
	

	default :
			
	break;

case 'getWards': 

try {
    // Assuming you have a valid database connection established with $conn

    $query = mysqli_query($conn, "SELECT * FROM ward_tab");
    
    if ($query) {
        $wards = array();

        // Fetch the data from the result set
        while ($row = mysqli_fetch_assoc($query)) {
            $wards[] = $row;
        }

        echo json_encode(array("success" => true, "wards" => $wards));
    } else {
        echo json_encode(array("success" => false, "message" => "Error executing the query"));
    }
} catch (Exception $e) {
    echo json_encode(array("success" => false, "message" => "Exception: " . $e->getMessage()));
}
break;






case 'getBeds':
    // Assuming the role is sent via POST, make sure to sanitize it
    $wards = mysqli_real_escape_string($conn, $_POST['wards']);

    $query = mysqli_query($conn, "SELECT bed_tab.bed_id, bed_tab.bed_number, bed_status_tab.bed_description
    FROM bed_tab
    JOIN bed_status_tab ON bed_tab.bed_status_id = bed_status_tab.bed_status_id
    JOIN ward_tab ON bed_tab.ward_id = ward_tab.ward_id
    JOIN patient_vital_tab ON bed_tab.ward_id = ward_tab.ward_id
    WHERE ward_tab.ward_id = '$wards'");

    // Debugging: Output the role to see if it's received correctly


    if ($query) {
        $beds = array();

        // Fetch the data from the result set
        while ($row = mysqli_fetch_assoc($query)) {
            $beds[] = $row;
        }

        echo json_encode(array("success" => true, "beds" => $beds));
    } else {
        echo json_encode(array("success" => false, "message" => "Error executing the query"));
    }
    break;




   

    case 'vital_input':
        // Sanitize and validate inputs if necessary
        $patient_id = $_POST['patient_id'];
        $ward = $_POST['ward'];
        $stage = $_POST['stage'];
        $bed = $_POST['bed'];
        $note = $_POST['note'];
        $temperature = $_POST['temperature'];
        $bp = $_POST['bp'];
        $pulse = $_POST['pulse'];
        $respiratory = $_POST['respiratory'];
        $weight = $_POST['weight'];
        $height = $_POST['height'];
        $intake = $_POST['intake'];
        $output = $_POST['output']; 
        $spo2 = $_POST['spo2'];
        $bmi = $_POST['bmi'];
        $body_fat = $_POST['body_fat'];
        $muscle_mass = $_POST['muscle_mass'];
        $musc = $_POST['musc'];
        $resting_metabolism = $_POST['resting_metabolism'];
        $body_age = $_POST['body_age'];
        $bmi_for_age = $_POST['bmi_for_age'];
        $visceral_fat = $_POST['visceral_fat'];
        $head_circumference = $_POST['head_circumference'];
        $waist_circumference = $_POST['waist_circumference'];
        $hip_circumference = $_POST['hip_circumference'];
        $w_hr = $_POST['w_hr'];

        // Use prepared statements to prevent SQL injection
        $stmt = $conn->prepare("
            INSERT INTO patient_vital_tab
            (patient_id, ward, stage, bed, note, temperature, bp, pulse, respiratory, weight, height, intake, output, spo2, bmi, body_fat, muscle_mass, musc, resting_metabolism, body_age, bmi_for_age, visceral_fat, head_circumference, waist_circumference, hip_circumference, w_hr)
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)
        ");

        if ($stmt) {
            $stmt->bind_param(
                "ssssssssssssssssssssssssss",
                $patient_id, $ward, $stage, $bed, $note, $temperature, $bp, $pulse, $respiratory, $weight, $height, $intake, $output, $spo2, $bmi, $body_fat, $muscle_mass, $musc, $resting_metabolism, $body_age, $bmi_for_age, $visceral_fat, $head_circumference, $waist_circumference, $hip_circumference, $w_hr
            );

            if ($stmt->execute()) {
                echo json_encode(array("success" => true));
            } else {
                echo json_encode(array("success" => false, "message" => "Error executing query: " . $stmt->error));
            }

            mysqli_query($conn,"UPDATE bed_tab 
            SET bed_status_id = 1
            WHERE bed_id = 'bed2'");

            $stmt->close();
        } else {
            echo json_encode(array("success" => false, "message" => "Error preparing query: " . $conn->error));
        }
        echo json_encode(array("success" => false, "message" => "Invalid action"));

        break;
       
    }
    
   