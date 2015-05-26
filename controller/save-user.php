<?php
require_once(__DIR__ . "/../model/config.php");

$query = $_SESSION["connection"]->query("UPDATE users SET "
        . "exp = $exp, "
        . "exp1 = $exp1, "
        . "exp2 = $exp2, "
        . "exp3 = $exp3, "
        . "exp4 = $exp4 WHERE username = \"" . $_SESSION["name"]. "\"");
if($query){
    echo "true";
}else{
    echo "<p>" . $_SESSION["connection"]->error . "</p>";
}