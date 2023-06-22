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
} catch (PDOException $e) {
    return $e->getMessage();
}
    }
}

$Categoria = new Categoria();
$Categoria->IdCategioria = 123;
$Categoria->Nombre = "Aseo Personal";
$Categoria->Descripcion = "Los Productos de esta Categoria Lorem ...";
$Categoria->Imagen = 1;

echo $Categoria->IdCategioria;
echo $Categoria->Nombre;
echo $Categoria->Descripcion;
echo $Categoria->Imagen;

$Categoria->Insert();
?>