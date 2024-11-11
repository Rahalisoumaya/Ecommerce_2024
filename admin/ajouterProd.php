<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    require_once "../connexion.php";
    $sql="insert into produit values (NULL,'cable VGA',2,100,'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt, placeat?','https://picsum.photos/200/200',0)";
    $connexion=new connexion();
    $pdo=$connexion->getPdo();
    $res=$pdo->exec($sql);
    var_dump($res);

    ?>
    
</body>
</html>