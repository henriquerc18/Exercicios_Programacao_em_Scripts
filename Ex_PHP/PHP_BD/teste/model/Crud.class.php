<meta charset="UTF-8"/>
<?php
    class Crud{
        //Variaveis que vao receber as querys php
        private $sql_ins = ""; //para receber o INSERT
        private $sql_sel = ""; //para receber o SELECT
        private $sql_upd = ""; //para receber o UPDATE
        private $sql_del = ""; //para receber o DELETE
        private $tabela = "";//para receber o nome da tabela
        
        //CONSTRUTOR
        function __construct($tabela) {
            $this->tabela = $tabela;
            return $this->tabela;
        }

        /*===============
         * FUNÇÕES CRUD
         ===============*/
        
        /*Função Inserir - INSERT (CREATE do CRUD)*/
        public function inserir($campos,$valores){
            $this->sql_ins = "INSERT INTO ".$this->tabela.
                    " ($campos) VALUES ($valores)";
            if(!$ins = @mysql_query($this->sql_ins)){
                die("Erro na inclusão"."<br/>Linha: ".
                __LINE__."<br/>".
                @mysql_error().
                "<br/><a href='../index.php'>Voltar ao Menu</a>");
            }else{
                print "<script>location = '../index.php';</script>";
            }//fecha else
        }//fecha inserir()
        
        /*Função Atualizar - UPDATE (UPDATE do CRUD)*/
        public function atualizar($camposValores,$where=NULL){
            if($where){
                $this->sql_upd = "UPDATE ".$this->tabela." SET $camposValores WHERE $where";
            }else{
                $this->sql_upd = "UPDATE ".$this->tabela." SET $camposValores"; 
            }
            
            if(!$upd = @mysql_query($this->sql_upd)){
                die("Erro na atualização"."<br/>Linha: ".
                    __LINE__."<br/>".
                    @mysql_error().
                    "<br/><a href='../index.php'>Voltar ao Menu</a>");
            }else{
                print "Registro atualizado com sucesso!".
                      "<br/><a href='../index.php'>Voltar ao Menu</a>";
            }//fecha else
        }//fecha atualizar()
        
        /*Função Excluir - DELETE (DELETE do CRUD)*/
        public function excluir($where = NULL){
            if($where){
                $this->sql_sel = "SELECT * FROM ".
                $this->tabela. " WHERE $where";
                
                $this->sql_del = "DELETE FROM ".$this->tabela." WHERE $where";
            }else{
                $this->sql_sel = "SELECT * FROM ".
                $this->tabela;
                
                $this->sql_del = "DELETE FROM ".$this->tabela;
            }
            //criando um array temporario com os registros do banco*/
            $sel = @mysql_query($this->sql_sel);
            $regs = mysql_num_rows($sel);//contando a qtde de registros
            
            if($regs>0){
                if(!$del = mysql_query($this->sql_del)){
                    die ("Erro na exclusão."."<br/>Linha: ".
                        __LINE__."<br/>".mysql_error().
                        "<br/><a href='../index.php'>Voltar ao Menu</a>");
                }else{
                    print "Registro excluído com sucesso!<br/><a href='../index.php'>Voltar ao Menu</a>";
                }
            }else{//se a qtde de registros for menor ou igual a zero
                print "Registro não encontrado!<br/><a href='../index.php'>Voltar ao Menu</a>";
            }            
        }//fecha excluir()
    }//fecha classe Crud