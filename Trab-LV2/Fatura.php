<!-- 1. Crie uma classe em PHP chamada Fatura para uma loja de suprimentos de informática. A classe deve conter quatro atributos – o número (String), a descrição (String), a quantidade comprada de um item (int) e o preço por item (double). A classe deve ter um método get (para acessar os valores dos atributos) e set(para inserir os valores nos atributos) para cada atributos. Além disso, forneça um método chamado getTotalFatura que calcula o valor da fatura e retorna o valor total. Se o valor não for positivo, ele deve ser configurado como 0. Se o preço por item não for positivo, ele deve ser configurado como 0.0. Na index demonstre as capacidades da classe Fatura. -->

<?php
    class Fatura{
        private $Numero;
        private $Descricao;
        private $Quantidade;
        private $Preco;
        private $Total;

        public function getNumero(){
        return $this->Numero;
        }
        public function setNumero($Numero){
            $this->Numero=$Numero;

        }

        public function getDescricao(){
            return $this->Descricao;
        }

        public function setDescricao($Descricao){
            $this->Descricao=$Descricao;
        }

        public function getQuantidade(){
            return $this->Quantidade;
        }

        public function setQuantidade($Quantidade){
            $this->Quantidade = $Quantidade;
        }

        public function getPreco(){
            return $this->Preco;
        }

        public function setPreco($Preco){
            $this->Preco = $Preco;
            if ($this->Preco < 0) {
                $this->Preco = 0.0;
            } else {
                return $this->Preco;
            }
        }
        
        public function setTotal(){
            $this->Total = $this->Preco * $this->Quantidade;
            if ($this->Total < 0) {
                $this->Total = 0;
            } else {
                return $this->Total;
            }  
        }
    }







?>