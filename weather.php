<?php 
$url = "https://www.jma.go.jp/bosai/forecast/data/forecast/130000.json";
$json = file_get_contents($url);
$array = json_decode($json, true);

foreach($array as $data){
    $ja = "都道府県名  ".$data['name']."\n"."<br>".PHP_EOL;
    $temp = "気温　".$data['temps']."\n"."<br>".PHP_EOL;
    $viruaData = array(
        $ja, $temp,
    );
    echo implode('', $viruaData);
}
?>