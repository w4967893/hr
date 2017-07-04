//添加角色
function add()
{
    var name = $('.name').val();
    var email = $('.email').val();
    var phone = $('.phone').val();
    $.ajax({
        type: "POST",
        url: "/user/add",
        data: 'name='+name+'&email='+email+'&phone='+phone,
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

//删除用户
function del(obj)
{
    var user_id = $(obj).parents("tr").children().eq(0).text();

    $.ajax({
        type: "GET",
        url: "/user/del",
        data: 'user_id='+user_id,
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

//密码重置
function reset(obj)
{
    var user_id = $(obj).parents("tr").children().eq(0).text();

    $.ajax({
        type: "GET",
        url: "/user/reset",
        data: 'user_id='+user_id,
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