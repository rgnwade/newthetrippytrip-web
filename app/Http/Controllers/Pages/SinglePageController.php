<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use GuzzleHttp\Client;

class SinglePageController extends Controller
{
    public function getArticleSingle($id)
    {
        $client = new Client();

        $res_article_single = $client->request('GET', env('API_URL').'article/get-article-by-id/'.$id);

        $get_article_single= json_decode($res_article_single->getBody()->getContents());

        return view('pages.single-page', array(
            'article' => $get_article_single->data
        ));
    }
}
