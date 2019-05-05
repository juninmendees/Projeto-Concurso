<?php
/**
 * Created by PhpStorm.
 * User: Luis Mendes
 * Date: 20/04/2019
 * Time: 10:38
 */

include_once 'Produto.php';
include_once 'Pessoa.php';
include_once 'Cachorro.php';

$pessoa = new Pessoa(1,"Junior Mendes",1.77,28,"16/03/1991","Ensino SUperior",2100);
$cachorro = new Cachorro("pitbull","totó",$pessoa );



echo "Nome: {$cachorro->getNome()}<br>";
echo "Raça: {$cachorro->getRaca()}<br>";
echo "Proprietario: {$cachorro->getPessoa()}";







