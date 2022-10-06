/*const todoAgro = {lat: -31.4190756 , lng: -60.332478 };*/


const mapDiv = document.getElementById("map");
let map; 
function initMap(){
    map = new google.maps.Map(mapDiv, {
        center: { lat: -31.4190756, lng: -60.332478 },
        zoom: 15,
      });

      /*const markerTAgro = new google.maps.Marker({
        position: todoAgro,
        map: map,
      });*/
};