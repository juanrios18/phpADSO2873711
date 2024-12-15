<?php
namespace App\Models;

class PacienteModel extends BaseModel
{
    public function __construct(
        private ?int $documento = null,
        private ?string $nombre = null,
        private ?string $direccion = null,
        private ?string $telefono = null,
        private ?string $fechaNacimiento = null,
        private ?string $estado = null,
        private ?string $genero = null,
        private ?string $eps = null,
        private ?string $email = null,
        private ?string $fkUsuario = null,
    )
    {
        // Defino la tabla especifica
        $this->table = 'paciente';
        // Se llama al contructor del padre para crear la conexión
        parent::__construct();
    }

    // Resto de metodos propios del modelo
    public function getDocumento():int
    {
        return $this->documento;
    }
    public function setDocumento(int $doc):void
    {
        $this->documento = $doc;
    }
    public function save(){
        try {
            $sql = $this->dbConnection->prepare("INSERT INTO paciente (documento,nombre,direccion,telefono,email,fecha_nacimiento,estado,genero,eps,fk_cod_usuario VALUES (?,?,?,?,?,?,?,?,?,?)");
            $sql->bindParam(1, $this->documento);
            $sql->bindParam(2, $this->nombre);
            $sql->bindParam(3, $this->direccion);
            $sql->bindParam(4, $this->telefono);
            $sql->bindParam(5, $this->email);
            $sql->bindParam(6, $this->fechaNacimiento);
            $sql->bindParam(7, $this->estado);
            $sql->bindParam(8, $this->genero);
            $sql->bindParam(9, $this->eps);
            $sql->bindParam(10, $this->fkUsuario);

            $sql->execute();
        } catch (\PDOException $ex) {
            die('Error guardando paciente'.$ex->getMessage());
        }
    }
}
