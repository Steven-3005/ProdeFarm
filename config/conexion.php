<?php
    session_start();
    class Conectar{
        protected $dbh;

        protected function Conexion(){
            try{
                $conectar = $this->dbh=new PDO("sqlsrv:Server=DESKTOP-NGMU9OU\SQLEXPRESS;Database=CompraVenta","sa","steven3005");
                return $conectar;
            }catch (Exception $e){
                print "Error Conexion BD". $e->getMessage() ."<br/>";
                die();
            }
        }

        public static function ruta(){
            return "http://localhost:80/ProdeFarm/";
        }
    }
?>