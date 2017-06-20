//添加角色
function add()
{
    var add_name = $('.add_name').val();
    var add_desc = $('.add_desc').val();
    $.ajax({
        type: "POST",
        url: "/role/add",
        data: 'name='+add_name+'&desc='+add_desc,
        success: function(msg){
            // console.log(msg.code);
            if(msg.code == 0){
                location.reload();
            }else{
                alert('操作失败');
            }
        }
    });
}