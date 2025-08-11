<?php

namespace TboTechnology\Hotel;

class Api extends \TboTechnology\Core\TboHolidaysHotel {
    private function header($headers = []) {
        $headers = array_merge_recursive([
            "Authorization" => "Basic ".$this->getCredentials()
        ], $headers);
        return $headers;
    }

    public function countryList() {
        try{
            $response = $this->http->get("CountryList", [
                'headers' => $this->header(),
            ]);
            $responseData = (string) $response->getBody();
            return json_decode($responseData);
        } catch (\GuzzleHttp\Exception\ServerException $ex) {

            throw \TboTechnology\Exceptions\TboTechnologyException::fromGuzzleException($ex);

        } catch (\GuzzleHttp\Exception\ClientException $ex) {

            throw \TboTechnology\Exceptions\TboTechnologyException::fromGuzzleException($ex);

        } catch (\GuzzleHttp\Exception\BadResponseException $ex) {

            throw \TboTechnology\Exceptions\TboTechnologyException::fromGuzzleException($ex);

        } catch (\GuzzleHttp\Exception\RequestException $ex) {

            throw \TboTechnology\Exceptions\TboTechnologyException::fromGuzzleException($ex);

        } catch (\Exception $ex) {
            throw new \TboTechnology\Exceptions\TboTechnologyException($ex);
        }
    }

    public function cityList(Array $json) {
        try{
            $response = $this->http->post("CityList", [
                'json' => $json,
                'headers' => $this->header(),
            ]);
            $responseData = (string) $response->getBody();
            return json_decode($responseData);
        } catch (\GuzzleHttp\Exception\ServerException $ex) {

            throw \TboTechnology\Exceptions\TboTechnologyException::fromGuzzleException($ex);

        } catch (\GuzzleHttp\Exception\ClientException $ex) {

            throw \TboTechnology\Exceptions\TboTechnologyException::fromGuzzleException($ex);

        } catch (\GuzzleHttp\Exception\BadResponseException $ex) {

            throw \TboTechnology\Exceptions\TboTechnologyException::fromGuzzleException($ex);

        } catch (\GuzzleHttp\Exception\RequestException $ex) {

            throw \TboTechnology\Exceptions\TboTechnologyException::fromGuzzleException($ex);

        } catch (\Exception $ex) {
            throw new \TboTechnology\Exceptions\TboTechnologyException($ex);
        }
    }

    public function tboHotelCodeList(Array $json) {
        try{
            $response = $this->http->post("TBOHotelCodeList", [
                'json' => $json,
                'headers' => $this->header(),
            ]);
            $responseData = (string) $response->getBody();
            return json_decode($responseData);
        } catch (\GuzzleHttp\Exception\ServerException $ex) {

            throw \TboTechnology\Exceptions\TboTechnologyException::fromGuzzleException($ex);

        } catch (\GuzzleHttp\Exception\ClientException $ex) {

            throw \TboTechnology\Exceptions\TboTechnologyException::fromGuzzleException($ex);

        } catch (\GuzzleHttp\Exception\BadResponseException $ex) {

            throw \TboTechnology\Exceptions\TboTechnologyException::fromGuzzleException($ex);

        } catch (\GuzzleHttp\Exception\RequestException $ex) {

            throw \TboTechnology\Exceptions\TboTechnologyException::fromGuzzleException($ex);

        } catch (\Exception $ex) {
            throw new \TboTechnology\Exceptions\TboTechnologyException($ex);
        }
    }

    public function hotelCodeList() {
        try{
            $response = $this->http->get("TBOHotelCodeList", [
                'headers' => $this->header(),
            ]);
            $responseData = (string) $response->getBody();
            return json_decode($responseData);
        } catch (\GuzzleHttp\Exception\ServerException $ex) {

            throw \TboTechnology\Exceptions\TboTechnologyException::fromGuzzleException($ex);

        } catch (\GuzzleHttp\Exception\ClientException $ex) {

            throw \TboTechnology\Exceptions\TboTechnologyException::fromGuzzleException($ex);

        } catch (\GuzzleHttp\Exception\BadResponseException $ex) {

            throw \TboTechnology\Exceptions\TboTechnologyException::fromGuzzleException($ex);

        } catch (\GuzzleHttp\Exception\RequestException $ex) {

            throw \TboTechnology\Exceptions\TboTechnologyException::fromGuzzleException($ex);

        } catch (\Exception $ex) {
            throw new \TboTechnology\Exceptions\TboTechnologyException($ex);
        }
    }

