// Dans votre_fichier_js.js
function initMap() {
    var myLatLng = { lat: 50.6302, lng: 3.0565 }; // Coordonnées pour le centre de la carte
    var map = new google.maps.Map(document.getElementById('google-map'), {
        zoom: 15, // Niveau de zoom initial
        center: myLatLng // Centre de la carte
    });

    // Vous pouvez ajouter des marqueurs, des polygones, etc. ici
    // Par exemple :
    var marker = new google.maps.Marker({
        position: myLatLng,
        map: map,
        title: 'Hello World!'
    });
}
