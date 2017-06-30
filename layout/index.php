<!DOCTYPE html>
<html>
<head>

    <title>Layers Control Tutorial - Leaflet</title>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.1.0/dist/leaflet.css" integrity="sha512-wcw6ts8Anuw10Mzh9Ytw4pylW8+NAD4ch3lqm9lzAsTxg0GFeJgoAtxuCLREZSC5lUXdVyo/7yfsqFjQ4S+aKw==" crossorigin=""/>
    <script src="https://unpkg.com/leaflet@1.1.0/dist/leaflet.js" integrity="sha512-mNqn2Wg7tSToJhvHcqfzLMU6J4mkOImSPTxVZAdo+lcPlk+GhZmYgACEe0x35K7YzW1zJ7XyJV/TT1MrdXvMcA==" crossorigin=""></script>
    <link rel="stylesheet" href="../Css/base.css" />


</head>
<body>

<div id='map'></div>

<script>
    var greenIcon = L.icon({
        iconUrl: 'groen.png',


        iconSize:     [65, 65], // size of the icon

        iconAnchor:   [22, 94], // point of the icon which will correspond to marker's location

        popupAnchor:  [-3, -76] // point from which the popup should open relative to the iconAnchor
    });

    var cities = L.layerGroup();

        L.marker([39.61, -105.02],{icon: greenIcon}).bindPopup("<b>Hello world!</b><br>I am a popup.").addTo(cities),
        L.marker([39.61, -105.02]).bindPopup("<b>Hello world!</b><br>I am a popup.").addTo(cities),
        L.marker([39.74, -104.99]).bindPopup('This is Denver, CO.').addTo(cities),
        L.marker([39.73, -104.8]).bindPopup('This is Aurora, CO.').addTo(cities),
        L.marker([39.77, -105.23]).bindPopup('This is Golden, CO.').addTo(cities),
        L.circle([39.61, -105.02], {
            color: 'blue',
            fillColor: 'blue',
            fillOpacity: 0.5,
            radius: 1000
        }).addTo(cities);


    var mbAttr = 'Map data &copy; <a href="http://openstreetmap.org">OpenStreetMap</a> contributors, ' +
            '<a href="http://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
            'Imagery © <a href="http://mapbox.com">Mapbox</a>',
        mbUrl = 'https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token=pk.eyJ1IjoiZGFhbmNvcnBvcmFhbCIsImEiOiJjajRqcHZ3aWswZzRuMzJzZWV6NTVudWNoIn0.2HkU7BZBUnYb9QnHjrGmNQ';

    var grayscale   = L.tileLayer(mbUrl, {id: 'mapbox.light', attribution: mbAttr}),
        streets  = L.tileLayer(mbUrl, {id: 'mapbox.streets',   attribution: mbAttr});

    var map = L.map('map', {
        center: [39.73, -104.99],
        zoom: 9,
        layers: [streets, cities]
    });

    var baseLayers = {
        "Streets": streets,
        "Grayscale": grayscale

    };

    var overlays = {
        "Problems": cities
    };


    L.control.layers(baseLayers, overlays).addTo(map);

    var popup = L.popup();

    function onMapClick(e) {
        console.log(e.latlng);
        popup
            .setLatLng(e.latlng)
            .setContent(e.latlng.toString())
            .openOn(map);
        console.log(e.latlng.lat);
    }

    map.on('click', onMapClick);
</script>



</body>
</html>
