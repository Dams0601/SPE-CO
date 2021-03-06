<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Spécialités</title>
    <link rel="stylesheet" href="../css/style_spe.css">
    <link rel="icon" type="image/png" href="../content/img/logo.png">

    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />

</head>

<body>
    <!-- NAVBAR -->
    <nav id="nav">
        <div class="logo">
            <img src="../content/img/logo.png" alt="logo">
        </div>
        <button class="hamburger" id='hamburger'>
            <i class="fas fa-bars"></i>
        </button>
        <div class="navbar-content">
            <li><a href="index.php">Accueil</a></li>
            <li><a href="specialites.php" class="active">Specialités</a></li>
            <li><a href="quiSommesNous.php">Qui sommes-nous ?</a></li>
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
    <!-- HEADER -->
    <div class="header">
        <!-- LINKS -->
        <aside class="links">
            <li><a href="#NSI">NSI</a></li>
            <li><a href="#SI">Sciences de l’Ingénieur</a></li>
            <li><a href="#Mathematiques">Mathématiques</a></li>
            <li><a href="#PC">Physique chimie</a></li>
            <li><a href="#SVT">SVT</a></li>
            <li><a href="#SES">SES</a></li>
            <li><a href="#HGGSP">HGGSP</a></li>
            <li><a href="#HLP">Littérature - Philosophie</a></li>
            <li><a href="#LLCE">LLCE</a></li>
        </aside>
        <!-- INTRODUCTION -->
        <section id="introduction" class="introduction">
            <div class="bande-header-top"></div>
            <div class="bande-header-bottom"></div>
            
            <div class="introduction-content">
                <div class="text">
                    <h1>Les spécialités</h1>
                    <p>
                        Vous devez choisir 3 enseignements de spécialité si vous vous orientez vers une 1<sup>ère</sup> générale. Un choix important car il conditionnera votre orientation dans l’enseignement supérieur. Quelles spécialité choisir ? Quels sont les débouchés par spécialité ? Quelles spécialités pour quelles études ? 
                    </p>
                    <button class="btn btn-quiz"><a target="_blank" href="https://www.letudiant.fr/test/etudes/bac/pour-quelles-specialites-etes-vous-fait-e/question.html">PETIT QUIZ</a></button>
                </div>
                <img id="graph" src="../content/img/specialites.jpg" alt="tableau de spécialités">
            </div>
        </section>
    </div>

    <!-- BUTTON REVENIR EN HAUT -->
    <a href="#nav" class="unshow" id="goTop"></a>

    <!-- NUMERIQUE ET SCIENCES INFORMATIQUES -->
    <section class="specialites" id="NSI">
        <div class="background-title">
            <div class="bande bande-top-left"></div>
            <div class="bande bande-top-right"></div>
            <div class="bande bande-bottom-left"></div>
            <div class="bande bande-bottom-right"></div>
            <div class="title reveal">
                <img src="../content/img/laptop.svg" alt="">
                <h1>NUMERIQUE ET SCIENCES DE L’INFORMATIQUE</h1>
            </div>
        </div>
        </div>

        <div class="content">
            <div class="subcontent">
                <div class="box box-blue">
                    <h2 class="box-title"><img class="logo-title" src="../content/img/target.svg">OBJECTIFS</h2>
                    <div class="box-content">
                            <li>Les données, qui représentent sous une forme numérique unifiée des informations très diverses : textes, images, sons, mesures physiques, sommes d’argent, etc.</li>
                            <li>Les algorithmes, qui spécifient de façon abstraite et précise des traitements à effectuer sur les données à partir d’opérations élémentaires.</li>
                            <li>Les machines, et leurs systèmes d’exploitation, qui permettent d’exécuter des programmes en enchaînant un grand nombre d’instructions simples, assurent la persistance des données par leur stockage et de gérer les communications. On y inclut les objets connectés et les réseaux.</li>
                    </div>
                </div>
                <div class="box box-white">
                    <h2 class="box-title"><img class="logo-title" src="../content/img/skills.svg">COMPETENCES</h2>
                    <div class="box-content">
                        <li>Analyser et modéliser un problème en termes de flux et de traitement d’informations.</li>
                        <li>Décomposer un problème en sous-problèmes, reconnaître des situations déjà analysées et réutiliser des solutions.</li>
                        <li>Concevoir des solutions algorithmiques.</li>
                        <li>Traduire un algorithme dans un langage de programmation, en spécifier les interfaces et les interactions, comprendre et réutiliser des codes sources existants.</li>
                        <li>Développer des capacités d’abstraction et de généralisation.</li>
                    </div>
                </div>
            </div>
            <div class="subcontent">
                <div class="box box-white">
                    <h2 class="box-title"><img class="logo-title" src="../content/img/program.svg">PROGRAMME</h2>
                    <div class="box-content">
                        <li>Algorithmique</li>
                        <li>Architectures matérielles et systèmes d’exploitation</li>
                        <li>Interactions entre l’homme et la machine sur le Web</li>
                        <li>Langages et programmation</li>
                        <li>Représentation des données : types construits</li>
                        <li>Représentation des données : types et valeurs de base</li>
                        <li>Traitement de données en tables</li>
                        <a target="_blank"
                            href="https://euler.ac-versailles.fr/IMG/pdf/nsi_term_spe_progr_2019_07.pdf"><button
                                class="btn btn-more">EN SAVOIR
                                PLUS</button></a>
                    </div>
                </div>
                <div class="box box-blue">
                    <h2 class="box-title"><img class="logo-title" src="../content/img/school.svg">DEBOUCHES</h2>
                    <div class="box-content">
                        <li>Prépa MPSI - MP2I</li>
                        <li>Ecole d'ingénieur</li>
                        <li>Licence Informatique</li>
                        <li>BTS Systèmes Numériques</li>
                    </div>
                </div>
            </div>
        </div>
        <div class="comments">
            <h2>Ce que disent les élèves</h2>
            <div class="comments-border reveal">
                <div class="box-comments0">
                    <p class="quote">“ Les cours de NSI sont la plupart pragmatiques. Spécialité très interessante. ”</p>
                    <div class="profil">
                        <img src="../content/img/user.svg" alt="">
                        <div class="info-profil">
                            <h3 class="name">Damien</h3>
                            <p class="job">Première</p>
                        </div>
                    </div>
                </div>

                <div class="box-comments0">
                    <p class="quote">“ Pratiquement que des manipulations sur ordinateur. ”</p>
                    <div class="profil">
                        <img src="../content/img/user.svg" alt="">
                        <div class="info-profil">
                            <h3 class="name">Alexandre</h3>
                            <p class="job">Première</p>
                        </div>
                    </div>
                </div>

                <div class="box-comments0">
                    <p class="quote">“ Manipulation de langages de programmation, création de site internet... ”</p>
                    <div class="profil">
                        <img src="../content/img/user.svg" alt="">
                        <div class="info-profil">
                            <h3 class="name">Sabine</h3>
                            <p class="job">Première</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    
