/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$(document).ready(function() {   
    
    $('.glyphicon').hover(
        function () {
            $(this).addClass("text-primary");
        }
        , function () {
            $(this).removeClass("text-primary");
        }
    );



});

