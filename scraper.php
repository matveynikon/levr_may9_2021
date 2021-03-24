<?php
ignore_user_abort(true);   
require 'vendor/autoload.php';
use Goutte\Client;
$url = "https://twitter.com/search?f=user&q=(%23programming)%20until%3A2021-02-02%20since%3A2020-06-02&src=typed_query";
$css_selector = "#react-root > div > div > div.css-1dbjc4n.r-18u37iz.r-13qz1uu.r-417010 > main > div > div > div > div > div > div:nth-child(2) > div > div > section > div > div > div:nth-child(1) > div > div > div > div.css-1dbjc4n.r-1iusvr4.r-16y2uox > div.css-1dbjc4n.r-1awozwy.r-18u37iz.r-1wtj0ep > div.css-1dbjc4n.r-1wbh5a2.r-dnmrzs > a > div > div.css-1dbjc4n.r-18u37iz.r-1wbh5a2 > div > span";
$client = new Client();
$vsus = 0;
$reee = 0;
for($vsus = 0; $vsus <= 100; $vsus++){
    $crawler = $client->request('GET', $url);
    $out = $crawler->filter($css_selector)->eq($vsus);
    $output = $out->text();
    $word = "what";
    if(strpos($output, $word) !== false){
        $find = 1;
    } else{
        $find = 0;
    }
    if($find == 1){
        echo("{$output}\n");
    } else{
        $reee = 1;
    }
}
?>