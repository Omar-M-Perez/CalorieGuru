<?php

    function queryBuilder($data) {
        $url = 'https://api.edamam.com/api/recipes/v2?type=public&app_id=b8fe9917&app_key=0c4f6bb1cf0cf542c8f0430edc698876&random=true';

        if (isset($data['mealType'])) {
            $url = $url . "&mealType=" . $data['mealType'];
        }

        if (isset($data['cuisine'])) {
            $url = $url . "&cuisine=" . $data['cuisine'];
        }

        if (isset($data['diet'])) {
            for ($i = 0; $i < count($data['diet']); $i++) {
                $url = $url . "&diet=" . $data['diet'][$i];
            }
        }

        if (isset($data['health'])) {
            for ($i = 0; $i < count($data['health']); $i++) {
                $url = $url . "&health=" . $data['health'][$i];
            }
        }
        return str_replace(' ', '%20', $url);
    }

    function fetchRecipe($url) {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($ch);

        if(curl_errno($ch)) {
            error_log("cURL Error: ". curl_error($ch));
            curl_close($ch);
            return false; 
        }

        curl_close($ch);

        $jsonData = json_decode($response, true);
        if (json_last_error() !== JSON_ERROR_NONE) {
            echo 'JSON decode error: ' . json_last_error_msg();
            exit();
        }
        return $jsonData['hits'][0]['recipe'];
    }
?>