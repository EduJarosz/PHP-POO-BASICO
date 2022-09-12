<?php

require_once './vendor/autoload.php';

$produto = new App\Model\Produto();
// $produto->setId(4);
// $produto->setNome('cadeira');
// $produto->setDescricao('gamer');

$produtoDao = new App\Model\ProdutoDao();
$produtoDao->delete(7);

foreach ($produtoDao->read() as $produto):
    echo $produto['nome']."<br>". $produto['descricao']."<hr>";
    
endforeach;    