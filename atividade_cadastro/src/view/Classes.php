<?php
    class Aluno {
        private $nome;
        private $matricula;
        private $curso;

        //metodo construtor
        public function __construct($nome, $matricula, $curso) {
            $this->nome = $nome;
            $this->matricula = $matricula;
            $this->curso = $curso;
        }


        //encapsulamentos
        public function getNome() {
            return $this->nome;
        }

        public function getMatricula() {
            return $this->matricula;
        }

        public function getCurso() {
            return $this->curso;
        }
    }

    class CadastroAlunos {
        //cria uma lista dos alunos.
        private $alunos = [];

        public function cadastrarAluno(Aluno $aluno) {
            $this->alunos[] = $aluno;
        }

        public function listarAlunos() {
            return $this->alunos;
        }

        public function lerArquivo($arquivo) {
            $arquivo = fopen($arquivo, 'r');
            while (!feof($arquivo)) {
                $registro = fgets($arquivo);
                $dados = explode('#', $registro);
                if (count($dados) >= 3) {
                    $aluno = new Aluno($dados[0], $dados[1], $dados[2]);
                    $this->cadastrarAluno($aluno);
                }
            }
            fclose($arquivo);
        }
    }
?>