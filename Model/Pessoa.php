<?php
    
    class pessoa{
        private $codigo;
        private $nome;
        private $cpf;
        private $telefone;
        private $dataNascimento;
        private $email; 
        
        function getCodigo() {
            return $this->codigo;
        }

        function setCodigo($codigo) {
            $this->codigo = $codigo;
        }
        
        function getNome() {
            return $this->nome;
        }

        function getCpf() {
            return $this->cpf;
        }

        function getTelefone() {
            return $this->telefone;
        }

        function getDataNascimento() {
            return $this->dataNascimento;
        }

        function getEmail() {
            return $this->email;
        }

        function setNome($nome) {
            $this->nome = $nome;
        }

        function setCpf($cpf) {
            $this->cpf = $cpf;
        }

        function setTelefone($telefone) {
            $this->telefone = $telefone;
        }

        function setDataNascimento($dataNascimento) {
            $this->dataNascimento = $dataNascimento;
        }

        function setEmail($email) {
            $this->email = $email;
        }

    } 
?>



