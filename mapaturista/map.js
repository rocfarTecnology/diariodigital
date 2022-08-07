const mapDiv = document.getElementById("map");
let map; 
function initMap(){
    map = new google.maps.Map(mapDiv, {
        center: { lat: -31.1, lng: -60.08333 },
        zoom: 15,
      });
};