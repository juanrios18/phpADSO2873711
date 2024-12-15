<?php
namespace App\Controllers;
use App\Controllers\BaseController;
use App\Models\PacienteModel;

class PacienteController extends BaseController
{
    public function indexTest(){
        // Nuestro controlador va a llamar al modelo Paciente
        $pacienteModel = new PacienteModel();
        // Obtener todos los pacientes desde el modelo
        $pacientes = $pacienteModel->getAll();
        //echo "<pre>";
        //print_r($pacientes);
        //echo "</pre>";
        $data = [
            'patients' => $pacientes
        ];
        require_once MAIN_APP_ROUTE. 'views/paciente/indexView.php';
    }

    public function create(){
        $this->render('paciente/createView');
    }

    public function new(){
        if (isset($_POST['txtDocumento'])) {
            $documento = $_POST['txtDocumento'] ?? '';
            $nombre = $_POST['txtNombre'] ?? '';
            $direccion = $_POST['txtDireccion'] ?? '';
            $telefono = $_POST['txtTelefono'] ?? '';
            $email = $_POST['txtEmail'] ?? '';
            $fechaNac = $_POST['txtFechaNac'] ?? '';
            $estado = $_POST['txtEstado'] ?? '';
            $genero = $_POST['txtGenero'] ?? '';
            $eps = $_POST['txtEps'] ?? '';
            $fkUsuario = $_POST['txtUsuario'] ?? '';

            $pacienteBD = new PacienteModel($documento,$nombre,$direccion,$telefono,$email,$fechaNac,$estado,$genero,$eps,$fkUsuario);

            $pacienteBD->save();
        }
        header("Location:/paciente/intexView");
    } 
}
