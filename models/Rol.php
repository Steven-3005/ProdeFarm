<?php
    class Rol extends Conectar{
       /* TODO: Listar registros */
       public function get_rol_x_suc_id($suc_id){
        $conectar=parent::Conexion();
        $sql="SP_L_ROL_01 ?";
        $query=$conectar->prepare($sql);
        $query->bindValue(1,$suc_id);
        $query->execute();
        return $query->fetchALL(PDO::FETCH_ASSOC);
       }
       /* TODO: Listar registros por ID en especifico */
       public function get_rol_x_rol_id($rol_id){
        $conectar=parent::Conexion();
        $sql="SP_L_ROL_02 ?";
        $query=$conectar->prepare($sql);
        $query->bindValue(1,$rol_id);
        $query->execute();
        return $query->fetchALL(PDO::FETCH_ASSOC);
       } 
       /* TODO: eliminar o cambiar estado a eliminado */
       public function delete_rol($rol_id){
        $conectar=parent::Conexion();
        $sql="SP_D_ROL_01 ?";
        $query=$conectar->prepare($sql);
        $query->bindValue(1,$rol_id);
        $query->execute();
        
       }
       /* TODO: Registro de datos */
       public function insert_rol($suc_id,$rol_nom){
        $conectar=parent::Conexion();
        $sql="SP_I_ROL_01 ?,?";
        $query=$conectar->prepare($sql);
        $query->bindValue(1,$suc_id);
        $query->bindValue(2,$rol_nom);
        $query->execute();
    }
       /* TODO: Actualizar Datos */
       public function update_rol($rol_id,$suc_id,$rol_nom){
        $conectar=parent::Conexion();
        $sql="SP_U_ROL_01 ?,?,?";
        $query=$conectar->prepare($sql);
        $query->bindValue(1,$rol_id);
        $query->bindValue(2,$suc_id);
        $query->bindValue(3,$rol_nom);
        $query->execute();
    }      

       public function validar_acceso_rol($usu_id,$mend_identi){
        $conectar=parent::Conexion();
        $sql="SP_L_MENU_03 ?,?";
        $query=$conectar->prepare($sql);
        $query->bindValue(1,$usu_id);
        $query->bindValue(2,$mend_identi);
        $query->execute();
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }
    
    }
?>