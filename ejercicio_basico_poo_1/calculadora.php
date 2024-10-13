<?php
    Class Calculadora {
        private int $num1;
        private int $num2;
    
        // Constructor
        public function __construct($n1, $n2) {
            $this->num1 = $n1;
            $this->num2 = $n2;
        }
    
        // Sumar
        public function sumar() {
            return $this->num1 + $this->num2;
            // echo '<p>'.($this->num1+$this->num2).'</p>';
        }
    
        // Restar
        public function restar() {
            if ($this->num1 > $this->num2)
                return $this->num1 - $this->num2;
            else
                return $this->num2 - $this->num1;
        }
    
        // Multiplicar
        public function multiplicar() {
            return $this->num1 * $this->num2;
        }
    
        // Dividir
        public function dividir() {
            if ($this->num1 > $this->num2)
                return $this->num1 / $this->num2; 
            else
                return $this->num2 / $this->num1; 
        }
    
        // Resultado
        public function visualizarResultado($operacion) {
            switch ($operacion) {
                case "+":
                    return $this->sumar(); // También puedo poner echo
                case "-":
                    return $this->restar();
                case "*":
                    return $this->multiplicar();
                case "/":
                    return $this->dividir();
            }
        }
    }    
?>
