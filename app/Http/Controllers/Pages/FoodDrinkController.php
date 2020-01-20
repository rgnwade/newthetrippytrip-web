<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use GuzzleHttp\Client;

class FoodDrinkController extends Controller
{
    public function FoodDrink()
    {
        $client = new Client();
        $res = $client->request('GET', env('API_URL').'article/get-article-page?parent_category_id=2');
        $get_data= json_decode($res->getBody()->getContents());

        return view('pages.food-drink.food-drink', array(
            'datas_page' => $get_data->data,
        ));
    }

    public function FoodDrinkCategory($channel_no)
    {
        return view('pages.food-drink.food-drink-category');
    }
}
