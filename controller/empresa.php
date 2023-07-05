<?php
/* TODO: LLAMANDO CLASES */
require_once("../config/conexion.php");
require_once("../models/Empresa.php");
/* TODO: INICIALIZACION CLASE */
$empresa = new Empresa();

switch($_GET["op"]){
    /* TODO: GUARDAR Y EDITAR */
    case "guardaryeditar";
        if(empty($_POST["emp_id"])){
            $empresa->insert_empresa($_POST["com_id"],$_POST["emp_nom"],$_POST["emp_ruc"]);
        }else{
            $empresa->update_empresa($_POST["emp_id"],$_POST["com_id"],$_POST["emp_nom"],$_POST["emp_ruc"]);
        }
        break;

        /* TODO: LISTADO DE REGISTROS */
    case "listar";
        $datos=$empresa->get_empresa_x_com_id($_POST["com_id"]);
        $data=Array();
        foreach($datos as $row){
            $sub_array = array();
            $sub_array = $row["emp_nom"];
            $sub_array = "Editar";
            $sub_array = "Eliminar";
            $data[] = $sub_array;
        }
        $result = array(
            "sEcho"=>1,
            "iTotalRecords"=>count($data),
            "iTotalDisplayRecords"=>count($data),
            "aaData"=>$data);
        echo json_encode($results);
        break;

        /* TODO: MOSTRS INFORMACION DE REGISTRO */
    case "mostrar";
        $datos=$empresa->get_empresa_x_emp_id($_POST["emp_id"]);
        if(is_array($datos)==true and count($datos)>0){
            foreach($datos as $row){
                $output["emp_id"] = $row["emp_id"];
                $output["com_id"] = $row["com_id"];
                $output["emp_nom"] = $row["emp_nom"];
                $output["emp_ruc"] = $row["emp_ruc"];
            }
            echo json_encode($output);
        }
        break;

        /* TODO: ELIMINAR */
    case "eliminar";
        $empresa->delete_empresa($_POST["emp_id"]);
        break;

        /* TODO: Listar Combo */
    case "combo";
        $datos=$empresa->get_empresa_x_com_id($_POST["com_id"]);
        if(is_array($datos)==true and count($datos)>0){
            $html="";
            $html.="<option selected>Seleccionar</option>";
            foreach($datos as $row){
                $html.= "<option value='".$row["emp_id"]."'>".$row["emp_nom"]."</option>";
            }
            echo $html;
        }
        break;  
    }
    
?>