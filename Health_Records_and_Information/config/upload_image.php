<?php
// Get the image data from the POST request
$imageDataURL = $_POST['image'];

// Remove the data URL prefix
$imageData = base64_decode(preg_replace('#^data:image/\w+;base64,#i', '', $imageDataURL));

// Specify the folder where you want to save the image
$folder = $website_url/'uploaded_files/profile_pix/patient/';

// Generate a unique filename for the image
$filename = uniqid() . '.png';

// Save the image to the specified folder
file_put_contents($folder . $filename, $imageData);

// Respond with the path where the image is stored
$response = ['path' => $folder . $filename];
echo json_encode($response);
?>
