$(document).ready(function(){
    $(window).scroll(function(){
        let scroll = $(this).scrollTop();
        if(scroll == 0){
            $("header").css("box-shadow","none");
        }else{
            $("header").css("box-shadow","0 6px 8px rgba(0, 0, 0, 0.4)");
        }
    })

})