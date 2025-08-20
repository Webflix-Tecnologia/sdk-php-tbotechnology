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
    //$responseListCity = $apiHotel->cityList([ "CountryCode" => "BR", ]);
    $responseSearchRooms = $apiHotel->searchRoomsInCity([
        'CountryCode' => 'BR',
        'VariationsCitiesSearched' => [
            'Presidente Prudente',
            'Pres. Prudente',
        ],
        'CheckIn' => '2025-08-12',
        'CheckOut' => '2025-08-13',
        'Nationality' => 'BR',
        'PaxRooms' => [
            [
                'Adults' => 2,
                'Children' => 2,
                //'ChildrenAges' => [10, 12]
            ]
        ],
        'Filters' => [
            'Refundable' => true
        ],
    ]);
    var_dump($responseSearchRooms);
}catch (\TboTechnology\Exceptions\TboTechnologyException $ex) {
    var_dump($ex);
}
