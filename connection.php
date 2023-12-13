<html>


</html>
<?php 

try {
    $a = new PDO("mysql:host=localhost;dbname=university", "root", "");#connecting code
    $a->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); #it will show detail while error occurs
  
} 
catch(PDOException $e){   
    echo $e->getMessage();
}