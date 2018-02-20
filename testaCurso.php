<?php
/**
 * Created by PhpStorm.
 * User: Reginaldo
 * Date: 19/02/2018
 * Time: 19:54
 */
include 'vendor/autoload.php';

$c = new App\Model\Curso();
$c-> setNome("Programação com PHP");
$c->setValor(300.50);

$cDAO =new App\DAO\CursoDAO();
$cDAO->inserir($c);

echo $c->getNome() . " - " . $c->getValor();
