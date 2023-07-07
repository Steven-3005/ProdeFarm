<?php
    session_start();
    class Conectar{
        protected $dbh;

        protected function Conexion(){
            try{
                $conectar = $this->dbh=new PDO("sqlsrv:Server=JRGM\SQLEXPRESS;Database=CompraVenta","sa","123456");
                return $conectar;
            }catch (Exception $e){
                print "Error Conexion BD". $e->getMessage() ."<br/>";
                die();
            }
        }

        public static function ruta(){
            return "http://localhost:80/Proyecto__Tesis/ProdeFarm/";
        }
    }
?>