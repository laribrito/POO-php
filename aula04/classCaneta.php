<?php
class Caneta{
	private $modelo;
	private $ponta;
	private $cor;
	private $tampada;

	// O método construtor pode ser nomeado por __construct
	// ou pelo próprio nome da classe
	public function Caneta($m, $p, $c){
		$this->setModelo($m);
		$this->setPonta($p);
		$this->setCor($c);
		$this->tampar();
	}
	//Tampada
	public function getTampada(){
		return $this->tampada;
	}

	public function tampar(){
		$this->tampada=true;
	}

	public function destampar(){
		$this->tampada=false;
	}

	//Cor
	public function getCor(){
		return $this->cor;
	}

	public function setCor($c){
		$this->cor=$c;
	}
	
	//Modelo
	public function getModelo(){
		return $this->modelo;
	}

	public function setModelo($m){
		$this->modelo=$m;
	}

	//Ponta
	public function getPonta(){
		return $this->ponta;
	}

	public function setPonta($p){
		$this->ponta=$p;
	}
}		
