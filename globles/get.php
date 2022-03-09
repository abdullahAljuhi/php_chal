<?php
//Start $_GET example
echo '<h1>$_GET</h1>';
echo "<form action='get.php' method='GET'>
<input type='text' name='name' id=''>
<input type='submit' value='send'>
</form>";
if(isset($_GET['name'])){
    echo "<br> ".$_GET['name'];
}