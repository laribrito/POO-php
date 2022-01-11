<?php
require_once "interfaceControlador.php";
class ControleRemoto implements Controlador{
    //Atributos
    private $volume;
    private $ligado;
    private $tocando;

    //Métodos especiais
    function __construct(){
        $this->volume=50;
        $this->ligado=false;
        $this->tocando=false;
    }

    //Volume
    private function getVolume(){
        return $this->volume;
    }

    private function setVolume($inteiro){
        $this->volume=$inteiro;
    }

    //Ligado
    private function getLigado(){
        return $this->ligado;
    }

    private function setligado($bool){
        $this->ligado=$bool;
    }

    //Tocando
    private function getTocando(){
        return $this->tocando;
    }

    private function setTocando($bool){
        $this->tocando=$bool;
    }

    #Métodos da interface
    public function ligar(){
        $this->setligado(true);
    }
    public function desligar(){
        $this->setligado(false);
    }
    public function abrirMenu(){
        echo "<h1>Informações</h1>";
        echo "<p>Está ligado? ". ($this->getLigado()?"Sim":"Não")."</p>";
        echo "<p>Está tocando? ". ($this->getTocando()?"Sim":"Não")."</p>";
        echo "<p>Volume: ". $this->getVolume() ."</p>";
        for ($i=0; $i<=$this->getVolume(); $i++){
            echo "|";
        }
        echo "<br>";
    }
    public function fecharMenu(){
        echo "<h1>Menu fechado</h1>";
    }
    public function maisVolume(){
        if ($this->getLigado()){
            $this->setVolume($this->getVolume()+5);
        }
    }
    public function menosVolume(){
        if ($this->getLigado()){
            $this->setVolume($this->getVolume()-5);
        }
    }
    public function ligarMudo(){
        if ($this->getLigado() && $this->getVolume()>0){
            $this->setVolume(0);
        }
    }
    public function desligarMudo(){
        if ($this->getLigado() && $this->getVolume()==0){
            $this->setVolume(50);
        }
    }
    public function play(){
        if($this->getLigado() && !($this->getTocando())){
            $this->setTocando(true);
        }
    }
    public function pause(){
        if($this->getLigado() && $this->getTocando()){
            $this->setTocando(false);
        }
    }
}

?>