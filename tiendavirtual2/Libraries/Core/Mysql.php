<?php
Class Mysql extends Conexion {

     private $conexion;
     private $strquery;
     private $arrValues;

    function __construct(){
    $this->conexion = new Conexion();
    $this->conexion = $this->conexion->conect();
    } // End Function Construct
    
    
    
    // Insertar un Registro
    
    public function insert(string $query, array $arrValues){
    $this->strquery = $query;
    $this->arrVAlues = $arrValues;
    $insert = $this->conexion->prepare($this->strquery);
    $resInsert = $insert->execute($this->arrVAlues);
    if($resInsert){
    $lastInsert = $this->conexion->lastInsertId();
    }else{
    $lastInsert = 0;
    } // End If Else
    return $lastInsert;
    } // End Public Function insert
    
    
    // Busca un Registro
    public function select(string $query){
    $this->strquery = $query;
    $result = $this->conexion->prepare($this->strquery);
    $result->execute();
    $data = $result->fetch(PDO::FETCH_ASSOC);
    return $data;
    } // End Function Select
    
    
    
    // Busca varios Registros
    public function select_all(string $query){
    $this->strquery = $query;
    $result = $this->conexion->prepare($this->strquery);
    $result->execute();
    $data = $result->fetchall(PDO::FETCH_ASSOC);
    return $data;
    } // End Function SelectAll
    
    
    
    // Actualizar un Registro
    public function update(string $query, array $arrValues){
    $this->strquery = $query;
    $this->arrVAlues = $arrValues;
    $update = $this->conexion->prepare($this->strquery);
    $resExecute = $update->execute($this->arrVAlues);
    return $resExecute;
    } // End Function Actualizar
    

    
    // Eliminar un usuario
    public function delete(string $query){
    $this->strquery = $query;
    $result = $this->conexion->prepare($this->strquery);
    $del=$result->execute();
    return $del;
    } // End Public Function getUser
    } // End Class Mysql

?>