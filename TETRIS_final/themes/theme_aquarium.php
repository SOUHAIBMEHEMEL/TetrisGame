<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/css_aqua/MenuPauseStyle.css" rel="stylesheet" type="text/css" />
    <link href="css/05_enfant_css/Opening_Animation.css" rel="stylesheet" type="text/css" />
    <link href="css/css_aqua/style1.css" rel="stylesheet" type="text/css" />
    <link href="css/style_com.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="css/css_aqua/style3.css">
    <link href="css/Board_Page.css" rel="stylesheet" type="text/css" />
    <title>Tetris</title>
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script>
      var sound =new Audio();
      sound.src= "audio/sound.mp3";
    </script>
</head>

<body>
<audio id="audio" src="js/audio/audio7.mp3"></audio>

<div id="side" ><div id="aqua" ></div></div>

<div class="bubbles"></div>
<div class="ground"></div>
<div class="rock_1"></div>
<div class="rock_2"></div>
<div class="rock_3"></div>
<div class="rock_4"></div>
<div class="rock_5"></div>
<div class="rock_6"></div>
<div class="rock_7"></div>
<div class="plant_1_wrap"><div class="plant_1"></div><div class="plant_2"></div><div class="plant_3"></div></div>
<div class="plant_2_wrap"><div class="plant_4"></div><div class="plant_5"></div></div>
<div ><img style="position: fixed; height: 76%; left:3%; width: 23%; top: -5%" alt=" " border="0" src="img/bois4.gif" title=" " /></div>
<div style="position: fixed; bottom: 0px; height: 200px; left:150px; width: 1720px;"><img alt=" " border="0" src="img/0002.gif" title=" " /></div>
<div style="bottom: 0px; height: 190px; left: 90%; width: 30px; top: 80%;" ><img alt=" " border="0" src="img/0003.gif" title=" " /></div>
<div style="position: fixed; bottom: 0px; height: 290px; right: 270px; width: 1220px;"><img alt=" " border="0" src="img/0004.png" title=" " /></div>
<div style="position: fixed; bottom: 0px; height: 290px; right: 140px; width: 1720px;"><img alt=" " border="0" src="img/0004.png" title=" " /></div>
<div id="beaker"><span class="bubble"><img border="0" height="60" name="e902" src="img/0006.gif" width="100" /></span></div>
<div style="position: fixed; bottom: 0px; height: 190px; left: 350px; width: 1720px;"><img alt=" " border="0" src="img/0007.gif" title=" " /></div>
<div style="position: fixed; bottom: 0px; height: 190px; left: 350px; width: 1720px;"><img alt=" " border="0" src="img/0008.gif" title=" " /></div>
<div style="position: fixed; bottom: 0px; height: 190px; left: 350px; width: 1900px;"><img alt=" " border="0" src="img/0008.gif" title=" " /></div>
<div class="fish pht" ><img alt="Gold Fish-1" src="img/gldfish2.gif" /></div>
<div class="fish1 pht" ><img alt="Gold Fish-2" src="img/gldfish3.gif" /><img alt="Gold Fish-2" src="img/gldfisha.gif" /></div>

<div id="stat">
    <div class="statistics1 stats"><h1>Score</h1><h2 id="score"> 0 </h2></div>
    <div class="statistics2 stats"><h1>Lignes </h1><h2 id="Lignes"> 0 </h2></div>
    <div class="statistics3 stats"><h1> But</h1><h2 id="but"> 5 </h2></div>
    <div class="statistics4 stats"><h1> Niveau </h1><h2 id="niveau"> 1 </h2></div>
</div>

<div style="position: fixed; bottom: 0px; height: 130px; left: 910px; width: 120px;top: 71%;"><img alt="" border="0" src="img/0011.gif" title="" /></div>
<div style="position: fixed; bottom: 0px; height: 410px; right: -151px; width:  400px;">
    <img src="img/0012.png" name="e902" border="0" width="350" height="590" /></a>
    <div style="position: fixed; bottom: 0px; height: 290px; right: -151px; width:  400px;">
        <img src="img/0015.png" name="e902" border="0" width="350" height="790" /></a>
        <div class="pht" style="position: fixed; bottom: 0px; height: 310px; right: 30px; width:  400px;">
            <img src="img/0013.png" name="e902" border="0" width="350" height="1190" /></a>
            <div style="position: fixed; bottom: 0px; height: 120px; left: 520px; width: 420px;"><img alt=" " border="0" src="img/0014.gif" title=" " /></div>
            <div style="position: fixed;  height: 1%; left: 61%; width: 2%; top: 72%;"><img  alt=" " border="0" src="img/0018.gif" title=" " /></div>
            <div style="position: fixed;  height: 1%; left: 81%; width: 2%; top: 50%; "><img  alt=" " border="0" src="img/0018b.gif" title=" " /></div>
            <div style="position: fixed;  height: 1%; left: 21%; width: 2%; top: 61%; "><img  alt=" " border="0" src="img/00001.gif" title=" " /></div>
            <div style="position: fixed; bottom: 0px; height: 390px; left: 350px; width: 1720px;"><img alt=" " border="0" src="img/0020.gif" title=" " /></div>
            <div style="position: fixed; bottom: 0px; height: 390px; left: 650px; width: 1720px;"><img alt=" " border="0" src="img/0020.gif" title=" " /></div>
            <div style="position: fixed; bottom: 0px; height: 290px; left: 850px; width: 1720px;"><img alt=" " border="0" src="img/0020.gif" title=" " /></div>
        </div>
    </div>
