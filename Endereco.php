<?php 
class Endereco { 

    public $cep;
    public $estado;
    public $cidade;
    public $bairro;
    public $logradouro;
    public $numero;
    
    

    public function mostraDados(){
        echo $this->cep.'<br>';
        echo $this->estado.'<br>';
        echo $this->cidade.'<br>';
        echo $this->bairro.'<br>';
        echo $this->logradouro.'<br>';
        echo $this->numero.'<br>';

    }


}