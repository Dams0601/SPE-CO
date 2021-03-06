<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="../content/img/logo.png">
    <title>Qui sommes-nous ?</title>
    <link rel="stylesheet" href="../css/style_QSN.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
</head>

<body>

    <!-- NAVBAR -->
    <nav>
        <div class="logo">
            <img src="../content/img/logo.png" alt="logo">
        </div>
        <button class="hamburger" id='hamburger'>
            <i class="fas fa-bars"></i>
        </button>
        <div class="navbar-content">
            <li><a href="index.php">Accueil</a></li>
            <li><a href="specialites.php">Specialités</a></li>
            <li><a href="quiSommesNous.php" class="active">Qui sommes-nous ?</a></li>
            <li><a href="https://www.ndp-enghien.org/">Contact</a></li>
            
            <?php
                if(isset($_COOKIE['User_user'])){
                    ?>
                    <div class='profile'>
                        <img src="../content/img/user.svg" alt="">
                    <?php
                    print($_COOKIE['User_user']);
                    ?>
                        <a href="delete.php" class="fermer"><i class="fas fa-times fa-lg"></i></a>
                </div>
                    <?php
                }
                 else {
                    ?>
                        <a href="../html/connexion.html"><button class="inscription">CONNEXION</button></a>
                    <?php
                }
                ?>
            </div>
        </div>
    </nav>


    <!-- BANNER -->
    <div class="banner">
        <div class="degrade">
            <h1>QUI SOMMES-NOUS ?</h1>
        </div>
    </div>

    <!-- PRESENTATION DE L'ENTREPRISE -->
    <section class="introduction">
        <h2>POURQUOI ?</h2>
        <div class="content">
            <p>SPE&CO a été fondé à partir d'un site internet à réaliser en spécialité numérique et sciences de
                informatiques. À la naissance du
                projet, nous avions la volonté de sortir du schéma traditionnel.</p>
            <p>SPE&CO met à disposition des enseignants et des élèves de seconde une vue d'ensemble sur les différentes
                spécialités. Il permet ainsi aux élèves de se renseigner plus facilement et plus sûrement sur les
                spécialités à privilégier pour leur avenir. </p>
            <p>Né en 2021, SPE&CO a vu le jour lorsque deux élèves de première, passionés par
                l'informatique, décident de créer un site qui a pour vocation d'aider les enseignants et les élèves.</p>
        </div>
        <p class="quote">« Le meilleur moyen de réussir, c’est toujours d’essayer encore une fois »</p>
        <p class="author">— Thomas Edison</p>
    </section>

    <!-- PRESENTATION EQUIPE PEDAGOGIQUE -->
    <section class="pedagogie">
        <h2>EQUIPE PEDAGOGIQUE</h2>
        <div id="carousel">
            <div class="card">
                <img src="../content/img/man 1.png" alt="">
                <div class="info">
                    <h3>Frédéric RONSMANS</h3>
                    <p>Chef d'Etablissement</p>
                </div>
            </div>
            <div class="card">
                <img src="../content/img/woman 2.png" alt="">
                <div class="info">
                    <h3>Livia GARSAULT</h3>
                    <p>Directrice du collège</p>
                </div>
            </div>
            <div class="card">
                <img src="../content/img/woman 1.png" alt="">
                <div class="info">
                    <h3>Céline DRAPIER</h3>
                    <p>Directrice du lycée</p>
                </div>
            </div>

            <div class="card">
                <img src="../content/img/woman 4.png" alt="">
                <div class="info">
                    <h3>Marie-Elise GONZALES</h3>
                    <p>Responsable du cycle 6ème</p>
                </div>
            </div>
            <div class="card">
                <img src="../content/img/man 4.png" alt="">
                <div class="info">
                    <h3>Raymond TSHITENGE</h3>
                    <p>Responsable du cycle 5ème</p>
                </div>
            </div>
            <div class="card">
                <img src="../content/img/man 2.png" alt="">
                <div class="info">
                    <h3>Mickaël LANDES</h3>
                    <p>Responsable du cycle 4ème</p>
                </div>
            </div>

            <div class="card">
                <img src="../content/img/woman 4.png" alt="">
                <div class="info">
                    <h3>Nathalie EYSCHEN</h3>
                    <p>Responsable du cycle 3ème</p>
                </div>
            </div>
            <div class="card">
                <img src="../content/img/woman3.png" alt="">
                <div class="info">
                    <h3>Karine SEMENCE</h3>
                    <p>Responsable du cycle 2nde</p>
                </div>
            </div>
            <div class="card">
                <img src="../content/img/woman 2.png" alt="">
                <div class="info">
                    <h3>Sylvie THIEBAUT</h3>
                    <p>Responsable du cycle 1ère - Tle</p>
                </div>
            </div>
        </div>
    </section>

    <!-- PRESENTATION EQUIPE ADMINISTRATIVE -->
    <section class="administration">
        <h2>EQUIPE ADMINISTRATIVE</h2>
        <div id="carousel">
            <div class="card0">
                <img src="../content/img/woman 4.png" alt="">
                <div class="info">
                    <h3>Lyliane MEUNIER</h3>
                    <p>Secrétaire de Direction</p>
                </div>
            </div>
            <div class="card0">
                <img src="../content/img/woman 1.png" alt="">
                <div class="info">
                    <h3>Nathalie BARRIGAS</h3>
                    <p>Comptable</p>
                </div>
            </div>
            <div class="card0">
                <img src="../content/img/woman3.png" alt="">
                <div class="info">
                    <h3>Nadège SEIDEL</h3>
                    <p>Responsable des inscriptions</p>
                </div>
            </div>
        </div>
    </section>

    <!-- PRESENTATION EQUIPE TECHNIQUE -->
    <section class="technique">
        <h2>EQUIPE TECHNIQUE</h2>
        <div id="carousel">
            <div class="card0">
                <img src="../content/img/man.png" alt="">
                <div class="info">
                    <h3>Marc LAGANT</h3>
                    <p>Responsable entretien et sécurité</p>
                </div>
            </div>
            <div class="card0">
                <img src="../content/img/man 1.png" alt="">
                <div class="info">
                    <h3>Franck GILLES</h3>
                    <p>Responsable informatique et sûreté</p>
                </div>
            </div>
        </div>
    </section>

    <!-- FOOTER -->
    <section class="footer">
        <div class="bg">
            <div class="texte">
                <h1 class="">Notre dame providence</h1>
                <p class=""><span>Adresse :</span> 9 Boulevard Sadi Carnot, 95880 Enghien-les-Bains</p>
                <p class=""><span>Téléphone :</span> 01 34 12 63 78</p>
                <p class=""><span>Email :</span> contact@clnp.org</p>
                <div class="reseaux">
                    <a
                        href="https://www.facebook.com/pages/Lyc%C3%A9e%20Notre%20-%20Dame%20Providence/106035326102995/"><i
                            class="fab fa-facebook fa-2x"></i></a>
                    <a href="https://www.youtube.com/channel/UChth4rXnNwnY_M7-Ya30fWw"><i
                            class="fab fa-youtube fa-2x"></i></a>
                </div>
            </div>
            <div class="map">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1263.0231912243469!2d2.312495978776781!3d48.9673127483226!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e668ed8c018907%3A0x3b868fd3f0c78964!2s9%20Boulevard%20Sadi%20Carnot%2C%2095880%20Enghien-les-Bains!5e0!3m2!1sfr!2sfr!4v1615642111666!5m2!1sfr!2sfr"
                    width="90%" height="250" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
    </section>

    <footer>
        <p>© 2021 SPE&CO. All Rights Reserved.</p>
    </footer>

    <script src="../js/QSN.js"></script>
</body>

</html>