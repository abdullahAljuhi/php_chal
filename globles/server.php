<?php
//Start $_SERVER example
echo '<br> <br> <br> <h1 style="color:blue;">$_SERVER</h1>';

foreach ($_SERVER as $key => $value) {
    echo "<h3> <span style='color:red;'>$key</span> : $value </h3>";
}
