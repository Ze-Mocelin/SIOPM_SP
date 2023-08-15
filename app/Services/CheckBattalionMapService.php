<?php

namespace App\Services;

use DOMDocument;
use Illuminate\Support\Facades\Storage;

class CheckBattalionMapService
{
    public function checkCoordinateInArea($latitude, $longitude)
    {
        $isInsideAnyArea = false;
        $areaName = '';

        $filePath = Storage::path('public/BattalionMap.kml');

        $dom = new DOMDocument();
        $dom->load($filePath);


        $placemarks = $dom->getElementsByTagName('Placemark');
        foreach ($placemarks as $placemark) {

            $nameNode = $placemark->getElementsByTagName('name')->item(0);
            $name = $nameNode->nodeValue;

            $coordinatesNode = $placemark->getElementsByTagName('coordinates')->item(0);
            $polygonCoordinates = trim($coordinatesNode->nodeValue);

            $coordinates = explode(' ', $polygonCoordinates);
            $coordinates = array_filter($coordinates, function ($value) {
                return !empty($value);
            });

            $coordinates = array_values($coordinates);

            $numIntersections = 0;

            $count = count($coordinates);
            for ($i = 0; $i < $count - 1; $i++) {
                $coord1 = explode(',', $coordinates[$i]);
                $coord2 = explode(',', $coordinates[$i + 1]);

                $lat1 = (float) $coord1[1];
                $lng1 = (float) $coord1[0];
                $lat2 = (float) $coord2[1];
                $lng2 = (float) $coord2[0];

                if (($lat1 > $latitude) !== ($lat2 > $latitude)) {
                    $lngIntersect = ($lng2 - $lng1) * ($latitude - $lat1) / ($lat2 - $lat1) + $lng1;
                    if ($longitude < $lngIntersect) {
                        $numIntersections++;
                    }
                }
            }

            if ($numIntersections % 2 !== 0) {
                $isInsideAnyArea = true;
                $areaName = $name;
                break;
            }
        }

        if ($isInsideAnyArea) {
            return  $areaName;
        } else {
            return 'Batalhão não foi encontrado.';
        }
    }
}
