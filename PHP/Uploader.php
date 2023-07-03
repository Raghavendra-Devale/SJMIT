<!DOCTYPE html>
<html>
<head>
    <title>PDF Upload</title>
</head>
<body>
    <h1>Upload a PDF</h1>
    <form action="Upload.php" method="POST" enctype="multipart/form-data">
        <input type="file" name="pdfFile" accept="application/pdf">
        <button type="submit">Upload</button>
    </form>
</body>
</html>