<!-- SCIENCES DE L'INGENIEUR -->
<section class="specialites" id="SI">
    <div class="background-title">
        <div class="bande bande-top-left"></div>
        <div class="bande bande-top-right"></div>
        <div class="bande bande-bottom-left"></div>
        <div class="bande bande-bottom-right"></div>
        <div class="title reveal">
            <img src="../content/img/gears.svg" alt="">
            <h1>SCIENCES DE L'INGENIEUR</h1>
        </div>
    </div>
    </div>

    <div class="content">
        <div class="subcontent">
            <div class="box box-blue">
                <h2 class="box-title"><img class="logo-title" src="../content/img/target.svg">OBJECTIFS</h2>
                <div class="box-content">
                        <li>Avec la contribution des autres enseignements scientifiques, l’objectif de l’enseignement de spécialité de sciences de l’ingénieur du cycle terminal du lycée est de faire acquérir des compétences fondamentales qui permettent aux élèves de poursuivre vers les qualifications d’ingénieur dont notre pays a besoin.</li>
                </div>
            </div>
            <div class="box box-white">
                <h2 class="box-title"><img class="logo-title" src="../content/img/skills.svg">COMPETENCES</h2>
                <div class="box-content">
                    <li>Créer des produits innovants.</li>
                    <li>Analyser les produits existants pour appréhender leur complexité.</li>
                    <li>Modéliser les produits pour prévoir leurs performances.</li>
                    <li>Valider les performances d’un produit par les expérimentations et les simulations numériques.</li>
                </div>
            </div>
        </div>
        <div class="subcontent">
            <div class="box box-white">
                <h2 class="box-title"><img class="logo-title" src="../content/img/program.svg">PROGRAMME</h2>
                <div class="box-content">
                    <li>Les territoires et les produits intelligents, la mobilité des personnes et des biens</li>
                    <li>L’homme assisté, réparé, augmenté</li>
                    <li>Le design responsable et le prototypage de produits innovants</li>
                    <a target="_blank"
                        href="http://cache.media.education.gouv.fr/file/special_9/21/7/sciences-ingenieur_155217.pdf"><button
                            class="btn btn-more">EN SAVOIR
                            PLUS</button></a>
                </div>
            </div>
            <div class="box box-blue">
                <h2 class="box-title"><img class="logo-title" src="../content/img/school.svg">DEBOUCHES</h2>
                <div class="box-content">
                    <li>Ecoles d’ingénieur avec cycle préparatoire intégré</li>
                    <li>Classes préparatoires aux grandes écoles</li>
                    <li>IUT</li>
                    <li>BTS</li>
                </div>
            </div>
        </div>
    </div>
    <div class="comments">
        <h2>Ce que disent les élèves</h2>
        <div class="comments-border reveal">
            <div class="box-comments0">
                <p class="quote">“ Le travail demandé est complexe mais très interessant. ”</p>
                <div class="profil">
                    <img src="../content/img/user.svg" alt="">
                    <div class="info-profil">
                        <h3 class="name">Raphaël</h3>
                        <p class="job">Première</p>
                    </div>
                </div>
            </div>

            <div class="box-comments0">
                <p class="quote">“ Spécialité qui nous fait travailler en autonomie. ”</p>
                <div class="profil">
                    <img src="../content/img/user.svg" alt="">
                    <div class="info-profil">
                        <h3 class="name">Fabien</h3>
                        <p class="job">Première</p>
                    </div>
                </div>
            </div>

            <div class="box-comments0">
                <p class="quote">“ Spécialité qui permet de s'interroger sur les technologies complexes. ”</p>
                <div class="profil">
                    <img src="../content/img/user.svg" alt="">
                    <div class="info-profil">
                        <h3 class="name">Mathis</h3>
                        <p class="job">Première</p>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<!-- MATHEMATIQUES -->
