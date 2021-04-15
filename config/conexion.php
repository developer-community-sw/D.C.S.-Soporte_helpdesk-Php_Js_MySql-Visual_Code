<?php
    session_start();

    class Conectar{
        protected $dbh;

        protected function Conexion(){
            try {
				$conectar = $this->dbh = new PDO("mysql:local=us-cdbr-east-03.cleardb.com,dbname=heroku_d8f3c9feb53c652","b7ec4239a92046","5df2ec71");
				return $conectar;	
			} catch (Exception $e) {
				print "¡Error BD!: " . $e->getMessage() . "<br/>";
				die();	
			}
        }

        //corrige sintaxis de escritura idioma latino
        public function set_names(){	
			return $this->dbh->query("SET NAMES 'utf8'");
        }
        
        /*//validar la ruta de los archivos
        public function ruta(){
			return "https://helpdesk-developer.herokuapp.com/";
		}*/

    }
?>