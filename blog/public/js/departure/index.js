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
$(".center").change(function(){
    $('.division').empty();
    var centerId = $(this).val();
    if (centerId == 0) {
        $('.division').append('<option>请选择</option>>');
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
                $('.division').append(appendStr);
            }else{
                alert('操作失败');
            }
        }
    });
});