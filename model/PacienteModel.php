<?php
require './model/conexion.php';


class PacienteModel{
   private $pdo;

   public function __construct()
   {
    $conexion  = new Database();
    $pdo = $conexion->connect();
   }

   public function registrarPaciente($nombre_paciente, $apellido_paciente,$edad_paciente){
     $sql = "INSERT INTO paciente(nombre_paciente, apellido_paciente, edad_paciente) VALUES (?,?, ?)";
     $stmt = $this->pdo->prepare($sql);
     return $stmt->execute([
         trim(htmlspecialchars($nombre_paciente)), 
         trim(htmlspecialchars($apellido_paciente)), 
         intval($edad_paciente)
     ]);
   }



}




?>