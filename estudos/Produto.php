<?php
/**
 * Created by PhpStorm.
 * User: Luis Mendes
 * Date: 20/04/2019
 * Time: 10:30
 */

class Produto
{
    var $cod;
    var $descricao;


    function imprimeetiqueta()
    {
        echo 'Código '.$this->cod. "<br>";
        echo 'Descrição '.$this->descricao. "<br>";

    }

}