function findMe() {
    var output = document.getElementById('latitude');


    if (navigator.geolocation) {
        output.innerHTML = "tu navegador soporta geologalizacion";
    } else {
        output.innerHTML = "fallo geolocalizacion";
    }

    function localizacion(posicion) {
        var latitude = posicion.coords.latitude;

        output.innerHTML = latitude;
        document.getElementById("latitude").value = latitude;
    }
    navigator.geolocation.getCurrentPosition(localizacion);
}

function findMe2() {
    var output = document.getElementById('longitude');
    if (navigator.geolocation) {
        output.innerHTML = "tu navegador soporta geologalizacion";
    } else {
        output.innerHTML = "fallo geolocalizacion";
    }

    function localizacion(posicion) {
        var longitude = posicion.coords.longitude;

        output.innerHTML = longitude;
        document.getElementById("longitude").value = longitude;

    }
    navigator.geolocation.getCurrentPosition(localizacion);

}