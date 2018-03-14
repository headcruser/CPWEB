<?php
namespace App\CPWEB\Entity;

class Usuario
{
    public $id_usuario;
    public $email;
    public $contrasena;
    public $clave;
    public $fecha_clave;
    public $nombres;
    public $apellidos;
    public $nacimiento;
    public $foto;

    public function getThumb()
    {
        ['filename'=>$filename,'extension'=>$extension]=pathinfo($this->foto);
        // return '/uploads/user/'.$this->foto;
        return '/uploads/user/'.$filename.'_thumb.'.$extension;
    }
}
