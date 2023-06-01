<?php

//código que recebe nome e email, e fala com outra pessoa.

$nome = $_POST["nome"];
$email= $_POST["email"]; 
$telefone= $_POST["telefone"];

class Pessoa{
    public $nome;
    public $email;
    public $telefone;

    public function Saldar(){
        date_default_timezone_set('America/Sao_Paulo');
        $hora = date('H');
        if( $hora >= 6 && $hora <= 12 )
            echo 'Bom dia '.$nome;
        else if ( $hora > 12 && $hora <=18  )
            echo 'Boa tarde '.$nome;
        else
            echo 'Boa noite ' . $nome;
    }
    public function Mostrar(){
        echo $this->nome."<br>";
        echo $this->email."<br>";
        echo $this->telefone."<br>";
    }
    public function Falar($pess, $msg, $rsp){
        echo $this->nome, " falando com $pess->nome <br> ";
        $pess->Responder($this,$rsp);
    } 
    public function Responder($p, $msg){
        echo $this->nome, " respondendo $p->nome ";
    }
}

$pessoa2 = new Pessoa();
$pessoa2->nome= "Larissa";
$pessoa2->email= "pessoa@gmail.com";
$pessoa2->telefone= "987777545";

$pessoa = new Pessoa();
$pessoa->nome=$nome;
$pessoa->email=$email;
$pessoa->telefone=$telefone;
$pessoa->Saldar();
$pessoa->Mostrar();
$pessoa->Falar($pessoa2, "teste falar", "resposta falar");


?>
