<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use GuzzleHttp\Client;

class ResourceController extends Controller
{
    public function Resource()
    {
        $client = new Client();
        $res = $client->request('GET', env('API_URL').'article/get-article-page?parent_category_id=7');
        $get_data= json_decode($res->getBody()->getContents());

        return view('pages.resource.resource', array(
            'datas_page' => $get_data->data,
        ));

        return view('');
    }
}
