<?php
  class Pagar{
    private $diasTrabajados;
    private $valorDia;
    public $salario;
    public $salud;
    public $pension;
    public $arl;
    public $subTransporte;
    public $retencion;
    public $deducibles;
    public $totalPagar;


    public function __construct(Numero $diasTrabajados, Numero $valorDia){
        $this->diasTrabajados = $diasTrabajados;
        $this->valorDia = $valorDia;
    }

    public function calcularSalario(){
        $this->salario = $this->diasTrabajados->getValor() * $this->valorDia->getValor();
        return $this->salario;
    }

    public function calcularSalud(){
        $this->salud = $this->calcularSalario()*0.12;
        return $this->salud;
    }

    public function calcularPension(){
        $this->pension = $this->calcularSalario()*0.16;
        return $this->pension;
    }

    public function calcularArl(){
        $this->arl = $this->calcularSalario()*0.052;
        return $this->arl;
    }

    public function calcularSubTransporte() {
        if ($this->calcularSalario() < (1300000* 2)) {
            $this->subTransporte = 114000;
        } else {
            $this->subTransporte = 0;
        }
        return $this->subTransporte;
    }

    public function calcularRetencion() {
        if ($this->calcularSalario() > (1300000* 4)) {
            $this->retencion = $this->calcularSalario() * 0.04;
        } else {
            $this->retencion = 0;
        }
        return $this->retencion;
    }

    public function calcularDeducibles(){
        $this->deducibles = $this->calcularSalud() +  $this->calcularPension() +  $this->calcularArl() ;
        return $this->deducibles;
    }

    public function calcularPagar(){
        $this->totalPagar = ($this->calcularSalario() +  $this->calcularSubTransporte()) - $this-> calcularDeducibles()- $this-> calcularRetencion();
        return $this->totalPagar;
    }
}

?>