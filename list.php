<?php
include("header.php");



?>
    <!-- Logique de suppression -->
    <?php if (isset($_GET["suppr"])) {
        unset($_SESSION["user"][$_GET["id"]]);
    } ?>
    <!-- Logique de suppression -->

<h1 style="text-align: center">Liste des élèves</h1>

<a href="list.php?filtre=true">Uniquement avec commentaire</a><br>
<a href="list.php">Tous les élèves</a>

<div style="display:flex; ">
    <!-- On affiche une card qui reprend les éléments stockées dans la var data -->
    <?php foreach ($_SESSION['user'] as $key => $value) { ?>
        <!-- On affiche uniquement les élèves, ou sans commentaire -->
        <?php if ((isset($_GET["filtre"]) && isset($value["commentaire"])) || !isset($_GET["filtre"])) { ?>
            <!-- On affiche uniquement les élèves, ou sans commentaire -->

            <div class='card' style='width: 18rem;margin:20px'>
                <div class='card-body'>
                    <h5 class='card-title'>
                        <?= $value["prenom"] . " " . $value["nom"] ?>
                    </h5>
                    <h6 class='card-subtitle mb-2 text-body-secondary'>
                        <?= $value["date"] ?>
                    </h6>
                    <p class='card-text'>
                        <?= $value["telephone"] ?>
                    </p>
                    <a href='data.php?id=<?= $key ?>' class='card-link'>Voir le détail</a>
                    <a href='list.php?suppr=true&id=<?= $key ?>' class='card-link'>Supprimer l'élève</a>
                </div>
            </div>
        <?php }
    } ?>


</div>




<?php
include("footer.php");
?>