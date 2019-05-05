<?php
/**
 * Created by PhpStorm.
 * User: Luis Mendes
 * Date: 20/04/2019
 * Time: 11:38
 */

class Pessoa
{

    private $codigo;
    private $nome;
    private $altura;
    private $idade;
    private $nascimento;
    private $escolaridade;
    private $salario;

    //CONSTRUTOR
    function __construct($codigo,$nome,$altura,$idade,$nascimento,$escolaridade,$salario){

        $this->codigo=$codigo;
        $this->nome=$nome;
        $this->altura=$altura;
        $this->idade=$idade;
        $this->nascimento=$nascimento;
        $this->escolaridade=$escolaridade;
        $this->salario=$salario;
    }

    //METODOS

    function  crescer($centimetros){
        $this->altura = $centimetros;
    }

    function  formar($titulo){
        $this->escolaridade = $titulo;
    }

    function envelhecer ($anos){
        $this->idade += $anos;
    }

    //GETS E SETS

    /**
     * @return mixed
     */
    public function getEscolaridade()
    {
        return $this->escolaridade;
    }

    /**
     * @param mixed $escolaridade
     */
    public function setEscolaridade($escolaridade)
    {
        $this->escolaridade = $escolaridade;
    }

    /**
     * @return mixed
     */
    public function getAltura()
    {
        return $this->altura;
    }

    /**
     * @param mixed $altura
     */
    public function setAltura($altura)
    {
        $this->altura = $altura;
    }

    /**
     * @return mixed
     */
    public function getCodigo()
    {
        return $this->codigo;
    }

    /**
     * @param mixed $codigo
     */
    public function setCodigo($codigo)
    {
        $this->codigo = $codigo;
    }

    /**
     * @return mixed
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * @param mixed $nome
     */
    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    /**
     * @return mixed
     */
    public function getIdade()
    {
        return $this->idade;
    }

    /**
     * @param mixed $idade
     */
    public function setIdade($idade)
    {
        $this->idade = $idade;
    }

    /**
     * @return mixed
     */
    public function getNascimento()
    {
        return $this->nascimento;
    }

    /**
     * @param mixed $nascimento
     */
    public function setNascimento($nascimento)
    {
        $this->nascimento = $nascimento;
    }

    /**
     * @return mixed
     */
    public function getSalario()
    {
        return $this->salario;
    }

    /**
     * @param mixed $salario
     */
    public function setSalario($salario)
    {
        $this->salario = $salario;
    }


}