<?php

$servername = "localhost:3307"; 
$username = "root"; 
$password = ""; 
$dbname = "departement_informatique";
session_start();
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
	<link rel="shortcut icon" href="images/ens logo.jpg" type="image/x-icon">
	<link rel="stylesheet" href="styles/loginStyle.css">
	<title>Login</title>
</head>
<body>
	

	<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">

		<div class="container">
			<div class="left">
				<img src="images/ens logo.jpg" alt="" width="200px" height="200px">
			</div>
			<div class="ligne"></div>
			<div class="right">
				<label for="email">Email Instututionnel</label>
				<input type="email" name="email" id="" class="WF">
				<label for="mot de passe">Mot de passe</label>
				<input type="password" name="password" id="" class="WF">
				<input type="submit" value="Login" name="Login" class="ws">
			</div>
			
		</div>
		
	</form>
	<?php
    if (isset($_POST['Login'])){
        $email=$_POST['email'];
        $password=$_POST['password'];
		$_SESSION["login"]=$_POST["email"];
        $sql="select * from etudiant where Email_institutionnel ='$email' and Mot_de_passe = '$password' ";
         $result=$conn->query($sql);
         if($result->num_rows>0){
			if($result=$result->fetch_assoc()){
				$_SESSION['Nom'] = $result["Nom"];
				$_SESSION['Email_institutionnel'] = $result["Email_institutionnel"];
			}
            header("Location:index.php?Login='".$_SESSION["login"]."'");
         }
         else{
            echo "Nom ou mot de passe est incorrecte ";
         }

    }
        
?>



</body>
</html>