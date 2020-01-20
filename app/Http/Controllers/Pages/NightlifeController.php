<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use GuzzleHttp\Client;

class NightlifeController extends Controller
{
    public function Nightlife()
    {
        $client = new Client();
        $res = $client->request('GET', env('API_URL').'article/get-article-page?parent_category_id=3');
        $get_data= json_decode($res->getBody()->getContents());

        return view('pages.nightlife.nightlife', array(
            'datas_page' => $get_data->data,
        ));
    }

    public function NightlifeCategory($channel_no)
    {
        return view('pages.nightlife.nightlife-category');
    }
}
