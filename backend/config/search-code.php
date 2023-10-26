<!-- ?php include 'connection.php'?> -->
<?php if ($search_page=='staff-list'){ ?> 

    	
        <?php
            $search_like="(staff_id like '%$all_search_txt%' OR 
            fullname like '%$all_search_txt%' OR 
            email like '%$all_search_txt%' OR 
            phonenumber like '%$all_search_txt%' OR 
            date like '%$all_search_txt%' OR 
            last_login like '%$all_search_txt%')";
           
            $profile_query=mysqli_query($conn, "SELECT * FROM patient_tab WHERE  status_id='$status_id' AND $search_like AND role_id=2 ORDER BY fullname ASC")or die ('cannot select patient_tab');
            $no=0;
            while($fetch_query=mysqli_fetch_array($profile_query)){
            $no++;
            $patient_id=$fetch_query['staff_id'];
            $no++;
            $fetch_patient_profile=$callclass->_get_patient_profile_details($conn, $patient_id);
            $patient_profile_array = json_decode($fetch_staff_profile, true);
            $fullname= $patient_profile_array[0]['fullname'];
            $email= $patient_profile_array[0]['email'];
            $phonenumber= $patient_profile_array[0]['phonenumber'];
            $role_id= $patient_profile_array[0]['role_id'];
            $status_id= $patient_profile_array[0]['status_id'];
            $passport= $staff_propatient_profile_arrayfile_array[0]['passport'];
            $date= $patient_profile_array[0]['date'];  
            $last_login= $patient_profile_array[0]['last_login'];
            
            
            $fetch_status=$callclass->_get_status_details($conn, $status_id);
            $status_array = json_decode($fetch_status, true);
            $status_name= $status_array[0]['status_name'];

                  
            $fetch_role=$callclass->_get_role_details($conn, $role_id);
            $role_array = json_decode($fetch_role, true);
            $role_name= $role_array[0]['role_name'];
        ?>

                    
            <div class="active-staff-profile">
                <?php if ($passport==''){?>
                <div class="img-div">
                    <img src="../../upload_pix/staff_pix/profile.jpg" alt="profile picture">
                </div>

                <?php }else{?>
                <div class="img-div">
                    <img src="../../upload_pix/staff_pix/<?php echo $passport?>" alt="profile picture">
                </div>
                <?php } ?>
              


                <div class="text-div">
                    <span class="txt"><?php echo $fullname?></span><br/>
                    <span class="name"><?php echo $email?></span><br/>
                    <span class="name"><?php echo $phonenumber?></span><br/>
                    <span class="name"><?php echo $role_name?></span><br/>
                    <span class="name"><?php echo $status_name?></span>                  
                </div> 
                <button class="btn"  title="Edit Profile" onclick="_get_form_with_id('edit-staff-form','<?php echo $staff_id; ?>')"><i class="bi-pencil-square"></i></button>      
            </div>
        <?php } ?>
        <br clear="all" />
        <?php if ($no==0){?>
            <div class="false-notification-div">
                <p>NO RECORD FOUND!</p>
                <button class="btn"   onclick="_get_form('staff-reg-form')"><i class="bi-person-plus"></i>ADD A NEW STAFF</button>
            </div>               
        <?php } ?>
                    
   

<?php }?>



