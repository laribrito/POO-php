<?php
class ContaBanco{
    //Atributos
    public $numConta = 0;
    protected $tipo;
    private $dono;
    private $saldo;
    private $status;

    //Construtor
    public function ContaBanco(){
        $num = rand(1000, 9999);
        $this->setNumConta($num);
        $this->status = false;
    }

    //Métodos
    public function abrirConta($tipo, $dono){
        $num = $this->getNumConta();
        $this->setStatus(true);
        $this->setDono($dono);
        $this->setTipo(strtolower($tipo));
        if (strtolower($tipo) == "cc"){
            $this->setSaldo(50.0);
            echo "<p>Conta corrente criada</p>";
        } else {
            $this->setSaldo(150.0);
            echo "<p>Conta poupança criada</p>";
        }
    }

    public function fecharConta(){
        $saldo = $this->getSaldo();
        if ($saldo > 0){
            echo "<p>Retire o dinheiro para fechar a conta</p>";
        } else if ($saldo < 0){
            echo "<p>Pague seus débitos para fechar a conta</p>";
        } else {
            echo "<p>Conta fechada com sucesso</p>";
            $this->setStatus(false);
        }
    }

    public function depositar($valor){
        $status = $this->getStatus();
        if ($status){
            $saldo = $this->getSaldo();
            $saldo += $valor;
            $this->setSaldo($saldo);
            echo "<p>R$ $valor foi depositado</p>";
        }else{
            echo "<p>Abra a conta antes de realizar uma operação</p>";
        }
        
    }

    public function sacar($valor){
        $status = $this->getStatus();
        if ($status){
            $saldo = $this->getSaldo();
            if ($saldo>=$valor){
                $saldo -= $valor;
                $this->setSaldo($saldo);
                echo "<p>R$ $valor foi sacado</p>";
            }else{
                echo "<p>Não tem saldo para retirar o dinheiro</p>";
            }
        }else{
            echo "<p>Abra a conta antes de realizar uma operação</p>";
        }
    }

    public function pagarMensalidade(){
        $tipo = $this->getTipo();
        if ($tipo == "cc"){
            $saldo = $this->getSaldo();
            $saldo -= 12;
            $this->setSaldo($saldo);
            echo "<p>Mensalidade cobrada com sucesso</p>";
        }else if($tipo == "cp"){
            $saldo = $this->getSaldo();
            $saldo -= 20;
            $this->setSaldo($saldo);
            echo "<p>Mensalidade cobrada com sucesso</p>";
        }
    }

    //Getters e Setters
    //NumConta
    public function getNumConta(){
        return $this->numConta;
    }

    public function setNumConta($int){
        $this->numConta=$int;
    }

    //Tipo
    public function getTipo(){
        return $this->tipo;
    }

    public function setTipo($char){
        $this->tipo = $char;
    }

    //Dono
    public function getDono(){
        return $this->dono;
    }

    public function setDono($string){
        $this->dono = $string;
    }

    //Saldo
    public function getSaldo(){
        return $this->saldo;
    }

    public function setSaldo($float){
        $this->saldo = $float;
    }

    //Status
    public function getStatus(){
        return $this->status;
    }

    public function setStatus($bool){
        $this->status=$bool;
    }
}