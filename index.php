<!DOCTYPE html>
<html>
<head>

    <title>Layers Control Tutorial - Leaflet</title>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.1.0/dist/leaflet.css" integrity="sha512-wcw6ts8Anuw10Mzh9Ytw4pylW8+NAD4ch3lqm9lzAsTxg0GFeJgoAtxuCLREZSC5lUXdVyo/7yfsqFjQ4S+aKw==" crossorigin=""/>
    <script src="https://unpkg.com/leaflet@1.1.0/dist/leaflet.js" integrity="sha512-mNqn2Wg7tSToJhvHcqfzLMU6J4mkOImSPTxVZAdo+lcPlk+GhZmYgACEe0x35K7YzW1zJ7XyJV/TT1MrdXvMcA==" crossorigin=""></script>
    <link rel="stylesheet" href="Css/base.css" />
    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
</head>
<body onload="getLocation()">
<?php

function ConnectDB()
{
    define("HOST", "localhost");
    define("DBNAME", "test");
    define("USERNAME", "root");
    define("PASSWORD", "");
    try{
        $pdo = new PDO("mysql:host=".HOST.";dbname=".DBNAME,USERNAME,PASSWORD);
    }
    catch(PDOException $e){
        echo $e->getMessage();
    }

    return $pdo;
}
$pdo = ConnectDB();


?>

<div class="menu">
    <h1>Test<3</h1>
</div>
<button class="legenda" id="myBtnPopup"></button>
<div id="myModal2" class="modal2">
    <!-- Modal content -->
    <div class="modal-content2">
        <span class="close2">&times;</span>
        <ol>
            <li>
                Jou gebied
            </li>
            <li>
                Events
            </li>
        </ol>

    </div>

</div>
<script>
    // Get the modal
    var modal2 = document.getElementById('myModal2');

    // Get the button that opens the modal
    var btn2 = document.getElementById("myBtnPopup");

    // Get the <span> element that closes the modal
    var span2 = document.getElementsByClassName("close2")[0];

    // When the user clicks the button, open the modal
    btn2.onclick = function() {
        modal2.style.display = "block";
    }

    // When the user clicks on <span> (x), close the modal
    span2.onclick = function() {
        modal2.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event2) {
        if (event2.target == modal2) {
            modal2.style.display = "none";
        }
    }
</script>
<button class="info" id="myBtn"></button>
<div id="myModal" class="modal">
    <!-- Modal content -->
    <div class="modal-content">
        <span class="close">&times;</span>
        Legenda
    </div>

</div>
<div id="Popup2">

    <p class="Popup">
        <span class="close" id="close">&times;</span>
        <script>
            $('#close').on('click' , function(){
                $('.Popup').toggleClass('display');
                $('#Popup2').toggleClass('Field');
            })
        </script>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam amet at corporis cum hic laudantium quia quod repudiandae? Cumque dignissimos dolor ea est explicabo nemo porro quas, ratione reprehenderit sequi!
    </p>
</div>

<div id='map'></div>
<script>
    // Get the modal
    var modal = document.getElementById('myModal');

    // Get the button that opens the modal
    var btn = document.getElementById("myBtn");

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];

    // When the user clicks the button, open the modal
    btn.onclick = function() {
        modal.style.display = "block";
    }

    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
        modal.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
</script>
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

        function getDistance(x1,x2,y1,y2)
        {
            if (typeof(Number.prototype.toRad) === "undefined") {
                Number.prototype.toRad = function() {
                    return this * Math.PI / 180;
                }
            }
            var R = 6371e3;
            var φ1 = y1.toRad();
            var φ2 = y2.toRad();
            var Δφ = (y2-y1).toRad();
            var Δλ = (x2-x1).toRad();

            var a = Math.sin(Δφ/2) * Math.sin(Δφ/2) +
                Math.cos(φ1) * Math.cos(φ2) *
                Math.sin(Δλ/2) * Math.sin(Δλ/2);
            var c = 2 * Math.atan2(Math.sqrt(a), Math.sqrt(1-a));

            return (R * c);
        }


        var blauwIcon = L.icon({
        iconUrl: 'blauw.png',
        iconSize:     [35, 35], // size of the icon
        iconAnchor:   [17, 35], // point of the icon which will correspond to marker's location
        popupAnchor:  [1, -34] // point from which the popup should open relative to the iconAnchor
    });
        var dot = L.icon({
            iconUrl: 'dot.png',
            iconSize:     [10, 10], // size of the icon
            iconAnchor:   [4, 6], // point of the icon which will correspond to marker's location
            popupAnchor:  [1, -34] // point from which the popup should open relative to the iconAnchor
        });
    var me = L.layerGroup();
    var event = L.layerGroup();
    var cities = L.layerGroup();
        <?php
        $parameter = array();
        $sth = $pdo->prepare('SELECT * FROM event');

        $sth->execute($parameter);
        while ($row = $sth->fetch()){
            ?>
        L.marker([<?php echo $row['X'];?>, <?php echo $row['Y'];?>],{icon: blauwIcon}).bindPopup('<?php echo '<a href="'.$row['des'].'">'.$row['naam'].'</a>';?>').addTo(event),
        <?php
        }
            $parameter = array();
            $sth = $pdo->prepare('SELECT * FROM event');

            $sth->execute($parameter);
            while ($row = $sth->fetch()){}
        ?>
        L.marker([latPersoon, lngPersoon],{icon: dot}).addTo(me),
        L.circle([latPersoon, lngPersoon], {color: '#9df441',fillColor: '#9df441',fillOpacity: 0.4,radius: 1000}).addTo(me);



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
            var latKlacht = e.latlng.lat;
            var lngKlacht = e.latlng.lng;

            var Difference = getDistance(lngPersoon , lngKlacht , latPersoon , latKlacht);
            if(Difference <= 1000){
                popup
                    .setLatLng(e.latlng)
                    .setContent('<button id="Popup"> Klacht!</button>')
                    .openOn(map);

                $('#Popup').on('click' , function(){
                    $('.Popup').toggleClass('display');
                    $('#Popup2').toggleClass('Field');
                })
            }else{
                popup
                    .setLatLng(e.latlng)
                    .setContent('U bent niet dichtbij genoeg')
                    .openOn(map);
            }



            console.log(Difference);

        }

        map.on('click', onMapClick);
    }
</script>
</body>
</html>