<?php if ($search_page=='university-list'){
     $all_search_txt
   ?> 
  
        <?php
        
            $profile_query=mysqli_query($conn, "SELECT * FROM institution_tab WHERE status_id=1  AND institution_cat_id='INST1' AND (institution_name LIKE '%$all_search_txt%' OR institution_website LIKE '%$all_search_txt%' OR institution_phonenumber LIKE '%$all_search_txt%' OR institution_email LIKE '%$all_search_txt%' OR institution_address LIKE '%$all_search_txt%')");
            $no=0;
            while($fetch_query=mysqli_fetch_array($profile_query)){
            $no++;
            $institution_id=$fetch_query['institution_id'];
            $no++;
            $fetch_institution_profile=$callclass->_get_institution_details($conn, $institution_id);
            $institution_profile_array = json_decode($fetch_institution_profile, true);
            $institution_cat_id= $institution_profile_array[0]['institution_cat_id'];
            $institution_name= $institution_profile_array[0]['institution_name'];
            $institution_website= $institution_profile_array[0]['institution_website'];
            $institution_phonenumber= $institution_profile_array[0]['institution_phonenumber'];
            $institution_email= $institution_profile_array[0]['institution_email'];  
            $institution_address= $institution_profile_array[0]['institution_address'];
            $staff_id= $institution_profile_array[0]['staff_id'];  
            $institution_passport= $institution_profile_array[0]['institution_passport'];
            $status_id= $institution_profile_array[0]['status_id'];    
            $reg_date= $institution_profile_array[0]['reg_date'];         
            
            
            $fetch_status=$callclass->_get_status_details($conn, $status_id);
            $status_array = json_decode($fetch_status, true);
            $status_name= $status_array[0]['status_name'];

        ?>

                    
        <div class="schools-div">
            <div class="div-in">
            <?php if ($institution_passport==''){?>
                <div class="logo-div">
                    <img src="../../upload_pix/logo_pix//inst.png" alt="profile picture">
                </div>

                <?php }else{?>
                <div class="logo-div">
                    <img src="../../upload_pix/logo_pix/<?php echo $institution_passport?>" alt="profile picture">
                </div>
             <?php } ?>
                
                <div class="text-div">
                    <h2><?php echo $institution_name?></h2>
                    <a href="https://<?php echo $institution_website?>/" target="_blank"> <span><?php echo $institution_website?> <br/> <i class="bi-telephone"></i> +234<?php echo $institution_phonenumber?>  </span></a> <br>
                    <a href="https://<?php echo $institution_email?>/" target="_blank"><span><i class="bi-envelope"></i>  <?php echo $institution_email?></span></a><br>
                    <span><i class="bi-geo-alt"></i>  <?php echo $institution_address?> </span>
                </div> 
                <br clear="all"/>
                <br clear="all"/>              
            </div>  
            <button class="btn"  title="Edit Institution Profile" onclick="_get_form_with_id('edit-institution-form','<?php echo $institution_id; ?>')"><i class="bi-pencil-square"></i></button>                
        </div>    
        <?php }?>
        <?php if ($no==0){?>
                <div class="false-notification-div">
                    <p>NO RECORD FOUND!</p>
                    <button class="btn" onclick="_get_form('institution-reg-form')"><i class="bi-person-plus"></i>ADD A NEW UNIVERSITY</button>
                </div>               
        <?php } ?> 
 
<?php }?>



