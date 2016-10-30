<?php
	
	class Vehiculo{
				
		private $preccioFinal;
		private static $ayuda = 0;
		
		//Constructor
		function Vehiculo($gama){
			
			switch($gama){
				case "urbano":
					$this->preccioFinal = 10000;
					break;
					
				case "compacto":
					$this->preccioFinal = 20000;
					break;
					
				case "barlina":
					$this->preccioFinal = 30000;
					break;	
			}	
			
		}
		
		//ayuda
		static function ayuda(){
			self::$ayuda = 4500;	
		}
		
		//climatizador
		function climatizados(){
			$this->preccioFinal += 2000;
		}
		
		//navegadorGps
		function navegadorGps(){
			$this->preccioFinal += 2500;	
		}
		
		//tapizeria
		function tapizeria($color){
			
			switch($color){
				
				case "blanco":
					$this->preccioFinal += 3000;
					break;
				
				case "beige":
					$this->preccioFinal += 3500;
					break;
					
				default:
					$this->preccioFinal += 4000;
			}	
			
		}
		
		//precio final
		function precioFinal_ (){
			
			$precio = $this->preccioFinal - self::$ayuda;
			return $precio;
			
		}
			
	}
    

?>