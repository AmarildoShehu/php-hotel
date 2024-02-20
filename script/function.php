<?php 
// Include dati hotel
include 'data.php';

// logica filtri

// filtro hotel
function getFilteredHotels($filters, $hotels) {
    $filteredHotels = $hotels;

    // Applica i filtri
    if (isset($filters['parking'])) {
        $filteredHotels = filterHotelsByParking($filteredHotels);
    }

    if (isset($filters['rating'])) {
        $filteredHotels = filterHotelsByRating($filteredHotels, $filters['rating']);
    }

    return $filteredHotels;
}

// filtro parcheggio
function filterHotelsByParking($hotels) {
    return array_filter($hotels, function ($hotel) {
        return $hotel['parking'] === true;
    });
}

// filtro voto
function filterHotelsByRating($hotels, $minRating) {
    return array_filter($hotels, function ($hotel) use ($minRating) {
        return $hotel['vote'] >= $minRating;
    });
}

// funzione display hotel
function displayHotels($hotels) {
    foreach ($hotels as $hotel) {
        echo '<tr>';
        echo '<td>' . $hotel['name'] . '</td>';
        echo '<td>' . $hotel['distance_to_center'] . '</td>'; // Utilizzo la distanza al centro come esempio, sostituisci con la tua logica
        echo '<td>' . $hotel['vote'] . '</td>';
        echo '<td>' . ($hotel['parking'] ? 'Sì' : 'No') . '</td>';
        echo '</tr>';
    }
}

// funzione reset

if (isset($_GET['reset'])) {
    // Se è stato premuto il pulsante di reset, ricarica la pagina senza i parametri dei filtri
    header('Location: ' . strtok($_SERVER["REQUEST_URI"],'?'));
    exit();
}
?>