    public function hotelDetails(Array $json) {
        try{
            $response = $this->http->post("Hoteldetails", [
                'json' => $json,
                'headers' => $this->header(),
            ]);
            $responseData = (string) $response->getBody();
            return json_decode($responseData);
        } catch (\GuzzleHttp\Exception\ServerException $ex) {

            throw \TboTechnology\Exceptions\TboTechnologyException::fromGuzzleException($ex);

        } catch (\GuzzleHttp\Exception\ClientException $ex) {

            throw \TboTechnology\Exceptions\TboTechnologyException::fromGuzzleException($ex);

        } catch (\GuzzleHttp\Exception\BadResponseException $ex) {

            throw \TboTechnology\Exceptions\TboTechnologyException::fromGuzzleException($ex);

        } catch (\GuzzleHttp\Exception\RequestException $ex) {

            throw \TboTechnology\Exceptions\TboTechnologyException::fromGuzzleException($ex);

        } catch (\Exception $ex) {
            throw new \TboTechnology\Exceptions\TboTechnologyException($ex);
        }
    }

    public function searchRooms(Array $json) {
        try{
            $response = $this->http->post("search", [
                'json' => $json,
                'headers' => $this->header(),
            ]);
            $responseData = (string) $response->getBody();
            return json_decode($responseData);
        } catch (\GuzzleHttp\Exception\ServerException $ex) {

            throw \TboTechnology\Exceptions\TboTechnologyException::fromGuzzleException($ex);

        } catch (\GuzzleHttp\Exception\ClientException $ex) {

            throw \TboTechnology\Exceptions\TboTechnologyException::fromGuzzleException($ex);

        } catch (\GuzzleHttp\Exception\BadResponseException $ex) {

            throw \TboTechnology\Exceptions\TboTechnologyException::fromGuzzleException($ex);

        } catch (\GuzzleHttp\Exception\RequestException $ex) {

            throw \TboTechnology\Exceptions\TboTechnologyException::fromGuzzleException($ex);

        } catch (\Exception $ex) {
            throw new \TboTechnology\Exceptions\TboTechnologyException($ex);
        }
    }

    public function preBookSingleRoom(Array $json) {
        try{
            $response = $this->http->post("PreBook", [
                'json' => $json,
                'headers' => $this->header(),
            ]);
            $responseData = (string) $response->getBody();
            return json_decode($responseData);
        } catch (\GuzzleHttp\Exception\ServerException $ex) {

            throw \TboTechnology\Exceptions\TboTechnologyException::fromGuzzleException($ex);

        } catch (\GuzzleHttp\Exception\ClientException $ex) {

            throw \TboTechnology\Exceptions\TboTechnologyException::fromGuzzleException($ex);

        } catch (\GuzzleHttp\Exception\BadResponseException $ex) {

            throw \TboTechnology\Exceptions\TboTechnologyException::fromGuzzleException($ex);

        } catch (\GuzzleHttp\Exception\RequestException $ex) {

            throw \TboTechnology\Exceptions\TboTechnologyException::fromGuzzleException($ex);

        } catch (\Exception $ex) {
            throw new \TboTechnology\Exceptions\TboTechnologyException($ex);
        }
    }

    public function hotelBook(Array $json) {
        try{
            $response = $this->http->post("Book", [
                'json' => $json,
                'headers' => $this->header(),
            ]);
            $responseData = (string) $response->getBody();
            return json_decode($responseData);
        } catch (\GuzzleHttp\Exception\ServerException $ex) {

            throw \TboTechnology\Exceptions\TboTechnologyException::fromGuzzleException($ex);

        } catch (\GuzzleHttp\Exception\ClientException $ex) {

            throw \TboTechnology\Exceptions\TboTechnologyException::fromGuzzleException($ex);

        } catch (\GuzzleHttp\Exception\BadResponseException $ex) {

            throw \TboTechnology\Exceptions\TboTechnologyException::fromGuzzleException($ex);

        } catch (\GuzzleHttp\Exception\RequestException $ex) {

            throw \TboTechnology\Exceptions\TboTechnologyException::fromGuzzleException($ex);

        } catch (\Exception $ex) {
            throw new \TboTechnology\Exceptions\TboTechnologyException($ex);
        }
    }

    public function bookingDetail(Array $json) {
        try{
            $response = $this->http->post("BookingDetail", [
                'json' => $json,
                'headers' => $this->header(),
            ]);
            $responseData = (string) $response->getBody();
            return json_decode($responseData);
        } catch (\GuzzleHttp\Exception\ServerException $ex) {

            throw \TboTechnology\Exceptions\TboTechnologyException::fromGuzzleException($ex);

        } catch (\GuzzleHttp\Exception\ClientException $ex) {

            throw \TboTechnology\Exceptions\TboTechnologyException::fromGuzzleException($ex);

        } catch (\GuzzleHttp\Exception\BadResponseException $ex) {

            throw \TboTechnology\Exceptions\TboTechnologyException::fromGuzzleException($ex);

        } catch (\GuzzleHttp\Exception\RequestException $ex) {

            throw \TboTechnology\Exceptions\TboTechnologyException::fromGuzzleException($ex);

        } catch (\Exception $ex) {
            throw new \TboTechnology\Exceptions\TboTechnologyException($ex);
        }
    }

