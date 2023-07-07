<?php
/* TODO: LLAMANDO CLASES */
require_once("../config/conexion.php");
require_once("../models/Proveedor.php");
/* TODO: INICIALIZACION CLASE */
$proveedor=new Proveedor();

switch($_GET["op"]){
    /* TODO: GUARDAR Y EDITAR */
    case "listar":
        $datos=$proveedor->get_proveedor_x_emp_id($_POST["emp_id"]);
        $data=Array();
        foreach($datos as $row){
            $sub_array = array();
            $sub_array[] = $row["PROV_NOM"];
            $sub_array[] = $row["PROV_RUC"];
            $sub_array[] = $row["PROV_TELF"];
            $sub_array[] = $row["PROV_DIRECC"];
            $sub_array[] = $row["FECH_CREA"];
            $sub_array[] = '<button type="button" onClick="editar('.$row["PROV_ID"].')" id="'.$row["PROV_ID"].'" class="btn btn-warning btn-icon waves-effect waves-light"><i class="ri-edit-2-line"></i></button>';
            $sub_array[] = '<button type="button" onClick="eliminar('.$row["PROV_ID"].')" id="'.$row["PROV_ID"].'" class="btn btn-danger btn-icon waves-effect waves-light"><i class="ri-delete-bin-5-line"></i></button>';
            $data[] = $sub_array;
        }

        $results = array(
            "sEcho"=>1,
            "iTotalRecords"=>count($data),
            "iTotalDisplayRecords"=>count($data),
            "aaData"=>$data);
        echo json_encode($results);
        break;

        /* TODO: LISTADO DE REGISTROS */
        case "listar":
            $datos=$proveedor->get_proveedor_x_emp_id($_POST["emp_id"]);
            $data=Array();
            foreach($datos as $row){
                $sub_array = array();
                $sub_array[] = $row["PROV_NOM"];
                $sub_array[] = $row["PROV_RUC"];
                $sub_array[] = $row["PROV_TELF"];
                $sub_array[] = $row["PROV_DIRECC"];
                $sub_array[] = $row["FECH_CREA"];
                $sub_array[] = '<button type="button" onClick="editar('.$row["PROV_ID"].')" id="'.$row["PROV_ID"].'" class="btn btn-warning btn-icon waves-effect waves-light"><i class="ri-edit-2-line"></i></button>';
                $sub_array[] = '<button type="button" onClick="eliminar('.$row["PROV_ID"].')" id="'.$row["PROV_ID"].'" class="btn btn-danger btn-icon waves-effect waves-light"><i class="ri-delete-bin-5-line"></i></button>';
                $data[] = $sub_array;
            }

            $results = array(
                "sEcho"=>1,
                "iTotalRecords"=>count($data),
                "iTotalDisplayRecords"=>count($data),
                "aaData"=>$data);
            echo json_encode($results);
            break;

        /* TODO: MOSTRS INFORMACION DE REGISTRO */
    case "mostrar";
        $datos=$proveedor->get_proveedor_x_prov_id($_POST["prov_id"]);
        if(is_array($datos)==true and count($datos)>0){
            foreach($datos as $row){
                $output["PROV_ID"] = $row["PROV_ID"];
                $output["EMP_ID"] = $row["EMP_ID"];
                $output["PROV_NOM"] = $row["PROV_NOM"];
                $output["PROV_RUC"] = $row["PROV_RUC"];
                $output["PROV_TELF"] = $row["PROV_TELF"];
                $output["PROV_DIRECC"] = $row["PROV_DIRECC"];
                $output["PROV_CORREO"] = $row["PROV_CORREO"];
            }
            echo json_encode($output);
        }
        break;

        /* TODO: ELIMINAR */
    case "eliminar";
        $proveedor->delete_proveedor($_POST["prov_id"]);
        break;

}
?>