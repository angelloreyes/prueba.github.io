<?php
class Conexion {
   private $conect;
   public function __construct(){    
    $connectionString = "mysql:host=".DB_HOST.";dbname=".DB_NAME.";.DB_CHARSET.";
    try {    
    $this->conect = new PDO($connectionString, DB_USER, DB_PASSWORD);
    $this->conect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo "Conexión Exitosa";
    }catch (PDOException $e) {
    $this->conect = 'Error de Conexión';
    echo "Error: ".$e->getMessage();
    } // End TRY CATCH    
    } // End Function Construct    
    public function conect(){
    return $this->conect;    
    } // End Function Conect   
    } // End Class Conexion
    
    
?>