<?php
if ($_FILES["pdfFile"]["error"] === UPLOAD_ERR_OK) {
    $targetDir = "C:/wamp/www/SJMIT/uploads/";
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
