<?php

class Planilla{

    # encapsulamiento y abstracción
    protected $nombre;
    protected $tarifa_hora;
    protected $horas;
    protected $isss;
    protected $afp;
    protected $sueldo_bruto;
    protected $sueldo_neto;

    #constructor
    public function __construct($nombre, $tarifa, $hora)
    {
        $this->nombre = $nombre;
        $this->tarifa_hora = $tarifa;
        $this->horas = $hora;
    }

    #creando metodos
    public function obtenerSueldoBruto(){
        return $this->sueldo_bruto=$this->tarifa_hora*$this->horas;
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
                <b>Sueldo Bruto: </b> $". number_format($this->sueldo_bruto,2)."<br>
                <b>Descuento ISSS: </b> $". number_format($this->isss,2)."<br>
                <b>Descuento AFP: </b> $". number_format($this->afp,2)."<br>
                <b>Sueldo Neto: </b> $". number_format($this->sueldo_neto,2);
    }
}

?>