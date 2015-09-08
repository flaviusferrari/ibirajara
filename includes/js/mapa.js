/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 * 
 * 
 * 
 *   AIzaSyAVB8Oz5PvgL-IJi1GChhIVA5p6M9KktmQ 
 */


function initialize() {
 
// Exibir mapa;
  var myLatlng = new google.maps.LatLng(-22.922288, -43.250170);
  var mapOptions = {
  zoom: 17,
  center: myLatlng,
  mapTypeId: google.maps.MapTypeId.ROADMAP
}
 
// Exibir o mapa na div #mapa;
  var map = new google.maps.Map(document.getElementById('mapa'), mapOptions);
 
}


// Função para carregamento assíncrono
  function loadScript() {
  var script = document.createElement('script');
  script.type = 'text/javascript';
  script.src ='http://maps.googleapis.com/maps/api/js?key=AIzaSyCS0g7w8hF6_YpljSuPEAArnmUP2OZPMrk&sensor=true&callback=initialize';
 
  document.body.appendChild(script);
}
 
  window.onload = loadScript;