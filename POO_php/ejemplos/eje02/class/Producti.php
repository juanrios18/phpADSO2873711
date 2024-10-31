<?php
class Producto{
    private $id;
    private $nombre;
    private $precio;
    private $descripcion;

    public function __construct($id=null, $nom=null, $prec=null, $desc=null)
    {
        $this->id = $id;
        $this->nombre = $nom;
        $this->precio = $prec;
        $this->descripcion = $desc;
    }
    public function __destruct()
    {
        echo "<br>Se destruye el producto";
    }
    // SETTERs y GETTERs
    // ID
    public function setId($id){ // Settea un nuevo valor al atributo id
        $this->id = $id;
    }
    public function getId(){ //Retorna el valor actual de id
        return $this->id;
    }
    // Nombre
    public function setNombre($nom){ // Settea un nuevo valor al atributo nombre
        $this->nombre = $nom;
    }
    public function getNombre(){ //Retorna el valor actual de nombre
        return $this->nombre;
    } // Precio
    public function setPrecio($prec){ // Settea un nuevo valor al atributo nombre
        $this->precio = $prec;
    }
    public function getPrecio(){ //Retorna el valor actual de nombre
        return $this->precio;
    }
    // Descripcion
    public function setDescripcion($desc){ // Settea un nuevo valor al atributo nombre
        $this->descripcion = $desc;
    }
    public function getDescripcion(){ //Retorna el valor actual de nombre
        return $this->descripcion;
    }
}