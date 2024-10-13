<?php
    Class Fecha {
        private array $fechas;
        private int $dia;
        private int $mes;
        private int $anio;
        
        public function __construct() {
            $this->fechas = array(
                1 => array(
                    "mes" => "Enero",
                    "dias" => 31
                ),
        
                2 => array(
                    "mes" => "Febrero",
                    "dias" => 28
                ),
        
                3 => array(
                    "mes" => "Marzo",
                    "dias" => 31
                ),
        
                4 => array(
                    "mes" => "Abril",
                    "dias" => 30
                ),
        
                5 => array(
                    "mes" => "Mayo",
                    "dias" => 31
                ),
        
                6 => array(
                    "mes" => "Junio",
                    "dias" => 30
                ),
        
                7 => array(
                    "mes" => "Julio",
                    "dias" => 31
                ),
        
                8 => array(
                    "mes" => "Agosto",
                    "dias" => 31
                ),
        
                9 => array(
                    "mes" => "Septiembre",
                    "dias" => 30
                ),
        
                10 => array(
                    "mes" => "Octubre",
                    "dias" => 31
                ),
        
                11 => array(
                    "mes" => "Noviembre",
                    "dias" => 30
                ),
        
                12 => array(
                    "mes" => "Diciembre",
                    "dias" => 31
                )
            );
        }
        /*
        * Separa la fecha de string en año y mes y los guarda en los atributos de la clase
        * @param string $fechaString
        */
        function convertirFecha(string $fechaString) {
            $fechaUsuario = explode("-", $fechaString);
            $this->anio = (int) $fechaUsuario[0];
            $this->mes = (int) $fechaUsuario[1];
            $this->dia = (int) $fechaUsuario[2];
        }

        function esBisiesto() {
            if($this->anio % 4 == 0 && $this->anio % 100 != 0 || ($this->anio % 400 == 0)) {
                $this->cambiarFebrero();
                return true;
            } else {
                return false;
            }
        }

        function cambiarFebrero() {
            $this->fechas[2]['dias'] = 29;
        }

        function visualizarFecha() {
            echo "El día ".$this->dia." de ".$this->fechas[$this->mes]['mes']." de ".$this->anio;
        }

        function visualizarDiasMes() {
            return "El mes tiene ".$this->fechas[$this->mes]['dias']." días";
        }
    }
?>