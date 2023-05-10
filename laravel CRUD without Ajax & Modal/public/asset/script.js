$(document).ready(function () {
$(".edit_btn").click(function(){
    $id = $(this).attr('data-id');
    // alert($id)
    $.ajax({
    //  new(): XMLHttpRequest();
       URL: "/table",
       type: "GET",
       data: {idd:$id},
       success:function(){
           alert(idd + "ok")
       }
    });
    // var req = new XMLHttpRequest();
    // req.open("GET","/table", true);
    // req.send({id:$id});
    // req.onreadystatechange = function(){
    //     if(req.readyState == 4 & req.status == 200){
    //         console.log($id);
    //     }
    // }
    $('#Modal').modal('show');
  });
});