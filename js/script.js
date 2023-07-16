$(function(){
    $(window).scroll(function(){
        var winTop = $(window).scrollTop();
        if (winTop >= 30){
            $("body").addClass("sticky-header");
        }else{
            $("body").removeClass("sticky-header");
        }
    }
        )
}
    )

    $(function(){
        $(window).scroll(function(){
            var winTop = $(window).scrollTop();
            if (winTop >= 30){
                $("#lista-cafe").addClass("sticky-header");
            }else{
                $("#lista-cafe").removeClass("sticky-header");
            }
        }
            )
    }
        )











        

    