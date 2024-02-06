<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
        <meta name="viewport" content="with=device-width, initial-scale=1.0">
        <title>Département inforatique ENS</title>
        <link rel="stylesheet" href="stylecss.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"/>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.4.2/css/fontawesome.min.css"/> 
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
    <body>
        
        <section class="header">
            <nav>
                <h1>Département Informatique</h1>
                <div class="nav-links">
                    
                    <ul>
                        <li><a href="#">Accueil</a></li>
                        <li><a href="#">Espace professeur <i class="fas fa-caret-down"></i></a>
                            <div class="dropdown-menu">
                                <ul>
                                <li><a href="../Espace professeur /login_prof.php">Se connecter</a></li>
                            </div>
                        </li>
                        <li><a href="#">Espace étudiant<i class="fas fa-caret-down"></i></a>
                
                            <div class="dropdown-menu">
                                <ul>
                                  <li><a href="../Espace etudiant /login_email.php">Se connecter</a></li>
                                  <li><a href="../Espace etudiant /preinscription.php">Préinscription</a></li>
                                  <li><a href="#emplois">Emplois du temps</a></li>
                                  <li>
                                    <a href="#course">Cours <i class="fas fa-caret-right"></i></a>
                                    
                                    <div class="dropdown-menu-1">
                                      <ul>
                                        <li><a href="#">LPE-TMW</a></li>
                                        <li><a href="#">LE-CLE</a></li>
                                      </ul>
                                    </div>
                                  </li>
                                </ul>
                              </div>
                        </li>
                        <li><a href="#contact">Contactez-nous</a></li>
                      </ul>
                </div>
                
            </nav>
        <div class="text-box">
            <h1>École normale supérieure</h1>
            <p> L’École Normale Supérieure (E.N.S.) de Rabat a été créée en 1978.</p>
            <a href="" class="hero-btn">Visitez-nous pour en savoir plus</a>
        </section>       
    <section class="about">
        <div class="row">
            <div class="image">
                <img src="qst.jpg">
            </div>
            <div class="content">
                <h3>Pourquoi nous choisir?</h3>
                <p>On peut choisir l'informatique pour son potentiel d'innovation, ses opportunités professionnelles variées et son impact positif sur la résolution de problèmes</p>
                <a href="#contact" class="btn">Contactez-nous</a>
            </div>
        </div>
    </section>
    <section class="course" id="course">
        <h2 >Cours Offerts</h2>
    
        <article class="cours">
            <img src="web.jpg">
            <h3>Introduction à web</h3>
            <a href="#" class="btn-pdf1" download="">Télécharger le PDF</a>
        </article>
        <article class="cours">
            <img src="bs.jpg">
            <h3>La base de données </h3>
            <a href="#" class="btn-pdf1" download>Télécharger le PDF</a>
        </article>
        <article class="cours">
            <img src="Math.jpg">
            <h3>Mathématiques  AV</h3>
            <a href="#"class="btn-pdf1" download>Télécharger le PDF</a>
        </article>
    </section>

    <section class="emplois" id="emplois" >
        <h2 >Les emplois du temps :</h2>
    
        <article class="emplois-temps">
            <img src="emplois.jpg">
            <h3>Licence professionnel en technologie du multimédia et web (TMW)</h3>
            <a href="#" class="btn-pdf" download="">Télécharger le PDF</a>
        </article>
        <article class="emplois-temps">
            <img src="emplois.jpg">
            <h3>Cycle de licence en education informatique(CLE-INFORMATIQUE) </h3>
            <a href="#" class="btn-pdf" download>Télécharger le PDF</a>
        </article>
    </section>
    <section class="contact" id="contact" >
        <h1 class="heading"><span>Conactez</span> nous</h1>
        <div class="row">
            <div class="image">
                <img src="contact.jpg">
            </div>
            <form action="" method="post">
                <span>Votre nom</span>
                <input type="text" required placeholder="Entrez votre nom" maxlength="50" name="name" class="box">
                <span>Votre email</span>
                <input type="email" required placeholder="Entrez votre email" maxlength="50" name="email" class="box">
                <span>Votre telephone</span>
                <input type="number" required placeholder="Entrez votre numéro de téléphone"max="9999999999" min="0" name="number" class="box" onkeypress="if(this.value.length ==10)return false;">
                <span>Sélectionner un cours</span>
                <select name="courses" class="box" required>
                    <option value="" disabled selected>Sélectionner un cours --</option>
                    <option value="Développement web">Développement web</option>
                    <option value="Réseau informatique">Réseau informatique</option>
                    <option value="Base de données">Base de données</option>
                    <option value="Mathématique avancées">Mathématique avancées</option>
                    <option value="Structure de données">Structure de données</option> 
                </select>
                <span>Choisir le genre :</span>
                <div class="radio">
                    <input type="radio" name="gender" value="male" id="male">
                    <label for="male">Homme</label>
                    <input type="radio" name="gender" value="female" id="female">
                <label for="female">Femme</label>
                </div>
                <input type="submit" value="Envoyer un message" class="btn-send" name="send">
            </form>
        </div>
    </section>
    <footer class="footer">
            <div class="share">
               <a href="#"><i class="fa-brands fa-facebook"></i></a>
               <a href="#"><i class="fa-brands fa-instagram"></i></a>
               <a href="#"><i class="fa-brands fa-twitter"></i></a>
               <a href="#"><i class="fa-brands fa-youtube"></i></a>
               <a href="#"><i class="fa-brands fa-google-plus"></i></a>
            </div>
            <div class="credit">&copy; copyright @ 2024 by ENS || all rights reserved</div>
    </footer>
    </body>
</html>