<!-- Nome: Henrique Rosa Carvalho -->
<!-- Data: 11/10/2018 -->

<?php
	class Conexao {
		private $db_host = 'localhost';
		private $db_user = 'root';
		private $db_pass = '';
		private $db_name = 'crud_final';
		

		private $conn = FALSE;
		
		public function connect(){
		
			if(!$this->conn){
				$myconn = @mysqli_connect($this->db_host, $this->db_user, $this->db_pass, $this->db_name);
				if($myconn){
					$seldb = @mysqli_select_db($this->db_name);
					if($seldb){
						$this->conn = TRUE;
						return TRUE;
					}else{
						return FALSE;
					}
				}else{
					return FALSE;
				}
			}else{
				return TRUE;
			}
		}
		
		public function disconnect(){
			if($this->conn){
				if(mysqli_close()){
					$this->conn = FALSE;
					return TRUE;
				}else{
					return FALSE;
				}
			}
		}
	}
?>
