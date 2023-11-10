<div>
<?php
if(empty($_SESSION["user"])){

    echo "Il n'y a pas d'élève inscrit";
}

for ($i = 0; $i < count($_SESSION["user"]) ; $i++) {
   
    echo '<div class="card" style="width: 18rem">
    <div class=card-body>
      <h5 class=card-title>'.$_SESSION["user"][$i]["prenom"].' '.$_SESSION["user"][$i]["nom"].'</h5>
      <h6 class=card-subtitle mb-2 text-body-secondary>' . $_SESSION["user"][$i]["date"] . '</h6>
      <p class=card-text>' . $_SESSION["user"][$i]["telephone"] . '</p>
      <a href=# class=card-link>Voir le détail</a>
    </div>
  </div>';
}
?>
</div>

<div>
<?php foreach($_SESSION['user'] as $key => $value){ ?>
    
    <div class='card' style='width: 18rem;'>
    <div class='card-body'>
    <h5 class='card-title'><?= $value["prenom"] . $value["nom"] ?></h5>
    <h6 class='card-subtitle mb-2 text-body-secondary'><?= $value["date"] ?></h6>
    <p class='card-text'><?= $value["telephone"] ?></p>
    <a href='#' class='card-link'>Voir le détail</a>
    </div>
    </div>
<?php } ?>
</div>