<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use GuzzleHttp\Client;

class EventController extends Controller
{
    public function EventPage()
    {
        $client = new Client();
        $res = $client->request('GET', env('API_URL').'article/get-article-page?parent_category_id=1');
        $get_data= json_decode($res->getBody()->getContents());

        return view('pages.event.event', array(
            'event_pay_article' => $get_data->data,
        ));
    }

    public function EventCategory($channel_no)
    {
        return view('pages.event.event-category');
    }
}
