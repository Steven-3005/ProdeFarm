$(document).ready(function(){

    var com_id = getUrlParameter('c');

    $.post("controller/empresa.php?op=combo",{com_id:com_id},function(data){
        $("#emp_id").html(data);
    });

    $("#emp_id").change(function(){
        $("#emp_id").each(function(){
            emp_id = $(this).val();

            $.post("controller/sucursal.php?op=combo",{emp_id:emp_id},function(data){
                $("#suc_id").html(data);
            });
        });
    });
});