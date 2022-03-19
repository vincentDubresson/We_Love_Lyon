<?php

//Function cardBuildind

function cardBuilding(string $compagnyName, string $bookingUrl, string $callingNumber, string $webSiteUrl, string $postalAddress, string $googleMapsUrl)
{
            return '<div class="card">
                <div class="card-header">
                    <div class="card-img"><img src="./src/assets/picture/musée_confluence.jpg" alt=""> </div>
                </div>
                <div class="card-body">
                    <h2>' . $compagnyName . '</h2>
                    <div class="card-button">
                    <button onclick="window.open(\'' . $bookingUrl . '\', \'_blank\');">Réserver</button>
                    <button onclick="window.location.href = \'tel:' . $callingNumber . '\';">Appeler</button>
                    <button onclick="window.open(\'' . $webSiteUrl . '\', \'_blank\');">Site Web</button>
                    </div>
                    <p>Téléphone: <a href="tel:' . $callingNumber . '">' . $callingNumber . '</a></p>
                    <p>Adresse: ' . $postalAddress . '</p>
                    <div>
                    <iframe src="' . $googleMapsUrl . '" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>    
                </div>
            </div>';
}

//Company information array

$restaurantsInformations = [
    [
        'restaurantCompagnyName' => ['Le bouchon des filles'],
        'restaurantBookingUrl' => ['https://lebouchondesfilles.fr/#elementor-action%3Aaction%3Dpopup%3Aopen%26settings%3DeyJpZCI6IjU3IiwidG9nZ2xlIjpmYWxzZX0%3D'],
        'restaurantCallingNumber' => ['+33478304044'],
        'restaurantWebSiteUrl' => ['https://lebouchondesfilles.fr/'],
        'restaurantPostalAddress' => ['20, rue Sergent-Blandan, près de la place Sathonay 69001 Lyon'],
        'restaurantGoogleMapsUrl' => ['https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2783.125609022505!2d4.827171215825589!3d45.76867287910574!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47f4eb01f439fe73%3A0xc28debbb730b4077!2sLe%20Bouchon%20des%20Filles!5e0!3m2!1sfr!2sfr!4v1647521635797!5m2!1sfr!2sfr']
    ],
    [
        'restaurantCompagnyName' => ['Sapnà'],
        'restaurantBookingUrl' => ['https://bookings.zenchef.com/results?rid=356901&fullscreen=1'],
        'restaurantCallingNumber' => ['+33981772725'],
        'restaurantWebSiteUrl' => ['https://www.sapna.fr/'],
        'restaurantPostalAddress' => ['7 Rue de la Martinière, 69001 Lyon'],
        'restaurantGoogleMapsUrl' => ['https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d11132.580149443595!2d4.8289931!3d45.7682835!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xa58c48a953f25b38!2zU2FwbsOg!5e0!3m2!1sfr!2sfr!4v1647720741085!5m2!1sfr!2sfr']
    ]
];

//Loops for execute the function with array elements

foreach ($restaurantsInformations as $restaurantInformations){

    $restaurantCompagnyName = $restaurantInformations['restaurantCompagnyName'][0];
    $restaurantBookingUrl = $restaurantInformations['restaurantBookingUrl'][0];
    $restaurantCallingNumber = $restaurantInformations['restaurantCallingNumber'][0];
    $restaurantWebSiteUrl = $restaurantInformations['restaurantWebSiteUrl'][0];
    $restaurantPostalAddress = $restaurantInformations['restaurantPostalAddress'][0];
    $restaurantGoogleMapsUrl = $restaurantInformations['restaurantGoogleMapsUrl'][0];

echo cardBuilding($restaurantCompagnyName, $restaurantBookingUrl, $restaurantCallingNumber, $restaurantWebSiteUrl, $restaurantPostalAddress, $restaurantGoogleMapsUrl);
        
}

?>