<?php if ($search_page=='polytechnic-list'){
     $all_search_txt
   ?> 
  
        <?php
        
            $profile_query=mysqli_query($conn, "SELECT * FROM institution_tab WHERE status_id=1  AND institution_cat_id='INST2' AND (institution_name LIKE '%$all_search_txt%' OR institution_website LIKE '%$all_search_txt%' OR institution_phonenumber LIKE '%$all_search_txt%' OR institution_email LIKE '%$all_search_txt%' OR institution_address LIKE '%$all_search_txt%')");
            $no=0;
            while($fetch_query=mysqli_fetch_array($profile_query)){
            $no++;
            $institution_id=$fetch_query['institution_id'];
            $no++;
            $fetch_institution_profile=$callclass->_get_institution_details($conn, $institution_id);
            $institution_profile_array = json_decode($fetch_institution_profile, true);
            $institution_cat_id= $institution_profile_array[0]['institution_cat_id'];
            $institution_name= $institution_profile_array[0]['institution_name'];
            $institution_website= $institution_profile_array[0]['institution_website'];
            $institution_phonenumber= $institution_profile_array[0]['institution_phonenumber'];
            $institution_email= $institution_profile_array[0]['institution_email'];  
            $institution_address= $institution_profile_array[0]['institution_address'];
            $staff_id= $institution_profile_array[0]['staff_id'];  
            $institution_passport= $institution_profile_array[0]['institution_passport'];
            $status_id= $institution_profile_array[0]['status_id'];    
            $reg_date= $institution_profile_array[0]['reg_date'];         
            
            
            $fetch_status=$callclass->_get_status_details($conn, $status_id);
            $status_array = json_decode($fetch_status, true);
            $status_name= $status_array[0]['status_name'];

        ?>

                    
        <div class="schools-div">
            <div class="div-in">
            <?php if ($institution_passport==''){?>
                <div class="logo-div">
                    <img src="../../upload_pix/logo_pix//inst.png" alt="profile picture">
                </div>

                <?php }else{?>
                <div class="logo-div">
                    <img src="../../upload_pix/logo_pix/<?php echo $institution_passport?>" alt="profile picture">
                </div>
             <?php } ?>
                
                <div class="text-div">
                    <h2><?php echo $institution_name?></h2>
                    <a href="https://<?php echo $institution_website?>/" target="_blank"> <span><?php echo $institution_website?> <br/> <i class="bi-telephone"></i> +234<?php echo $institution_phonenumber?>  </span></a> <br>
                    <a href="https://<?php echo $institution_email?>/" target="_blank"><span><i class="bi-envelope"></i>  <?php echo $institution_email?></span></a><br>
                    <span><i class="bi-geo-alt"></i>  <?php echo $institution_address?> </span>
                </div> 
                <br clear="all"/>
                <br clear="all"/>              
            </div>  
            <button class="btn"  title="Edit Institution Profile" onclick="_get_form_with_id('edit-institution-form','<?php echo $institution_id; ?>')"><i class="bi-pencil-square"></i></button>                
        </div>    
        <?php }?>
        <?php if ($no==0){?>
                <div class="false-notification-div">
                    <p>NO RECORD FOUND!</p>
                    <button class="btn" onclick="_get_form('institution-reg-form')"><i class="bi-person-plus"></i>ADD A NEW UNIVERSITY</button>
                </div>               
        <?php } ?> 
 
<?php }?>


<?php if ($search_page=='college-list'){
     $all_search_txt
   ?> 
  
        <?php
        
            $profile_query=mysqli_query($conn, "SELECT * FROM institution_tab WHERE status_id=1  AND institution_cat_id='INST3' AND (institution_name LIKE '%$all_search_txt%' OR institution_website LIKE '%$all_search_txt%' OR institution_phonenumber LIKE '%$all_search_txt%' OR institution_email LIKE '%$all_search_txt%' OR institution_address LIKE '%$all_search_txt%')");
            $no=0;
            while($fetch_query=mysqli_fetch_array($profile_query)){
            $no++;
            $institution_id=$fetch_query['institution_id'];
            $no++;
            $fetch_institution_profile=$callclass->_get_institution_details($conn, $institution_id);
            $institution_profile_array = json_decode($fetch_institution_profile, true);
            $institution_cat_id= $institution_profile_array[0]['institution_cat_id'];
            $institution_name= $institution_profile_array[0]['institution_name'];
            $institution_website= $institution_profile_array[0]['institution_website'];
            $institution_phonenumber= $institution_profile_array[0]['institution_phonenumber'];
            $institution_email= $institution_profile_array[0]['institution_email'];  
            $institution_address= $institution_profile_array[0]['institution_address'];
            $staff_id= $institution_profile_array[0]['staff_id'];  
            $institution_passport= $institution_profile_array[0]['institution_passport'];
            $status_id= $institution_profile_array[0]['status_id'];    
            $reg_date= $institution_profile_array[0]['reg_date'];         
            
            
            $fetch_status=$callclass->_get_status_details($conn, $status_id);
            $status_array = json_decode($fetch_status, true);
            $status_name= $status_array[0]['status_name'];

        ?>

                    
        <div class="schools-div">
            <div class="div-in">
            <?php if ($institution_passport==''){?>
                <div class="logo-div">
                    <img src="../../upload_pix/logo_pix//inst.png" alt="profile picture">
                </div>

                <?php }else{?>
                <div class="logo-div">
                    <img src="../../upload_pix/logo_pix/<?php echo $institution_passport?>" alt="profile picture">
                </div>
             <?php } ?>
                
                <div class="text-div">
                    <h2><?php echo $institution_name?></h2>
                    <a href="https://<?php echo $institution_website?>/" target="_blank"> <span><?php echo $institution_website?> <br/><i class="bi-telephone"></i> +234<?php echo $institution_phonenumber?>  </span></a> <br>
                    <a href="https://<?php echo $institution_email?>/" target="_blank"><span><i class="bi-envelope"></i>  <?php echo $institution_email?></span></a><br>
                    <span><i class="bi-geo-alt"></i>  <?php echo $institution_address?> </span>
                </div> 
                <br clear="all"/>
                <br clear="all"/>              
            </div>  
            <button class="btn"  title="Edit Institution Profile" onclick="_get_form_with_id('edit-institution-form','<?php echo $institution_id; ?>')"><i class="bi-pencil-square"></i></button>                
        </div>    
        <?php }?>
        <?php if ($no==0){?>
                <div class="false-notification-div">
                    <p>NO RECORD FOUND!</p>
                    <button class="btn" onclick="_get_form('institution-reg-form')"><i class="bi-person-plus"></i>ADD A NEW UNIVERSITY</button>
                </div>               
        <?php } ?> 
 
<?php }?>


