<?php
include("header.php");

if (isset($_GET["logout"]) && $_GET["logout"] == "true") {

    $_SESSION = [];
    session_destroy();
    header("index.php");
    exit();
}


?>

<h1 style="text-align: center">Home</h1>

<?php
include("footer.php");
?>