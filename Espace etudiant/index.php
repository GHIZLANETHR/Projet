<?php

$servername = "localhost:3307"; 
$username = "root"; 
$password = ""; 
$dbname = "departement_informatique";

// Créer une connexion à la base de données
$conn = new mysqli($servername, $username, $password, $dbname);
session_start();

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
					<h3>Cours</h3>
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
				  <h3>Notes</h3>
				</a>
			  </li>
			  <li class="nav-item">
				<b></b>
				<b></b>
				<a href="#"  onclick="showContent('Contact')">
				  <h3>Contact</h3>
				</a>
			  </li>
			  <li class="nav-item">
				<b></b>
				<b></b>
				<a href="logout_etudiant.php">
				  <h3>Deconnexion</h3>
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
                    <section class="information">
            <h3>Les infomrations personnelles : </h3>
            <?php
        $sql = "SELECT * FROM etudiant where Email_institutionnel='".$_SESSION["login"]."'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<div>";
                echo "<strong>Nom:</strong> " . $row["Nom"] . "<br><br>";
                echo "<strong>Prénom:</strong> " . $row["Prenom"] . "<br><br>";
                echo "<strong>Date de Naissance:</strong> " . $row["date_naissance"] . "<br><br>";
                echo "<strong>Lieu de Naissance:</strong> " . $row["lieu_naissance"] . "<br><br>";
                echo "<strong>Filière:</strong> " . $row["filiere"] . "<br><br>";
                echo "<strong>Code Massar:</strong> " . $row["code_massar"] . "<br><br>";
                echo "<strong>Email Personnel:</strong> " . $row["Email_personnel"] . "<br><br>";
                echo "<strong>Email Institutionnel:</strong> " . $row["Email_institutionnel"] . "<br><br>";
                echo "<strong>Code Apogée:</strong> " . $row["code_apogée"] . "<br>";
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
			<div id="EscolariteContent" style="display: none;">
				<!-- Content for E-scolarité -->
				
			  
			<div class="cards__card card">
				<a href="cours.php" target="_blank"class= "card__cta cta">
					<p class="card_heading">Cours</p></a>
					<?php

$query = "SELECT id, title FROM pdf_documents";
$result = mysqli_query($conn, $query);

if ($result) {
    while ($row = mysqli_fetch_assoc($result)) {
        $id = $row['id'];
        $title = $row['title'];
        // Assuming the image is stored as a BLOB

        // Output HTML dynamically using PHP variables
        echo '<article class="cours">';
        
        echo '<h3>' . $title . '</h3>';
        echo '<a href="display_pdf.php?id=' . $id . '" target="_blank" class="btn-tele">Ouvrir le PDF</a>';
        echo '</article>';
    }

    // Free the result set
    mysqli_free_result($result);
} else {
    // Handle the error if the query fails
    //echo "Error: " . mysqli_error($connection);
}



?>

					</div>
			  
				
			</div>
			<!-- Add similar divs for other menu items -->
			<div id="MonEmploieContent" style="display: none;" >
				<!-- Content for E-scolarité -->
				<h2>Les emplois du temps :</h2>
				<article class="emplois-temps">
                <img src="emplois.jpg">
                <h3>Licence professionnel en technologie du multimédia et web (TMW) S5 </h3>
                <a href="emplois/emptmw.pdf" class="btn-btn-pdf" download="">Télécharger le PDF</a>
            </article>
			<article class="emplois-temps">
                <img src="emplois.jpg">
                <h3>Licence professionnel en technologie du multimédia et web (TMW) S6 </h3>
                <a href="#" class="btn-btn-pdf" download="">Télécharger le PDF</a>
            </article>
			<article class="emplois-temps">
                <img src="emplois.jpg">
                <h3>Calendrie des examens  </h3>
                <a href="#" class="btn-btn-pdf-exa" download="">Télécharger le PDF</a>
            </article>
			</div>
			<div id="AutresServicesContent" style="display: none;">
				<!-- Content for E-scolarité -->
				<div class="cards__card card">
                    <h3>La liste des notes : </h3>
						<table>
							<tr>
								<th>Email institutionnel</th>
								<th>Note de module</th>
								<th>Module</th>
								<th>Professeur</th>
							</tr>
							<?php
					$sql = "select * from module where Email='".$_SESSION["login"]."'";
					$result = $conn->query($sql);

					if ($result->num_rows > 0) {
						while($row = $result->fetch_assoc()) {
							echo "<tr>";
							echo "<td>" . $row["Email"] . "</td>";
							echo "<td>" .  $row["Note de module"] . "</td>";
							echo "<td>" .  $row["nom_Module"] . "</td>";
							echo "<td>" . $row["Nom_professeur"] . "</td>";
						}
					} else {
						echo "0 résultats";
					}

					?>
						</table>
                            
					</div>
				
				  </div> 
			
			<div id="ContactContent" style="display: none;">
				<!-- Content for E-scolarité -->
			<section class="contact" id="contact">
            <h1 class="heading"><span>Conactez</span> nous</h1>
            <div class="row">
                <form action="contact-nous/contact.php" method="POST" enctype="multipart/form-data">
				<?php
                    if (isset($_SESSION['statusContact'])) {
                        echo '<div class="submitmessage">' . $_SESSION['statusContact'] . '</div>';
                        unset($_SESSION['statusContact']);
                    }
                ?>  
				<script src="remove msg.js"></script>
                    <span>Message :</span>
					<br>
        			<textarea  name="message" required class="message">
					</textarea>
					<br>
                    <span>Sélectionner un professeur</span>
                    <select name="profsEmails" class="box" required>
                        <option value="" disabled selected>Sélectionner un professeur --</option>
                        <option value="rahmounimohamed@gmail.com">RAHMOUNI MOHAMED</option>
                        <option value="abdelailielmounadi@gmail.com">ABDELAILI ELMOUNAID</option>
                        <option value="ghizlantwahri@gmail.com">FOUAD KHERROUBI</option> 
                    </select>
					<span>Sélectionner un fichier</span>
					<br>
                    <input type="file" id="file-input" class="file-input-field" name="attachment">
                    <button type="submit" class="btn-btn" name="send" >Envoyer un message </button>
                </form>
				
            </div>
        </section>
			</div>
		</div>
		</main>


		<script src="script/script.js"></script>
	  </body>

</html>