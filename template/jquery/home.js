/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$(document).ready(function(){
    $("#content_aba div:nth-child(1)").show();
    $(".abas li:first div").addClass("selected");		
    $(".aba").click(function(){
        $(".aba").removeClass("selected");
        $(this).addClass("selected");
        var indice = $(this).parent().index();
        indice++;
        $("#content_aba div").hide();
        $("#content_aba div:nth-child("+indice+")").show();
    });

    $(".aba").hover(
        function(){$(this).addClass("ativa")},
        function(){$(this).removeClass("ativa")}
    );				
});
