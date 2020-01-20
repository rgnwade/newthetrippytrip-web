<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use GuzzleHttp\Client;

class FashionController extends Controller
{
    public function Fashion()
    {
        $client = new Client();
        $res = $client->request('GET', env('API_URL').'article/get-article-page?parent_category_id=5');
        $get_data= json_decode($res->getBody()->getContents());

        return view('pages.fashion.fashion', array(
            'datas_page' => $get_data->data,
        ));
    }

    public function FashionCategory($channel_no)
    {
        return view('pages.fashion.fashion-category');
    }
}
