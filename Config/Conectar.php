<?php
class Conectar{
    protected $DbCnx;
    public function __construct(){
        $this->DbCnx = new PDO("mysql:host=localhost;dbname=FacturArtemis2","root","",[PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_ASSOC]);
    }
}
?>

