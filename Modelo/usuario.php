<?php
include_once "conexion.php";

class Usuario
{
    //Atributos
    public $objetos;
    //Constructor
    public function __construct()
    {
        $db = new Conexion();
        $this->acceso = $db->pdo; //acceso es propiedo de PDO
    }
    //Metodos
    public function Logearse($dni, $pass)
    {
        $sql = "SELECT * FROM usuario inner join usuario_Tipo on usuario_usuario_Tipo_id = usuario_Tipo_id where usuario_dni =:dni  and usuario_constrasena =:pass  ";
        $query = $this->acceso->prepare($sql);
        $query->execute(array(':dni' => $dni, ':pass' => $pass));
        $this->objetos = $query->fetchall();
        return $this->objetos;
    }
}