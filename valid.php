<?php
include("header.php");

if (
    isset($_POST["email"]) &&
    !empty($_POST["email"]) &&
    !empty($_POST["nom"]) &&
    !empty($_POST["prenom"]) &&
    !empty($_POST["telephone"]) &&
    !empty($_POST["adresse"]) &&
    !empty($_POST["date"])
) {
    $msgSuccess = "Elève bien ajouté, merci !";

    $data = [
        "email" => $_POST["email"],
        "nom" => $_POST["nom"],
        "prenom" => $_POST["prenom"],
        "telephone" => $_POST["telephone"],
        "adresse" => $_POST["adresse"],
        "date" => $_POST["date"],
    ];

    array_push($_SESSION["user"], $data);

} else {

    $msgError = "Merci de remplir tous les champs";

}
?>

<h1 style="text-align: center">Validation du formulaire</h1>


<?php
include("box.php");
include("footer.php");
?>