    public function bookingDetailsBasedOnDate(Array $json) {
        try{
            $response = $this->http->post("BookingDetailsBasedOnDate", [
                'json' => $json,
                'headers' => $this->header(),
            ]);
            $responseData = (string) $response->getBody();
            return json_decode($responseData);
        } catch (\GuzzleHttp\Exception\ServerException $ex) {

            throw \TboTechnology\Exceptions\TboTechnologyException::fromGuzzleException($ex);

        } catch (\GuzzleHttp\Exception\ClientException $ex) {

            throw \TboTechnology\Exceptions\TboTechnologyException::fromGuzzleException($ex);

        } catch (\GuzzleHttp\Exception\BadResponseException $ex) {

            throw \TboTechnology\Exceptions\TboTechnologyException::fromGuzzleException($ex);

        } catch (\GuzzleHttp\Exception\RequestException $ex) {

            throw \TboTechnology\Exceptions\TboTechnologyException::fromGuzzleException($ex);

        } catch (\Exception $ex) {
            throw new \TboTechnology\Exceptions\TboTechnologyException($ex);
        }
    }

    public function cancel(Array $json) {
        try{
            $response = $this->http->post("Cancel", [
                'json' => $json,
                'headers' => $this->header(),
            ]);
            $responseData = (string) $response->getBody();
            return json_decode($responseData);
        } catch (\GuzzleHttp\Exception\ServerException $ex) {

            throw \TboTechnology\Exceptions\TboTechnologyException::fromGuzzleException($ex);

        } catch (\GuzzleHttp\Exception\ClientException $ex) {

            throw \TboTechnology\Exceptions\TboTechnologyException::fromGuzzleException($ex);

        } catch (\GuzzleHttp\Exception\BadResponseException $ex) {

            throw \TboTechnology\Exceptions\TboTechnologyException::fromGuzzleException($ex);

        } catch (\GuzzleHttp\Exception\RequestException $ex) {

            throw \TboTechnology\Exceptions\TboTechnologyException::fromGuzzleException($ex);

        } catch (\Exception $ex) {
            throw new \TboTechnology\Exceptions\TboTechnologyException($ex);
        }
    }

    public function searchRoomsInCity(Array $body) {
        try{
            $responseData = null;
            $responseListCity = $this->cityList([
                "CountryCode" => $body['CountryCode'],
            ]);
            $busca = $body['VariationsCitiesSearched'];
            $result = null;
            if($responseListCity->Status->Code == 200) {
                foreach ($responseListCity->CityList as $city) {
                    if (in_array($city->Name, $busca)) {
                        $result = $city;
                        break;
                    }
                }
                if ($result) {
                    //var_dump($result);
                    $code = $result->Code;
                    $responseHotelCodeList = $this->tboHotelCodeList([
                        "CityCode" => $code,
                        "IsDetailedResponse" => true,
                    ]);
                    if($responseHotelCodeList->Status->Code == 200) {
                        $hotels = [];
                        foreach ($responseHotelCodeList->Hotels as $hotel) {
                            $hotels[] = $hotel->HotelCode;
                        }
                        $responseData = $this->searchRooms([
                            "CheckIn" => $body['CheckIn'],
                            "CheckOut" => $body['CheckOut'],
                            "HotelCodes" => implode(", ", $hotels),
                            "GuestNationality" => $body['Nationality'],
                            "PaxRooms" => $body['PaxRooms'],
                            "ResponseTime" => 18,
                            "IsDetailedResponse" => true,
                            "Filters" => $body['Filters']
                        ]);
                    }else{
                        $responseData = $responseHotelCodeList->Status;
                    }
                }else {
                    $responseData = [
                        "Status" => "Error",
                        "Code" => ""
                    ];
                }
            }else{
                $responseData = $responseListCity->Status;
            }
            return $responseData;
        } catch (\GuzzleHttp\Exception\ServerException $ex) {

            throw \TboTechnology\Exceptions\TboTechnologyException::fromGuzzleException($ex);

        } catch (\GuzzleHttp\Exception\ClientException $ex) {

            throw \TboTechnology\Exceptions\TboTechnologyException::fromGuzzleException($ex);

        } catch (\GuzzleHttp\Exception\BadResponseException $ex) {

            throw \TboTechnology\Exceptions\TboTechnologyException::fromGuzzleException($ex);

        } catch (\GuzzleHttp\Exception\RequestException $ex) {

            throw \TboTechnology\Exceptions\TboTechnologyException::fromGuzzleException($ex);

        } catch (\Exception $ex) {
            throw new \TboTechnology\Exceptions\TboTechnologyException($ex);
        }
    }
}