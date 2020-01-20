<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use GuzzleHttp\Client;

class CultureController extends Controller
{
    public function Culture()
    {
        $client = new Client();
        $res = $client->request('GET', env('API_URL').'article/get-article?category_id=6');
        $get_data_culture = json_decode($res->getBody()->getContents());

        return view('pages.culture.culture', array(
            'culture' => $get_data_culture->data
        ));
    }
}
