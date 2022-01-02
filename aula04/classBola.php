<?php
class Bola{
    private $tipo;
    private $peso;
    private $cor;
    private $guardada;

    public function Bola($tipo, $peso, $cor){
        $this->setTipo($tipo);
        $this->setPeso($peso);
        $this->setCor($cor);
        $this->guardar();
    }

    //Tipo
    public function setTipo($t){
        $this->tipo = $t;
    }

    public function getTipo(){
        return $this->tipo;
    }

    //Peso
    public function setPeso($p){
        $this->peso=$p;
    }

    public function getPeso(){
        return $this->peso;
    }

    //Cor
    public function setCor($c){
        $this->cor=$c;
    }

    public function getCor(){
        return $this->cor;
    }

    //Guardada
    public function guardar(){
        $this->guardada=true;
    }

    public function pegar(){
        $this->guardada=false;
    }

    public function getGuardada(){
        return $this->guardada;
    }

    #Brincadeiras
    public function brincar(){
        $guardada = $this->getGuardada();
        if ($guardada){
            echo "<p>Não pode brincar pois a bola está guardada.</p>";
        }else{
            echo "<p>Estão brincando com a bola</p>";
        }
    }
}