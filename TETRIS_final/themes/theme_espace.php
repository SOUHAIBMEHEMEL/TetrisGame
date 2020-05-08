<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/01_espace_css/MenuPauseStyle.css" rel="stylesheet" type="text/css" />
    <link href="css/Board_Page.css" rel="stylesheet" type="text/css" />
    <link href="css/05_enfant_css/Opening_Animation.css" rel="stylesheet" type="text/css" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <link href="css/01_espace_css/style1.css" rel="stylesheet" type="text/css" />
    <link href="css/01_espace_css/style2.css" rel="stylesheet" type="text/css" />
    <link href="css/01_espace_css/style.css" rel="stylesheet" type="text/css" />
    <link href="css/style_com.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" media="screen" href="css/01_espace_css/style3.css">
    <title>Tetris</title>

    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script>
      var sound =new Audio();
      sound.src= "audio/sound.mp3";
    </script>
</head>

<body>
<audio id="audio" src="js/audio/audio7.mp3"></audio>

<div style="z-index: 0;">
    <div id="particles-js" style="z-index: 0;position: fixed;height: 100%; ></div>
    <script src="js/01_espace_js/particles.js"></script>
    <script src="js/01_espace_js/app.js"></script>
    <script src="js/01_espace_js/lib/stats.js"></script>
</div>

<div id="side" ><div id="space"></div></div>
<div id="StartMessageContainer">
    <h1 id="StartMessage"> Ready !</h1>
</div>

<div id="PauseIcone" onmousedown="sound.play()" style="z-index: 20"><a><img id="ps" src="img/pause1.png" alt="pause"   height="200px" width="300px"></a></div>
<div id="fin"  style="z-index: 18"><a><img  src="img/fin.JPG" alt="fin"   height="200px" width="1000px"></a></div>

<div>
    <div id="head">
        <p style="display: none;visibility: hidden;position: absolute;" id="userName"><?php
            if (isset($_SESSION['username'])) echo$_SESSION["username"];
            ?></p>
        <h1 style="position:absolute;margin-left: 120px;margin-top: 50px ;">
            <?php
            if (isset($_SESSION['username'])) echo "Bonjour " . $_SESSION["username"]. ", ";
            ?>
        </h1>
        <div id="AllMenu">
            <div class="ContainerPause">
                <ul id="MenuPause">
                    <li id="ReprendreBtn"> REPRENDRE </li>
                    <li id="RecommencerBtn"> RECOMMENCER </li>
                    <li id="AideBtn"> AIDE </li>
                    <li id="Options"> OPTIONS </li>
                    <li id="QuitterMP"> Quitter </li>
                </ul>
                <div id="AideMenu">
                    <div>
                        <label style="position: absolute;left: 7%;color: silver;font-size: 15px;">AIDE</label>
                        <div id="RetourAide"><img src="img/close.png" style="width: 10%;height: 15%;position: absolute;left: -5%;top: -5%;"></div>
                        <div><img src="img/left4.png"  style="position: absolute;left: 26.6%;top: 17.4%;height: 11%;width: 11.5%;"></div>
                        <div><img src="img/down4.png" style="position: absolute;left: 40.9%;top: 17.4%;height: 11%;width: 11.5%;"></div>
                        <div><img src="img/right4.png" style="position: absolute;left: 55.6%;top: 17.4%;height: 11%;width: 11.5%;"></div>
                        <div><img src="img/up4.png"  style="position: absolute;left: 40.9%;top: 3.8%;height: 11%;width: 11.5%;"></div>
                        <div><img src="img/macbook.png"  style="position: absolute;left: 13.5%;top: 34%;height:45%;width: 66%;"></div>
                        <div>
                            <img id="macimg" src="img/clk.gif" style="position: absolute;left: 21.7%;top: 36.8%;height:34.5%;width: 49.4%;border: 1px solid white; ">
                        </div>
                        <div><img src="img/espace_btn.png" style="position: absolute;left: 11%;top: 85%;height: 12%;width: 45%;"></div>
                        <div><img src="img/p.png" style="position: absolute;left: 60%;top: 85%;height: 12%;width: 12%;"></div>
                        <div><img src="img/j.png" style="position: absolute;left: 76%;top: 85%;height: 12%;width: 12%;"></div>
                        <div><img src="img/logo33.jpg" style="position: absolute;right: 1%;top: 1%;height: 9%;width: 12%;"></div>
                        <div class="aid_btn"  style="position: absolute;left: 26.6%;top: 17.4%;height: 9%;width: 9.5%;"></div>
                        <div class="aid_btn"  style="position: absolute;left: 40.9%;top: 17.4%;height: 9%;width: 9.5%;"></div>
                        <div class="aid_btn"  style="position: absolute;left: 55.6%;top: 17.4%;height: 9%;width: 9.5%;"></div>
                        <div class="aid_btn"  style="position: absolute;left: 40.9%;top: 3.8%;height: 9%;width: 9.5%;"></div>
                        <div class="aid_btn"  style="position: absolute;left: 59.5%;top: 84.6%;height: 11%;width: 11.5%;"></div>
                        <div class="aid_btn"  style="position: absolute;left: 75.5%;top: 84.6%;height: 11%;width: 11.2%;"></div>
                        <div class="aid_btn"  style="position: absolute;left: 10.6%;top: 84.6%;height: 11%;width: 44%;"></div>
                    </div>
                </div>
                <div id="finPartieContainer">
                    <label id="finPartie"> FIN DE LA PARTIE </label>
                    <button id="rejouer" onclick="ReplayGO();" class="btn"> REJOUER </button>
                    <button id="MenuPrincipalGOver"  class="btn"> MENU PRINCIPAL </button>
                </div>
            </div>
        </div>
    </div>


    <br><br>
    <div id="temp1" class="cadre" >
        <div id="temp" class="container">
            <h1  class="sta" style="color: chocolate;font-size: 36px; position: fixed;left: 64%;top: 66%;"> temps restant </h1>
            <h2  class="sta" id="time" style="font-size: 72px;position: fixed;left: 69.5%;top: 73%;">30'</h2>
        </div>
    </div>
    <br><br>

    <!--ajouter par mouaci youcef conceran joker-->
    <div class="joker" id="joker" style="position: fixed;top: 55%;left: 67.9%;" >
        <img id="img1" src="img/joker.png" style="width: 14%;height: 14%;" alt="joker existe">
        <img id="img2" src="img/joker.png" style="width: 14%;height: 14%;" alt="joker existe">
    </div>

    <div id="jokerinfo" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <p style="color: #000;">pour utilisser les joker veullez clicker sur 'j'</p>
        </div>
    </div>
