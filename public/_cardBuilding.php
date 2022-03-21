<?php

//Function numFormat for display '04 78 25 00 00' VS '+33478250000'

function numFormat($subject){
    $search = '+33';
    $replace = '0';
    $number = str_replace($search,$replace,$subject);
    $result = sprintf("%s %s %s %s %s",
                  substr($number, 0, 2),
                  substr($number, 2, 2),
                  substr($number, 4, 2),
                  substr($number, 6, 2),
                  substr($number, 8, 2));
    return $result;
}

//Function cardBuildind

function cardBuilding(string $compagnyName, string $bookingUrl, string $callingNumber, string $webSiteUrl, string $postalAddress, string $googleMapsUrl, string $imgLink)
{
            return '<div class="card">
                <div class="card-header">
                    <div class="card-img"><img src="' . $imgLink . '" alt="Image du lieu ' . $compagnyName . '"></div>
                </div>
                <div class="card-body">
                    <h2>' . $compagnyName . '</h2>
                    <div class="card-button">
                    <button onclick="window.open(\'' . $bookingUrl . '\', \'_blank\');">Réserver</button>
                    <button onclick="window.location.href = \'tel:' . $callingNumber . '\';">Appeler</button>
                    <button onclick="window.open(\'' . $webSiteUrl . '\', \'_blank\');">Site Web</button>
                    </div>
                    <p><strong>Téléphone:</strong> <a href="tel:' . $callingNumber . '">' . numFormat($callingNumber) . '</a></p>
                    <p><strong>Adresse:</strong> ' . $postalAddress . '</p>
                    <div>
                    <iframe src="' . $googleMapsUrl . '" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>    
                </div>
            </div>';
}

//Condition that determines whether hotel or restaurant

if ($_SERVER["SCRIPT_NAME"] === "/restaurants.php") {
    require ("_restaurants_array.php");
} elseif ($_SERVER["SCRIPT_NAME"] === "/hotels.php") {
    require ("_hotels_array.php");
}

//Loops for execute the function with array elements

foreach ($compagnysInformations as $compagnyInformations){

    $compagnyCompagnyName = $compagnyInformations['compagnyCompagnyName'][0];
    $compagnyBookingUrl = $compagnyInformations['compagnyBookingUrl'][0];
    $compagnyCallingNumber = $compagnyInformations['compagnyCallingNumber'][0];
    $compagnyWebSiteUrl = $compagnyInformations['compagnyWebSiteUrl'][0];
    $compagnyPostalAddress = $compagnyInformations['compagnyPostalAddress'][0];
    $compagnyGoogleMapsUrl = $compagnyInformations['compagnyGoogleMapsUrl'][0];
    $compagnyImageLink = $compagnyInformations['compagnyImageLink'][0];

echo cardBuilding($compagnyCompagnyName, $compagnyBookingUrl, $compagnyCallingNumber, $compagnyWebSiteUrl, $compagnyPostalAddress, $compagnyGoogleMapsUrl, $compagnyImageLink);
        
}

?>
