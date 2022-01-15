var hidden=false;
$(function(){
    $('.btn-toggle-sidebar').on("click",function(){
        $('.sidebar').toggle();

        if(hidden) {
            $(".content").removeClass('col-12');
            $(".content").addClass('col-9');
            $('.btn-toggle-sidebar').css("transform", "rotate(0deg)");
        }else{
            $('.btn-toggle-sidebar').css("transform", "rotate(180deg)");
            $(".content").removeClass('col-9');
            $(".content").addClass('col-12');
        }
        hidden=!hidden;
        })
})