<?php if ($search_page=='ieis-list'){
     $all_search_txt
   ?> 
  
        <?php
        
            $profile_query=mysqli_query($conn, "SELECT * FROM institution_tab WHERE status_id=1  AND institution_cat_id='INST4' AND (institution_name LIKE '%$all_search_txt%' OR institution_website LIKE '%$all_search_txt%' OR institution_phonenumber LIKE '%$all_search_txt%' OR institution_email LIKE '%$all_search_txt%' OR institution_address LIKE '%$all_search_txt%')");
            $no=0;
            while($fetch_query=mysqli_fetch_array($profile_query)){
            $no++;
            $institution_id=$fetch_query['institution_id'];
            $no++;
            $fetch_institution_profile=$callclass->_get_institution_details($conn, $institution_id);
            $institution_profile_array = json_decode($fetch_institution_profile, true);
            $institution_cat_id= $institution_profile_array[0]['institution_cat_id'];
            $institution_name= $institution_profile_array[0]['institution_name'];
            $institution_website= $institution_profile_array[0]['institution_website'];
            $institution_phonenumber= $institution_profile_array[0]['institution_phonenumber'];
            $institution_email= $institution_profile_array[0]['institution_email'];  
            $institution_address= $institution_profile_array[0]['institution_address'];
            $staff_id= $institution_profile_array[0]['staff_id'];  
            $institution_passport= $institution_profile_array[0]['institution_passport'];
            $status_id= $institution_profile_array[0]['status_id'];    
            $reg_date= $institution_profile_array[0]['reg_date'];         
            
            
            $fetch_status=$callclass->_get_status_details($conn, $status_id);
            $status_array = json_decode($fetch_status, true);
            $status_name= $status_array[0]['status_name'];

        ?>

                    
        <div class="schools-div">
            <div class="div-in">
            <?php if ($institution_passport==''){?>
                <div class="logo-div">
                    <img src="../../upload_pix/logo_pix//inst.png" alt="profile picture">
                </div>

                <?php }else{?>
                <div class="logo-div">
                    <img src="../../upload_pix/logo_pix/<?php echo $institution_passport?>" alt="profile picture">
                </div>
             <?php } ?>
                
                <div class="text-div">
                    <h2><?php echo $institution_name?></h2>
                    <a href="https://<?php echo $institution_website?>/" target="_blank"> <span><?php echo $institution_website?> <br/> <i class="bi-telephone"></i> +234<?php echo $institution_phonenumber?>  </span></a> <br>
                    <a href="https://<?php echo $institution_email?>/" target="_blank"><span><i class="bi-envelope"></i>  <?php echo $institution_email?></span></a><br>
                    <span><i class="bi-geo-alt"></i>  <?php echo $institution_address?> </span>
                </div> 
                <br clear="all"/>
                <br clear="all"/>              
            </div>  
            <button class="btn"  title="Edit Institution Profile" onclick="_get_form_with_id('edit-institution-form','<?php echo $institution_id; ?>')"><i class="bi-pencil-square"></i></button>                
        </div>    
        <?php }?>
        <?php if ($no==0){?>
                <div class="false-notification-div">
                    <p>NO RECORD FOUND!</p>
                    <button class="btn" onclick="_get_form('institution-reg-form')"><i class="bi-person-plus"></i>ADD A NEW UNIVERSITY</button>
                </div>               
        <?php } ?> 
 
<?php }?>


