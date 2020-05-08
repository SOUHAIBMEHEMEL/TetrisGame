<?php
session_start();
$_SESSION = array();
session_destroy();
session_start();
?>
<!doctype html>
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>tetris</title>
    <link rel="shortcut icon" href="img/logo33.jpg" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/normalize.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/jquery.fancybox.css">
    <link rel="stylesheet" href="css/flexslider.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/queries.css">
    <link rel="stylesheet" href="css/etline-font.css">
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet"  href="css/font-awesome.min.css" >
    <script src="js/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    <style>
        .DUPUSER{

            color: white;
            padding: 15px 0;
            border-radius: 3px;
            width: 80%;
            font-size: 21px;
            display: inline-block;
            margin-top: 20px;
        }
        #DUPUSER1, #DUPUSER4{
            background-color: red;
        }
        #DUPUSER2, #DUPUSER3{
            background-color: green;
        }
    </style>
</head>
<body id="top">
    <section class="hero">
        <section class="navigation">
            <img src="img/logo33.jpg" style="height: 60px;top: 20px;left: 7%;position: fixed;z-index: 99;border: 1.3px rgba(255,255,255,.3) solid">
            <header>
                <div class="header-content">
                    <div class="logo"><a ><img src="img/se-logo.png" alt="" style="visibility: hidden" ></a></div>
                    <div class="header-nav">
                        <nav>
                            <ul class="primary-nav">
                                <li><a href="#top">Acceuil</a></li>
                                <li><a href="#features0">Version</a></li>
                                <li><a href="#blog">Themes</a></li>
                                <li><a href="#Equipe">Equipe</a></li>
                                <li><a href="#Equipe">Contactez-nous <i class="fa fa-envelope"></i> </a></li>
                            </ul>
                            <ul class="member-actions">
                                <li><a href="#Ins" class="login" id="SinscrireBtn">S'inscrire</a></li>

                                <li><a href="#Ins" class="login" id="ConnecterBtn">Connecter</a></li>

                            </ul>
                        </nav>
                    </div>
                    <div class="navicon">
                        <a class="nav-toggle" href="#"><span></span></a>
                    </div>
                </div>
            </header>
        </section>
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="hero-content text-center">

                        <h1>Jouer, Réagir, Gagner !</h1>
                        <p class="intro"> “TETRIS” : Un jeux d'intelligence, de réaction et loisir disponible pour toute catégorie de la société. </p>
                        <a href="TETRIS_final/index.php" class="btn btn-fill btn-large btn-margin-right">COMMENCER</a> <a href="aide.html" class="btn btn-accent btn-large">PAGE D'AIDE</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="down-arrow floating-arrow"><a href="#"><i class="fa fa-angle-down"></i></a></div>
    </section>
    <section class="intro section-padding" id="features0">
        <div class="container">
            <div class="row">
                <div class="col-md-4 intro-feature">
                    <div class="intro-icon">
                        <span class="icon"><i class="fa fa-gamepad"></i></span>
                    </div>
                    <div class="intro-content">
                        <h5>C'est Quoi Tetris?</h5>
                        <p>Tetris est un jeu vidéo de puzzle. Alliant simplicité, rapidité et intelligence,
                            il est l'un des jeux vidéo les plus populaires au monde. Des pièces (nommés des Tétrominos) descendent du haut de
                            l'écran les une après les autres.
                            le joueur doit tenter de compléter un maximum de lignes avant le remplissement de tout l'écran pour avoir le plus grand possible de points qui lui permet d'etre bien classé par rapport a ces concurrents.
                        </p>
                    </div>
                </div>
                <div class="col-md-4 intro-feature">
                    <div class="intro-icon">
                        <span class="icon"><i class="fa fa-group"></i></span>
                    </div>
                    <div class="intro-content">
                        <h5>Destiné Pour Qui?</h5>
                        <p>Cette version contient des différents thèmes avec des différentes modes et fonctionnalités qui permet
                            au différents catégories de la société que ce soit homme,femme,enfant,adolescent, de la jouer d'une manière simple,
                            motivante et adéquate.
                        </p>
                    </div>
                </div>
                <div class="col-md-4 intro-feature">
                    <div class="intro-icon">
                        <span class="icon"><i class="fa fa-chrome"></i></span>
                    </div>
                    <div class="intro-content last">
                        <h5>comment peut-on le jouer?</h5>
                        <p>C'est une application de technologie web accessible sur les différent navigateurs web et adaptée pour les différents appareils
                           ( PC, Tabelettes, IPads, SmartPhones...) permettant au large publique de la consulter en ligne et gratuitement.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="features section-padding" id="features">
        <div class="container">
            <div class="row">
                <div class="col-md-5 col-md-offset-7">
                    <div class="feature-list">
                        <h3>APPLICATION RESPONSIVE, ADAPTéE:</h3>
                        <p>Cette application developpée avec la technologie web ( HTML,CSS et JAVASCRIPT) reponds
                            au besoins des différents systemes d'exploitations. C'est la flexibilité du web qui la retourne
                            polyvalente. elle est disponible pour:
                        </p>
                        <ul class="features-stack">
                            <li class="feature-item">
                                <div class="feature-icon">
                                    <span class="icon"><i class="fa fa-windows"></i></span>
                                </div>
                                <div class="feature-content">
                                    <h5>WINDOWS</h5>
                                    <p>Application web supportable sur tous les appareils avec le systeme d'exploitation WINDOWS</p>
                                </div>
                            </li>
                            <li class="feature-item">
                                <div class="feature-icon">
                                    <span class="icon"><i class="fa fa-android"></i></span>
                                </div>
                                <div class="feature-content">
                                    <h5>Android</h5>
                                    <p>Le Service Chrome offre la possibilité d'utiliser cette application sur les telephones portables
                                    fonctionnant sur Android </p>
                                </div>
                            </li>
                            <li class="feature-item">
                                <div class="feature-icon">
                                    <span class="icon"><i class="fa fa-apple"></i></span>
                                </div>
                                <div class="feature-content">
                                    <h5>I-OS</h5>
                                    <p>Elle est accessible même sur la platforme I-OS que ce soit Iphone, Ipad...</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="device-showcase">
            <div class="devices">
                <div class="ipad-wrap wp1"></div>
                <div class="iphone-wrap wp2"></div>
            </div>
        </div>
        <div class="responsive-feature-img"><img src="img/devices.png" alt=""></div>
    </section>
    <section class="features-extra section-padding" id="assets">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="feature-list">
                        <h3 style="color:#FF5274">MODES DE JEUX</h3>
                        <h5>MODE1</h5>
                        <p>Mode Normal </p>
                        <h5>MODE2</h5>
                        <p>Mode Défi
                        </p>
                         <a href="#" class="btn btn-ghost btn-accent btn-small" style="visibility: hidden;"></a>
                    </div>
                </div>
            </div>
        </div>
        <section class="features-extra  aide">

            <div style="position: absolute; height: 300%;width: 110%;right: 1%; top: -72.2%;">
                <img  src="img/macbook-pro.png" style="position: absolute; top: 1%; right: 3%;height: 30%;width: 60%;" >
                <div style="position: absolute; height: 25.2%;width: 46%;right: 10.05%; top: 2.7%;background: url('img/aqua_bgr.jpg') ;z-index: 5;" ></div>
                <img  src="img/iphone-device.png" style="position: absolute; top: 40%; right: 15%;height: 50%;width: 30%;" >
                <div style="position: absolute; height: 38.5%;width: 27%;right: 16.2%; top: 45.7%;background: url('img/IPhoneModeBlocks.png') ; z-index: 5;" ></div>
                <img  src="img/iphone-device.png" style="position: absolute; top: 40%; left: 15%;height: 50%;width: 30%;" >
                <div style="position: absolute; height: 38.5%;width: 27%;left: 16.2%; top: 45.7%;background: url('img/IPhoneModeNormal.png') ;z-index: 5;" ></div>
            </div>

        </section>


    </section>
    <section class="hero-strip section-padding">
        <div class="container">
            <div class="col-md-12 text-center">
                <h2>
                ESSAYEZ, PRENEZ UNE, C'EST GRATUIT !!
                </h2>
                <h3 style="color: white;">Vous êtes entrain de prendre une nouvelle aventure en un seul clic,</h3>
                <h3 style="color: white;">Qu'est-ce que vous attendez?? </h3>
                <a href="#" class=" btn btn-fill btn-large btn-margin-right">COMMENCER PARTIE!</a>
                <div class="logo-placeholder floating-logo"><img src="img/sketch-logo.png" alt=""></div>
            </div>
        </div>
    </section>

    <section class="blog text-center">
        <div class="container-fluid">
            <section class="blog-intro section-padding" id="blog">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 style="color:#FF5274">NOS THEMES</h1>
                        </div>
                    </div>
                </div>
            </section>
            <div class="col-md-4">
                <article class="blog-post">
                    <figure>
                        <a href="img/5.PNG" class="single_image">
                            <div class="blog-img-wrap">
                                <div class="overlay">
                                    <i class="fa fa-search"></i>
                                </div>
                                <img src="img/5.PNG" alt=""/>
                            </div>
                        </a>
                        <figcaption>
                            <h2><a href="#" class="blog-category" data-toggle="tooltip" data-placement="top" data-original-title="See more posts">THEME1</a></h2>
                            <p><a href="#" class="blog-post-title">SEA <i class="fa fa-angle-right"></i></a></p>
                        </figcaption>
                    </figure>
                </article>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <article class="blog-post">
                        <figure>
                            <a href="img/2.PNG" class="single_image">
                                <div class="blog-img-wrap">
                                    <div class="overlay">
                                        <i class="fa fa-search"></i>
                                    </div>
                                    <img src="img/2.PNG" alt=""/>
                                </div>
                            </a>
                            <figcaption>
                                <h2><a href="#" class="blog-category" data-toggle="tooltip" data-placement="top" data-original-title="See more posts">THEME2</a></h2>
                                <p><a href="#" class="blog-post-title">SPACE <i class="fa fa-angle-right"></i></a></p>
                            </figcaption>
                        </figure>
                    </article>
                </div>
                <div class="col-md-4">
                    <article class="blog-post">
                        <figure>
                            <a href="img/3.PNG" class="single_image">
                                <div class="blog-img-wrap">
                                    <div class="overlay">
                                        <i class="fa fa-search"></i>
                                    </div>
                                    <img src="img/3.PNG" alt=""/>
                                </div>
                            </a>
                            <figcaption>
                                <h2><a href="#" class="blog-category" data-toggle="tooltip" data-placement="top" data-original-title="See more posts">THEME3</a></h2>
                                <p><a href="#" class="blog-post-title">AQUARIUM <i class="fa fa-angle-right"></i></a></p>
                            </figcaption>
                        </figure>
                    </article>
                </div>
                <div class="col-md-4">
                    <article class="blog-post">
                        <figure>
                            <a href="img/4.PNG" class="single_image">
                                <div class="blog-img-wrap">
                                    <div class="overlay">
                                        <i class="fa fa-search"></i>
                                    </div>
                                    <img src="img/4.PNG" alt=""/>
                                </div>
                            </a>
                            <figcaption>
                                <h2><a href="#" class="blog-category" data-toggle="tooltip" data-placement="top" data-original-title="See more posts">THEME4</a></h2>
                                <p><a href="#" class="blog-post-title">KIDS <i class="fa fa-angle-right"></i></a></p>
                            </figcaption>
                        </figure>
                    </article>
                </div>
                <div class="col-md-4">
                    <article class="blog-post">
                        <figure>
                            <a href="img/1.PNG" class="single_image">
                                <div class="blog-img-wrap">
                                    <div class="overlay">
                                        <i class="fa fa-search"></i>
                                    </div>
                                    <img src="img/1.PNG" alt=""/>
                                </div>
                            </a>
                            <figcaption>
                                <h2><a href="#" class="blog-category" data-toggle="tooltip" data-placement="top" data-original-title="See more posts">THEME5</a></h2>
                                <p><a href="#" class="blog-post-title">SNOW <i class="fa fa-angle-right"></i></a></p>
                            </figcaption>
                        </figure>
                    </article>
                </div>
            </div>
        </div>
    </section>
    <section class="testimonial-slider section-padding text-center" id="Equipe">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 style="color:#FF5274">NOTRE EQUIPE</h1>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="flexslider">
                        <ul class="slides" id="Ins">
                            <li>
                                <div class="avatar"><img src="img/Sohaib.jpg" alt=""></div>
                                <h2>MEHEMEL SOUHAIB (CE)</h2>
                                <p class="author">2CPI6</p>
                                <p class="author">fs_mehemel@esi.dz</p>
                            </li>
                            <li>
                                <div class="avatar"><img src="img/youcef.jpg" alt=""></div>
                                <h2>MOUACI YOUCEF</h2>
                                <p class="author">2CPI6</p>
                                <p class="author">gy_mouaci@esi.dz</p>
                            </li>
                            <li>
                                <div class="avatar"><img src="img/Mehdi.jpg" alt=""></div>
                                <h2>ARRAR MEHDI</h2>
                                <p class="author">2CPI6</p>
                                <p class="author">gm_arrar@esi.dz</p>
                            </li>
                            <li>
                                <div class="avatar"><img src="img/reda.jpg" alt=""></div>
                                <h2>SABERZENNAGUI REDA</h2>
                                <p class="author">2CPI6</p>
                                <p class="author">gr_saberzenagui@esi.dz</p>
                            </li>
                            <li>
                                <div class="avatar"><img src="img/Imad.jpg" alt=""></div>
                                <h2>SIDHOUM IMAD</h2>
                                <p class="author">2CPI9</p>
                                <p class="author">gi_sidhoum@esi.dz</p>
                            </li>
                            <li>
                                <div class="avatar"><img src="img/Boubred.jpg" alt=""></div>
                                <h2>BOUBRED MOHAMED</h2>
                                <p class="author">2CPI9</p>
                                <p class="author">gm_boubred@esi.dz</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="sign-up section-padding text-center" id="download">
        <div class="container">
            <div class="row">
                <div id="Inscription" class="col-md-6 col-md-offset-3" >
                    <h3>S'INSCRIRE MAINTENANT</h3>
                    <p style="text-align: center;">Creer un compte pour commencer la competition en ligne</p>
                    <form class="signup-form" action="#Inscription" method="post">
                        <div class="form-input-group">
                            <i class="fa fa-envelope"></i><input type="text" placeholder="Votre Nom" name="username"  >
                        </div>
                        <div class="form-input-group">
                            <i class="fa fa-lock"></i><input type="password"  placeholder="Votre Mot de passe" name="password"  >
                        </div>
                        <!-- <div class="form-input-group">
                            <i class="fa fa-lock"></i><input type="number"  placeholder="Votre Score" name="score"  >
                        </div> -->
                        <button type="submit" value='Register' class="btn-fill sign-up-btn" name="sinscrire">S'INSCRIRE</button>
                        <?php
                        if(isset($_POST['username'], $_POST['password'], $_POST['sinscrire'])){ //,$_POST['score']
                            require 'connect.php';
                            $usr = $_POST['username'];
                            $pass = hash('sha256', $_POST['password']);
                            //$scr = $_POST['score'];
                            //Check, if user exists:

                            $check = dbConnect()->prepare("SELECT username FROM users WHERE username='$usr'");

                            //$check->bindParam(':username', $usr);
                            //$check->bindParam(':password', $pass);
                            //$check->bindParam(':score', $scr);
                            $check->execute();
                            $row = $check->fetch();

                            if ($row['username'] === $usr ) {
                                //echo "user exist";
                                ?>
                                <div class="DUPUSER" id="DUPUSER1">
                                    Nom d'utilisateur existant, veuillez choisir un autre !
                                </div>
                                <?php
                            }
                            else {
                                //Register:

                                $scr = 0;
                                $query = dbConnect()->prepare("INSERT INTO `users`(`username`, `password`, `score`) VALUES ('$usr','$pass','$scr')"); //,`score`,'$scr'
                                $query->execute();
                                $_SESSION['username']=$usr;
                                ?>
                                <div class="DUPUSER" id="DUPUSER2">
                                    Inscription faite avec succés, amusez-vous !
                                </div>
                                <?php
                                //$_SESSION['score']=$scr;
                                //header("Location: check.php");
                            }
                        }
                        ?>
                    </form>
                </div>
                <div id="Connexion" class="col-md-6 col-md-offset-3" >
                    <h3>SE CONNECTER MAINTENANT</h3>
                    <p style="text-align: center;">Connecter à votre compte pour commencer la competition en ligne</p>
                    <form class="signup-form" action="#Connexion" method="post">
                        <div class="form-input-group">
                            <i class="fa fa-envelope"></i><input type="text" placeholder="Votre Nom" name="username"   >
                        </div>
                        <div class="form-input-group">
                            <i class="fa fa-lock"></i><input type="password"  placeholder="Votre Mot de passe" name="password"  >
                        </div>
                        <!-- <div class="form-input-group">
                            <i class="fa fa-lock"></i><input type="number"  placeholder="Votre Score" name="score"  >
                        </div> -->
                        <button type="submit" value='Connect' class="btn-fill sign-up-btn" name="connecter">SE CONNECTER</button>
                        <?php
                        if(isset($_POST['username'], $_POST['password'], $_POST['connecter'])){
                            require 'connect.php';
                            $pass = hash('sha256', $_POST['password']);
                            $usr = $_POST['username'];
                            $query = dbConnect()->prepare("SELECT username, password FROM users WHERE username=:username AND password=:password");
                            $query->bindParam(':username', $usr);
                            $query->bindParam(':password', $pass);
                            $query->execute();
                            $row = $query->fetch();
                            if($row['password'] == $pass){
                                $_SESSION['username'] = $row['username'];
                                //header("Location: check.php");
                                ?>
                                <div class="DUPUSER" id="DUPUSER3">
                                    Connexion faite avec succés, amusez-vous !!
                                </div>
                                <?php
                            }
                            else {
                                ?>
                                <div class="DUPUSER" id="DUPUSER4">
                                    Connexion échouée, retaper un nom d'utilisateur / Mot de passe valide !
                                </div>
                                <?php
                            }
                        }
                        ?>
                    </form>
                </div>
            </div>
        </div>
    </section>


    <div class="mail" id="mail">
        <div class="container">
            <div class="agileits-title">
                <h3>Contactez-Nous</h3>
            </div>
            <div class="w3_mail_grids">
                <form action="#" method="post">
					<span class="input input--jiro">
						<input class="input__field input__field--jiro" type="text" id="input-10" name="Name" placeholder="Votre Nom" required=""/>
						<label class="input__label input__label--jiro" for="input-10">
							<span class="input__label-content input__label-content--jiro">Votre Nom</span>
						</label>
					</span>
                    <span class="input input--jiro">
						<input class="input__field input__field--jiro" type="email" id="input-11" name="Email" placeholder="Votre Address Email" required=""/>
						<label class="input__label input__label--jiro" for="input-11">
							<span class="input__label-content input__label-content--jiro">Votre Email</span>
						</label>
					</span>
                    <span class="input input--jiro">
						<input class="input__field input__field--jiro" type="text" id="input-12" name="Phone Number" placeholder="Numero Telephone" required=""/>
						<label class="input__label input__label--jiro" for="input-12">
							<span class="input__label-content input__label-content--jiro">Numero Telephone</span>
						</label>
					</span>
                    <textarea name="Message" placeholder="Tapez Votre Message Ici..." required=""></textarea>
                    <input type="submit"  class=" btn btn-fill btn-margin-right" value="ENVOYER">
                </form>
            </div>
        </div>
    </div>
    <script src="js/classie.js"></script>
    <script>
        (function() {
            // trim polyfill : https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/String/Trim
            if (!String.prototype.trim) {
                (function() {
                    // Make sure we trim BOM and NBSP
                    var rtrim = /^[\s\uFEFF\xA0]+|[\s\uFEFF\xA0]+$/g;
                    String.prototype.trim = function() {
                        return this.replace(rtrim, '');
                    };
                })();
            }

            [].slice.call( document.querySelectorAll( 'input.input__field' ) ).forEach( function( inputEl ) {
                // in case the input is already filled..
                if( inputEl.value.trim() !== '' ) {
                    classie.add( inputEl.parentNode, 'input--filled' );
                }

                // events:
                inputEl.addEventListener( 'focus', onInputFocus );
                inputEl.addEventListener( 'blur', onInputBlur );
            } );

            function onInputFocus( ev ) {
                classie.add( ev.target.parentNode, 'input--filled' );
            }

            function onInputBlur( ev ) {
                if( ev.target.value.trim() === '' ) {
                    classie.remove( ev.target.parentNode, 'input--filled' );
                }
            }
        })();
        var SinscrireBtn = document.getElementById("SinscrireBtn");
        var ConnecterBtn = document.getElementById("ConnecterBtn");
        var Inscription = document.getElementById("Inscription");
        var Connexion = document.getElementById("Connexion");
        SinscrireBtn.onclick = function () {
            Inscription.style.display = 'block';
            Inscription.style.position = 'relative';
            Inscription.style.visibility = 'visible';
            Connexion.style.display = 'none';
            Connexion.style.visibility = 'hidden';
        };
        ConnecterBtn.onclick = function () {
            Inscription.style.display = 'none';
            Inscription.style.visibility = 'hidden';
            Connexion.style.display = 'block';
            Connexion.style.position = 'relative';
            Connexion.style.visibility = 'visible';
        };
        /*window.onload = function (){
            Connexion.style.display = 'none';
            Connexion.style.visibility = 'hidden';
        }*/
    </script>
    <footer class="footer">
        <div class="container inner">
            <p class="pull-left white" style="color: snow;">© 2018. Tetris | projet 2CPI équipe 16.</p>
        </div>
    </footer>
    <script>window.jQuery || document.write('<script src="js/jquery-1.11.2.min.js"><\/script>')</script>
    <script src="js/retina.js"></script>
    <script src="js/jquery.fancybox.pack.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
    <script src="js/jquery.flexslider-min.js"></script>
    <script src="js/classie.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>


</body>
</html>

