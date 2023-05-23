<?php

abstract class Planilla{
    protected $nombre;
    protected $tipo_empleado;
    protected $horas;
    protected $isss;
    protected $afp;
    protected $sueldo_bruto;
    protected $sueldo_neto;

    public function __construct($nombre, $tipo, $hora)
    {
        $this->nombre = $nombre;
        $this->tipo_empleado = $tipo;
        $this->horas = $hora;
    }

    abstract function obtenerSueldoBruto();
    abstract function obtenerISS();
    abstract function obtenerAFP();
    abstract function obtenerSueldoNeto();
    abstract function imprimirInfo();
}
?>