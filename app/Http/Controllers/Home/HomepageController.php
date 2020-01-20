<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Alert;

class HomepageController extends Controller
{
    public function index()
    {
        $client = new Client();
        $res = $client->request('GET', env('API_URL').'homepage');
        $get_data_homepage = json_decode($res->getBody()->getContents());
        // dd($get_data_homepage->data->lifestyle);

        return view('index', array(
            'homepage_data_lifestyle' => $get_data_homepage->data->lifestyle,
            'homepage_data_tips' => $get_data_homepage->data->tips
        ));
    }


    public function Subscribe(Request $request)
    {
        $email        = $request->input('email');

        $client = new Client();

        $subscribe = $client->request('POST', env('API_URL').'user/subscribe', array(
            'form_params' => array(
                'email' => $email
            )
        ));
        $post_subscribe= json_decode($subscribe->getBody()->getContents());

        if ($post_subscribe->status == 200) {
            Alert::success('We will give you awesome information every week!', 'Thankyou for following Us')->persistent("Ok");
            return redirect('/');
        }
        if ($post_subscribe->code == 400 && $post_subscribe->status == 'FAILED') {
            Alert::error('Oh Snap!', 'You have got wrong!')->persistent("Ok");
            return redirect('/');
        }
    }
}
