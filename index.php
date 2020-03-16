<?php

require "vendor/autoload.php";
require "vendor/simplehtmldom/simple_html_dom.php";
use PHPHtmlParser\Dom;
// use App\Services\Connector;

function GetHtmlContent($endpoint) {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $endpoint);   
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);    
    $response = curl_exec($ch);
    return $response;
}

$endpoint = "https://sohodragon.bamboohr.com/jobs/embed2.php";
// $html = GetHtmlContent($endpoint);
$dom = file_get_html($endpoint);

$departments = $dom->find(".BambooHR-ATS-Department-Item");

foreach($departments as $key => $department) {
    var_dump($department);
}
// $dom->loadFromUrl('https://sohodragon.bamboohr.com/jobs/embed2.php', []);
// $html = $dom->outerHtml;    

?>
