<?php include '../../backend/config/connection.php' ?>


<?php if (isset($_GET['input'])) {
				$inputData = $_GET['input'];
				$sql = "SELECT family_card_id FROM family_card_tab WHERE family_card_id = '$inputData'";
				$result = $conn->query($sql);
			
				if ($result->num_rows > 0) {
					$response = array('message' => 'AVAILABLE');
					echo json_encode($response);


				} else {
					$response = array('message' => 'INVALID FAMILY CARD');
					echo json_encode($response);
				}
			}
            ?>