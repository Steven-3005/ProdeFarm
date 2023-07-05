<?php
    class Compania extends Conectar{
       /* TODO: Listar registros */
       public function get_compania(){
        $conectar=parent::Conexion();
        $sql="SP_L_COMPANIA_01";
        $query=$conectar->prepare($sql);
        $query->execute();
        return $query->fetchALL(PDO::FETCH_ASSOC);
       }
       /* TODO: Listar registros por ID en especifico */
       public function get_compania_x_com_id($com_id){
        $conectar=parent::Conexion();
        $sql="SP_L_COMPANIA_02 ?";
        $query=$conectar->prepare($sql);
        $query->bindValue(1,$com_id);
        $query->execute();
        return $query->fetchALL(PDO::FETCH_ASSOC);
       } 
       /* TODO: eliminar o cambiar estado a eliminado */
       public function delete_compania($com_id){
        $conectar=parent::Conexion();
        $sql="SP_D_COMPANIA_01 ?";
        $query=$conectar->prepare($sql);
        $query->bindValue(1,$com_id);
        $query->execute();
        
       }
       /* TODO: Registro de datos */
       public function insert_compania($suc_id,$com_nom){
        $conectar=parent::Conexion();
        $sql="SP_I_COMPANIA_01 ?";
        $query=$conectar->prepare($sql);
        $query->bindValue(1,$com_nom);
        $query->execute();
       }
       /* TODO: Actualizar Datos */
       public function update_compania($com_id,$com_nom){
        $conectar=parent::Conexion();
        $sql="SP_U_COMPANIA_01 ?,?";
        $query=$conectar->prepare($sql);
        $query->bindValue(1,$com_id);
        $query->bindValue(2,$com_nom);
        $query->execute();
       }      
    }
?>