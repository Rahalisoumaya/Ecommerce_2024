<?php
class connexion {
    private $pdo;
    public function __construct(){
        $dsn="mysql:host=localhost;dbname=ecommerce";
        $user="root";
        $pw="";
        $this->pdo=new PDO($dsn,$user,$pw);
    }
    

    /**
     * Get the value of pdo
     */
    public function getPdo()
    {
        return $this->pdo;
    }
}




/*
try{ 
$dsn="mysql:host=localhost;dbname=ecommerce";
$user="root";
$pw="";
$pdo=new PDO($dsn,$user,$pw);}
catch(Exception $E)
{echo "Probléme de la connexion".$E->getMessage();}*/
