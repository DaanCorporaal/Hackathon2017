<!DOCTYPE html>
<html>
<head>

    <title>Layers Control Tutorial - Leaflet</title>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.1.0/dist/leaflet.css" integrity="sha512-wcw6ts8Anuw10Mzh9Ytw4pylW8+NAD4ch3lqm9lzAsTxg0GFeJgoAtxuCLREZSC5lUXdVyo/7yfsqFjQ4S+aKw==" crossorigin=""/>
    <script src="https://unpkg.com/leaflet@1.1.0/dist/leaflet.js" integrity="sha512-mNqn2Wg7tSToJhvHcqfzLMU6J4mkOImSPTxVZAdo+lcPlk+GhZmYgACEe0x35K7YzW1zJ7XyJV/TT1MrdXvMcA==" crossorigin=""></script>
    <link rel="stylesheet" href="Css/base.css" />

</head>
<body onload="getLocation()">

<div id='map'></div>
<p id="demo"></p>
<script>

    function getLocation() {
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(showPosition);
        } else {
            x.innerHTML = "Geolocation is not supported by this browser.";
        }
    }
    function showPosition(position) {
        var latPersoon = position.coords.latitude;
        var lngPersoon = position.coords.longitude;


    var blauwIcon = L.icon({
        iconUrl: 'blauw.png',
        iconSize:     [35, 35], // size of the icon
        iconAnchor:   [17, 35], // point of the icon which will correspond to marker's location
        popupAnchor:  [1, -34] // point from which the popup should open relative to the iconAnchor
    });
    var me = L.layerGroup();
    var event = L.layerGroup();
    var cities = L.layerGroup();
        L.circle([latPersoon, lngPersoon], {color: '#9df441',fillColor: '#9df441',fillOpacity: 0.4,radius: 1000}).addTo(me),
        L.circle([51.69682, 5.29335], {color: '#f47c41',fillColor: '#f47c41',fillOpacity: 0.4,radius: 300}).bindPopup('Kermis').addTo(event),
        L.marker([51.69682, 5.29335],{icon: blauwIcon}).bindPopup('This is Denver, CO.').addTo(cities),
        L.marker([51.7670003, 5.498402400000032],{icon: blauwIcon}).bindPopup('This is Denver, CO.').addTo(cities);




    var mbAttr =  '',
        mbUrl = 'https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token=pk.eyJ1IjoiZGFhbmNvcnBvcmFhbCIsImEiOiJjajRqcHZ3aWswZzRuMzJzZWV6NTVudWNoIn0.2HkU7BZBUnYb9QnHjrGmNQ';

    var grayscale   = L.tileLayer(mbUrl, {id: 'mapbox.light', attribution: mbAttr}),
        streets  = L.tileLayer(mbUrl, {id: 'mapbox.streets',   attribution: mbAttr});


        console.log(latPersoon);
        console.log(lngPersoon);
        var map = L.map('map', {
            center: [latPersoon, lngPersoon],
            zoom: 14,
            layers: [streets, cities , me , event]
        });


        var baseLayers = {
            "Streets": streets,
            "Grayscale": grayscale

        };

        var overlays = {
            "Problems": cities,
            "Ik": me,
            "Event": event
        };


        L.control.layers(baseLayers, overlays).addTo(map);

        var popup = L.popup();


        function onMapClick(e) {
            console.log(e.latlng);
            popup
                .setLatLng(e.latlng)
                .setContent(e.latlng.toString())
                .openOn(map);

            var latKlacht = e.latlng.lat;
            var lngKlacht = e.latlng.lng;


            var latDifference = latKlacht - window.latPersoon;
            var lngDifference = lngKlacht - window.lngPersoon;

            console.log(latDifference, lngDifference);

        }

        map.on('click', onMapClick);
    }
</script>

</body>
</html>
