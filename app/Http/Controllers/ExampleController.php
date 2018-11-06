<?php

namespace App\Http\Controllers;
use GuzzleHttp\Client;

class ExampleController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->client = new Client([
            'base_uri' => 'https://api.rajaongkir.com/',
            'timeout' => 15
        ]);
    }

    public function fetchCity() {
        $resp = $this->client->request('GET', 'starter/province',[
           'headers' => [
               'key'=> '0df6d5bf733214af6c6644eb8717c92c'
           ]
        ]);
        echo $resp->getBody();
    }

    //
}