<section class="specialites" id="Mathematiques">
    <div class="background-title">
        <div class="bande bande-top-left"></div>
        <div class="bande bande-top-right"></div>
        <div class="bande bande-bottom-left"></div>
        <div class="bande bande-bottom-right"></div>
        <div class="title reveal">
            <img src="../content/img/calculator.svg" alt="">
            <h1>MATHEMATIQUES</h1>
        </div>
    </div>
    </div>

    <div class="content">
        <div class="subcontent">
            <div class="box box-blue">
                <h2 class="box-title"><img class="logo-title" src="../content/img/target.svg">OBJECTIFS</h2>
                <div class="box-content">
                        <li>Développer le goût des mathématiques.</li>
                        <li>D’en apprécier les démarches et les objectifs afin qu’il puisse faire l’expérience personnelle de l’efficacité des concepts mathématiques et de la simplification et la généralisation que permet la maîtrise de l’abstraction.</li>
                </div>
            </div>
            <div class="box box-white">
                <h2 class="box-title"><img class="logo-title" src="../content/img/skills.svg">COMPETENCES</h2>
                <div class="box-content">
                    <li>Chercher, expérimenter, en particulier à l’aide d’outils logiciels.</li>
                    <li>Modéliser, faire une simulation, valider ou invalider un modèle.</li>
                    <li>Communiquer un résultat par oral ou par écrit, expliquer une démarche.</li>
                    <li>Calculer, appliquer des techniques et mettre en oeuvre des algorithmes.</li>
                    <li>Raisonner, démontrer, trouver des résultats partiels et les mettre en perspective.</li>
                </div>
            </div>
        </div>
        <div class="subcontent">
            <div class="box box-white">
                <h2 class="box-title"><img class="logo-title" src="../content/img/program.svg">PROGRAMME</h2>
                <div class="box-content">
                    <li>Algèbre</li>
                    <li>Analyse</li>
                    <li>Géométrie</li>
                    <li>Probabilités et statistiques</li>
                    <li>Algorithmique et programmation</li>
                    <a target="_blank"
                        href="https://euler.ac-versailles.fr/IMG/pdf/progr_maths_1re_gen_2019_01.pdf"><button
                            class="btn btn-more">EN SAVOIR
                            PLUS</button></a>
                </div>
            </div>
            <div class="box box-blue">
                <h2 class="box-title"><img class="logo-title" src="../content/img/school.svg">DEBOUCHES</h2>
                <div class="box-content">
                    <li>Prépa MP - MPSI - PC</li>
                    <li>Ecole d'ingénieur</li>
                    <li>ENS</li>
                    <li>DUT</li>
                </div>
            </div>
        </div>
    </div>
    <div class="comments">
        <h2>Ce que disent les élèves</h2>
        <div class="comments-border reveal">
            <div class="box-comments0">
                <p class="quote">“ Super spécialité qui nous apprend à chercher et démontrer. ”</p>
                <div class="profil">
                    <img src="../content/img/user.svg" alt="">
                    <div class="info-profil">
                        <h3 class="name">Jeanne</h3>
                        <p class="job">Première</p>
                    </div>
                </div>
            </div>

            <div class="box-comments0">
                <p class="quote">“ Spécialité très complète qui enrichit notre savoir. ”</p>
                <div class="profil">
                    <img src="../content/img/user.svg" alt="">
                    <div class="info-profil">
                        <h3 class="name">Omar</h3>
                        <p class="job">Première</p>
                    </div>
                </div>
            </div>

            <div class="box-comments0">
                <p class="quote">“ Le chapitre que j'ai le plus aimé est les suites. ”</p>
                <div class="profil">
                    <img src="../content/img/user.svg" alt="">
                    <div class="info-profil">
                        <h3 class="name">Guillaume</h3>
                        <p class="job">Première</p>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<!-- PHYSIQUE CHIMIE -->
