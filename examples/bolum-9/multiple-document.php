

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="upload.php" method='post' enctype="multipart/form-data">
        <input type="text" name="username" />
        <input type="file" name="fileToUpload[]" id="fileToUpload" multiple="multiple">
        <input type="submit" value="upload" name="btn-file-upload">
    </form>
</body>
</html>