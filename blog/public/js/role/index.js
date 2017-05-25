
function add()
{
    alert(1);
    $.ajax({
       type: "GET",
       url: "/"+url+".html",
       data: param,
       success: function(msg){

         // console.log(msg);
         if(msg == 'true'){
            location.reload();
         }else{
            alert('操作失败');
         }
       }
    });
}