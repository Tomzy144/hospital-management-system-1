
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


      } ?>