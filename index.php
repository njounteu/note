<?php
    include("function/function.php");
    connexion_BD();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css"/>
    <link rel="stylesheet" href="bootstrap-5.0.2-dist/bootstrap-5.0.2-dist/css/bootstrap.css"/>
    <link rel="stylesheet" href="bootstrap-5.0.2-dist/bootstrap-5.0.2-dist/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="bootstrap-5.0.2-dist/bootstrap-5.0.2-dist/js/bootstrap.js">
    <title>NOTES</title>
</head>
<body>

    <header class="container-fluid">
        <div class="row">
            <div class="col-sm-2 header_col1">
                <div class="test">"ESPACE <br> ENSEIGNANT"</div>
            </div>
            <div class="col-sm-10">
                <div class="row">
                    <div class="col-sm-8">
                        <div class="ecole">
                            Faculter de medecine des sciences pharmaceutique
                        </div>
                        <div class="fonctionalité">Gestion des notes</div>
                    </div>
                    <div class="col-sm-1">
                        <img src="../design/exemple_de_design/icone/notification1.png" alt="icone de notification">
                    </div>
                    <div class="col-sm-3 user">
                        <img src="../design/exemple_de_design/icone/user_woman.png" alt=" icone de user">
                        <span class="col-sm-2">NAME USER </span>
                    </div>
                    
                </div>    
            </div>
            
        </div>
    </header>

    <main class="container-fluid">
        <div class="row">
            <nav class="col-sm-2 ">
                <div class="line">
                    <img src="../design/exemple_de_design/icone/user_woman.png" alt=" icone de user">
                    <span>NAME USER </span>
                </div>
                <div class=" main_navigation ">
                    MAIN NAVIGATION
                </div>
                <div class="line">
                    <img src="../design/exemple_de_design/icone/utilisateur.png" alt="icone de la fonctionalité utilisateur" />
                    <span>Utilisateurs</span>
                </div>
                <div class="line">
                    <img src="../design/exemple_de_design/icone/notes.png" alt="icone de la fonctionalité note" />
                    <span><a href="#">Notes</a></span>
                </div>
                <div class="line">
                    <img src="../design/exemple_de_design/icone/etudiants.png" alt="icone de la fonctionalité étudiants" />
                    <span>Etudiants</span>
                </div>
                <div class="line">
                    <img src="../design/exemple_de_design/icone/modules.png" alt="icone de la fonctionalité Modules" />
                    <span>Modules</span>
                </div>
                <div class="line">
                    <img src="../design/exemple_de_design/icone/filières.png" alt="icone de la fonctionalité Filières" />
                    <span>Filières</span>
                </div>
                <div class="line">
                    <img src="../design/exemple_de_design/icone/resultats.png" alt="icone de la fonctionalité resultats" />
                    <span>Resultats</span>
                </div>
                <div class="line">
                    <img src="../design/exemple_de_design/icone/statistiques.png" alt="icone de la fonctionalité statistiques" />
                    <span>Statistiques</span>
                </div>

                <div class="logo_fmsp">
                    <img src="../design/exemple_de_design/icone/FMSP.png" alt="logo de la faculté de medécine de douala" />
                </div>
            </nav>
            <section class="col-sm-9">
                <div class="container">
                    <div class="row row_green_1">
                        <div class="col-sm-1">
                            FMSP
                        </div>
                        <div class="offset-sm-6 col-sm-5">
                            Année scolaire: <?php echo annee_academique(); ?>
                        </div>
                    </div>
                </div>

                <div class="container">
                    <div class="row row_option">
                        <div class="col-sm-3 line_ajout">
                            <div class="row">
                                <div class="col-sm-4">
                                    <img src="../design/exemple_de_design/icone/ajout.png" alt="icone plus pour dire ajouter"/> 
                                </div>
                                <div class="col-sm-8">
                                    <div class="name_fonctionaliti">
                                        AJOUT DE NOTE
                                    </div>
                                    <div class="line_separation">
                                        <div class="line_separation_other"></div>
                                    </div>
                                    <div class="description_option">
                                        Ajouter les notes de vos étudiants
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-3 line_etudiants">
                            <div class="row">
                                    <div class="col-sm-4">
                                        <a href="#">
                                            <img src="../design/exemple_de_design/icone/etudiants_bis.png" alt="icone pour la liste des étudiants"/>
                                        </a>
                                    </div>
                                    <div class="col-sm-8">
                                        <div class="name_fonctionaliti">
                                            <a href="#">
                                                ETUDIANTS
                                            </a>    
                                        </div>
                                        <div class="line_separation">
                                            <div class="line_separation_other"></div>
                                        </div>
                                        <div class="description_option">
                                            <a href="#">
                                                Liste de vos etudiants par UE
                                            </a>    
                                        </div>
                                    </div>
                            </div>
                        </div>

                        <div class="col-sm-3 line_notes">
                            <div class="row">
                                <div class="col-sm-4">
                                    <img src="../design/exemple_de_design/icone/notes.png" alt="icone de modification de note"/> 
                                </div>
                                <div class="col-sm-8">
                                    <div class="name_fonctionaliti">
                                        <a href="edit_note/edit_note.html">EDIT NOTES</a>
                                    </div>
                                    <div class="line_separation">
                                        <div class="line_separation_other"></div>
                                    </div>
                                    <div class="description_option">
                                        Modifier les notes EC 
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-3 line_downloard">
                            <div class="row">
                                <div class="col-sm-4">
                                    <img src="../design/exemple_de_design/icone/downloard.png" alt="icone de telechargement de note"/> 
                                </div>
                                <div class="col-sm-8">
                                    <div class="name_fonctionaliti">
                                        DOWNLOARDS
                                    </div>
                                    <div class="line_separation">
                                        <div class="line_separation_other"></div>
                                    </div>
                                    <div class="description_option">
                                        Telecharger vos notes pour publications
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <section class="section2">
                    <div class="row container">
                        <form method="post" action="Ajout_note/PageRecherche.php">
                            <div class="row line1_form">
                                <input  type="text" value="" name="matricule" id="barRecherche" class="col-sm-4" placeholder="#matricule" maxlength="7">
                                <button class="col-sm-2" for="barRecherche" type="submit" >
                                    <img src="../design/exemple_de_design/icone/recherche.png" alt="icone de recherche"/>
                                </button>
                            </div>
                            <span>Ameliorer la recherche</span>
                            <div class="row">
                                <select name="UE" id="UE" class="col-sm-2" >
                                    <option value=0 selected>#UE</option>
                                    <option value="bioENZ">BIO-ENZ</option>
                                </select>

                                <select name="EC" id="EC" class="col-sm-2">
                                    <option value=0 selected>#EC</option>
                                    <option value="Biologie">Biologie</option>
                                </select>

                                <select name="Niv" id="Niv" class="col-sm-2">
                                    <option value=0 selected>#NIV</option>
                                    <option value=1>1</option>
                                    <option value=2>2</option>
                                </select>

                                <select name="typeNote" id="typeNote" class="col-sm-2">
                                    <option value=0 selected>#TypeNote</option>
                                    <option value="CC">CC</option>
                                    <option value="TPE">TPE</option>
                                    <option value="EX">EX</option>
                                    <option value="RA">RA</option>
                                </select>                                
                            </div>
                        </form>
                    </div>
                </section>
                
                <div class="container">
                    <div class="line2_green row"></div>
                </div>
                
                <section class="section3">
                    <span>Ajoutées des notes</span>
                    <form action="Ajout_note/ajout_note.php" method="post" class="ajout_section3">
                        <div class="matiere">
                            <label for="matiere" class="titre_matiere">Choix de matière :</label>
                            <select name="matiere" id="matiere" class="col-sm-2">
                                <option value="BIOMOL" selected>BIOMOL</option>
                                <option value="BIO-ENZY">BIO-ENZY</option>
                            </select>    
                        </div>

                        <div class="niveau">
                            <label for="niveau" class="titre_niveau">Niveau :</label>
                            <select name="niveau" id="niveau" class="col-sm-2">
                                <option value=1 selected>1</option>
                                <option value=2>2</option>
                            </select>    
                        </div>

                        <div class="note">
                            <label class="titre_note" for="type_note">Type de notes:</label>
                            <select name="type_note" id="type_note" class="col-sm-2">
                                <option value='TD' selected>TD</option>
                                <option value='CC'>CC</option>
                                <option value='TPE'>TPE</option>
                                <option value='EX'>EX</option>
                                <option value='RA'>RA</option>
                            </select>    

                        </div>
                        <button class="boutton_ajout">
                            <img src="../design/exemple_de_design/icone/ajout-note-blanc.png" alt="icone d'ajout d'information symbolisé par un plus"/>
                            <span>Commencer</span>
                        </button>
                    </form>
                </section>

                <footer class="container-fluid">
                    <div class="row">
                        <div class="logo_fmsp col-sm-2">
                            <img src="../design/exemple_de_design/icone/FMSP.png" alt="logo de la faculté de medécine de douala" />
                            <span>FMSP</span>
                        </div>
                        <div class="offset-sm-8 col-sm-2">version 1.0</div>
                    </div>
                </footer>
            </section>
        </div>
    </main>
</body>
</html>