
    <!-- Sub-menu -->
    <div class="panel panel-primary">                        
        <!-- Panel heading -->
        <div class="panel-heading">Menu</div>                        
        <!-- Panel Body -->
        <div class="panel-body">
            <!-- Slide Show -->
            <?php include_once 'app/include/sub.phtml'; ?>
        </div> <!-- /panel-body -->                        
    </div> <!-- / panel-primary -->

    <!-- VÍDEOS -->
    <div class="panel panel-primary">
        <!-- Panel Heading -->
        <div class="panel-heading">Últimos Vídeos</div>
        <!-- Panel Body -->
        <div class="panel-body" id="lastVideo">
            
        </div>
    </div>
    
    <!-- MAPA -->
    <div class="panel panel-primary">
        <div class="panel-heading">Localização</div>
        
        <div class="panel-body">
            <div id="map" style="height: 200px;"></div>
            <script type="text/javascript">

            var map;
            function initMap() {
              map = new google.maps.Map(document.getElementById('map'), {
                center: {lat: -22.922288, lng: -43.250170},
                zoom: 18
              });
               var marker = new google.maps.Marker({
                position: {lat: -22.922288, lng: -43.250170},
                map: map,
                title: 'C. E. Ibirajara'
              });

            }

            </script>
            <script async defer
              src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCS0g7w8hF6_YpljSuPEAArnmUP2OZPMrk&callback=initMap">
            </script>
        </div>
    </div>

    <!-- AVISOS -->
    <div class="panel panel-primary">                        
        <!-- Panel heading -->
        <div class="panel-heading">Avisos</div>                        
        <!-- Panel Body -->
        <div class="panel-body" id="aviso_txt"></div> <!-- /panel-body -->                        
    </div> <!-- / panel-primary -->
