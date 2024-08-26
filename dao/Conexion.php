<?php

// Definir variables de base de datos en config.php
define('DB_HOST', '154.56.47.204');
define('DB_USER', 'u487588057_pos');
define('DB_PASS', 'Ch@rly1996');
define('DB_NAME', 'u487588057_pos');


class Conexion {

    private const SERVIDOR = DB_HOST;
    private const USUARIO = DB_USER;
    private const CONTRASENIA = DB_PASS;
    private const BD = DB_NAME;

    private $conexion;

    public function __construct() {
        $this->crearConexion();
    }

    private function crearConexion($servidor = self::SERVIDOR, $usuario = self::USUARIO, $contrasenia = self::CONTRASENIA, $bd = self::BD) {
        $this->cerrarConexion();
        $conexion = new mysqli($servidor, $usuario, $contrasenia, $bd);
        if ($conexion->connect_errno) {
            die("Connection failed: " . $conexion->connect_error);
            exit();
        } else {
            $conexion->set_charset("utf8");
        }
        $this->conexion = $conexion;
    }

    public function cerrarConexion() {
        if ($this->conexion !== null) {
            $this->conexion->close();
            $this->conexion = null;
        }
    }

    public function ejecutarInstruccion($instruccion) {
        return $this->conexion->query($instruccion);
    }

    public function prepararInstruccion($instruccion) {
        return $this->conexion->prepare($instruccion);
    }

    public function errorInfo() {
        return $this->conexion->error;
    }

    public function obtenerIdAutogenerado() {
        return $this->conexion->insert_id;
    }

}
