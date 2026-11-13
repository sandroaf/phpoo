<?php

namespace Veiculos;

class Veiculo {
    public $ano_fabricao;
    public $marca;
    public $modelo;
    public $tipo;
    //tipo: mc - motorizado a combustão; me - motorizado elétrico; nm - não motorizado
    public function __construct($ano, $marca, $modelo, $tipo = "mc") {
        if ($tipo == "mc" || $tipo == "me" || $tipo == "nm") {
            $this->ano_fabricao = $ano;
            $this->marca = $marca;
            $this->modelo = $modelo;
            $this->tipo = $tipo;
        } else {
            throw new \InvalidArgumentException("Tipo de veículo incorreto. Use: 'mc'; 'me' ou 'nm'"); 
        }
    }

    public function getTipo() {
        switch ($this->tipo) {
            case "me":
                return "motor elétrico";
            case "nm":
                return "não motorizado";
        default: 
                return "motor a combustão";
        }
    }  

}

class carro extends veiculo {
    public $ano_modelo;
    public $nro_portas; 

    public function __construct($ano, $marca, $modelo, $tipo_motor, $ano_modelo, $nro_portas) {
        $tipo = ($tipo_motor == "elétrico")?"me":"mc";        
        parent::__construct($ano, $marca, $modelo, $tipo);
        $this->ano_modelo = $ano_modelo;
        $this->nro_portas = $nro_portas; 
    }

    public function apresenta() {
        $tipo = ($this->tipo == "me"?"elétrico":"combustão");
        echo "Carro ".$tipo." da marca ".$this->marca." fabricada em ".$this->ano_fabricao." modelo ano ".$this->ano_modelo." de ".$this->nro_portas." portas";
    }

}

class bicicleta extends veiculo {
    public $nro_marchas;

    public function __construct($ano, $marca, $modelo, $tipo_tracao, $nro_marchas) {
        $tipo = ($tipo_tracao == "elétrica")?"me":"nm";        
        parent::__construct($ano, $marca, $modelo, $tipo);
        $this->nro_marchas = $nro_marchas;
    }
                
    public function apresenta() {
        $tipo = ($this->tipo == "me"?"elétrica":"mecanica");
        echo "Bicicleta ".$tipo." da marca ".$this->marca." fabricada em ".$this->ano_fabricao." com ".$this->nro_marchas." marchas";
    }

}

?>