</div>
</div>

<div class="container"><canvas height="600" id="fishtank" width="1400"></canvas></div>
<div class="container"><canvas width="1400" height="600" id="Fish flocking simulation "></div>
<script><script  src="js/02_aqua_js/aquarium.js"></script>

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
                        <li id="RecommencerBtn"> RECOMMENCER PARTIE </li>
                        <li id="AideBtn"> AIDE </li>
                        <li id="Options"> OPTIONS </li>
                        <li id="QuitterMP"> MENU PRINCIPALE </li>
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
                        <button id="MenuPrincipalGOver" onclick="PrincipalMenuGO();" class="btn"> MENU PRINCIPAL </button>
                    </div>
                </div>
            </div>
        </div>

        <div id="StartMessageContainer">
            <h1 id="StartMessage"> Ready !</h1>
        </div>

        <br><br>
        <div id="temp1" class="cadre" >
            <div id="temp" class="container" style="z-index: 3;">
                <h1 style="color: chocolate;font-size: 26px; position: fixed;left: 8.4%;top: 46.7%;text-align: center;"> temps restant </h1>
                <h2 id="time" style="font-size: 57px;position: fixed;left: 11%;top: 51%;text-align: center;">30'</h2>
            </div>
        </div>
        <br><br>

        <!--ajouter par mouaci youcef conceran joker-->
        <div class="joker" id="joker" style="position: fixed;top: 40%;left: 9.8%;z-index: 3;">
            <img id="img1" src="img/joker.png" style="width: 15%;height: 15%;" alt="joker existe">
            <img id="img2" src="img/joker.png" style="width: 15%;height: 15%;" alt="joker existe">

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

<div  class="  pht" style="position: fixed;  height: 10%; left: 49%; width: 2%; top: 28.5%;z-index: 0;"><img id="suiv" alt=" " border="0" src="img/vv3.png" title=" " /></div>
<div  class=" pht" style="position: fixed;  height: 1%; left: 58%; width: 2%; top: 53%;z-index: 0; "><img  alt=" " border="0" src="img/0018a.gif" title=" " /></div>
<div  class=" pht" style="position: fixed;  left: 27%; top: 4%; z-index: 3"><img class="cadrage" alt=" " border="0" src="img/sss.png" title=" " /></div>
<div class=" pht" style="position: fixed;  left: 39.2%; top: 4%;z-index: 3"><img class="cadrage" alt=" " border="0" src="img/sss1.png" title=" " /></div>

<div >
    <div id="fin"  style="z-index: 18"><a><img  src="img/fin.JPG" alt="fin"   height="200px" width="1000px"></a></div>
    <div class=" pht" style="position: fixed;  height: 10%; right: 48.5%; width: 2%; top: 5%;z-index: 0;"><img class=" cdr" alt=" " border="0" src="img/xx5.png" title=" " /></div>
    <div  class=" pht" style="position: fixed;  height: 10%; right: 35.5%; width: 2%; top: 5%;z-index: 0;"><img class=" cdr" alt=" " border="0" src="img/xx5.png" title=" " /></div>
    <div class=" pht" style="position: fixed;  height: 10%; right: 42%; width: 2%; top: 14.5%;z-index: 0;"><img class=" cdr" alt=" " border="0" src="img/xx5.png" title=" " /></div>
    <div class=" pht" style="position: fixed;  height: 10%; right: 35.5%; width: 2%; top: 24.5%;z-index: 0;"><img class=" cdr" alt=" " border="0" src="img/xx5.png" title=" " /></div>
    <canvas id="Grille"   height="0px" width="0px" style="background-color: rgba(255,255,255,0.15) ;position: absolute; border: 0px groove honeydew; " ></canvas>
    <canvas id="Tetro_Suivant"   height="100px" width="90px" style="right: 40.7%;top:38.2%;background-color: transparent;
     ;position: absolute;" ></canvas>

    <div id="bout_tfn" style="visibility: hidden; z-index: 99999;">
        <div id="up" ><img src="img/up1.png" style="right: 7%;position: fixed; top: 80%; height: 10%;"></div>
        <div id="down"><img src="img/down1.png" style="right: 7%;position: fixed; top: 90.5%;  height: 10%;"></div>
        <div id="left"><img src="img/left1.png" style="right: 13.5%;position: fixed; top:86%;  height: 10%;"></div>
        <div id="right"><img src="img/right1.png" style="right: 1.1%;position: fixed; top: 86%; height: 10%;"></div>
        <div id="space_bouton"><img src="img/space1.png" style="left: 2%;position: fixed; top: 89%; height: 10%;"></div>
    </div>

    <div id="vol_plus"><img src="img/plus.png" style="left: 11.7%;position: fixed; top: 11.5%; height: 7%;"></div>
    <div id="vol_moins"><img src="img/moins.png" style="left: 15.3%;position: fixed; top: 11.5%; height: 7%;"></div>
    <div id="vol"><img src="img/listen-icon.png" style="left: 6.5%;position: fixed; top: 9%; height: 11%;"></div>

</div>
    <div id="PauseIcone" onmousedown="sound.play()" style="z-index: 20;"><a><img id="ps" src="img/pause1.png" alt="pause"   height="50px" width="50px"></a></div>

    <script>
        var retour = document.getElementById("MenuPrincipalGOver");

        retour.onclick = function (ev) { location.href = "../index.php"; };

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