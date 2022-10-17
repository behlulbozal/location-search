<?php
namespace behlulbozal\LocationSearch;

class Location
{

    public static function FindInCircle($latitude, $longitude, $radius_meter, $model)
    {

        $response = $model::selectRaw("* ,
                         ( 6371000 * acos( cos( radians(?) ) *
                           cos( radians( latitude ) )
                           * cos( radians( longitude ) - radians(?)
                           ) + sin( radians(?) ) *
                           sin( radians( latitude ) ) )
                         ) AS distance", [$latitude, $longitude, $latitude])
            ->having("distance", "<", $radius_meter)
            ->orderBy("distance");
        return $response;
    }

    public static function GetDistance($latitude1, $longitude1, $latitude2, $longitude2)
    {
        $earthRadius = 6371000;
        $latFrom = deg2rad($latitude1);
        $lonFrom = deg2rad($longitude1);
        $latTo = deg2rad($latitude2);
        $lonTo = deg2rad($longitude2);

        $latDelta = $latTo - $latFrom;
        $lonDelta = $lonTo - $lonFrom;

        $angle = 2 * asin(sqrt(pow(sin($latDelta / 2), 2) +
            cos($latFrom) * cos($latTo) * pow(sin($lonDelta / 2), 2)));

        $meter = intval($angle * $earthRadius);
        $distance = $meter . ' m';
        if ($meter > 999) {
            $distance = intval(($meter / 1000)) . ' km';
        }
        return $distance;
    }

    public static function GoogleLink($latitude, $longitude)
    {
        return "https://www.google.com/maps/dir//" . $latitude . "," . $longitude . "/@" . $latitude . "," . $longitude . ",19z";
    }
}
