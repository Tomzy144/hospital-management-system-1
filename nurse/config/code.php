
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
                mysqli_query($conn,"UPDATE bed_tab 
                SET bed_status_id = 1
                WHERE bed_id = 'bed2'");

                echo json_encode(array("success" => true));
            } else {
                echo json_encode(array("success" => false, "message" => "Error executing query: " . $stmt->error));
            }

            // mysqli_query($conn,"UPDATE bed_tab 
            // SET bed_status_id = 1
            // WHERE bed_id = 'bed2'");

            $stmt->close();
        } else {
            echo json_encode(array("success" => false, "message" => "Error preparing query: " . $conn->error));
        }
        break;
   
        case 'getDoctorsRoles':
            // Execute the query to fetch all doctor roles
            $query = mysqli_query($conn, "SELECT * FROM doctor_role_tab");
    
            // Check if the query executed successfully
            if ($query) {
                $doctorRoles = array();
    
                // Fetch the data from the result set
                while ($row = mysqli_fetch_assoc($query)) {
                    $doctorRoles[] = $row;
                }
    
                // Return the data as JSON
                echo json_encode(array("success" => true, "doctorRoles" => $doctorRoles));
            } else {
                // Return an error message if the query failed
                echo json_encode(array("success" => false, "message" => "Error executing the query"));
            }
            break;


        case 'getDoctors':
            $role = $_POST['roles'];

            // Sanitize the role input to prevent SQL injection
            $role = mysqli_real_escape_string($conn, $role);
        
            // Execute the query to fetch doctors based on the role
            $query = mysqli_query($conn, "SELECT doctor_tab.fullname, doctor_tab.doctor_id FROM doctor_tab
                                    JOIN doctor_role_tab ON doctor_role_tab.doctor_role_id = doctor_tab.doctor_role_id 
                                    WHERE doctor_tab.doctor_role_id ='$role'");
        
            // Check if the query executed successfully
            if ($query) {
                $doctor = array();
        
                // Fetch the data from the result set
                while ($row = mysqli_fetch_assoc($query)) {
                    $doctor[] = $row;
                }
        
                // Return the data as JSON
                echo json_encode(array("success" => true, "doctor" => $doctor));
            } else {
                // Return an error message if the query failed
                echo json_encode(array("success" => false, "message" => "Error executing the query"));
            }
            break;

            case 'transfer_patient':
                $patient_id = $_POST['patient_id'];
                $patient_name = $_POST['patient_name'];
                $date = $_POST['date'];
                $time = $_POST['time'];
                $reason = $_POST['reason']; // Assuming 'reason' corresponds to the 'note' column in the table
                $doctor_id = $_POST['doctor_id'];
                $status_id = "1";
            
                // Get the appointment ID sequence
                $sequence = $callclass->_get_sequence_count($conn, 'APP');
                $array = json_decode($sequence, true);
                $no = $array[0]['no'];
                $appointment_id = 'APP' . $no;
            
                // Prepare the SQL query with the correct number of placeholders
                $stmt = $conn->prepare("
                    INSERT INTO doctor_appointment_tab
                    (doctor_appointment_id, patient_id, patient_name, doctor_appointment_date, reason, time, doctor_appointment_status_id, doctor_id)
                    VALUES (?, ?, ?, ?, ?, ?, ?, ?)
                ");
            
                if ($stmt) {
                    // Bind the parameters
                    $stmt->bind_param(
                        "ssssssss",
                        $appointment_id, // Add appointment_id as the first parameter
                        $patient_id,
                        $patient_name,
                        $date,
                        $reason,
                        $time,
                        $status_id,
                        $doctor_id
                    );
            
                    // Execute the statement
                    if ($stmt->execute()) {
                        echo json_encode(array("success" => true, "message" => "Patient transferred successfully"));
                    } else {
                        echo json_encode(array("success" => false, "message" => "Error executing query: " . $stmt->error));
                    }
            
                    // Close the statement
                    $stmt->close();
                } else {
                    echo json_encode(array("success" => false, "message" => "Error preparing query: " . $conn->error));
                }
                break;




                case 'accept_appointment':

                    // Retrieve the necessary data from the POST request
                    $patient_id = $_POST['patient_id'];
                    $time = $_POST['time'];
                    $nurse_id = $_POST['nurse_id'];
                    
                    $response = array(); // Initialize the response array
                
                    // Use prepared statement to select the row from nurse_appointment_tab
                    $stmt = $conn->prepare("SELECT * FROM nurse_appointment_tab WHERE patient_id = ? AND time = ?");
                    $stmt->bind_param("ss", $patient_id, $time);
                    $stmt->execute();
                    $result = $stmt->get_result();
                
                    if ($result->num_rows > 0) {
                        // Fetch the row data
                        $appointment = $result->fetch_assoc();
                
                        // Prepare the insert query to move data to nurse_accepted_appointment_tab
                        $insert_sql = "
                            INSERT INTO nurse_accepted_appointment_tab 
                            (patient_id, nurse_appointment_id, nurse_unit_id, staff_id, reason, patient_name, time, approved_time) 
                            SELECT patient_id, nurse_appointment_id, ?, ?, reason, patient_name, time, NOW() 
                            FROM nurse_appointment_tab 
                            WHERE patient_id = ? AND time = ?";
                        
                        // Use prepared statement for insertion
                        $stmt1 = $conn->prepare($insert_sql);
                        $stmt1->bind_param("ssss", $nurse_id, $nurse_id, $patient_id, $time); // nurse_unit_id and staff_id are set to nurse_id here
                
                        if ($stmt1->execute()) {
                            // Delete the original record from nurse_appointment_tab
                            $delete_stmt = $conn->prepare("DELETE FROM nurse_appointment_tab WHERE patient_id = ? AND time = ?");
                            $delete_stmt->bind_param("ss", $patient_id, $time);
                
                            if ($delete_stmt->execute()) {
                                $response['success'] = true;
                                $response['message'] = "Appointment accepted and transferred successfully.";
                            } else {
                                $response['success'] = false;
                                $response['message'] = "Error deleting original record: " . $delete_stmt->error;
                            }
                        } else {
                            $response['success'] = false;
                            $response['message'] = "Error inserting record into nurse_accepted_appointment_tab: " . $stmt1->error;
                        }
                    } else {
                        $response['success'] = false;
                        $response['message'] = "No appointment found with the given patient ID and time.";
                    }
                
                    // Return the response as JSON
                    echo json_encode($response);
                
                    break;
                
            
            
        
        

        
       
    }
    
   