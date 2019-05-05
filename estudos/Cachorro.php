<?php
/**
 * Created by PhpStorm.
 * User: Luis Mendes
 * Date: 28/04/2019
 * Time: 08:58
 */
include_once 'Pessoa.php';
class Cachorro
{

    private $raca;
    private $nome;
    private $Pessoa;

    function __construct($raca,$nome,$Pessoa){
        $this->raca=$raca;
        $this->nome=$nome;
        $this->Pessoa = $Pessoa;

    }

    /**
     * @return mixed
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * @return mixed
     */
    public function getRaca()
    {
        return $this->raca;
    }

    /**
     * @return mixed
     */
    public function getPessoa()
    {
        return $this->Pessoa;
    }

}