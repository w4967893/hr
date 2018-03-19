//添加角色
// function add()
// {
//     var add_name = $('.add_name').val();
//     var add_username = $('.add_username').val();
//     var add_phone = $('.add_phone').val();
//     var add_position = $('.add_position').val();
//     if (!add_name || !add_username || !add_phone || !add_position) {
//         alert('信息填写不完整');
//     }
//     $.ajax({
//         type: "POST",
//         url: "/center/add",
//         data: 'name='+add_name+'&username='+add_username+'&phone='+add_phone+'&position='+add_position,
//         success: function(msg){
//             // console.log(msg.code);
//             if(msg.code == 0){
//                 location.reload();
//             }else{
//                 alert('操作失败');
//             }
//         }
//     });
// }

// 联动
$(".center_id").change(function(){
    $('.division_id').empty();
    var centerId = $(this).val();
    if (centerId == 0) {
        $('.division').append('<option value="0">请选择</option>>');
        return;
    }
    $.ajax({
        type: "GET",
        url: "/division/dList",
        data: 'centerId='+centerId,
        success: function(msg){
            // console.log(msg.code);
            if(msg.code == 0){
                // alert(msg.data[0].id);
                var num = msg.data.length;
                var appendStr = '';
                for (var i = 0;i < num;i++) {
                    appendStr += '<option value="'+msg.data[i].id+'">'+msg.data[i].name+'</option>>';
                }
                $('.division_id').append(appendStr);
            }else{
                alert('操作失败');
            }
        }
    });
});

function submit_apply()
{
    var center_id = $(".center_id").val();
    if (!center_id) {
        alert('请选择事业群');return;
    }
    var division_id = $(".division_id").val();
    if (!division_id) {
        alert('请选择事业部');return;
    }
    var job_id = $(".job_id").val();
    if (!job_id) {
        alert('请选择岗位');return;
    }
    var employees_name = $(".employees_name").val();
    if (!employees_name) {
        alert('请填写离职人员姓名');return;
    }
    var holiday = $(".holiday").val();
    if (!holiday) {
        alert('请填写本月是否请假');return;
    }
    var last_day = $(".last_day").val();
    if (!last_day) {
        alert('请填写最后工作日期');return;
    }
    var reason = $(".reason").val();
    if (!reason) {
        alert('请填写离职原因');return;
    }
    var comment = $(".comment").val();

    $.ajax({
        type: "POST",
        url: "/departure/add",
        data: 'center_id='+center_id+'&division_id='+division_id+'&job_id='+job_id+'&employees_name='+employees_name+'&holiday='+holiday+'&last_day='+last_day+'&reason='+reason+'&comment='+comment,
        success: function(msg){
            // console.log(msg.code);
            if(msg.code == 0){
                alert('提交成功');
                location.reload();
            }else{
                alert('操作失败');
            }
        }
    });
}