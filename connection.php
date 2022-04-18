<?php
 $servername = 'localhost';
 $username = 'root';
 $password = '';
 $dbname='projet';
 try {
$pdo = new PDO(
    "mysql:host=$severname;dbname=$dbname",
    $username,
    $password,
    [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ]
    );
    echo "connected successfully";

 }
 catch(PDOException $e){
     echo"connection failed:".$e->getMessage();
 }
?>
<pre>
    <?php
print_r($query);
    ?>
</pre>