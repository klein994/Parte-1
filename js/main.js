function initialize() {
    var options = {
        types: ['(cities)'],
        componentRestrictions: {
            country: "ar"
        }
    };

    var input = document.getElementById('autocomplete');
    var autocomplete = new google.maps.places.Autocomplete(input, options);
}

google.maps.event.addDomListener(window, 'load', initialize);