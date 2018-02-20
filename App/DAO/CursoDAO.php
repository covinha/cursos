<?php
/**
 * Created by PhpStorm.
 * User: Reginaldo
 * Date: 19/02/2018
 * Time: 20:12
 */

namespace App\DAO;


class CursoDAO
{
private $conexao;

    /**
     * CursoDAO constructor.
     * @param $conexao
     */
    public function __construct()
    {
        $this->conexao = new \PDO( "mysql: dbname=db_cursos;
        host=localhost","root","#9258863709202202#");
$this->conexao->setAttribute(\PDO::ERRMODE_EXCEPTION);
    }

public function inserir($curso)

{

$sql = "insert into cursos (nome, valor) VALUES  (:nome, :valor)";
try{
    $insercao = $this->conexao->prepare($sql);
    $insercao->bindValue (':nome', $curso->getNome());
    $insercao->bindValue (':valor', $curso->getValor());
    $insercao->execute();
}catch (\PDOException $erro) {
    echo $erro->getMessage();
}}}
