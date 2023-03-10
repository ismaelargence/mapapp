<?php 
    echo '<h1>Hello !</h1>'; 
    $xml = file_get_contents("http://backend:8000/db/read");
    echo $xml;
?> 
