var hidden=false;
$(function(){
    $('.btn-toggle-sidebar').on("click",function(){
        $('.sidebar').toggle();

        if(hidden) {
            $(".content").attr("class",$(".content").attr("class")+"col-2 col-md-3");
            $('.btn-toggle-sidebar').css("transform", "rotate(0deg)");
        }else{
            $('.btn-toggle-sidebar').css("transform", "rotate(180deg)");
        }
        hidden=!hidden;
        })
})