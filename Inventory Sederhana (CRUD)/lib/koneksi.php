  
<?php
try {
    $con = new PDO("mysql:host=localhost;dbname=crud","root","");
} catch (PDOException $e) {
    echo $e-> getMessage();
}

?>