<section class="specialites" id="PC">
    <div class="background-title">
        <div class="bande bande-top-left"></div>
        <div class="bande bande-top-right"></div>
        <div class="bande bande-bottom-left"></div>
        <div class="bande bande-bottom-right"></div>
        <div class="title reveal">
            <img src="../content/img/flask.svg" alt="">
            <h1>PHYSIQUE CHIMIE</h1>
        </div>
    </div>
    </div>

    <div class="content">
        <div class="subcontent">
            <div class="box box-blue">
                <h2 class="box-title"><img class="logo-title" src="../content/img/target.svg">OBJECTIFS</h2>
                <div class="box-content">
                    <li>Développer le goût de la physique-chimie.</li>
                </div>
            </div>
            <div class="box box-white">
                <h2 class="box-title"><img class="logo-title" src="../content/img/skills.svg">COMPETENCES</h2>
                <div class="box-content">
                    <li>Énoncer une problématique.</li>
                    <li>Représenter la situation par un schéma.</li>
                    <li>Effectuer des procédures courantes (calculs, représentations, collectes de données, etc.).</li>
                    <li>Mettre en œuvre un protocole expérimental en respectant les règles de sécurité.</li>
                    <li>Faire preuve d’esprit critique, procéder à des tests de vraisemblance.</li>
                </div>
            </div>
        </div>
        <div class="subcontent">
            <div class="box box-white">
                <h2 class="box-title"><img class="logo-title" src="../content/img/program.svg">PROGRAMME</h2>
                <div class="box-content">
                    <li>Constitution et transformations de la matière</li>
                    <li>Mouvement et interactions</li>
                    <li>L’énergie : conversions et transferts</li>
                    <li>Ondes et signaux</li>
                    <a target="_blank"
                        href="https://pedagogie.ac-reunion.fr/fileadmin/ANNEXES-ACADEMIQUES/03-PEDAGOGIE/02-COLLEGE/sciences-physiques-chimiques/file_pdf/MEN/2019_1ere_PC.pdf"><button
                            class="btn btn-more">EN SAVOIR
                            PLUS</button></a>
                </div>
            </div>
            <div class="box box-blue">
                <h2 class="box-title"><img class="logo-title" src="../content/img/school.svg">DEBOUCHES</h2>
                <div class="box-content">
                    <li>Licence scientifique : une formation généraliste</li>
                    <li>Prépa PC et PSI</li>
                    <li>Écoles d’ingénieurs</li>
                    <li>BTS</li>
                </div>
            </div>
        </div>
    </div>
    <div class="comments">
        <h2>Ce que disent les élèves</h2>
        <div class="comments-border reveal">
            <div class="box-comments0">
                <p class="quote">“ Spécialité qui demande une dextérité des mathématiques. ”</p>
                <div class="profil">
                    <img src="../content/img/user.svg" alt="">
                    <div class="info-profil">
                        <h3 class="name">Jean</h3>
                        <p class="job">Première</p>
                    </div>
                </div>
            </div>

            <div class="box-comments0">
                <p class="quote">“ Elle apporte d'énormes connaissances sur la mécanique et la chimie. ”</p>
                <div class="profil">
                    <img src="../content/img/user.svg" alt="">
                    <div class="info-profil">
                        <h3 class="name">Maxime</h3>
                        <p class="job">Première</p>
                    </div>
                </div>
            </div>

            <div class="box-comments0">
                <p class="quote">“ Spécialité assez complexe toutefois très passionnante. ”</p>
                <div class="profil">
                    <img src="../content/img/user.svg" alt="">
                    <div class="info-profil">
                        <h3 class="name">Armand</h3>
                        <p class="job">Première</p>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<!-- SCIENCE ET VIE DE LA TERRE -->
