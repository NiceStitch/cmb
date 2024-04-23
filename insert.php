<?php
$host = "192.168.211.217";
$user = "wmedyk";
$pass = "7kh97gBD";
$db = "metadonnee";
$con = pg_connect("host=$host dbname=$db user=$user password=$pass") or die ("Connexion pas possible\n");

if(!$con) {
    echo "Error: pas possible de se connecter";
} else {
    $fname = $_POST['fname'];
    $datecrea = $_POST['datecrea'];
    $datemodif = $_POST['datemodif'];
    $ref_coord = $_POST['ref_coord'];
    $format = $_POST['format'];
    $service = $_POST['service'];
    $cat = $_POST['cat'];
    $cat_autre = $_POST['cat_aut'];
    $auteur = $_POST['auteur'];
    $mail = $_POST['mail'];
    $description = $_POST['desc'];


    $query = "INSERT INTO general.metadonnee (fname, datecrea, datemodif, ref_coord, format, service, auteur, mail, description, cat, cat_aut) VALUES ('$fname', '$datecrea' , '$datemodif' , '$ref_coord', '$format', '$service', '$auteur', '$mail', '$description', '$cat', '$cat_autre')";
    $result = pg_query($con, $query);
    header("Location: test_php.html");
}
pg_close($con)




?>