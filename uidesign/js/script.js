function open_close(){
    if($(".uls_1").height()==0){
        $(".uls_1").animate({height: "234.3px"},.3);
        // document.querySelector('.uls_1').style.height='auto'
    }
    else{
        $(".uls_1").animate({height: "0px"},.3);
    }
}