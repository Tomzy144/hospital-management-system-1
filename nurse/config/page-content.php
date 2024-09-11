

<div id="landing_section-container">
              <!----APPOITMENT SECTION-->
            <div class="list_div">
            <div class="search_bar_container">
                <h3>Appoitment details</h3>
                    <input type="text" placeholder="Search here">
                </div>
                    <table>
                        <?php
                                    $sql = "SELECT * FROM nurse_appointment_tab WHERE nurse_id ='$s_nurse_id'";
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
                       
                    </tbody>
                </table>
                </div>
    </div>

    