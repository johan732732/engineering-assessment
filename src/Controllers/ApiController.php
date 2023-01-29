<?php

class ApiController
{

    const API_URL = "https://data.sfgov.org/resource/rqzj-sfat.json";

    public static function getFoodTrucksList(string $inputSearch)
    {
        try {

            $listContent = file_get_contents(ApiController::applyFilter($inputSearch));
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
        $url = self::API_URL;
        $facilityFilter = "?\$where=1=1";
        $url .= $facilityFilter;

        return $url;
    }

    public static function applyFilter(string $filter)
    {
        $url = ApiController::getTrucksApiUrl();

        if (!empty($filter)) {

            $filter = trim($filter);
            $foodsItemFilter = "fooditems like '%{$filter}%'";
            $applicantFilter = "applicant like '%{$filter}%'";
            $addressFilter = "address like '%{$filter}%'";
            $locationdescriptionFilter = "locationdescription like '%{$filter}%'";

            $url .= rawurlencode(" AND ({$foodsItemFilter} OR {$applicantFilter} OR {$addressFilter} OR {$locationdescriptionFilter})");
        }

        return $url;
    }
}
