<?php
session_start();
?>
<!doctype html >
<html lang="en">
<head>
	<title>Tetris Game</title>
	<link href="css/05_enfant_css/MenuPauseStyle.css" rel="stylesheet" type="text/css" />
	<link href="css/05_enfant_css/Board_Page.css" rel="stylesheet" type="text/css" />
	<link href="css/Board_Page.css" rel="stylesheet" type="text/css" />
	<link href="css/05_enfant_css/Opening_Animation.css" rel="stylesheet" type="text/css" />
	<link href="css/05_enfant_css/Theme_Kids.css" rel="stylesheet" type="text/css" />
	<link href="css/style_com.css" rel="stylesheet" type="text/css" />

</head>
<body>
<audio id="audio" src="js/audio/audio7.mp3"></audio>
<div id="side" ><div id="enfant"></div></div>
<div id="StartMessageContainer">
	<h1 id="StartMessage"> Ready !</h1>
</div>
<div>
	<div id="head">
		<div id="ps">
			<div id="PauseIcone"></div>
		</div>
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
					<li> OPTIONS </li>
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
	<header class="row">
		<div class="but">
				<h2 style="color:saddlebrown">But: &nbsp;<strong id="but"> 0 </strong></h2>
		</div>
		<div class="Lignes">
			<h2 style="color:saddlebrown">Lignes: &nbsp;<strong id="Lignes"> 0 </strong></h2>
		</div>
		<div class="niveau">
			<h2 style="color:saddlebrown"> Niveau: &nbsp;<strong id="niveau"> 0 </strong></h2>
		</div>
		<div class="score">
			<h1 style="color: saddlebrown">Score: &nbsp;<small id="score" style="color: saddlebrown"> 0 </small></h1>
		</div>
	</header>

	<br><br>
	<div class="cadre">
		<div class="cadre1">
			<canvas id="Grille"   height="600px" width="270px" style="background-color: transparent ;position: absolute" ></canvas>
			<img id="cadre" src="img/sticker-cadre-baroque-carre-ambiance-sticker-KC_4053.gif" alt="cadre"/>
		</div>
		<div class="cadre2">
			<img id="cadre2" src="img/sticker-cadre-rectangulaire-decore-ambiance-sticker-KC_4060.gif" alt="cadre"/>
			<canvas id="Tetro_Suivant"   height="440px" width="130px" style="ltop:150px;background-color: transparent;
     ;position: absolute"; ></canvas>
		</div>

		<div id="temp" class="container">
			<h1 style="color: chocolate;font-size: 36px"> temps restant </h1>
			<h2 id="time" style="font-size: 72px">30'</h2>
		</div>
	</div>
	<br><br>

	<!--ajouter par mouaci youcef conceran joker-->
	<div class="joker" id="joker"  style="position: fixed;top: 16%;left: 54.5%;">
		<img id="img1" src="img/joker.png" style="width: 15%;height: 15%;" alt="joker existe">
		<img id="img2" src="img/joker.png" style="width: 15%;height: 15%;" alt="joker existe">
	</div>

	<div id="jokerinfo" class="modal">
		<!-- Modal content -->
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

<div id="bout_tfn" style="visibility: hidden;">
	<div id="up" ><img src="img/up1.png" style="right: 7%;position: fixed; top: 80%; height: 10%;"></div>
	<div id="down"><img src="img/down1.png" style="right: 7%;position: fixed; top: 90.5%;  height: 10%;"></div>
	<div id="left"><img src="img/left1.png" style="right: 13.5%;position: fixed; top:86%;  height: 10%;"></div>
	<div id="right"><img src="img/right1.png" style="right: 1.1%;position: fixed; top: 86%; height: 10%;"></div>
	<div id="space_bouton"><img src="img/space1.png" style="left: 2%;position: fixed; top: 89%; height: 10%;"></div>
</div>

<div id="vol_plus">
	<img src="img/plus.png" style="left: 70%;position: fixed; top: 2%; height: 7%;">
</div>

<div id="vol_moins">
	<img src="img/moins.png" style="left: 74%;position: fixed; top: 2%; height: 7%;">
</div>

<div >
	<img src="img/listen-icon.png" id="vol" style="left: 65%;position: fixed; top: 1%; height: 9%;">
</div>
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

</body>
</html>