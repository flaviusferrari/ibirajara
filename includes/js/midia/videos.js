/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


$(document).ready(function() {
   
    
    $('body').on('click', '.linkvideo', function(e) {
        e.preventDefault();
        
        link = $(this).attr('href');
        
        $.ajax({
            url: link,
            type: 'POST',
            data: 'tipo=endereco&value=' + $('#endereco').val(),
            success: function (data) {
                // Exibe os dados
                $('#videos').html(data);
            }
        }); 
        
//        alert(link);
    });
    
    
    
});