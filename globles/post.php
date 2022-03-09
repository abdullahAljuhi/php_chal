<?php

//Start $_POST example
echo '<br> <br> <br> <h1 style="color:blue;">$_POST</h1>';
echo "<form action='index.php' method='GET'>
<input type='text' name='name' id=''>
<input type='submit' value='send'>
</form>";
if(isset($_POST['name'])){
    echo "<br> ".$_POST['name'];
}
