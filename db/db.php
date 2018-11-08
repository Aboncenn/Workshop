<?php
// Connexion a la base de données
$host ='localhost';
$db_name ='workshop';
$user ='root';
$password ='';

try {
$db = new PDO("mysql:dbname=" .$db_name.";host=" .$host, $user, $password, array(PDO::MYSQL_ATTR_LOCAL_INFILE=>1));
$db ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e){
    echo 'error while connecting :'.$e->getMessage();
};
?>
