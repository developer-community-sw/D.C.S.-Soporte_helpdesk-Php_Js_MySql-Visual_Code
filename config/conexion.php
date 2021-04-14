<?php
    session_start();

    class Conectar{
        protected $dbh;

        protected function Conexion(){
            try {
				$conectar = $this->dbh = new PDO("mysql:local=localhost;dbname=andercode_helpdesk","root","");
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
        
        //validar la ruta de los archivos
        public function ruta(){
			return "http://localhost/developer/PERSONAL_HelpDesk/";
		}

    }
?>