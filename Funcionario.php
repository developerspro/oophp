<?php 
include_once 'Endereco.php';
class Funcionario{

    public $nome;
    public $cpf;
    public $endereco;
    public $telefone;
    public $funcao;
    public $salario;
    public $salarioBruto;
    public $email;
    public $turno;
    public $complemento;

    public function __construct()
    {
      $this->endereco = new Endereco();
    }
  

    public function mostraDados($salario){
      
    }

    public function calculaDesconto($desconto){
    $this->salario = $this->salarioBruto - $desconto;
    }


    public function mostraSalario(){
    echo "novo Salario:";
    $this->mostra($this->salario);
    echo "Salario Anterior:";
    $this->mostra($this->salarioBruto);
    }

    public function mostra($valor){
        echo "<hr><br>".$valor."<br><hr>";
    }

    public function mostraFuncao(){
        $this->mostra($this->funcao);
    }
}