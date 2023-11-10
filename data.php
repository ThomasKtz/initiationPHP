<?php
include("header.php");
// var_dump($_GET);

// On verifie la présence d'un id dans url
if (isset($_GET["id"])) {
    $id = $_GET["id"];
    $msgSuccess = "Elève récupéré";
    // On verifie la présence d'un id dans url


    // On verifie si le commentaire existe
    if (isset($_POST["commentaire"]) && !empty($_POST["commentaire"])) {
        $_SESSION["user"][$id]["commentaire"] = $_POST["commentaire"];
        $msgSuccess = "Commentaire bien ajouté !";
    }
    // On verifie si le commentaire existe

} else {
    $msgError = "Merci de séléctionner un élève";
}
include("box.php");
?>

<h1 style="text-align: center">Information de l'élève</h1>
<?php
// On affiche les informations de l'élève reprises dans la fiche de celui ci si son ID existe dans l'url
if (isset($_GET["id"])) { ?>

    <div>
        <p>
            Prénom:
            <?= $_SESSION["user"][$id]["prenom"] ?><br>
            Nom:
            <?= $_SESSION["user"][$id]["nom"] ?> <br>
            E-mail:
            <?= $_SESSION["user"][$id]["email"] ?><br>
            Téléphone:
            <?= $_SESSION["user"][$id]["telephone"] ?><br>
            Adresse:
            <?= $_SESSION["user"][$id]["adresse"] ?><br>
            Date de naissance:
            <?= $_SESSION["user"][$id]["date"] ?><br>

            <!-- On ajoute le commentaire -->
            <?php if (isset($_SESSION["user"][$id]["commentaire"])) { ?>
                Commentaire :
                <?= $_SESSION["user"][$id]["commentaire"] ?><br>
            <?php } ?>
            <!-- On ajoute le commentaire -->
        </p>
    </div>
    <!-- // On affiche les informations de l'élève reprises dans la fiche de celui ci si son ID existe dans l'url -->

    <!-- Ajout d'un commentaire dans la session sur un élève -->
    <div>
        <!-- On verifie l'existance d'un commentaire. Si absent, proposition d'ajout, sinon on affiche pas le form -->
        <?php if (!isset($_SESSION["user"][$id]["commentaire"])) { ?>
            <!-- On verifie l'existance d'un commentaire. Si absent, proposition d'ajout, sinon on affiche pas le form -->
            <form action="" method="post">
                <input type="text" name="commentaire" id="commentaire"><br>
                <input type="submit" value="Enregistrer le commentaire">
            <?php } ?>
        </form>
    </div>
<?php } ?>
<!-- Ajout d'un commentaire dans la session sur un élève -->

<?php
include("footer.php");
?>