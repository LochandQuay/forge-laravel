<?php

use Illuminate\Database\Seeder;
use GuzzleHttp\Client;
use Unirest\Request;

class CardsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $client = new Client([
        //   'base_uri' => 'https://omgvamp-hearthstone-v1.p.mashape.com/cards'
        // ]);
        // $headers = ['']
        // $response = $client->get();

        $response = Unirest\Request::get(
          "https://omgvamp-hearthstone-v1.p.mashape.com/cards",
          array(
            "X-Mashape-Key" => "H7cTVoRmvYmsh2BlB4EiXsR3T6Frp146VamjsnZ251gp5WuQI7"
          )
        );

        $body = $response->getBody();

        echo $body;
    }
}
