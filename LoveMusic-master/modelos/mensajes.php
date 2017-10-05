<?php

class Mensaje {

	private $id;
  private $asunto;
  private $mensaje;
	private $emisor;
	private $receptor;
	private $fecha;
  private $leido;

	public function __construct($id, $asunto, $mensaje, $emisor, $receptor, $fecha, $leido) {
		$this->id = $id;
		$this->asunto = $asunto;
		$this->mensaje = $mensaje;
		$this->emisor = $emisor;
		$this->receptor = $receptor;
    $this->fecha = $fecha;
		$this->leido = $leido;

	}

	public function getid() {
		return $this->id;
	}

  public function getasunto() {
		return $this->asunto;
	}

  public function getmensaje() {
		return $this->mensaje;
	}

	public function getemisor() {
		return $this->emisor;
	}

	public function getreceptor() {
		return $this->receptor;
	}

  public function getfecha() {
		return $this->fecha;
	}

	public function getleido() {
		return $this->leido;
	}


}

?>
