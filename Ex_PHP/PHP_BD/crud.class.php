<!-- Nome: Henrique Rosa Carvalho -->
<!-- Data: 11/10/2018 -->

<?php
	class Crud {
		private $sql_ins = "";
		private $sql_sel = "";
		private $sql_upd = "";
		private $sql_del = "";
		private $tabela = "";
		
		public function __construct($tabela){
			$this->tabela = $tabela;
			return $this->tabela;
		}
		
		public function inserir($campos, $valores){
			$this->sql_ins = "INSERT INTO" .$this->tabela." ($campos) VALUES ($valores)";
			if(!$this->sql_ins = @mysqli_query($this->sql_ins)){
				die("Erro na inclusão".'<br> Linha: '.__LINE__."<br>".@mysqli_errno()."<br><a href='index.php'> Voltar ao Menu </a>");
			}else{
				print "<script> location = 'index.php';</script>";
			}
		}
		
		public function atualizar($camposValores, $where = NULL){
			if($where){
				$this->sql_upd = "UPDATE ".$this->tabela. " SET $camposValores WHERE $where";
			}else{
				$this->sql_upd = "UPDATE " .$this->tabela. " SET $camposValores";
			}
			
			if(!$this->sql_upd = @mysqli_query($this->sql_upd)){
				die("Erro na atualização"."<br> Linha: ".__LINE__."<br>".@mysqli_errno()."<br><a href='index.php'> Voltar ao Menu </a>");
			}else{
				print "Registro atualizado com sucesso! <br><a href = 'index.php'> Voltar ao Menu </a>";
			}
		}
		
		public function excluir($where = NULL){
			if($where){
				$this->sql_sel = "SELECT * FROM ".
				$this->tabela. "WHERE $where";
				$this->sql_del = "DELETE FROM ".$this->tabela.
					"WHERE $where";
			}else{
				$this->sql_sel = "SELECT * FROM " .$this->tabela;
				$this->sql_del = "DELETE FROM ".$this->tabela;
			}
			$sel = mysqli_query($this->sql_sel);
			$regs = mysqli_num_rows($sel);
			
			if($regs > 0){
				if(!$this->del = mysqli_query($this->sql_del)){
					die("Erro na exclusão ".'<br> Linha: '.__LINE__. "<br>".mysqli_errno(). "<br><a href = 'index.php'> Voltar ao Menu </a>");
				}else{
					print "Registro excluído com sucesso!<br><a href = 'index.php'> Voltar ao Menu </a>";
				}
			}else{
				print "Registro não encontrado! <br><a href='index.php'> Voltar ao Menu </a>";
			}			
		}
	}		
?>
