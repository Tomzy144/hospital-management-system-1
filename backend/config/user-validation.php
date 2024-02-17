
<?php
    if ($s_staff_id==''||$s_doctor_id=''||$s_lab_scientist_id=''){
?>
       <script>
            window.parent(location="../../");
        </script> 
<?php
    }else{
        $fetch_user=$callclass->_get_user_details($conn, $s_staff_id);
        $user_array = json_decode($fetch_user, true);
        $staff_id= $user_array[0]['staff_id'];
        $fullname= $user_array[0]['fullname'];
        $email= $user_array[0]['email'];
        $phonenumber= $user_array[0]['phonenumber'];
        $passport= $user_array[0]['passport'];


        $fetch_user=$callclass->_get_doctor_details($conn, $s_doctor_id);
        $user_array = json_decode($fetch_user, true);
        $doctor_id= $user_array[0]['doctor_id'];
        $fullname= $user_array[0]['fullname'];
        $doctor_email= $user_array[0]['doctor_email'];
        $phonenumber= $user_array[0]['phonenumber'];
        $passport= $user_array[0]['passport'];


        $fetch_user=$callclass->_get_lab_scientist_details($conn, $s_lab_scientist_id);
        $user_array = json_decode($fetch_user, true);
        $lab_scientist_id= $user_array[0]['lab_scientist_id'];
        $fullname= $user_array[0]['fullname'];
        $lab_scientist_email= $user_array[0]['lab_scientist_email'];
        $phonenumber= $user_array[0]['phonenumber'];
        $passport= $user_array[0]['passport'];



       }
?>

 
