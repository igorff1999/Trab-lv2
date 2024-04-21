<!-- 2. Crie uma classe em PHP chamada Empregado com os atributos – nome (String), sobrenome 
(String) e um salário mensal (double). A classe deve apresentar métodos get e set para cada
 atributos e um método receba a porcentagem do aumento e calcule o novo salário. 
 No index.php crie dois objetos Empregado e exiba o salário anual de cada objeto.
  Então dê a cada Empregado um aumento de 10% e exiba novamente o salário anual de cada Empregado. -->

  <?php
  class Empregado {
    private $nome;
    private $sobrenome;
    private $salarioMensal;

    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getSobrenome() {
        return $this->sobrenome;
    }

    public function setSobrenome($sobrenome) {
        $this->sobrenome = $sobrenome;
    }

    public function getSalarioMensal() {
        return $this->salarioMensal;
    }

    public function setSalarioMensal($salarioMensal) {
        $this->salarioMensal = $salarioMensal;
    }

    public function calcularSalarioAnual() {
        return $this->salarioMensal * 12;
    }

    public function aplicarAumento($porcentagem) {
        $aumento = $this->salarioMensal * ($porcentagem / 100);
        $this->salarioMensal += $aumento;
    }
}

?>
