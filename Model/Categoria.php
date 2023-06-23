<?php
require_once "../Config/Conectar.php";
class Categoria extends Conectar{
    public $IdCategoria;
    public $Nombre;
    public $Descripcion;
    public $Imagen;
    public  function __construct($IdCategoria=NULL,$Nombre=NULL,$Descripcion=NULL, $Imagen=NULL, $DbCnx="")
    {

    $this->IdCategoria=$IdCategoria;
    $this->Nombre=$Nombre;
    $this->Descripcion=$Descripcion;
    $this->Imagen=$Imagen;
    parent::__construct($DbCnx);
    }

    public function __get($Property){
        if(property_exists($this,$Property)){
            return $this->$Property;
        }
    }

    public function __set($Property,$value){
        if(property_exists($this,$Property)){
            $this->$Property=$value;
        }
    }

    Public function Insert(){
        try {
            echo 0;
            $stm = $this->DbCnx->prepare("INSERT INTO Categorias(IdCategoria,Nombre,Descripcion,Imagen) VAlUES (?,?,?,?);");
            echo 1;
            $stm->execute([$this->IdCategoria,$this->Nombre,$this->Descripcion,$this->Imagen]);
            echo 2;
            }
        catch (PDOException $e) {
                return $e->getMessage();
            }
        }

    public function Fetch(){
        try {
            $stm = $this->DbCnx->Prepare("SELECT * FROM Categorias");
            $stm->execute();
            return $stm->fetchAll();
        } catch (PDOException $e) {
            return $e->getMessage();
        }
    }

    public function FetchOne(){
        try {
            $stm=$this->DbCnx->Prepare("SELECT * FROM Categorias WHERE IdCategoria=?");
            $stm->execute([$this->IdCategoria]);
            return $stm->FetchAll();
        } catch (PDOException $e) {
            return $e->getMessage();
        }
    }

    public function Update($OldId){
        try {
            $stm=$this->DbCnx->prepare("UPDATE Categorias SET IdCategoria = ?, Nombre = ?, Descripcion = ?, Imagen = ? WHERE IdCategoria= ?");
            $stm->execute([$this->IdCategoria,$this->Nombre,$this->Descripcion,$this->Imagen, $OldId]);
        } catch (PDOException $e) {
            return $e->getMessage();
        }
    }
    public function Delete(){
        try {
            $stm=$this->DbCnx->prepare("DELETE FROM Categorias WHERE IdCategoria = ?");
            $stm->execute([$this->IdCategoria]);
        } catch (PDOException $e) {
            return $e->getMessage();
        }
    }
}

/* $Categoria = new Categoria();
$Categoria->IdCategoria = 999; */
/* $Categoria->Nombre = "No Aseo Personal";
$Categoria->Descripcion = "No Los Productos de esta Categoria Lorem ...";
$Categoria->Imagen = 0; */
/* echo $Categoria->IdCategoria;
echo $Categoria->Nombre;
echo $Categoria->Descripcion;
echo $Categoria->Imagen; */
/* $Categoria->Insert(); */
/* var_dump($Categoria->Fetch()); */
/* var_dump($Categoria->FetchOne()); */
/* $Categoria->Update(123); */
/* $Categoria->Delete(); */
?>
