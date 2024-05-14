$(document).ready(function(){
    
    var load_path = "assets/html/";

    $("#page-header").load(load_path+"header.html",function(){
        console.log("Header Loaded");
    });

    $("#bottom-menu").load(load_path+"aside.html",function(){
        console.log("Bottom Aside Loaded");
    });

    $("#page-footer").load(load_path+"footer.html",function(){
        console.log("Footer Loaded");
    });

    $(window).scroll(function(){
        let scroll = $(this).scrollTop();
        if(scroll == 0){
            $("header").css("box-shadow","none");
        }else{
            $("header").css("box-shadow","0 6px 8px rgba(0, 0, 0, 0.4)");
        }
    })
})