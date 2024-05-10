


<div id="landing_section-container">
              <!----APPOITMENT SECTION-->
        <div class="appoitment_section">
            <div class="patient_list_div">
            <div class="search_bar_container">
                <h3>Appoitment details</h3>
                <i class="bi bi-search"></i>
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
                                                    <button class="accept-btn" type="button" onClick="accept('<?php echo $row["patient_id"]; ?>')">Accept</button>
                                                    <?php
                                                    echo "</td>";
                                                    echo "<td>";
                                                    ?>
                                                    <button class="reject-btn" onClick="reject('<?php echo $row["patient_id"]; ?>')">Reject</button>
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
    <div class="patient_list_div">
            <div class="search_bar_container">
                <h3>Available patients</h3>
                <i class="bi bi-search"></i>
                    <input type="text" placeholder="Search here">
                </div>
                <table>
                    <thead>
                        <tr>
                            <td>S/N</td>
                            <td>PASSPORT</td>
                            <td>PATIENT NAME</td>
                            <td>PATIENT ID</td>
                            <td>ACTION</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>
                                <img src="" alt="">
                            </td>
                            <td>KINGSLEY EFFIONG</td>
                            <td>PAT0001</td>
                            <td>
                                <i class="bi bi-three-dots _action" onclick="selectDoc()"></i>
                            </td>
                        </tr>
                    </tbody>
                </table>
                </div>
    </div>

    <div class="avalable_doctor hide">
            <div class="appoitment">
            <form action="" class="av_doctor_role hide">
    <div class="form-control">
        <label for="av-roles">Doctor Roles</label>
        <select name="roles" id="av-roles" onchange="updateDoctors()">
            <option value="select">Select</option> 
            <option value="surgeon">Surgeon</option> 
            <option value="healthPractitioner">Health Practitioner</option>
            <option value="dentist">Dentist</option>
            <option value="heartDoctor">Heart Doctor</option>
        </select>
    </div>
    <div class="form-control">
        <label for="av-doctors">Available Doctors</label>
        <select name="doctors" id="av-doctors">
            <!-- Options will be dynamically filled based on role selection -->
        </select>
    </div>
    <button type="button" class="btn-submit" onclick="bookPatient()">Book patient</button>
</form>
                <form action="" class="book_patient hide">
                    <div class="form-control">
                        <label for="">Patient name</label>
                        <input type="text" name="" id="">
                    </div>
                    <div class="form-control">
                        <label for="">Patient id</label>
                        <input type="text" name="" id="">
                    </div>
                    <div class="form-control">
                        <label for="">Date</label>
                        <input type="date" name="" id="">
                        <label for="">Time</label>
                        <input type="time" name="" id="">
                    </div>
                    <div class="form-control">
                        <label for="">Reason for appoitment</label>
                        <textarea name="" id="" cols="30" rows="10"></textarea>
                    </div>
                    <button class="btn-submit">Book</button>
                </form>
            </div>
            </div>

    