$(document).ready(function(){
    $.post("controller/empresa.php?op=combo",{com_id:1},function(data){
        console.log(data);
        $("#emp_id").html(data);
    });
});