<?php
    class Request{
        
        static private $pregunta=array();
        static private $contador;
        static private $accion;
        static private $totalPregunta;
        static private $parametro=array();
        static private $parametros;
        static function retrieve(){	
            self::$pregunta =  explode('/',$_SERVER['REQUEST_URI']); 
            return self::$pregunta;    
        }
        static function getCount(){	//cuenta los elementos del Array
            $totalPregunta = count(self::$pregunta);
            if($totalPregunta == 3){
                echo "Controlador";
            }else{
               self::$contador = self::$pregunta[1];
               return self::$contador; 
            } 
        }

        static function getParams(){	//los parammetros que sean impares
            $totalPregunta = count(self::$pregunta);
            $j2=0;
            if($totalPregunta >= 5){
                if($totalPregunta % 3 == 0){
    	            for($j=3;$j < $totalPregunta;$j++){ 
    	            	self::$parametro[$j2]= self::$pregunta[$j];
           				$j2++;  
    	            }
                    return self::$parametro;
            	}else{
            		echo "Parametros incorrectos";
            	}
            }else{
                echo "Parameteros correctos";
            }
        }

          static function getAction(){  //Coge la action
            $totalPregunta = count(self::$pregunta);
            if($totalPregunta >= 5){
                self::$accion = self::$pregunta[3];
                return self::$accion; 
            }else{
                echo "Accion";
            }  
        }
    }
?>