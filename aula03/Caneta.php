<?php

class Caneta {
    // var é, por padrão, público, mas vamos definir explicitamente
    // public - qualquer código pode acessar
    public $modelo;
    public $cor;
    // private - somente a classe pode acessar
    private $ponta;
    // protected - a classe e suas heranças podem acessar
    protected $carga;
    protected $tampada;
    
    public function rabiscar(){
        if ($this->tampada) {
            echo "<p>Não posso rabiscar</p>";
        } else {
        echo "<p>Estou rabiscando</p>";
        }
    }
    
    public function tampar(){
        $this->tampada = true;
        echo "<p>Caneta foi tampada</p>";
    }
    public function  destampar(){
        $this->tampada =false;
        echo "<p>Caneta foi destampada</p>";
    }
}

?>