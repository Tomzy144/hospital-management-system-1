<?php
if (empty($s_account_id)) {
    session_destroy();
?>
    <script>
        window.parent.location = "<?php echo $website_url?>/";
    </script>
<?php
    exit;
} else {
    $fetch_user = $callclass->_get_account_unit_details($conn, $s_account_id);
    $user_array = json_decode($fetch_user, true);
    $fullname = $user_array[0]['fullname'];
    $passport = $user_array[0]['passport'];
    $last_login = $user_array[0]['last_login'];
}
?>