</div>

<script>
    // Get the modal
    var modal = document.getElementById('jokerinfo');
    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];

    // When the user clicks the button, open the modal
    window.onload = function() {
        modal.style.display = "block";
    }

    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
        modal.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }

    setTimeout(function(){
        modal.style.display = "none";
    },10000) ;
</script>

<!--jusqu'a hnaya ana zadtaha -->
<!-- .container -->


<div >
      <div class="statistics1 stats">
          <h1 class=" stats1">Score</h1>
          <h2 id="score" class=" stats1" > 0 </h2>
      </div>
      <div class="statistics2 stats">
          <h1 class=" stats1">Lignes </h1>
          <h2 id="Lignes"  class=" stats1"> 0 </h2>
      </div>
      <div class="statistics3 stats" >
          <h1 class=" stats1"> But</h1>
          <h2 id="but" class=" stats1"> 5 </h2>
      </div>
      <div class="statistics4 stats" >
          <h1 class=" stats1"> Niveau </h1>
          <h2 id="niveau" class=" stats1"> 1 </h2>
      </div>

    <canvas id="Grille"   height="0px" width="0px" style="background-color: rgba(255,255,255,0.18) ;position: fixed; border: 9px groove honeydew;" ></canvas>
    <canvas id="surface1"   height="150px" width="150px" style="left: 63%;top: 18%;background: transparent;
     ;position: absolute;" ></canvas>
    <canvas id="surface12"   height="500px" width="500px" style="left: -100px;top:-100px;background-color: transparent;
     ; position: absolute;" ></canvas>
    <canvas id="Tetro_Suivant"   height="440px" width="130px" style="left: 67.9%;top: 24.5%;background-color: transparent; ;position: fixed;" ></canvas>
    <div ><img id="suiv_img" src="img/suiv.png" style="left: 62.5%;position: fixed; top: 10.1%; height: 33%; width: 18%;"></div>
</div>

<div id="bout_tfn" style="visibility: hidden;">
    <div id="up" ><img src="img/up1.png" style="right: 7%;position: fixed; top: 80%; height: 10%;"></div>
    <div id="down"><img src="img/down1.png" style="right: 7%;position: fixed; top: 90.5%;  height: 10%;"></div>
    <div id="left"><img src="img/left1.png" style="right: 13.5%;position: fixed; top:86%;  height: 10%;"></div>
    <div id="right"><img src="img/right1.png" style="right: 1.1%;position: fixed; top: 86%; height: 10%;"></div>
    <div id="space_bouton"><img src="img/space1.png" style="left: 2%;position: fixed; top: 89%; height: 10%;"></div>
</div>

<div id="vol_plus"><img src="img/plus.png" style="left: 6.3%;position: fixed; top: 4%; height: 7%;"></div>
<div id="vol_moins"><img src="img/moins.png" style="left: 9.8%;position: fixed; top: 4%; height: 7%;"></div>
<div id="vol"><img src="img/listen-icon.png" style="left: 2%;position: fixed; top: 2.4%; height: 9%;"></div>
<script>
    var retour = document.getElementById("MenuPrincipalGOver");

    retour.onclick = function (ev) { location.href = '../index.php'; };

</script>

<script>
    function HideMsg() {
        var finPartie = document.getElementById("finPartieContainer");
        finPartie.style.visibility = "hidden";
        finPartie.style.display= 'none';
        finPartie.style.zIndex = '0';
    }
    function ReplayGO(){
        HideMsg();
        window.location.reload();
    }
    function PrincipalMenuGO(){
        HideMsg();
        window.open('../index.php', "_Parent")
    }
</script>
<script type="text/javascript" src="js/Case.js"></script>
<script type="text/javascript" src="js/TForme.js"></script>
<script type="text/javascript" src="js/Tetromino.js"></script>
<script type="text/javascript" src="js/Grille.js"></script>
<script type="text/javascript" src="js/Tetris.js"></script>
<script type="text/javascript" src="js/Main.js"></script>
<script type="text/javascript" src="js/OpeningAnimation.js"></script>

</body>
</html>