<?php

require_once('src/Controllers/ApiController.php');

$inputSearch = $_REQUEST['searchInput'] ?? null;

if (!is_null($inputSearch)) {

    $foodTruckList = ApiController::getFoodTrucksList($inputSearch);

    if (is_array($foodTruckList) and count($foodTruckList) > 0) {
        foreach ($foodTruckList as $truckItem) {
            @include('src/Views/components/truckItem.php');
        }
    } else {
        @include('src/Views/components/notFound.php');
    }
}
