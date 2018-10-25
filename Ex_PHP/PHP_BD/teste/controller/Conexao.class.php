<?php
    class Conexao{
        private $db_host = 'localhost'; //servidor
        private $db_user = 'root'; //usuario do server
        private $db_pass = ''; //senha do server
        private $db_name = 'exemplo_crud'; //nome do banco
        /*Flag para mostrar quando o sistema está conectado
            com o banco de dados*/
        private $conn = FALSE;
        
        /*Criar uma function para estabelecer uma conexao 
        com o banco de dados */
        
        public function connect(){
            if(!$this->conn){
                //conectar ao servidor
                $myconn = @mysql_connect($this->db_host,
                                        $this->db_user,
                                        $this->db_pass);
                if($myconn){//if($myconn == TRUE){
                    //conectar ao banco
                    $seldb = mysql_select_db($this->db_name);
                    if($seldb){
                        $this->conn = TRUE;
                        return TRUE;
                    }else{//se não conectar com o banco...
                        return FALSE;
                    }   
                }else{//se nao conectar com o server...
                    return FALSE;
                }
            }else{//case já esteja conectado...
                return TRUE;//a function retorna TRUE
            }
        }//fecha function connect()
        
        public function disconnect(){
            if($this->conn){//se conn for TRUE...
                if(mysql_close()){
                    $this->conn = FALSE;
                    return TRUE;
                }else{
                    return FALSE;
                }//fecha else
            }//fecha if
        }//fecha function disconnect()
    }//fecha Class Conexao
?>