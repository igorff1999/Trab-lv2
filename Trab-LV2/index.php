<?php
include 'Fatura.php';

    $fatura1 = new Fatura();
    $fatura1->setNumero("10");
    $fatura1->setDescricao("Mouse");
    $fatura1->setQuantidade(8);
    $fatura1->setPreco(100.00);
    
    echo "Número da fatura : <strong>" . $fatura1->getNumero() ."</strong>"; echo" <br>";
    echo "Descrição do produto : <strong>" . $fatura1->getDescricao() . "</strong>"; echo" <br>";
    echo "Quantidade de produtos : <strong>" . $fatura1->getQuantidade() ."</strong>"; echo" <br>";
    echo "Preço da fatura : <strong>" . $fatura1->getPreco() ."</strong>"; echo" <br>";
   
    






?>