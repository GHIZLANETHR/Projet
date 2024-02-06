<?php
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

// Récupération du PDF depuis la base de données (par exemple, le premier enregistrement)
$result = $conn->query("SELECT title, content FROM pdf_documents WHERE id = $_GET[id]");

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();

    // Récupération des données du PDF
    $pdfContent = $row['content'];
    $pdfTitle = $row['title'];

    // En-têtes pour afficher le PDF dans le navigateur
    header('Content-type: application/pdf');
    header('Content-Disposition: inline; filename="' . $pdfTitle . '"');
    header('Content-Transfer-Encoding: binary');
    header('Accept-Ranges: bytes');

    // Affichage du contenu du PDF
    echo $pdfContent;
} else {
    echo "PDF not found.";
}
?>


