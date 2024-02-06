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
	<link rel="shortcut icon" href="favicon.icon" type="image/x-icon">
	<link rel="stylesheet" href="styles/nav_style.css">
	
	<title>Document</title>
</head>
<body>
	
		<main>
		  <nav class="main-menu">
			<h1></h1>
			<img class="logo" src="images/ens logo.jpg" alt="" />
			<ul>	
			  <li class="nav-item active">
				<b></b>
				<b></b>
				<a href="#" onclick="showContent('MonProfile')">
				  <h3>Mon profile</h3>
				</a>
			  </li>
	
			  <li class="nav-item">
				<b></b>
				<b></b>
				<a href="#" onclick="showContent('Escolarite')">
					<h3>Listes des etudiants</h3>
				</a>
			  </li>
	
			  <li class="nav-item">
				<b></b>
				<b></b>
				<a href="#" onclick="showContent('MonEmploie')">
				  <h3>Mon emploi</h3>
				</a>
			  </li>
	
			  <li class="nav-item">
				<b></b>
				<b></b>
				<a href="#" onclick="showContent('AutresServices')">
				  <h3>Cours</h3>
				</a>
			  </li>
			  <li class="nav-item">
				<b></b>
				<b></b>
				<a href="logout.php"  >
				  <h3>Déconnexion</h3>
				</a>
			  </li>
			</ul>
		  </nav>
		  <div class="content">
			<!-- Content will be dynamically updated here -->
			<div id="MonProfileContent" >
				<!-- Content for Mon Profile -->
				<div class="main__cards cards-info">
				  <div class="cards__inner">
					<div class="cards__card card">
                    <section class="information-prof">
                        <h3>Les infomrations personnelles : </h3>
            <?php
        session_start();
        $sql = "select * from professeur where Email='".$_SESSION["login"]."'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<div>";
                echo "<strong>Nom:</strong> " . $row["Nom"] . "<br><br>";
                echo "<strong>Prénom:</strong> " . $row["Prenom"] . "<br><br>";
                echo "<strong>Date de Naissance:</strong> " . $row["date_naissance"] . "<br><br>";
                echo "<strong>Lieu de Naissance:</strong> " . $row["lieu_naissance"] . "<br><br>";
                echo "<strong>Email Personnel:</strong> " . $row["Email"] . "<br><br>";
                echo "<strong>Modules:</strong> " . $row["Modules"] . "<br>";
                echo "</div><br>";
            }
        } else {
            echo "Aucun résultat";
        }
        ?>
    </section>

  
					</div>
                    
					
				  </div>
				</div>
			</div>
			<div id="EscolariteContent" style="display: none;" >
				<!-- Content for E-scolarité -->
				
			  
					<div class="cards__card card">
                    <h3>Les listes des étudiants : </h3>
            <table>
                <tr>
                    <th>Numéro</th>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Date de Naissance</th>
                    <th>Lieu de Naissance</th>
                    <th>Filière</th>
                    <th>Email Personnel</th>
                </tr>
                <?php
        $sql = "SELECT * FROM etudiant";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["idEtudiant"] . "</td>";
                echo "<td>" . $row["Nom"] . "</td>";
                echo "<td>" . $row["Prenom"] . "</td>";
                echo "<td>" . $row["date_naissance"] . "</td>";
                echo "<td>" . $row["lieu_naissance"] . "</td>";
                echo "<td>" . $row["filiere"] . "</td>";
                echo "<td>" . $row["Email_personnel"] . "</td>";
                echo "</tr>";
            }
        } else {
            echo "0 résultats";
        }

        ?>
            </table>
                            
					</div>
			  
				
			</div>
			<!-- Add similar divs for other menu items -->
			<div id="MonEmploieContent" style="display: none;">
				<!-- Content for E-scolarité -->
                <section class="emplois-prof">
            <h2 >Emplois du temps :</h2>
        
            <article class="emplois-temps-prof">
                <img src="emplois.jpg">
                <h3>Licence professionnel en technologie du multimédia et web (TMW)</h3>
                <a href="#" class="btn-btn-pdf" download="">Télécharger le PDF</a>
            </article>
            <article class="emplois-temps-prof">
                <img src="emplois.jpg">
                <h3>Cycle de licence en education informatique(CLE-INFORMATIQUE) </h3>
            <a href="#" class="btn-btn-pdf" download>Télécharger le PDF</a>
            </article>
        </section>
			</div>
			<div id="AutresServicesContent" style="display: none;">
				<!-- Content for E-scolarité -->
				<h1 class="main__heading">Envoyer un cours</h1>
				<div class="main__cards cards">
				  <div class="cards__inner">
                  <img src="contact.jpg" class="img">
                  <form action="upload.php" method="post" enctype="multipart/form-data" class="form-cours">
                    <label for="pdfFile">Héberger un fichier :</label>
                    <input type="file" name="pdfFile" id="pdfFile">
                    <input type="submit" value="Héberger" class="btn-hbr">
    </form>
    <br>
    
			  
					
			  
					
				  </div>
				</div>
			</div>
		
		</main>


		<script src="script/script.js"></script>
	  </body>

</html>