<?php
include("header.php");
?>

<h1 style="text-align: center">Ajouter une élève</h1>

<form style="width: 60%; margin: auto" method="post" action="valid.php">
  <div class="mb-3">
    <label for="email" class="form-label">Adresse mail</label>
    <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="lastName" class="form-label">Nom</label>
    <input type="text" class="form-control" name="nom" id="lastName">
  </div>
  <div class="mb-3">
    <label for="firstName" class="form-label">Prénom</label>
    <input type="text" class="form-control" name="prenom" id="firstName">
  </div>
  <div class="mb-3">
    <label for="phoneNumber" class="form-label">Téléphone</label>
    <input type="tel" class="form-control" name="telephone" id="phoneNumber">
  </div>
  <div class="mb-3">
    <label for="adress" class="form-label">Adresse</label>
    <input type="text" class="form-control" name="adresse" id="adress">
  </div>
  <div class="mb-3">
    <label for="birth" class="form-label">Date de naissance</label>
    <input type="date" class="form-control" name="date" id="birth">
  </div>
  <button type="submit" class="btn btn-primary">Ajouter</button>
</form>

<?php
include("footer.php");
?>