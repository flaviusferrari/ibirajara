/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


var theInt = null;
var $crosslink, $navthumb;
var curclicked = 0;

theInterval = function(cur){
    clearInterval(theInt);

    if( typeof cur != 'undefined' )
        curclicked = cur;

    $crosslink.removeClass("active-thumb");
    $navthumb.eq(curclicked).parent().addClass("active-thumb");
        $(".stripNav ul li a").eq(curclicked).trigger('click');

    theInt = setInterval(function(){
        $crosslink.removeClass("active-thumb");
        $navthumb.eq(curclicked).parent().addClass("active-thumb");
        $(".stripNav ul li a").eq(curclicked).trigger('click');
        curclicked++;
        if( 3 == curclicked )
            curclicked = 0;

    }, 4000);
};

$(function(){

    $("#main-photo-slider").codaSlider();

    $navthumb = $(".nav-thumb");
    $crosslink = $(".cross-link");

    $navthumb
    .click(function() {
        var $this = $(this);
        theInterval($this.parent().attr('href').slice(1) - 1);
        return false;
    });

    theInterval();
});