<section class="specialites" id="SVT">
    <div class="background-title">
        <div class="bande bande-top-left"></div>
        <div class="bande bande-top-right"></div>
        <div class="bande bande-bottom-left"></div>
        <div class="bande bande-bottom-right"></div>
        <div class="title reveal">
            <img src="../content/img/microscope.svg" alt="">
            <h1>SCIENCE ET VIE DE LA TERRE</h1>
        </div>
    </div>
    </div>

    <div class="content">
        <div class="subcontent">
            <div class="box box-blue">
                <h2 class="box-title"><img class="logo-title" src="../content/img/target.svg">OBJECTIFS</h2>
                <div class="box-content">
                        <li>Participer à la formation de l’esprit critique et à l’éducation civique en appréhendant le monde actuel et son évolution dans une perspective scientifique.</li>
                        <li>Préparer les élèves qui choisiront une formation scientifique à une poursuite d’études dans l’enseignement supérieur et, au-delà, aux métiers auxquels elle conduit.</li>
                </div>
            </div>
            <div class="box box-white">
                <h2 class="box-title"><img class="logo-title" src="../content/img/skills.svg">COMPETENCES</h2>
                <div class="box-content">
                    <li>Pratiquer des démarches scientifiques.</li>
                    <li>Concevoir, créer, réaliser.</li>
                    <li>Utiliser des outils et mobiliser des méthodes pour apprendre.</li>
                    <li>Pratiquer des langages.</li>
                    <li>Adopter un comportement éthique et responsable.</li>
                </div>
            </div>
        </div>
        <div class="subcontent">
            <div class="box box-white">
                <h2 class="box-title"><img class="logo-title" src="../content/img/program.svg">PROGRAMME</h2>
                <div class="box-content">
                    <li>La Terre, la vie et l’évolution du vivant</li>
                    <li>Enjeux contemporains de la planète</li>
                    <li>Le corps humain et la santé</li>
                    <a target="_blank"
                        href="https://cache.media.education.gouv.fr/file/SP1-MEN-22-1-2019/54/2/spe648_annexe_1063542.pdf"><button
                            class="btn btn-more">EN SAVOIR
                            PLUS</button></a>
                </div>
            </div>
            <div class="box box-blue">
                <h2 class="box-title"><img class="logo-title" src="../content/img/school.svg">DEBOUCHES</h2>
                <div class="box-content">
                    <li>Licence de biologie</li>
                    <li>Ecoles d'ingénieurs</li>
                    <li>Etudes de médecine</li>
                    <li>STAPS</li>
                </div>
            </div>
        </div>
    </div>
    <div class="comments">
        <h2>Ce que disent les élèves</h2>
        <div class="comments-border reveal">
            <div class="box-comments0">
                <p class="quote">“ Très bonne spécialité avec l'étude du vivant. ”</p>
                <div class="profil">
                    <img src="../content/img/user.svg" alt="">
                    <div class="info-profil">
                        <h3 class="name">Marine</h3>
                        <p class="job">Première</p>
                    </div>
                </div>
            </div>

            <div class="box-comments0">
                <p class="quote">“ Spécialité qui nous fait découvrir notre corps dans son ensemble. ”</p>
                <div class="profil">
                    <img src="../content/img/user.svg" alt="">
                    <div class="info-profil">
                        <h3 class="name">Flavien</h3>
                        <p class="job">Première</p>
                    </div>
                </div>
            </div>

            <div class="box-comments0">
                <p class="quote">“ Matière passionnante et épanouisante, avec beaucoup de manipulation. ”</p>
                <div class="profil">
                    <img src="../content/img/user.svg" alt="">
                    <div class="info-profil">
                        <h3 class="name">Adrien</h3>
                        <p class="job">Première</p>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<!-- SCIENCES ECONOMIQUES ET SOCIALES -->
<section class="specialites" id="SES">
    <div class="background-title">
        <div class="bande bande-top-left"></div>
        <div class="bande bande-top-right"></div>
        <div class="bande bande-bottom-left"></div>
        <div class="bande bande-bottom-right"></div>
        <div class="title reveal">
            <img src="../content/img/euro.svg" alt="">
            <h1>SCIENCES ECONOMIQUES ET SOCIALES</h1>
        </div>
    </div>
    </div>

    <div class="content">
        <div class="subcontent">
            <div class="box box-blue">
                <h2 class="box-title"><img class="logo-title" src="../content/img/target.svg">OBJECTIFS</h2>
                <div class="box-content">
                        <li>Participer à la formation intellectuelle des élèves en renforçant leur acquisition des concepts, méthodes et problématiques essentiels de la science économique, de la sociologie et de la science politique.</li>
                        <li>Contribuer à la formation civique des élèves grâce à la maîtrise de connaissances qui favorisent la participation au débat public sur les grands enjeux économiques, sociaux et politiques des sociétés contemporaines.</li>
                </div>
            </div>
            <div class="box box-white">
                <h2 class="box-title"><img class="logo-title" src="../content/img/skills.svg">COMPETENCES</h2>
                <div class="box-content">
                    <li>Résolution chiffrée et graphique d’exercices simples.</li>
                    <li>Collecte et traitement de l’information.</li>
                    <li>Analyse et mobilisation des données.</li>
                    <li>Traduire un algorithme dans un langage de programmation, en spécifier les interfaces et les interactions, comprendre et réutiliser des codes sources existants.</li>
                    <li>Mobiliser les concepts et les technologies utiles pour assurer les fonctions d’acquisition, de mémorisation, de traitement et de diffusion des informations.</li>
                    <li>Développer des capacités d’abstraction et de généralisation.</li>
                </div>
            </div>
        </div>
        <div class="subcontent">
            <div class="box box-white">
                <h2 class="box-title"><img class="logo-title" src="../content/img/program.svg">PROGRAMME</h2>
                <div class="box-content">
                    <li>Algorithmique</li>
                    <li>Architectures matérielles et systèmes d’exploitation</li>
                    <li>Histoire de l’informatique</li>
                    <li>Interactions entre l’homme et la machine sur le Web</li>
                    <li>Langages et programmation</li>
                    <li>Représentation des données : types construits</li>
                    <li>Représentation des données : types et valeurs de base</li>
                    <li>Traitement de données en tables</li>
                    <a target="_blank"
                        href="https://euler.ac-versailles.fr/IMG/pdf/nsi_term_spe_progr_2019_07.pdf"><button
                            class="btn btn-more">EN SAVOIR
                            PLUS</button></a>
                </div>
            </div>
            <div class="box box-blue">
                <h2 class="box-title"><img class="logo-title" src="../content/img/school.svg">DEBOUCHES</h2>
                <div class="box-content">
                    <li>Prépa Physique</li>
                    <li>Ecole d'ingénieur</li>
                    <li>Licence Informatique</li>
                    <li>BTS Systèmes Numériques</li>
                </div>
            </div>
        </div>
    </div>
    <div class="comments">
        <h2>Ce que disent les élèves</h2>
        <div class="comments-border reveal">
            <div class="box-comments0">
                <p class="quote">“ Spécialité qui permet de s'initier au monde de l'entreprise. ”</p>
                <div class="profil">
                    <img src="../content/img/user.svg" alt="">
                    <div class="info-profil">
                        <h3 class="name">Chiara</h3>
                        <p class="job">Première</p>
                    </div>
                </div>
            </div>

            <div class="box-comments0">
                <p class="quote">“ Spécialité qui nous fait découvrir notre corps dans son ensemble. ”</p>
                <div class="profil">
                    <img src="../content/img/user.svg" alt="">
                    <div class="info-profil">
                        <h3 class="name">Marc</h3>
                        <p class="job">Première</p>
                    </div>
                </div>
            </div>

            <div class="box-comments0">
                <p class="quote">“ Découverte de beaucoup de connaissance en lien avec la sociologie. ”</p>
                <div class="profil">
                    <img src="../content/img/user.svg" alt="">
                    <div class="info-profil">
                        <h3 class="name">Antoine</h3>
                        <p class="job">Première</p>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<!-- HGGSP -->
