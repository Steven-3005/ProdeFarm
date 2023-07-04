$(document).ready(function(){

    $.post("controller/sucursal.php?op=combo",{emp_id:1},function(data){
        console.log(data);
        $("#suc_id").html(data);
    });
});