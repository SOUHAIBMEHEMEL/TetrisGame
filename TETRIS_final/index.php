<?php
session_start();
?>
<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <script type="text/javascript" src="themes/js/jquery.min.js"></script>
    <script type="text/javascript" src="themes/js/jquery-1.9.1.min.js"></script>
    <script type="text/javascript" src="themes/js/jquery.waterwheelCarousel.js"></script>
    <link href="themes/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="themes/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css" />
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link href="themes/css/MainMenuStyle.css" rel="stylesheet" />
    <link rel="stylesheet" href="themes/css/carousel.css"  type="text/css" />
    <title>Title</title>
</head>
<body>
<div id="MenuContainer">
    <ul>
        <li id="PlayButton">Jouer</li>
        <li id="ModeSelection">Mode de Jeu</li>
        <li id="ThemeButton">Choix du theme</li>
        <li id="Aide">Aide</li>
        <li id="UsersScoresBtn">Meilleurs Scores</li>
        <li id="Quitter" onclick="QuitterClicked();" >Quitter</li>
    </ul>
    <?php
    try {
        $bdd = new PDO('mysql:host=localhost;dbname=tetrisdatabase;charset=utf8', 'root', '');
    }
    catch(Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }
    $reponse = $bdd->query('SELECT * FROM users ORDER BY score DESC' );
    ?>
    <table id="UsersScores">
        <tr>
            <th> Nom de l'utilisateur </th>
            <th> Meilleur score </th>
        </tr>
        <?php
        while ($donnees = $reponse->fetch())
        {
            ?>
            <tr>
                <td> <?php echo $donnees['username']; ?> </td>
                <td> <?php echo $donnees['score']?> </td>
            </tr>
            <?php
        }
        $reponse->closeCursor();
        ?>
        <tr>
            <td>
                <label id="RetourUsersScores"> Retour </label>
            </td>
        </tr>
    </table>
</div>
<table id="AideMenu">
    <tr>
        <th> Touche </th>
        <th> Fonction </th>
    </tr>
    <tr>
        <td> → </td>
        <td> Deplacer latéralement à droite </td>
    </tr>
    <tr>
        <td> ← </td>
        <td> Deplacer latéralement à gauche </td>
    </tr>
    <tr>
        <td> ↑ </td>
        <td> Faire une rotation de 90° </td>
    </tr>
    <tr>
        <td> ↓ </td>
        <td> Accelerer la chute de la pièce  </td>
    </tr>
    <tr>
        <td> Space </td>
        <td> faire chuter la pièce instantanément  </td>
    </tr>
    <tr>
        <td> P </td>
        <td> Mettre pause </td>
    </tr>
    <tr>  <!-- // ADDED BY BOUBRED-->
        <td> J </td>
        <td> Utiliser le Joker </td>
    </tr>
</table>

<div >
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators indic">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            <li data-target="#myCarousel" data-slide-to="3"></li>
            <li data-target="#myCarousel" data-slide-to="4"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <img id="theme_space" src="images/1.PNG" style="width:100%;">
            </div>

            <div class="item">
                <img id="theme_snow" src="images/2.PNG"  style="width:100%;">
            </div>

            <div class="item">
                <img id="theme_enfant" src="images/3.PNG"  style="width:100%;">
            </div>

            <div class="item">
                <img id="theme_aquarium" src="images/4.PNG"  style="width:100%;">
            </div>

            <div class="item">
                <img id="theme_sea" src="images/5.PNG"  style="width:100%;">
            </div>
        </div>

        <!-- Left and right controls -->
        <a class="left carousel-control carousel_bordure1" href="#myCarousel" data-slide="prev" id="previous"> <!-- // ADDED BY BOUBRED-->
            <span class="glyphicon glyphicon-chevron-left "><i class="fa fa-angle-double-left fa-5x"></i> </span>
            <span class="sr-only ">Previous</span>
        </a>
        <a class="right carousel-control carousel_bordure2" href="#myCarousel" data-slide="next" id="next"> <!-- // ADDED BY BOUBRED-->
            <span class="glyphicon glyphicon-chevron-right "><i class="fa fa-angle-double-right fa-5x"></i> </span>
            <span class="sr-only ">Next</span>
        </a>
    </div>
    <div>
        <h1 id="modeClassic" class="mode">Mode Classic</h1>
        <h1 id="modeDefi" class="mode">Mode Defi</h1>
        <img id="gif1" src="images/gif1.gif">
        <img id="gif2" src="images/gif2.gif">
        <img src="themes/img/logo33.jpg" style="position: fixed; top: 1.6%;left: 45.2%;height: 12%;width: 10%; border: 2px solid silver;">
    </div>
    <div id="BtnRetour"><i id="icone" class="fa fa-reply fa-5x" style="color: black"></i> </div>
</div>


<script type="text/javascript" src="themes/js/bootstrap.min.js"></script>
<script src="themes/js/Main1.js"></script>
<script>
QuitterClicked = function () {
    <?php
    echo "<script> window.close(); </script>";
    ?>
}

</script>
</body>
</html>