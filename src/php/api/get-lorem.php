<?php
function callAPI($url)
{
    try {
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        $result = curl_exec($curl);
        curl_close($curl);
    } catch(Exception $e) {
        $result = $e;
    }   
    return $result;
}

$url = 'http://loripsum.net/api/2';
header('Content-Type: application/json; charset=utf-8');
echo callAPI($url);
?>