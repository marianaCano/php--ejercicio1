<?php

function placesRecomendacion($condition = '', $question= ''){

    $weather= array ("Bogota"=>"cold", "Monteria" => "hot", "Medellin" => "mild");

    $ubication = array ( "Guajira" => "north", "Leticia" => "south", "Santander" => "east",
    "Antioquia" => "west");

    $turism= array("Santa Marta" => "sea", "Villavicencio" => "plains", "Riohacha" => "desert",
    "Quindio" => "valley");

    switch($condition){

        case "weather";
            echo array_search ($question, $weather);
        break;
        case "ubication";
            echo array_search ($question, $ubication);
        break;
        case "turism";
            echo array_search ($question, $turism);
        break;
        default:
           echo"Welcoe to Colombia";
    }
}
 placesRecomendacion("weather", "cold");