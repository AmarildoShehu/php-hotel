<?php 
// Include dati hotel
include 'data.php';

// logica filtri
$filteredHotels = $hotels;

if (isset($_GET['parking'])) {
    $filteredHotels = array_filter($filteredHotels, function ($hotel) {
        return $hotel['parking'] == true;
    });
}

if (isset($_GET['rating']) && is_numeric($_GET['rating'])) {
    $filteredHotels = array_filter($filteredHotels, function ($hotel) {
        return $hotel['vote'] >= $_GET['rating'];
    });
}
?>