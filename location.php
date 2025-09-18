<?php
/**
 * Template Name: Distributor Location
 */
get_header();
?>

<div class="container px-5">
    <div class="big-title">
        <h1>Find Us Here</h1>
    </div>
    
    <div id="distributor-map" style="height: 500px; width: 100%; margin: 30px 0; border-radius: 6px;"></div>
</div>

<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Convert coordinates from DMS to decimal
    function dmsToDecimal(degrees, minutes, seconds, direction) {
        let decimal = degrees + minutes / 60 + seconds / 3600;
        if (direction === 'S' || direction === 'W') {
            decimal = -decimal;
        }
        return decimal;
    }
    
    // Parse the coordinates string
    const coordString = "41°21'08.7\"N 19°31'09.5\"E";
    const parts = coordString.split(' ');
    
    // Parse latitude
    const latParts = parts[0].replace('"', '').split(/[°']/);
    const latDegrees = parseFloat(latParts[0]);
    const latMinutes = parseFloat(latParts[1]);
    const latSeconds = parseFloat(latParts[2]);
    const latDirection = latParts[3];
    
    // Parse longitude
    const lonParts = parts[1].replace('"', '').split(/[°']/);
    const lonDegrees = parseFloat(lonParts[0]);
    const lonMinutes = parseFloat(lonParts[1]);
    const lonSeconds = parseFloat(lonParts[2]);
    const lonDirection = lonParts[3];
    
    // Convert to decimal
    const latitude = dmsToDecimal(latDegrees, latMinutes, latSeconds, latDirection);
    const longitude = dmsToDecimal(lonDegrees, lonMinutes, lonSeconds, lonDirection);
    
    // Initialize the map
    const map = L.map('distributor-map').setView([latitude, longitude], 15);
    
    // Add OpenStreetMap tiles
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(map);
    
    // Add a marker for the distributor location
    L.marker([latitude, longitude])
        .addTo(map)
        .bindPopup('We are here!')
        .openPopup();
});
</script>

<?php get_footer(); ?>