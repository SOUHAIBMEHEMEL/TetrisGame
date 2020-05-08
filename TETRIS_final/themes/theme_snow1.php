<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="css/03_snow1_css/MenuPauseStyle.css" rel="stylesheet" type="text/css" />
	<link href="css/05_enfant_css/Opening_Animation.css" rel="stylesheet" type="text/css" />
	<link href="css/03_snow1_css/style1.css" rel="stylesheet" type="text/css" />
	<link href="css/style_com.css" rel="stylesheet" type="text/css" />
	<script type="text/javascript" src="js/jquery.min.js"></script>

	<title>Tetris</title>

	<script type="text/javascript">
        function init() {

            var canvas = document.getElementById('canvas');

            //var canvas = document.querySelector("canvas") ;
            var ctx = canvas.getContext('2d');
            var w = canvas.width;
            var h =  canvas.height;
            var bg = new Image();
            bg.src = "img/ff1.jpg";

            var flakes = [];

            function snowfall() {
                console.log(ctx.__proto__);
                ctx.clearRect(0,0,w,h) ;
                ctx.drawImage(bg,0,0) ;
                addFlake() ;
                snow() ;

            } ;

            function addFlake() {
                var x = Math.ceil(Math.random() * w);
                var s = Math.ceil(Math.random() * 4);
                flakes.push({"x":x,"y":0,"s":s}) ;
            } ;

            function snow() {
                for (var i = 0;i < flakes.length ;i++ )
                {
                    var flake = flakes[i] ;
                    ctx.beginPath() ;
                    ctx.fillStyle="rgba(255,255,255,0.7)" ;
                    ctx.arc(flake.x,flakes[i].y +=flake.s/2 ,flake.s/0.8 ,0,2*Math.PI) ;
                    ctx.fill() ;
                    if (flakes[i].y > h)
                    {
                        flakes.splice(i,1) ;
                    }
                };

            } ;

            setInterval(snowfall,20) ;


        } ;

        window.onload = init;
	</script>

</head>

<body>
<audio id="audio" src="js/audio/audio7.mp3"></audio>

<canvas id="canvas" width="2200" height="1200"></canvas>
<div id="side" ><div id="snow1"></div></div>
<div id="StartMessageContainer"><h1 id="StartMessage"> Ready !</h1></div>

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
					<li id="ReprendreBtn" class="menu"> REPRENDRE </li>
					<li id="RecommencerBtn" class="menu1"> RECOMMENCER </li>
					<li id="AideBtn" class="menu2"> AIDE </li>
					<li id="Options" class="menu3"> OPTIONS </li>
					<li id="QuitterMP" class="menu4"> MENU PRINCIPALE </li>
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
	<br><br>
</div><!-- .container -->

<div id="snow1_jeu">
	<div id="PauseIcone"  style="z-index: 20"><a><img id="ps" src="img/pause1.png" alt="pause"   height="0px" width="0px"></a></div>
	<div id="fin"  style="z-index: 18"><a><img  src="img/fin.JPG" alt="fin"   height="200px" width="1000px"></a></div>
	<div id="stat" >
		<div class="statistics1 stats">
			<h1 class=" stats1">Score</h1>
			<h2 id="score" class=" stats1"> 0 </h2>
		</div>
		<div class="statistics2 stats">
			<h1 class=" stats1">Lignes </h1>
			<h2 id="Lignes" class=" stats1"> 0 </h2>
		</div>
		<div class="statistics3 stats">
			<h1 class=" stats1"> But</h1>
			<h2 id="but" class=" stats1"> 5 </h2>
		</div>
		<div class="statistics4 stats">
			<h1 class=" stats1"> Niveau </h1>
			<h2 id="niveau" class=" stats1"> 1 </h2>
		</div>
	</div>

	<div id="iphone_bg" style="position: fixed; bottom: 0px;  left:46.15%;  top: 13%;"><img  alt=" " border="0" src="img/ffff3.jpg" title=" " /></div>
	<div style="display: inline;right: 20%;"><canvas id="Grille"   height="0px" width="0px" ></canvas></div>
	<canvas id="Tetro_Suivant"   height="340px" width="130px"  ></canvas>
	<div id="iphone" style="z-index: 2;"><img  id="iphone_img" alt=" " border="0" src="img/iphone551.png" title=" " /></div>
</div>

<div id="temp1" class="cadre" >
	<div id="temp" class="container">
		<h1 class="sta"   style="color: chocolate;font-size: 36px; position: fixed;left: 31%;top: 60%;"> temps restant </h1>
		<h2 class="sta" id="time" style="font-size: 72px;position: fixed;left: 35%;top: 66%;">30'</h2>
	</div>
</div>
<br><br>

<div>
	<!--ajouter par mouaci youcef conceran joker-->
	<div class="joker" id="joker" style="position: fixed;top: 4%;left: 70%;">
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
	<script>
        // Get the modal
        var modal = document.getElementById('jokerinfo');
        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];

        // When the user clicks the button, open the modal

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
</div>

<div id="bout_tfn" style="visibility: hidden;">
	<div id="up" ><img src="img/up1.png" style="right: 7%;position: fixed; top: 80%; height: 10%;"></div>
	<div id="down"><img src="img/down1.png" style="right: 7%;position: fixed; top: 90.5%;  height: 10%;"></div>
	<div id="left"><img src="img/left1.png" style="right: 13.5%;position: fixed; top:86%;  height: 10%;"></div>
	<div id="right"><img src="img/right1.png" style="right: 1.1%;position: fixed; top: 86%; height: 10%;"></div>
	<div id="space_bouton"><img src="img/space1.png" style="left: 2%;position: fixed; top: 89%; height: 10%;"></div>
</div>

<div id="vol_plus"><img src="img/plus.png" style="left: 36%;position: fixed; top: 2%; height: 7%;"></div>
<div id="vol_moins"><img src="img/moins.png" style="left: 40%;position: fixed; top: 2%; height: 7%;"></div>
<div id="vol"><img src="img/listen-icon.png" style="left: 30%;position: fixed; top: 1%; height: 9%;"></div>
<div ><img id="suiv_img" src="img/suiv.png" style="left: 66%;position: fixed; top: 55%; height: 30%;"></div>
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