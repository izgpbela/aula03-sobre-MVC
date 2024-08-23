<?php

    require_once("banco.php");

class Livro extends banco{
    private $idlivros;
    private $nome;
    private $autor;
    private $quantidade;
    private $preco;
    private $flag;
    private $data;
}
