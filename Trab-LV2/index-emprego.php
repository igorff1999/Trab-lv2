<?php
  include 'Emprego.php';

  $empr1 = new Empregado();
  $empr1->setNome("João");
  $empr1->setSobrenome("Silva");
  $empr1->setSalarioMensal(3000);

  $empr2 = new Empregado();
  $empr2->setNome("Maria");
  $empr2->setSobrenome("Santos");
  $empr2->setSalarioMensal(4000);

  echo "Salário anual do empregado 1 é de : " . $empr1->calcularSalarioAnual() . " reais<br>";
  echo "Salário anual do empregado 2 é de : " . $empr2->calcularSalarioAnual() . " reais<br>";

  $empr1->aplicarAumento(10);
  $empr2->aplicarAumento(10);

  echo "Novo salário anual do empregado 1: " . $empr1->calcularSalarioAnual() . " reais<br>";
  echo "Novo salário anual do empregado 2: " . $empr2->calcularSalarioAnual() . " reais<br>";

?>