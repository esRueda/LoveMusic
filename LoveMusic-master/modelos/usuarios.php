<?php

class Usuario {

    private $correo;
    private $nombre;
    private $contrasena;
    private $fecha;
    private $foto;
    private $genero;
    private $usuario;

    public function __construct($correo, $nombre, $contrasena, $fecha, $foto, $genero, $usuario) {
        $this->correo = $correo;
        $this->nombre = $nombre;
        $this->contrasena = $contrasena;
        $this->fecha = $fecha;
        $this->foto = $foto;
        $this->genero = $genero;
        $this->usuario = $usuario;

    }

    public function getcorreo() {
        return $this->correo;
    }

    public function getnombre() {
        return $this->nombre;
    }

    public function getcontrasena() {
        return $this->contrasena;
    }

    public function getfecha() {
        return $this->fecha;
    }

    public function getfoto() {
        return $this->foto;
    }

    public function getgenero() {
        return $this->genero;
    }

    public function getusuario() {
        return $this->usuario;
    }
}

?>
