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
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" href="ens logo.jpg" type="image/x-icon">
	<link rel="stylesheet" href="styles/stylepreins.css">
	<title>Login</title>
</head>
<body>
	

	<form action="" method="post">

		<div class="container">
			<div class="left">
				<img src="ens logo.jpg" alt="" width="200px" height="200px">
			</div>
			<div class="ligne"></div>
			<div class="right">
				<div calss="infop">
				<h3>Information personnelle</h3>
				<label for="cin">CIN : </label>
				<input type="text" name="cin" id="inp" required>
				<label for="nom">Nom : </label>
				<input type="text" name="nom" id="inp" required>
				<label for="prenom">Prenom : </label>
				<input type="text" name="prenom" id="inp" required>
				<label for="date naissance">Date de naissance : </label>
				<input type="date" name="date_naissance" id="inp" required>
				<label for="lieu naissance">lieu de naissance : </label>
				<input type="text" name="lieu_naissance" id="inp" required>
                <label for="filiere">Filiere : </label>
				<input type="text" name="filiere" id="inp" required>
				<label for="adresse">Code massar : </label>
				<input type="text" name="code_massar" id="inp" required>
				<label for="email">Email personnelle </label>
				<input type="email" name="email_personnelle" id="inp" required>
                <label for="email">Email institutionnel </label>
				<input type="email" name="email_institutionnel" id="inp" required>
                <label for="codea">Code apogée : </label>
				<input type="password" name="codeapogee" id="inp" required>
				<label for="Mot_de_passe">Mot de passe : </label>
				<input type="password" name="mot_de_passe" id="inp" required>
                <label for="password">Confirmation de mot de passe : </label>
				<input type="password" name="pswrd" id="inp" required>
				</div>
                <input type="submit" value="soumettre" name="Login" class="ws">
			</div>


		</div>
		


	</form>
    <?php

        // Traitement du formulaire lorsqu'il est soumis
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $cin = $_POST["cin"];
            $nom = $_POST["nom"];
            $prenom = $_POST["prenom"];
            $date_naissance = $_POST["date_naissance"];
            $lieu_naissance = $_POST["lieu_naissance"];
            $filiere = $_POST["filiere"];
            $code_massar = $_POST["code_massar"];
            $email_personnelle = $_POST["email_personnelle"];
            $email_institutionnel = $_POST["email_institutionnel"];
            $code_apogee=$_POST["codeapogee"];
            $mot_de_passe = $_POST["mot_de_passe"];

            // Requête d'insertion dans la base de données
            $sql = "INSERT INTO etudiant (CIN, Nom, Prenom, date_naissance, lieu_naissance, filiere, code_massar, Email_personnel, Email_institutionnel,code_apogée, mot_de_passe) 
                    VALUES ('$cin', '$nom', '$prenom', '$date_naissance', '$lieu_naissance', '$filiere', '$code_massar', '$email_personnelle', '$email_institutionnel','$code_apogee', '$mot_de_passe')";

            if ($conn->query($sql) === TRUE) {
                
                header("Location:login_email.php");
            } else {
                echo "Erreur lors de l'enregistrement des données : " . $conn->error;
            }
        }


?>


</body>
</html>