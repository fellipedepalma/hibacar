// Initialize and add the map
function initMap() {
   // var uluru = {lat: -23.568642, lng: -46.636162};
    // Opções do Mapa
    var options = {
        zoom: 15,
        center: {lat: -23.669222, lng: -46.699471}
    };

    var map = new google.maps.Map(
        document.getElementById('map'), options);

    // Listen for click on map
    google.maps.event.addListener(map, 'click', function(event){
        // Add marker
        addMarker({coords:event.latLng});
    });

    var markers = [
        {
            coords: {lat:-23.680651,lng:-46.698891},
            iconImage: 'logo_marker.png',
            content: '<h2>Minha Oficina</h2>'
        },
        {
            coords:{}
        },
    ];

    for(var i = 0; i < markers.length; i++){
        addMarker(markers[i]);
    }

    function addMarker(props) {
        var marker = new google.maps.Marker({
            position:props.coords,
            map:map
        });

        // Check for customicon
        if(props.iconImage){
            // Set icon image
            marker.setIcon(props.iconImage);
        }

        // Check content
        if(props.content){
            var infoWindow = new google.maps.InfoWindow({
                content:props.content
            });

            marker.addListener('click', function(){
                infoWindow.open(map, marker);
            });
        }
    }

    // // The marker, positioned at Uluru
    // var marker = new google.maps.Marker({
    //     position: {lat: -23.671085, lng: -46.687321},
    //     map: map,
    //     icon: 'logo_marker.png'
    // });
    //
    // var infoWindow = new google.maps.InfoWindow({
    //     content: '<h2>Oficina Aqui</h2>'
    // });
    //
    // marker.addListener('click', function () {
    //     infoWindow.open(map, marker);
    // })
}