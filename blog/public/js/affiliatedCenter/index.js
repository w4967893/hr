//添加角色
function add()
{
    var center_id = $('.add_center_id').val();
    var add_name = $('.add_name').val();
    var add_username = $('.add_username').val();
    var add_phone = $('.add_phone').val();
    var add_position = $('.add_position').val();
    if (!add_name || !add_username || !add_phone || !add_position) {
        alert('信息填写不完整');
    }
    $.ajax({
        type: "POST",
        url: "/affiliatedCenter/add",
        data: 'name='+add_name+'&username='+add_username+'&phone='+add_phone+'&position='+add_position+'&center_id='+center_id,
        success: function(msg){
            // console.log(msg.code);
            if(msg.code == 0){
                // location.reload();
            }else{
                alert('操作失败');
            }
        }
    });
}

//删除
function del(id)
{
    $.ajax({
        type: "GET",
        url: "/center/del",
        data: 'center_id='+id,
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