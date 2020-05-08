<?php
session_start();
try {
    $bdd = new PDO('mysql:host=localhost;dbname=tetrisdatabase;charset=utf8', 'root', '');
}
catch(Exception $e) {
    die('Erreur : ' . $e->getMessage());
}
if (isset($_GET["s"])&& isset($_GET["u"])) {
    $score = $_GET["s"];
    $user = $_GET["u"];
    $donneearray = $bdd->query("SELECT * FROM users WHERE username ='$user'");
    while ($donnee = $donneearray->fetch()) {
        $OldScore = $donnee["score"];
    }
    if ($OldScore < $score ){
        $reponse = $bdd->query("UPDATE users SET score ='$score' WHERE username = '$user'");
    }
}
?>
<!DOCTYPE html>
<html>
<head></head>
<body>
<?php
echo "<script> window.close(); </script>";
?>
</body>
</html>
