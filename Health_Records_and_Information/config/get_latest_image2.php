<?php
$directory = '../../uploaded_files/profile_pix/walkin_patient/'; // Replace with the path to your image folder
$files = scandir($directory);
$newestFile = null;
$newestTime = 0;

foreach ($files as $file) {
    $filePath = $directory . '/' . $file;
    if (is_file($filePath) && filemtime($filePath) > $newestTime) {
        $newestFile = $file;
        $newestTime = filemtime($filePath);
    }
}

$response = array(
    'latest_image' => $newestFile,
    'timestamp' => $newestTime
);

header('Content-Type: application/json');
echo json_encode($response);
?>
