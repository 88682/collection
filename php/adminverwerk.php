<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once 'config.php';


$naam = $_POST['naam'];
$pc = $_POST['pc'];
$datum = $_POST['datum'];
$rare = $_POST['rare'];
$prijs = $_POST['prijs'];



$image = $_FILES["image"];
$map = "../media";
$tijdelijk = $image["tmp_name"];
$bestandsnaam = $image["name"];

echo "Verplaats $tijdelijk naar $map / $bestandsnaam... <br/>";

if (move_uploaded_file($tijdelijk , $map."/".$bestandsnaam)){
    echo "$bestandsnaam is ge-upload!";
}
else{
    echo "FOUT bij uploaden $bestandsnaam";
}



$stmt = $conn->prepare("INSERT INTO verzamelaar (image, naam, pc, datum, rare, prijs) VALUES (?, ?, ?, ?, ?, ?)");
$stmt->bind_param("ssssss", $bestandsnaam, $naam, $pc, $datum, $rare, $prijs);

if ($stmt->execute())
{
    echo "New records created successfully";
    //header("Location: projects.php");
}
else{
    echo "Fout biuj toevoegen database:<br/>";
    echo $stmt->error();
}





$stmt->close();
$conn->close();




