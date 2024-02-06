<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload and Display PDF</title>
</head>
<body>
    <form action="upload.php" method="post" enctype="multipart/form-data">
        <label for="pdfFile">Sélectionnez un fichier PDF :</label>
        <input type="file" name="pdfFile" id="pdfFile">
        <input type="submit" value="Télécharger">
    </form>
    <br>
    <a href="display_pdf.php?id=<?php echo $id;?>" target="_blank">Ouvrir le PDF</a>
</body>
</html>