<section class="specialites" id="HGGSP">
    <div class="background-title">
        <div class="bande bande-top-left"></div>
        <div class="bande bande-top-right"></div>
        <div class="bande bande-bottom-left"></div>
        <div class="bande bande-bottom-right"></div>
        <div class="title reveal">
            <img src="../content/img/globe.svg" alt="">
            <h1>HISTOIRE-GEOGRAPHIE, GEOPOLITIQUE ET SCIENCES POLITIQUES</h1>
        </div>
    </div>
    </div>

    <div class="content">
        <div class="subcontent">
            <div class="box box-blue">
                <h2 class="box-title"><img class="logo-title" src="../content/img/target.svg">OBJECTIFS</h2>
                <div class="box-content">
                        <li>Etudier les phénomènes dans leur spécificité politique.</li>
                        <li>Envisager les rivalités et les enjeux de pouvoir entre des territoires considérés dans leur profondeur historique, ainsi que les représentations qui les accompagnent.</li>
                        <li>Saisir chaque question dans son épaisseur temporelle.</li>
                </div>
            </div>
            <div class="box box-white">
                <h2 class="box-title"><img class="logo-title" src="../content/img/skills.svg">COMPETENCES</h2>
                <div class="box-content">
                    <li>Appréhender une question essentielle du monde actuel.</li>
                    <li>De prendre du recul pour étudier un même objet dans différents contextes et selon des approches variées.</li>
                    <li>D’approfondir les analyses.</li>
                    <li>De développer leur travail personnel en s’engageant dans des projets.</li>
                    <li>D’affirmer et de conforter le choix de leur poursuite d’études.</li>
                </div>
            </div>
        </div>
        <div class="subcontent">
            <div class="box box-white">
                <h2 class="box-title"><img class="logo-title" src="../content/img/program.svg">PROGRAMME</h2>
                <div class="box-content">
                    <li>Comprendre un régime politique : la démocratie</li>
                    <li>Analyser les dynamiques des puissances internationales</li>
                    <li>Etudier les divisions politiques du monde : les frontières</li>
                    <li>S’informer : un regard critique sur les sources et modes de communication</li>
                    <li>Analyser les relations entre États et religions</li>
                    <a target="_blank"
                        href="https://cache.media.education.gouv.fr/file/SP1-MEN-22-1-2019/92/5/spe576_annexe_1062925.pdf"><button
                            class="btn btn-more">EN SAVOIR
                            PLUS</button></a>
                </div>
            </div>
            <div class="box box-blue">
                <h2 class="box-title"><img class="logo-title" src="../content/img/school.svg">DEBOUCHES</h2>
                <div class="box-content">
                    <li>Prépa Commerce</li>
                    <li>Bachelor</li>
                    <li>Licence Droit</li>
                    <li>BTS Commerce</li>
                </div>
            </div>
        </div>
    </div>
    <div class="comments">
        <h2>Ce que disent les élèves</h2>
        <div class="comments-border reveal">
            <div class="box-comments0">
                <p class="quote">“ Spécialité qui apporte intellectuellement. ”</p>
                <div class="profil">
                    <img src="../content/img/user.svg" alt="">
                    <div class="info-profil">
                        <h3 class="name">Adam</h3>
                        <p class="job">Première</p>
                    </div>
                </div>
            </div>

            <div class="box-comments0">
                <p class="quote">“ Spécialité qui nous apprend les enjeux du monde politique d'aujourd'hui. ”</p>
                <div class="profil">
                    <img src="../content/img/user.svg" alt="">
                    <div class="info-profil">
                        <h3 class="name">Nathan</h3>
                        <p class="job">Première</p>
                    </div>
                </div>
            </div>

            <div class="box-comments0">
                <p class="quote">“ Spécialité qui permet de comprendre la société actuelle. ”</p>
                <div class="profil">
                    <img src="../content/img/user.svg" alt="">
                    <div class="info-profil">
                        <h3 class="name">Adèle</h3>
                        <p class="job">Première</p>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<!-- HLP -->