<?php if ($search_page=='active-institution-list'){
     $all_search_txt
   ?> 
  
        <?php
        
            $profile_query=mysqli_query($conn, "SELECT * FROM institution_tab WHERE status_id=1 AND (institution_name LIKE '%$all_search_txt%' OR institution_website LIKE '%$all_search_txt%' OR institution_phonenumber LIKE '%$all_search_txt%' OR institution_email LIKE '%$all_search_txt%' OR institution_address LIKE '%$all_search_txt%')");
            $no=0;
            while($fetch_query=mysqli_fetch_array($profile_query)){
            $no++;
            $institution_id=$fetch_query['institution_id'];
            $no++;
            $fetch_institution_profile=$callclass->_get_institution_details($conn, $institution_id);
            $institution_profile_array = json_decode($fetch_institution_profile, true);
            $institution_cat_id= $institution_profile_array[0]['institution_cat_id'];
            $institution_name= $institution_profile_array[0]['institution_name'];
            $institution_website= $institution_profile_array[0]['institution_website'];
            $institution_phonenumber= $institution_profile_array[0]['institution_phonenumber'];
            $institution_email= $institution_profile_array[0]['institution_email'];  
            $institution_address= $institution_profile_array[0]['institution_address'];
            $staff_id= $institution_profile_array[0]['staff_id'];  
            $institution_passport= $institution_profile_array[0]['institution_passport'];
            $status_id= $institution_profile_array[0]['status_id'];    
            $reg_date= $institution_profile_array[0]['reg_date'];         
            
            
            $fetch_status=$callclass->_get_status_details($conn, $status_id);
            $status_array = json_decode($fetch_status, true);
            $status_name= $status_array[0]['status_name'];

        ?>

                    
        <div class="schools-div">
            <div class="div-in">
            <?php if ($institution_passport==''){?>
                <div class="logo-div">
                    <img src="../../upload_pix/logo_pix//inst.png" alt="profile picture">
                </div>

                <?php }else{?>
                <div class="logo-div">
                    <img src="../../upload_pix/logo_pix/<?php echo $institution_passport?>" alt="profile picture">
                </div>
             <?php } ?>
                
                <div class="text-div">
                    <h2><?php echo $institution_name?></h2>
                    <a href="https://<?php echo $institution_website?>/" target="_blank"> <span><?php echo $institution_website?> <br/><i class="bi-telephone"></i> +234<?php echo $institution_phonenumber?>  </span></a> <br>
                    <a href="https://<?php echo $institution_email?>/" target="_blank"><span><i class="bi-envelope"></i>  <?php echo $institution_email?></span></a><br>
                    <span><i class="bi-geo-alt"></i>  <?php echo $institution_address?> </span>
                </div> 
                <br clear="all"/>
                <br clear="all"/>              
            </div>  
            <button class="btn"  title="Edit Institution Profile" onclick="_get_form_with_id('edit-institution-form','<?php echo $institution_id; ?>')"><i class="bi-pencil-square"></i></button>                
        </div>    
        <?php }?>
        <?php if ($no==0){?>
                <div class="false-notification-div">
                    <p>NO RECORD FOUND!</p>
                    <button class="btn" onclick="_get_form('institution-reg-form')"><i class="bi-person-plus"></i>ADD A NEW INSTITUTION</button>
                </div>               
        <?php } ?> 
 
<?php }?>



