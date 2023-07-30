<?php
if ($_FILES["pdfFile"]["error"] === UPLOAD_ERR_OK) {
    $semester = $_POST["semester"];
    $subject = $_POST["subject"];
    
    // Sanitize and validate input to avoid any security issues.
    $semester = preg_replace('/[^A-Za-z0-9\-]/', '', $semester);
    $subject = preg_replace('/[^A-Za-z0-9\-]/', '', $subject);

    // Replace spaces with underscores for folder names.
    $semester = str_replace(' ', '_', $semester);
    $subject = str_replace(' ', '_', $subject);

    $targetDir = "C:/wamp/www/SJMIT/uploads/$semester/$subject/";
    // Create the folders if they don't exist.
    if (!file_exists($targetDir)) {
        mkdir($targetDir, 0777, true);
    }

    $targetFile = $targetDir . basename($_FILES["pdfFile"]["name"]);

    if (move_uploaded_file($_FILES["pdfFile"]["tmp_name"], $targetFile)) {
        echo "The file has been uploaded successfully.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
} else {
    echo "Error: " . $_FILES["pdfFile"]["error"];
}
?>
