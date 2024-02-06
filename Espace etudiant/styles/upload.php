
<?php
$uploadDir = 'uploads/';
$uploadFile = $uploadDir . basename($_FILES['pdfFile']['name']);

move_uploaded_file($_FILES['pdfFile']['tmp_name'], $uploadFile);

$pdfContent = file_get_contents($uploadFile);
$pdfTitle = $_FILES['pdfFile']['name'];

// Connexion à la base de données (remplacez les informations de connexion)
$servername = "localhost:3307"; 
$username = "root"; 
$password = ""; 
$dbname = "departement_informatique";

// Créer une connexion à la base de données
$conn = new mysqli($servername, $username, $password, $dbname);

// Vérifier la connexion
if ($conn->connect_error) {
    die("Connection failed: ". $conn->connect_error);
}


// Requête SQL pour insérer le PDF dans la base de données
$sql = "INSERT INTO pdf_documents (title, content) VALUES (?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param('ss', $pdfTitle, $pdfContent);
$stmt->execute();
?>
