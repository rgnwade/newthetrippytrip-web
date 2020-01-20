<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;
use GuzzleHttp\Promise;

class LifestyleController extends Controller
{
    public function Lifestyle()
    {
        $client = new \GuzzleHttp\Client();
        $res1 = $client->requestAsync('GET', env('API_URL').'article/get-article-page?parent_category_id=4')->then(
              function ($response_data) {
                  return json_decode($response_data->getBody()->getContents());
              }
          );
        $response_data = $res1->wait();


        $res2 = $client->requestAsync('GET', env('API_URL').'article/get-article?category_id=4')->then(
              function ($response) {
                  return json_decode($response->getBody()->getContents());
              }
          );
        $response = $res2->wait();

        

        return view('pages.lifestyle.lifestyle', array(
            'datas_page' => $response_data->data,
            'datas_article' => $response->data
        ));
    }
}
