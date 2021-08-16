<?php

    require_once("../init.php");
    
    class Banco{

        protected $mysqli;

        public function __construct(){
            $this->conexao();
        }

        private function conexao(){
            $this->mysqli = new mysqli(BD_SERVIDOR, BD_USUARIO , BD_SENHA, BD_BANCO);
        }

        public function setAgendamentos($nome,$telefone,$origem,$data_contato,$observacao){
            $stmt = $this->mysqli->prepare("INSERT INTO agendamentos (`nome`, `telefone`, `origem`, `data_contato`, `observacao`) VALUES (?,?,?,?,?)");
            $stmt->bind_param("sssss",$nome,$telefone,$origem,$data_contato,$observacao);
             if( $stmt->execute() == TRUE){
                return true ;
            }else{
                return false;
            }

        }
    }

?>
