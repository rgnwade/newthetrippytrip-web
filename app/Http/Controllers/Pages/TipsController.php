<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use GuzzleHttp\Client;

class TipsController extends Controller
{
    public function Tips()
    {
        $client = new Client();
        $res = $client->request('GET', env('API_URL').'article/get-article?category_id=8');
        $get_data_tips = json_decode($res->getBody()->getContents());

        return view('pages.tips.tips', array(
            'tips' => $get_data_tips->data
        ));
    }
}
