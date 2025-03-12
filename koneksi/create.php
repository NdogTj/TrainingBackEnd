<?php
include("koneksi.php");
if (isset($_POST["add"])) {
    $user = $_POST['user'];
    $math = $_POST['math'];
    $phy = $_POST['phy'];
    $mandarin = $_POST['mandarin'];
    $anth = $_POST['anth'];

    $masuk = "INSERT INTO report (name, math, physics, mandarin, anthro) VALUES ('$user', '$math', '$phy', '$mandarin', '$anth')";

    if ($koneksi->query($masuk) === TRUE){
        header("Location:../index.php");
        exit;
    } else{
        echo "SALAH BLOK: ".$masuk."<br>".$koneksi->error;
    }
}
?>