<section class="specialites" id="HLP">
    <div class="background-title">
        <div class="bande bande-top-left"></div>
        <div class="bande bande-top-right"></div>
        <div class="bande bande-bottom-left"></div>
        <div class="bande bande-bottom-right"></div>
        <div class="title reveal">
            <img src="../content/img/book.svg" alt="">
            <h1>HUMANITE, LITTERATURE ET PHILOSOPHIE</h1>
        </div>
    </div>
    </div>

    <div class="content">
        <div class="subcontent">
            <div class="box box-blue">
                <h2 class="box-title"><img class="logo-title" src="../content/img/target.svg">OBJECTIFS</h2>
                <div class="box-content">
                        <li>Une culture humaniste qui leur permettra de réfléchir sur les questions contemporaines dans une perspective élargie.</li>
                        <li>Une prise directe sur un certain nombre d’enjeux de société, cette formation qui fait une large place à la diversité des approches constituera un précieux apport pour des études axées non seulement sur les lettres et la philosophie.</li>
                </div>
            </div>
            <div class="box box-white">
                <h2 class="box-title"><img class="logo-title" src="../content/img/skills.svg">COMPETENCES</h2>
                <div class="box-content">
                    <li>La parole, ses pouvoirs, ses fonctions et ses usages.</li>
                    <li>Les diverses manières de se représenter le monde et de comprendre les sociétés humaines.</li>
                    <li>La relation des êtres humaines à eux-mêmes et la question du moi.</li>
                    <li>La définition du moderne et du contemporain, avec leurs expériences caractéristiques et la tension entre tradition et innovation.</li>
                </div>
            </div>
        </div>
        <div class="subcontent">
            <div class="box box-white">
                <h2 class="box-title"><img class="logo-title" src="../content/img/program.svg">PROGRAMME</h2>
                <div class="box-content">
                    <li>Les arts et les techniques qui visent à la maîtrise de la parole publique dans des contextes variés, notamment judiciaires et politiques, artistiques et intellectuels</li>
                    <li>Les formes de pouvoir et d’autorité associées à la parole sous formes diverses</li>
                    <li>La variété de ses effets : persuader, plaire et émouvoir</li>
                    <li>Découverte du monde et rencontre des cultures</li>
                    <li>L’homme et l’animal</li>
                    <a target="_blank"
                        href="https://cache.media.eduscol.education.fr/file/Consultations2018-2019/07/2/PPL18_Humanites-litterature-philosophie_SPE_1eGen_1025072.pdf"><button
                            class="btn btn-more">EN SAVOIR
                            PLUS</button></a>
                </div>
            </div>
            <div class="box box-blue">
                <h2 class="box-title"><img class="logo-title" src="../content/img/school.svg">DEBOUCHES</h2>
                <div class="box-content">
                    <li>Ecoles de droit</li>
                    <li>Ecoles d'art</li>
                    <li>Ecoles de communication</li>
                </div>
            </div>
        </div>
    </div>
    <div class="comments">
        <h2>Ce que disent les élèves</h2>
        <div class="comments-border reveal">
            <div class="box-comments0">
                <p class="quote">“ Elle nous exerce à l'oral afin d'argumenter nos propos. ”</p>
                <div class="profil">
                    <img src="../content/img/user.svg" alt="">
                    <div class="info-profil">
                        <h3 class="name">Léa</h3>
                        <p class="job">Première</p>
                    </div>
                </div>
            </div>

            <div class="box-comments0">
                <p class="quote">“ Si vous êtes un amoureux des lettres, cette matière est faite pour vous. ”</p>
                <div class="profil">
                    <img src="../content/img/user.svg" alt="">
                    <div class="info-profil">
                        <h3 class="name">Noémie</h3>
                        <p class="job">Première</p>
                    </div>
                </div>
            </div>

            <div class="box-comments0">
                <p class="quote">“ Spécialité qui nous fait repérer les bouleversements dans l'économie... ”</p>
                <div class="profil">
                    <img src="../content/img/user.svg" alt="">
                    <div class="info-profil">
                        <h3 class="name">Théo</h3>
                        <p class="job">Première</p>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<!-- LLCE -->
