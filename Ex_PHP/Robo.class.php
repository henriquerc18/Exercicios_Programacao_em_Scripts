

		<?php
		abstract class Robo{
			abstract public function roboEnviarMensagem($mensagem);
		}
		
			class RoboVoador extends Robo{

				var $nomeV;

				function roboEnviarMensagem($mensagem){
					echo "O robô $this->nomeV está enviando a seguinte mensagem: $mensagem <br>";
				}			
				function roboVoa(){
					echo "Mensagem da classe derivada: Neste momento, o robô $this->nomeV, está voando <br>";		
					
				}
			}

			class RoboAndador extends Robo{
				var $nomeA;
				function roboEnviarMensagem($mensagem){
					echo "O robô $this->nomeA, está enviando a seguint mensagem: $mensagem <br>";
				}
			}

			$robo1 = new RoboVoador();
			$robo2 = new RoboAndador();
			$robo1->nomeV = "Tornado Vermelho";
			$robo2->nomeA = "MegaZord";
			$robo1->roboEnviarMensagem("Vou voar");
			$robo2->roboEnviarMensagem("Vou andar mais");
			$robo1->roboVoa();

		?>
		
