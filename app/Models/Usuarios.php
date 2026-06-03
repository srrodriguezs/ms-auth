<?php
namespace app\Models;

use app\Config\Conexion;

class Estudiante extends Model
{
    protected $id = 0;
    protected $nombre = null;
    protected $correo = null;
    protected $usuario = null;
    protected $contrasena = null;
    protected $rol = null;
    protected $token = null;
    protected $sesion_activa = false;
    protected $estado = 'activo';
    protected $created_at = null;
    protected $updated_at = null;

    public function __construct($data = [])
    {
        parent::__construct();
        foreach ($data as $key => $value) {
            $this->set($key, $value);
        }
    }
}