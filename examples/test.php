<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include __DIR__ . '/../vendor/autoload.php';

$config = parse_ini_file("config.ini");
/**
 * [
 * 'headers' => [
 * "Authorization" => ['Basic '.base64_encode("{$config['username']}:{$config['password']}")]
 * ]
 * ]
 *
 */
$apiHotel = new TboTechnology\Hotel\Api();
$apiHotel
    ->setUsername($config['username'])
    ->setPassword($config['password'])
    ->generateCredencial();

try{
    //$responseCountryList = $apiHotel->countryList();
    //var_dump($responseCountryList);
    $responseListCity = $apiHotel->cityList([
        "CountryCode" => "BR"
    ]);
    var_dump($responseListCity);
}catch (\TboTechnology\Exceptions\TboTechnologyException $ex) {
    var_dump($ex);
}