<section class="specialites" id="LLCE">
    <div class="background-title">
        <div class="bande bande-top-left"></div>
        <div class="bande bande-top-right"></div>
        <div class="bande bande-bottom-left"></div>
        <div class="bande bande-bottom-right"></div>
        <div class="title reveal">
            <img src="../content/img/chat.svg" alt="">
            <h1>LANGUES, LITTERATURE ET CULTURES ETRANGERES</h1>
        </div>
    </div>
    </div>

    <div class="content">
        <div class="subcontent">
            <div class="box box-blue">
                <h2 class="box-title"><img class="logo-title" src="../content/img/target.svg">OBJECTIFS</h2>
                <div class="box-content">
                        <li>Augmenter l’exposition des élèves à la langue étudiée afin qu’ils parviennent progressivement à une maîtrise assurée de la langue et à une compréhension de la culture associée.</li>
                </div>
            </div>
            <div class="box box-white">
                <h2 class="box-title"><img class="logo-title" src="../content/img/skills.svg">COMPETENCES</h2>
                <div class="box-content">
                    <li>Mieux maîtriser la langue, sa prononciation et son écriture.</li>
                    <li>Faciliter le passage de l’oral à l’écrit et de l’écrit à l’oral.</li>
                    <li>Approfondir l’histoire culturelle et littéraire de la langue.</li>
                    <li>Développer le goût de lire.</li>
                </div>
            </div>
        </div>
        <div class="subcontent">
            <div class="box box-white">
                <h2 class="box-title"><img class="logo-title" src="../content/img/program.svg">PROGRAMME</h2>
                <div class="box-content">
                    <li>Littérature</li>
                    <li>Arts (peinture, sculpture, architecture, musique, cinéma, chanson…)</li>
                    <a target="_blank"
                        href="https://www.education.gouv.fr/sites/default/files/2020-03/anglais-monde-contemporain-ce-projet-de-programme-a-t-remis-au-ministre-en-mars-2020-et-rentrera-en-vigueur-la-rentr-e-2020--66048.pdf"><button
                            class="btn btn-more">EN SAVOIR
                            PLUS</button></a>
                </div>
            </div>
            <div class="box box-blue">
                <h2 class="box-title"><img class="logo-title" src="../content/img/school.svg">DEBOUCHES</h2>
                <div class="box-content">
                    <li>Licence LLCER ou LEA</li>
                    <li>Ecole de langues appliquées</li>
                    <li>Licence d'Anglais</li>
                </div>
            </div>
        </div>
    </div>
    <div class="comments">
        <h2>Ce que disent les élèves</h2>
        <div class="comments-border reveal">
            <div class="box-comments0">
                <p class="quote">“ Je me plais énormément dans cette spécialité. ”</p>
                <div class="profil">
                    <img src="../content/img/user.svg" alt="">
                    <div class="info-profil">
                        <h3 class="name">Floriane</h3>
                        <p class="job">Première</p>
                    </div>
                </div>
            </div>

            <div class="box-comments0">
                <p class="quote">“ Spécialité qui permet d'approfondir le vocabulaire appris grâce à la matière anglais. ”</p>
                <div class="profil">
                    <img src="../content/img/user.svg" alt="">
                    <div class="info-profil">
                        <h3 class="name">Maël</h3>
                        <p class="job">Première</p>
                    </div>
                </div>
            </div>

            <div class="box-comments0">
                <p class="quote">“ Spécialité qui s'interesse aussi à la culture et aux arts. ”</p>
                <div class="profil">
                    <img src="../content/img/user.svg" alt="">
                    <div class="info-profil">
                        <h3 class="name">Erwan</h3>
                        <p class="job">Première</p>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<!-- FOOTER -->
<section class="footer">
    <div class="bg">
        <div class="text">
            <h1 class="reveal">Notre dame providence</h1>
            <p class="reveal"><span>Adresse :</span> 9 Boulevard Sadi Carnot, 95880 Enghien-les-Bains</p>
            <p class="reveal"><span>Téléphone :</span> 01 34 12 63 78</p>
            <p class="reveal"><span>Email :</span> contact@clnp.org</p>
            <div class="reseaux reveal">
                <a href="https://www.facebook.com/pages/Lyc%C3%A9e%20Notre%20-%20Dame%20Providence/106035326102995/"><i class="fab fa-facebook fa-2x"></i></a>
                <a href="https://www.youtube.com/channel/UChth4rXnNwnY_M7-Ya30fWw"><i class="fab fa-youtube fa-2x"></i></a>
            </div>
        </div>
        <div class="map reveal">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1263.0231912243469!2d2.312495978776781!3d48.9673127483226!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e668ed8c018907%3A0x3b868fd3f0c78964!2s9%20Boulevard%20Sadi%20Carnot%2C%2095880%20Enghien-les-Bains!5e0!3m2!1sfr!2sfr!4v1615642111666!5m2!1sfr!2sfr" width="90%" height="250" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </div>
</section>

<footer>
    <p>© 2021 SPE&CO. All Rights Reserved.</p>
</footer>


<script src="../js/specialites.js"></script>
</body>

</html>