<?php if ($search_page=='suspended-institution-list'){
     $all_search_txt
   ?> 
  
        <?php
        
            $profile_query=mysqli_query($conn, "SELECT * FROM institution_tab WHERE status_id=2 AND (institution_name LIKE '%$all_search_txt%' OR institution_website LIKE '%$all_search_txt%' OR institution_phonenumber LIKE '%$all_search_txt%' OR institution_email LIKE '%$all_search_txt%' OR institution_address LIKE '%$all_search_txt%')");
            $no=0;
            while($fetch_query=mysqli_fetch_array($profile_query)){
            $no++;
            $institution_id=$fetch_query['institution_id'];
            $no++;
            $fetch_institution_profile=$callclass->_get_institution_details($conn, $institution_id);
            $institution_profile_array = json_decode($fetch_institution_profile, true);
            $institution_cat_id= $institution_profile_array[0]['institution_cat_id'];
            $institution_name= $institution_profile_array[0]['institution_name'];
            $institution_website= $institution_profile_array[0]['institution_website'];
            $institution_phonenumber= $institution_profile_array[0]['institution_phonenumber'];
            $institution_email= $institution_profile_array[0]['institution_email'];  
            $institution_address= $institution_profile_array[0]['institution_address'];
            $staff_id= $institution_profile_array[0]['staff_id'];  
            $institution_passport= $institution_profile_array[0]['institution_passport'];
            $status_id= $institution_profile_array[0]['status_id'];    
            $reg_date= $institution_profile_array[0]['reg_date'];         
            
            
            $fetch_status=$callclass->_get_status_details($conn, $status_id);
            $status_array = json_decode($fetch_status, true);
            $status_name= $status_array[0]['status_name'];

        ?>

                    
        <div class="schools-div">
            <div class="div-in">
            <?php if ($institution_passport==''){?>
                <div class="logo-div">
                    <img src="../../upload_pix/logo_pix//inst.png" alt="profile picture">
                </div>

                <?php }else{?>
                <div class="logo-div">
                    <img src="../../upload_pix/logo_pix/<?php echo $institution_passport?>" alt="profile picture">
                </div>
             <?php } ?>
                
                <div class="text-div">
                    <h2><?php echo $institution_name?></h2>
                    <a href="https://<?php echo $institution_website?>/" target="_blank"> <span><?php echo $institution_website?> <br/><i class="bi-telephone"></i> +234<?php echo $institution_phonenumber?>  </span></a> <br>
                    <a href="https://<?php echo $institution_email?>/" target="_blank"><span><i class="bi-envelope"></i>  <?php echo $institution_email?></span></a><br>
                    <span><i class="bi-geo-alt"></i>  <?php echo $institution_address?> </span>
                </div> 
                <br clear="all"/>
                <br clear="all"/>              
            </div>  
            <button class="btn"  title="Edit Institution Profile" onclick="_get_form_with_id('edit-institution-form','<?php echo $institution_id; ?>')"><i class="bi-pencil-square"></i></button>                
        </div>    
        <?php }?>
        <?php if ($no==0){?>
                <div class="false-notification-div">
                    <p>NO RECORD FOUND!</p>
                    <button class="btn" onclick="_get_form('institution-reg-form')"><i class="bi-person-plus"></i>ADD A NEW INSTITUTION</button>
                </div>               
        <?php } ?> 
 
<?php }?>
