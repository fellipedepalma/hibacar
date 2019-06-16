    <style>
        /* Always set the map height explicitly to define the size of the div
         * element that contains the map. */
        #map {
            height: 500px;
            width: 800px;
        }
        /* Optional: Makes the sample page fill the window. */
        html, body {
            height: 100%;
            margin: 0;
            padding: 0;
        }
    </style>

<html>
<body>
<div id="map"></div>
<!-- Maps API Javascript -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAh0uqpKR-_LGSSKMbb-WJaL7FGxt564iI"></script>

<script src="{$GET_TEMA}/tema/js/mapa.js"></script>

{*<script>*}
    {*var customLabel = {*}
        {*restaurant: {*}
            {*label: 'R'*}
        {*},*}
        {*bar: {*}
            {*label: 'B'*}
        {*}*}
    {*};*}

    {*function initMap() {*}
        {*var map = new google.maps.Map(document.getElementById('map'), {*}
            {*center: new google.maps.LatLng(-23.669222, -46.699471),*}
            {*zoom: 15*}
        {*});*}
        {*var infoWindow = new google.maps.InfoWindow;*}

        {*// Change this depending on the name of your PHP or XML file*}
        {*downloadUrl('resultado.php', function(data) {*}
            {*var xml = data.responseXML;*}
            {*var markers = xml.documentElement.getElementsByTagName('marker');*}
            {*Array.prototype.forEach.call(markers, function(markerElem) {*}
                {*var name = markerElem.getAttribute('name');*}
                {*var address = markerElem.getAttribute('address');*}
                {*var type = markerElem.getAttribute('type');*}
                {*var point = new google.maps.LatLng(*}
                    {*parseFloat(markerElem.getAttribute('lat')),*}
                    {*parseFloat(markerElem.getAttribute('lng')));*}

                {*var infowincontent = document.createElement('div');*}
                {*var strong = document.createElement('strong');*}
                {*strong.textContent = name*}
                {*infowincontent.appendChild(strong);*}
                {*infowincontent.appendChild(document.createElement('br'));*}

                {*var text = document.createElement('text');*}
                {*text.textContent = address*}
                {*infowincontent.appendChild(text);*}
                {*var icon = 'icon.png';*}
                {*var marker = new google.maps.Marker({*}
                    {*map: map,*}
                    {*position: point,*}
                    {*label: icon.label*}
                {*});*}
                {*marker.addListener('click', function() {*}
                    {*infoWindow.setContent(infowincontent);*}
                    {*infoWindow.open(map, marker);*}
                {*});*}
            {*});*}
        {*});*}
    {*}*}



    {*function downloadUrl(url, callback) {*}
        {*var request = window.ActiveXObject ?*}
            {*new ActiveXObject('Microsoft.XMLHTTP') :*}
            {*new XMLHttpRequest;*}

        {*request.onreadystatechange = function() {*}
            {*if (request.readyState == 4) {*}
                {*request.onreadystatechange = doNothing;*}
                {*callback(request, request.status);*}
            {*}*}
        {*};*}

        {*request.open('GET', url, true);*}
        {*request.send(null);*}
    {*}*}

    {*function doNothing() {}*}
{*</script>*}
{*<script async defer*}
        {*src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAh0uqpKR-_LGSSKMbb-WJaL7FGxt564iI&libraries=places&callback=initMap">*}
{*</body>*}
{*</html>*}






{*<section class="oficinas-encontradas">*}
    {*<div class="container">*}
        {*<h2 class="titulos">FORAM ENCONTRADAS 55 OFICINAS</h2>*}
        {*<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3657.304049631127!2d-46.662469385022234!3d-23.557521084684822!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce59cd55b78807%3A0xa89b702d60a208b8!2sAv.+Paulista%2C+2200+-+Bela+Vista%2C+S%C3%A3o+Paulo+-+SP%2C+01310-300!5e0!3m2!1spt-BR!2sbr!4v1493139355864" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>*}
    {*</div>*}
{*</section>*}

{*<section class="retorno-oficinas">*}
    {*<div class="container">*}
        {*<h2 class="titulos">OFICINAS</h2>*}
        {*{foreach from=$MARCACAO item=M}*}
            {*<p>{$M.ofc_id}</p>*}
            {*<p>{$M.ofc_nome}</p>*}
            {*<p>{$M.ofc_endereco}</p>*}
            {*<p>{$M.ofc_lat}</p>*}
            {*<p>{$M.ofc_long}</p>*}
            {*<p>{$M.ofc_tipo}</p>*}

        {*{/foreach}*}

        {*<div id="map"></div>*}

        {*<script>*}
            {*var customLabel = {*}
                {*restaurant: {*}
                    {*label: 'R'*}
                {*},*}
                {*bar: {*}
                    {*label: 'B'*}
                {*}*}
            {*};*}

            {*function initMap() {*}
                {*var map = new google.maps.Map(document.getElementById('map'), {*}
                    {*center: new google.maps.LatLng(-33.863276, 151.207977),*}
                    {*zoom: 12*}
                {*});*}
                {*var infoWindow = new google.maps.InfoWindow;*}

                {*// Change this depending on the name of your PHP or XML file*}
                {*downloadUrl('../controller/buscaroficina.php', function(data) {*}
                    {*var xml = data.responseXML;*}
                    {*var markers = xml.documentElement.getElementsByTagName('marker');*}
                    {*Array.prototype.forEach.call(markers, function(markerElem) {*}
                        {*var id = markerElem.getAttribute('id');*}
                        {*var name = markerElem.getAttribute('name');*}
                        {*var address = markerElem.getAttribute('address');*}
                        {*var type = markerElem.getAttribute('type');*}
                        {*var point = new google.maps.LatLng(*}
                            {*parseFloat(markerElem.getAttribute('lat')),*}
                            {*parseFloat(markerElem.getAttribute('lng')));*}

                        {*var infowincontent = document.createElement('div');*}
                        {*var strong = document.createElement('strong');*}
                        {*strong.textContent = name*}
                        {*infowincontent.appendChild(strong);*}
                        {*infowincontent.appendChild(document.createElement('br'));*}

                        {*var text = document.createElement('text');*}
                        {*text.textContent = address*}
                        {*infowincontent.appendChild(text);*}
                        {*var icon = customLabel[type] || {};*}
                        {*var marker = new google.maps.Marker({*}
                            {*map: map,*}
                            {*position: point,*}
                            {*label: icon.label*}
                        {*});*}
                        {*marker.addListener('click', function() {*}
                            {*infoWindow.setContent(infowincontent);*}
                            {*infoWindow.open(map, marker);*}
                        {*});*}
                    {*});*}
                {*});*}
            {*}*}



            {*function downloadUrl(url, callback) {*}
                {*var request = window.ActiveXObject ?*}
                    {*new ActiveXObject('Microsoft.XMLHTTP') :*}
                    {*new XMLHttpRequest;*}

                {*request.onreadystatechange = function() {*}
                    {*if (request.readyState == 4) {*}
                        {*request.onreadystatechange = doNothing;*}
                        {*callback(request, request.status);*}
                    {*}*}
                {*};*}

                {*request.open('GET', url, true);*}
                {*request.send(null);*}
            {*}*}

            {*function doNothing() {}*}
        {*</script>*}
        {*<script async defer*}
                {*src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDSwAJsecZ0lIxxzuviJIQk4OqQAJ04DXA&callback=initMap">*}
        {*</script>*}
    {*</div>*}
{*</section>*}