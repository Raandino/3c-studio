$(document).ready(function(){
    
    var MainNav1 = $("#nav1");
    var MainNav2 = $("#nav2");
    console.log("sirve");
    sticky="sticky";
    header =$("#nav1").height();
    inView="inView"
    h2=header*3;
    $(window).scroll(function(){
        if (($(this).scrollTop()) > header){
           // MainNav1.addClass(sticky);
            MainNav2.addClass(sticky);
        }else{
          //  MainNav1.removeClass(sticky);
            MainNav2.removeClass(sticky);
        }
        if ($(this).scrollTop() > (header*10)){
            MainNav2.css({"visibility": " visible"})
            MainNav2.addClass(inView);
        }else{
            MainNav2.css({"visibility": " hidden"})
            MainNav2.removeClass(inView);
            
        }
    });
});