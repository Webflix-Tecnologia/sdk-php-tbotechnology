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
}