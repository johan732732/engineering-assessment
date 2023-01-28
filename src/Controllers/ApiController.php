<?php

class ApiController
{

    const API_URL = "https://data.sfgov.org/resource/rqzj-sfat.json";

    public static function getFoodTrucksList(string $inputSearch)
    {
        try {

            $listContent = file_get_contents(ApiController::getTrucksApiUrl());
            $listContent = json_decode($listContent, true);

            return $listContent;
        } catch (Exception $e) {
            die($e->getMessage());
        }

        return $inputSearch;
    }


    /** ----------------------- Private functions ----------------------- */

    public static function getTrucksApiUrl()
    {
        $filterByFacilityType = "?\$where=facilitytype='Truck'";
        return self::API_URL . $filterByFacilityType;
    }
}
