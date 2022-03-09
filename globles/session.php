<?php
//Start $_SESSION example

session_start();
echo '<h1>$_SESSION</h1>';
$_SESSION["newsession"]="this 1 session";
echo "<br> ".$_SESSION["newsession"];
