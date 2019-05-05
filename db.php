<?php
/**
 * Created by PhpStorm.
 * User: Luis Mendes
 * Date: 01/04/2019
 * Time: 23:50
 */

$servidor= "localhost";
$usuario ="root";
$senha = "";
$base_dados ="cursophp";

$conexao = mysqli_connect($servidor,$usuario,$senha,$base_dados);


---------------

    public function conecta(){
    $this->conexao = mysqli_connect($this->servidor,$this->usuario,$this->senha,TRUE)
    or die($this->trataerro(__FILE__,__FUNCTION__,mysqli_errno(),mysqli_error(),TRUE));
    mysqli_select_db($this->nomebanco) or die($this->trataerro(__FILE__,__FUNCTION__,mysqli_errno(),mysqli_error(),TRUE));
    mysqli_query("SET NAMES 'utf8' ");
    mysqli_query("SET character_set_connection=utf8");
    mysqli_query("SET character_set_client=utf8 ");
    mysqli_query("SET character_set_results=utf8");
    echo"Metodo conecta foi chamado ";
}//conecta
