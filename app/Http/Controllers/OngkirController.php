<?php
/**
 * Created by PhpStorm.
 * User: reza
 * Date: 06/11/18
 * Time: 07.30
 */

namespace App\Http\Controllers;
use GuzzleHttp\Client;

use App\Models\Province;
use App\Models\City;

class OngkirController extends Controller {
    public function __construct()
    {
        $this->client = new Client([
            'base_uri' => 'https://api.rajaongkir.com/',
            'timeout' => 15
        ]);
        $this->key = '0df6d5bf733214af6c6644eb8717c92c';
    }

    public function fetchProvince() {
        $resp = $this->client->request('GET', 'starter/province',[
            'headers' => [
                'key'=> $this->key
            ]
        ]);
        $payload = json_decode($resp->getBody(), true);
        foreach ($payload['rajaongkir']['results'] as $res) {
            $province = new Province;
            $province->province_id = $res['province_id'];
            $province->province = $res['province'];
            $province->save();
        }
    }

    public function fetchCity() {
        $resp = $this->client->request('GET', 'starter/city',[
            'headers' => [
                'key'=> $this->key
            ]
        ]);
        $payload = json_decode($resp->getBody(), true);
        foreach ($payload['rajaongkir']['results'] as $res) {
            $city = new City;
            $city->city_id = $res['city_id'];
            $city->city_name = $res['city_name'];
            $city->province_id = $res['province_id'];
            $city->postal_code = $res['postal_code'];
            $city->type = $res['type'];
            $city->save();
        }
    }
}