<?php
require_once(__DIR__ . '/../config/constant.php');
class Database
{
    private $host = DB_HOST;
    private $user = DB_USER;
    private $password = DB_PASS;
    private $dbname = DB_NAME;
    private $connexion;




    // Je crée un constructeur pour le dsn et la connexion a la db
    // A la création de ma class le construct se fera
    public function __construct()
    {
        $dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->dbname;
        $this->connexion = new PDO($dsn, $this->user, $this->password);
    }


    // je crée une fonction pour preparer et executer ma requette sql
    public function executeRequest($request)
    {
        $stm = $this->connexion->prepare($request);
        $stm->execute();
        // je retourne directement le fetch du statement
        //  qui sera stocké dans une variable
        return $stm->fetchAll(PDO::FETCH_OBJ);
    }
}
