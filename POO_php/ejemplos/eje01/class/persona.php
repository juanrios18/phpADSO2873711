<?php
class Persona{
    public $nombre;
    public $email;
    public $edad;

    // Metodo que se ejecuta cuando se crea un objeto
    public function __construct($nom=null, $em=null, $ed=null)
    {
        echo "<br>Se crea un objeto persona";
        $this->nombre = $nom;
        $this->email = $em;
        $this->edad = $ed;
    }

    public function saludar(){
        echo <<<TEXT
        <br>Hola soy $this->nombre, tengo $this->edad años y mi email es $this->email.
        TEXT;
    }

    public function __destruct()
    {
        echo "<br>Se destruye el objeto persona<br>";
    }
}
?>