<?php

class PayRoll{
    protected $nombre;
    protected $tipo_empleado;
    protected $isss; 
    protected $afp;     
    protected $sueldo_bruto;
    protected $sueldo_neto;
    protected $hora; 

    public function __construct($nombre, $tipo, $hora)
    {
        $this->nombre = $nombre;
        $this->tipo_empleado = $tipo; //administrador, vendedor, cajero, conserge
        $this->hora = $hora;
    }

    /**administrador = $15
        vendedor = $5
        cajera = $7.50
        conserge = $4.50 */
    public function obtenerSueldoBruto(){
        switch($this->tipo_empleado){
            case "administrador":
                $this->sueldo_bruto = 15 * $this->hora;
                break;
            
            case "vendedor":
                $this->sueldo_bruto = 5 * $this->hora;
                break;
            
            case "cajero":
                $this->sueldo_bruto = 7.50 * $this->hora;
                break;
            
            case "conserge":
                $this->sueldo_bruto = 4.50 * $this->hora;
                break;
            default:
                return "Elige un tipo de empleado";
        }
    }

    #metodo para sacer el ISSS
    public function obtenerISSS(){
        return $this->isss = $this->sueldo_bruto * 0.062;
    }

    #metodo para sacer el AFP
    public function obtenerAFP(){
        return $this->afp = $this->sueldo_bruto * 0.13;
    }

    //600, isss = 37.20, afp = 78 = 
    #metodo para obtener el sueldo neto del empleado
    public function obtenerSalarioNeto(){
        return $this->sueldo_neto = $this->sueldo_bruto - ($this->isss + $this->afp);
    }

    public function imprimirInfo(){
        return "<b>Empleado: </b>$this->nombre<br><b>Empleado: </b>$this->tipo_empleado<br>
                <b>Sueldo Bruto: </b> $". number_format($this->sueldo_bruto,2)."<br>
                <b>Descuento ISSS: </b> $". number_format($this->isss,2)."<br>
                <b>Descuento AFP: </b> $". number_format($this->afp,2)."<br>
                <b>Sueldo Neto: </b> $". number_format($this->sueldo_neto,2);
    }
}

?>