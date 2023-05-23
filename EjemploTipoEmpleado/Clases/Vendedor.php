<?php
require "Planilla.php";

class Vendedor extends Planilla{
    
    public function obtenerSueldoBruto(){
        $this->sueldo_bruto= 5 * $this->horas;
    }

    public function obtenerISS(){
        return $this->isss=$this->sueldo_bruto*0.062;
    }

    public function obtenerAFP(){
        return $this->afp=$this->sueldo_bruto*0.13;
    }

    public function obtenerSueldoNeto(){
        return $this->sueldo_neto=$this->sueldo_bruto-($this->isss+$this->afp);
    }

    public function imprimirInfo(){
        return "<b>Empleado: </b>$this->nombre<br>
                <b>Tipo de empleado: </b> $". $this->tipo_empleado."<br>
                <b>Sueldo Bruto: </b> $". number_format($this->sueldo_bruto,2)."<br>
                <b>Descuento ISSS: </b> $". number_format($this->isss,2)."<br>
                <b>Descuento AFP: </b> $". number_format($this->afp,2)."<br>
                <b>Sueldo Neto: </b> $". number_format($this->sueldo_neto,2);
    }
}
?>